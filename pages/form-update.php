<?php include "update.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-4 bg-dark">
    <h2 class="display-5 text-center text-white mt-5 mb-5">EDIT USER</h2>
        <form action="update.php" class="text-start mx-5" method="POST">
        <input type="hidden" name="id" class="mb-4" value="<?=$row['id'];?>">
            <div class="modal-body">
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label text-white">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="name" class="form-control" value="<?=$row['name'];?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-white">Email Address</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" aria-describedby="emailHelp" value="<?=$row['email'];?>" >
                            <div id="email" class="form-text text-white">We'll never share your email with anyone else.</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-white">Message</label>
                        <div class="col-sm-10">
                            <textarea name="message" id="message" class="form-control"><?=$row['message'];?></textarea>
                        </div>
                    </div>

                    <div class="text-center py-3 mt-5">
                        <button type="submit" name="update_btn" class="btn btn-primary text-light mx-3">UPDATE</button>
                            <a href="form-view.php" class="btn btn-danger text-light">CANCEL</a>
                    </div>
            </div>
        </form>

</div>
                
        
</div>
</body>
</html>