<?php 
require_once ("../pages/connect.php"); 


if (isset($_POST)) 
{
   // please use lowercase for your variables
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
   $result = mysqli_query($connection, $sql);

   if ($result) {
      echo '<script> alert ("FORM SUBMITTED"); </script>';
      header('location: ../pages/index.php');
   } else {
      echo mysqli_error($connection);
   }
}
?>
