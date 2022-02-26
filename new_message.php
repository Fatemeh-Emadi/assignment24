<?php 
include "database.php";
  $esm= $_POST["name"];
  $matn= $_POST["text"];
  
  mysqli_query($connection,"INSERT INTO messages(name,text) VALUES ('$esm','$matn')");

  header("Location:index.php");

?>