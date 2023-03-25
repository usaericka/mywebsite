<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-footer py-1">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <div class="d-flex align-items-center mx-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="hobby.php">Hobby</a>
                        </li>
                    </ul>
                </div>
           </div>
        </div>
    </nav>

    <div class="container-fluid bg-footer mt-1 py-5 text-white">
        <h1 class="text-center fs-4 fw-bold text-uppercase mb-5">Contact Me</h1>
        <form action ="connect.php" class="text-start mx-5" method ="POST">
            <div class="modal-body">
                <div class="row mb-5">
                    <label class="col-sm-2 col-form-label"> Name </label> 
                    <div class="col-sm-10"> 
                        <input type="form-text" class="form-control" name="name" id="name">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"> Email Address</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"> Message</label>
                    <div class="col-sm-10">
                        <textarea type="form-text" name="message" class="form-control" id="message"> </textarea>
                    </div>
                </div>  
                <div class="text-center py-3">
                    <button type="submit" name="submit" class="btn border-light text-light">Submit</button>
                </div>
            </div>
        </form>            
    </div>           
    <div class="container-fluid bg-footer mt-1 py-3"></div>

    <div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="feedbackLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
              <h1 class="modal-title fs-5" id="feedbackLabel">Modal title</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <div class="modal-body">
                    ...
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>  
            </div>     
        </div>       
    </div>              
  <script src="./scripts/script.js"></script>
</body>
</html>