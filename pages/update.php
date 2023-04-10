<?php require_once ("../pages/connect.php"); 

if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "SELECT * FROM feedback WHERE id='$id' ";
    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
    }else {
        header('location: form-view.php');
    }
}

if(isset($_POST['update_btn'])) {
    
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql = "UPDATE feedback SET name='$name', email='$email', message='$message' WHERE id='$id'";
    $result= mysqli_query($connection, $sql);

    if($result) 
    {
        echo '<script> alert("Data Updated"); </script>';
        header('location: form-view.php');
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
} 

?>

