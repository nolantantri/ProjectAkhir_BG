<?php
  session_start();
  
  if(!isset($_SESSION['nama'])){
    header("Location: FormLogin.php");
  }
  else{
    $connection = new mysqli("localhost", "root", "", "db_agenproperti");
    
    if($connection->connect_error){
      die("Connection failed: ".$connection->connect_error);
    }
  }
?>

