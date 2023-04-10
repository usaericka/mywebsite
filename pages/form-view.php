<?php include "read.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBMITTED FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="../styles/style.css">
   <script src="../scripts/script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
            <h2 class="display-5 text-center mb-3 mt-4">Recipient</h2><hr>
            <?php if(mysqli_num_rows($result)) {?>
                <table class="table table-bordered table-dark table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope = "col">#</th>
                            <th scope = "col">Name</th>
                            <th scope = "col">Email</th>
                            <th scope = "col">Message</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php 
                            $i = 0;
                            while ($row = mysqli_fetch_assoc($result)) { 
                            $i++;    
                            ?>
                                <tr class="text-center">
                                    <th scope="row"><?=$i?></th>
                                    <td><?= $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
                                    <td><a href="form-update.php?id=<?=$row['id'];?>" class="btn btn-primary">EDIT</a></td>
                                    <td><a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger">DELETE</a></td>
                                </tr>
                                <?php } ?>
                    </tbody>  
                </table>
                <?php } ?>
    </div>                           
</body>
</html>
