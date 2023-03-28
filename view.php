<?php include "./dbs/dbs.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="./styles/style.css">
   <script src="./scripts/script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center"></h4><hr>
                <a href="index.php" class="back text-dark">Home</a> 
                <?php if (mysqli_num_rows($result)) { ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope = "col">ID</th>
                            <th scope = "col">Name</th>
                            <th scope = "col">Email</th>
                            <th scope = "col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 0;
                        while($rows = mysqli_fetch_assoc($result)){
                        $i++;
                    ?>
                        <tr>
                            <th scope="row"><?=$i?></th>
                            <td><?=$rows['name'];?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php echo $rows['message']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
        </div>
    </div>                 
</body>
</html>



           