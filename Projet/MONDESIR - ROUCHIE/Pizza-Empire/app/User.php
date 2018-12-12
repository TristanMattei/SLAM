<?php

class User {

    public $result, $id;

    public function __construct($id = null)
    {
        $this->id = $id;

        if ($id != null) {
            $pdo = new PDOConnect();
            $query = $pdo->pdo_start()->prepare("SELECT * FROM users WHERE id = ?");
            $query->execute([$this->id]);
            $this->result = $query->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function getNom() {
        return $this->result['nom'];
    }


    public function getPrenom() {
        return $this->result['prenom'];
    }

    public function getBirth() {
        return $this->result['birth'];
    }

    public function getPostal() {
        return $this->result['postal'];
    }

    public function getEmail() {
        return $this->result['email'];
    }

    public function getPhone() {
        return $this->result['phone'];
    }

    public function getRole() {
        return $this->result['role'];
    }

    public function isAdmin() {
        return $this->result['role'] == "A" ? true : false;
    }

    public function getAge() {
        $dobObject = new DateTime(date("Y/m/d",strtotime($this->getBirth())));
        $nowObject = new DateTime();
        $diff = $dobObject->diff($nowObject);
        return $diff->y;
    }

    public function createUser($nom, $prenom, $psswd, $birth, $postal, $email, $phone)
    {
        $pdo = new PDOConnect();
        $query = $pdo->pdo_start()->prepare("SELECT email, phone FROM users WHERE email = ? OR phone = ?");
        $query->execute([
            $email,
            $phone
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($query->rowCount()) {
            return 0;
        } else {
            $query = $pdo->pdo_start()->prepare("INSERT INTO `users`(`nom`, `prenom`, `psswd`, `birth`, `postal`, `email`, `phone`, `role`) VALUES (?,?,?,?,?,?,?,'M')");
            $query->execute([
                $nom,
                $prenom,
                md5($psswd),
                $birth,
                $postal,
                $email,
                $phone
            ]);
            return 1;
        }
    }
}