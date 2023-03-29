
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'usa_tolentino');
        
    $id = $_POST['id'];

    $query = "SELECT * FROM feedback WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run) {
        while($rows = mysqli_fetch_assoc($query_run))
        {
            ?>
                <div class="container bg-bottom text-white">
                    <div class="modal-body">
                        <h2 class="display-5 text-center mb-3"></h2>
                        <hr>
                        <form action="view.php" class="text-start mx-5" method="POST">
                            <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
                            <div class="row mb-5">
                            <label class="col-sm-2 col-form-label"> Name </label>
                            <div class="col-sm-10">
                                <input type="form-text" class="form-control" value="<?php echo $rows['name'] ?>" name="name" id="name">
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"> Email Address</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" value="<?php echo $rows['email'] ?>" name="email" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text text-white"></div>
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"> Message</label>
                            <div class="col-sm-10">
                                <textarea type="form-text" name="message" class="form-control" value="<?php echo $rows['message'] ?>" id="message"> </textarea>
                            </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="submit" name="update" class="btn btn-primary text-light">Update</button>
                                <a href="view.php" class="btn btn-danger text-light">CANCEL</a>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_POST['update'])) 
                        {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];

                            $query = "UPDATE feedback SET name='$name', email='$email', message='$message' WHERE id='$id'";
                            $query_run = mysqli_query($connection, $query);

                            if($query_run)
                            {
                                echo '<script> alert("Data Updated"); </script>'; 
                                header("location:view.php");
                            }
                            else
                            {
                                echo '<script> alert("Data Not Updated"); </script>';
                            }
                        }    
                    ?>
                </div>
              

            <?php
        }
    
    }

    else {
        echo '<script> alert("No Record Found"); </script>';
    }
    ?>
</body>
</html>