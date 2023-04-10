
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-custom py-1">
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

    <!--First Slideshow-->
    <div class="container-fluid bg-custom mt-1" style="height: 25px">
      <p class="text-center text-white fw-bold">Playing Games</p>
    </div>
    <div class="container-fluid bg-custom py-1 mt-1">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/codm.jpg" alt="CODM" class="d-block" style="width:100%">
          <div class="carousel-caption d-none d-md-block">
            <p id="simuli">FPS</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/minecraft.jpg" alt="Minecraft" class="d-block" style="width:100%">
          <div class="carousel-caption d-none d-md-block">
            <p id="simuli">Sandbox survival</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/simulation.jpg" alt="Simulation" class="d-block" style="width:100%">
          <div class="carousel-caption d-none d-md-block">
            <p id="simuli">Simulation</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/puzzle.jpg" alt="Puzzle" class="d-block" style="width:100%">
          <div class="carousel-caption d-none d-md-block">
            <p id="simuli">Puzzle</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container-fluid bg-custom mt-1" style="height: 25px"></div>

    <!--Second Slideshow-->
    <div class="container-fluid bg-bottom mt-5" style="height: 25px">
      <p class="text-center text-white fw-bold">Scrolling Social Media</p>
    </div>  
    <div class="container-fluid bg-bottom py-1 mt-1">
    <div id="mode" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#mode" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mode" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mode" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#mode" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#mode" data-bs-slide-to="4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/youtube.jpg" alt="Youtube" class="d-block" style="width:100%">
          <div class="carousel-caption d-none d-md-block">
            <p id="simuli">Youtube</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/spotify.jpg" alt="Spotify" class="d-block" style="width:100%">
          <div class="carousel-caption d-none d-md-block">
            <p id="simuli">Spotify</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/instgram.jpg" alt="Instagram" class="d-block" style="width:100%">
          <div class="carousel-caption d-none d-md-block">
            <p id="simuli">Instagram</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/tiktok.jpg" alt="Tiktok" class="d-block" style="width:100%">
          <div class="carousel-caption d-none d-md-block">
            <p id="simuli">Tiktok</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/wattpad.jpg" alt="Wattpad" class="d-block" style="width:100%">
          <div class="carousel-caption d-none d-md-block">
            <p id="simuli">Wattpad</p>
          </div>
        </div>
      </div>
    </div>
    </div>  
    <div class="container-fluid bg-bottom mt-1" style="height: 25px"></div> 

</body> 