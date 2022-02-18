<?php

$elev = $_POST['iman'];
$tilstedet = $_POST['tilstedet'];
$fratype = $_POST['u'];
$klasse = $_POST['klasse'];



  //Opprette kobling
  $kobling = new mysqli('localhost', 'root', '', 'fravaerregister');
		                                                                                          
  //Sjekk om kobling virker
  if($kobling->connect_error) {
	  die("Noe gikk galt: " . $kobling->connect_error);
  }


	  //Angi UTF-8 som tegnsett
	  $kobling->set_charset("utf8");	
  
	  $sql = "INSERT INTO fraregister (Elev, Tilstedet, fratype, klassen) VALUES ('$elev', '$tilstedet', '$fratype' '$klasse')";
  
	  if($kobling->query($sql)) {
		  echo "Spørringen $sql ble gjennomført. ";
	  }else{
		  echo "Noe gikk galt med spørringen $sql ($kobling->error).";
	  }

    $

 
?>