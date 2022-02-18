<?php

$bruker = $_POST['user'];
$pass = $_POST['password'];


  //Opprette kobling
  $kobling = new mysqli('localhost', 'root', '', 'fravaerregister');
		
  //Sjekk om kobling virker
  if($kobling->connect_error) {
	  die("Noe gikk galt: " . $kobling->connect_error);
  }


	  //Angi UTF-8 som tegnsett
	  $kobling->set_charset("utf8");	
  
	  $sql = "INSERT INTO inho (bruker, pass) VALUES ('$bruker', '$pass')";
  
	  if($kobling->query($sql)) {
		  echo "Spørringen $sql ble gjennomført. ";
	  }else{
		  echo "Noe gikk galt med spørringen $sql ($kobling->error).";
	  }

    $

 
?>