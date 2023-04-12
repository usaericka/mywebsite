<?php
require_once("connect.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM feedback WHERE id='$id' ";
    $result = mysqli_query($connection, $sql);

    if($result)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header('Location: form-view.php');
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
        header('Location: form-view.php');
    }
}

?>