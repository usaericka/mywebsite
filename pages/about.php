
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

    <div class="container-fluid bg-custom mt-1">
      <div class="row py-3" style="height:280px">
        <div class="col">  
          <img src="../images/me.jpg" class="rounded-circle" style="width:250px" alt="picture of myself"/>
        </div>
        <div class="col-6 text-start text-white mt-4 mx-5">
        <div class="fs-3 fw-bold mb-4 text-white text-uppercase">Know Me More</div>
          <p class="fw-normal">My name is Ericka Faye A. Tolentino. I am 23 years old. I live in South Fundidor, 
            Molo, Iloilo City. I am currently taking Bachelor of Science in Information Technology at the
            University of San Agustin. 
          </p>    
        </div>

      </div>
    </div>       
    
    <div class="container-fluid bg-custom mt-3 py-1"></div>

    <div class="text center" id="eduback">
      <div class="fs-5 fw-bold mt-3 text-center text-uppercase">Educational Background</div>
    </div>
    <div class="mt-4">
      <div class="container mb-5">
        <div id="logo" class="row">
          <div class="col">
            <img src="../images/Ateneo_de_Iloilo_Seal.svg.png" alt="ADI logo">
            <div class="text-start">
              <div class="fw-bold mt-2 mb-2">Ateneo de Iloilo - SMCS</div>
              <p>Primary & Secondary</p>
              <p class="mx-4">(2007 - 2017)</p>
            </div>
          </div>
          <div class="col">
            <img src="../images/Ateneo_de_Iloilo_Seal.svg.png" alt="ADI logo">
            <div class="text-start">
              <div class="fw-bold mt-2 mb-2">Ateneo de Iloilo - SMCS</div>
              <p  class="mx-2">Senior High - STEM</p>
              <p class="mx-5">(2017 - 2019)</p>
            </div>
          </div>
          <div class="col">
            <img src="../images/University_of_San_Agustin_Logo.png" alt="USA logo">
            <div class="text-start">
              <div class="fw-bold mt-2 mb-2">University of San Agustin</div>
              <p class="mx-5">Tertiary</p>
              <p class="mx-4">(2019 - Present)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid bg-bottom mt-3 py-1"></div>
     
      <div class="container-fluid mt-3 bg-bottom py-3">
        <h3 class="text-center mt-1 mb-5 text-uppercase text-white">Work Experience</h3>
        <div class="row">
          <div class="col-4 mt-1 mx-5">
              <img src="../images/bagger.jpg" class="img-fluid" alt="Bagger">
          </div>
          <div class="col-5">
            <div class="fs-3 fw-bold my-5 text-white text-start">Bagging Experience</div>
              <p class="text-start fw-normal text-white">Able to experience an eight-hour of bagging at Atrium.</p>
          </div>
        </div>
        <hr class="hr hr-blurry" />
    </div>

      <div class="container-fluid bg-bottom py-3">
        <div class="row">
          <div class="col-4 mx-5">
            <div class="fs-3 fw-bold my-5 mx-6 text-white text-start">Parish Involvement</div>
            <p class="text-start fw-normal text-white">Assign to do clerical work like organizing documents and re-writing to make it visible. 
              Volunteered to be a collector at St. Anna Parish.</p>
          </div>
          <div class="col-4 mt-1 ms-auto mx-4">
            <img src="../images/St. Anna Parish.jpg" class="img-fluid" alt="St. Anna Parish">
          </div>
        </div>
        <hr class="hr hr-blurry"/>
      </div>

        <div class="container-fluid bg-bottom py-3">
          <div class="row">
            <div class="col-4 mt-1 mx-5">
              <img src="../images/WVMC.jpg" class="img-fluid" alt="WVMC">
            </div>
            <div class="col-5">
              <div class="fs-3 fw-bold my-5 text-white text-start">Work Immersion</div>
              <p class="text-start fw-normal text-white">Had an immersion at Western Visayas Medical Center. 
                Able to learn on how to arrange the cable according to the color.</p>
            </div>
          </div>
          <br><a class="text-white" href="../pages/about.php">Back to top</a>
        </div>
</body>
</html>