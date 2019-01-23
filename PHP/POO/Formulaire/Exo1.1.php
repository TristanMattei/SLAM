<?php
class form
{
 private $code;
 private $codeinit;
 private $codetext;
 private $codesubmit;

 public function __construct($action,$titre,$methode)
 {
  $this->codeinit="<form action=\"$action\" method=\"$methode\">";
 $this->codeinit.="<fieldset><legend><b>$titre</b></legend>";
 }
 //********************************************
 public function settext($name,$libelle)
 {
  $this->codetext.="<b>$libelle</b><input type= text  name=\"$name\" /><br /><br />";
 }
 //************************************************
 public function setsubmit($name, $value)
 {
  $this->codesubmit="<input type= submit  name=\"$name\" value= Envoyer /><br />";
 }
 //**************************
 public function getform()
 {
  $this->code="";
  $this->code.=$this->codeinit;
  $this->code.=$this->codetext;
  $this->code.=$this->codesubmit;
  $this->code.="</fieldset></form>";
 echo $this->code;
 }
}
?>
