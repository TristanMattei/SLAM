<?php

class Database
{
    // Connexion PDO
    private static $dbHost = "localhost";
    private static $dbName = "projet";
    private static $dbUsername = "root";
    private static $dbUserpassword = "";

    private static $connection = null;

    // Fonction Connexion à la base de données
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    // Fonction de deconnexion à la base de données
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
