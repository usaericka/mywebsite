<?php
require_once("connect.php");

if (isset($_POST)) {
   // please use lowercase for your variables
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $query = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
   $query_run = mysqli_query($connection, $query);

   if ($query_run) {
      echo '<script> alert ("COMMENTED"); </script>';
      header('Location: index.php');
   } else {
      echo mysqli_error($connection);
   }
}
