<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "contact_form";

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'contact_form');

   // if (!$connection) {
    //    die ("Connection Failed: " . mysqli_connect_error());
    //}
   // echo "Connected Successfully!";


if(isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Message = $_POST['message'];


    $query = "INSERT INTO feedback (`name`, `email`, `message`) VALUES ('$Name', '$Email', '$Message')";
    $query_run = mysqli_query($connection, $query);

if ($query_run)
    {
        echo '<script> alert ("COMMENTED"); </script>';
        header('Location: index.php');
    }
    else{echo '<script> alert("ERROR"); </script>';
} 
}

?>



