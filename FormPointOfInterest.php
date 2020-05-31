<?php
  session_start();
  
  if(!isset($_SESSION['nama']))
  {
    header("Location: FormLogin.php");
  }
  else{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_agenproperti";

    $connection = new mysqli($hostname, $username, $password, $database);
    if($connection->connect_error)
    {
      die("Connection failed: ".$connection->connect_error);
    }
  }
?>

hai	
