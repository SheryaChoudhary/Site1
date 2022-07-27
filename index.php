<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>

<?php include 'menu.php'; ?>

<!--  SHORTCUT
      To reduce the below given space to the nav bar manu we can just create a new file, paste the below content in it. 
      And add PHP command in the file, instead of that nav bar section.

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav> -->


  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/cc3.jpg" alt=" Landescape1 " width="1370" height="550">
      </div>
      <div class="carousel-item">
        <img src="images/cc2.jpg" alt="Landescape2" width="1370" height="550">
      </div>
      <div class="carousel-item">
        <img src="images/cc1.jpg" alt="Landescape3" width="1370" height="550">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>


  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center"> About Us </h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/cc3.jpg" class="img-fluid aboutimg" alt="CC4 NOT Available" width="650" height="500">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4"> It's Shreya Choudhary </h2>
          <p class="py-3">HElloooooooo people its your girl Shreya here!</p>
          <a herf="about.php" class="btn btn-success"> Check More About Me </a>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center"> Our Services </h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <p>Our Team Memmber</p>
          <div class="card" style="width:300px">
            <img class="card-img-top" src="images/cc4.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Disha</h4>
              <p class="card-text">Some example text some example text. She is an architect and engineer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <p>Our Team Memmber</p>
          <div class="card" style="width:300px">
            <img class="card-img-top" src="images/cc4.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title"> Kartik </h4>
              <p class="card-text">Some example text some example text. He is an architect and engineer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <p>Our Super Candidates</p>
          <div class="card" style="width:300px">
            <img class="card-img-top" src="images/cc4.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Kavya</h4>
              <p class="card-text">Some example text some example text. She is an architect and engineer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center"> Our Gallery </h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4  col-12">
          <img src="images/cc5.jpg" class="img-fluid pb-3" width="300px">
        </div>

        <div class="col-lg-4 col-md-4  col-12">
          <img src="images/cc5.jpg" class="img-fluid pb-3" width="300px">
        </div>

        <div class="col-lg-4 col-md-4  col-12">
          <img src="images/cc5.jpg" class="img-fluid pb-3" width="300px">
        </div>

        <div class="col-lg-4 col-md-4  col-12">
          <img src="images/cc5.jpg" class="img-fluid pb-3" width="300px">
        </div>

        <div class="col-lg-4 col-md-4  col-12">
          <img src="images/cc5.jpg" class="img-fluid pb-3" width="300px">
        </div>

        <div class="col-lg-4 col-md-4  col-12">
          <img src="images/cc5.jpg" class="img-fluid pb-3" width="300px">
        </div>

      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center"> Know Us More </h2>
    </div>
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4"> We are here for you! </h2>
          <p class="py-3">We make sure that you get the best work of your demand!</p>
          <a herf="about.php" class="btn btn-success"> Check here </a>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/cc3.jpg" class="img-fluid aboutimg" alt="CC4 NOT Available" width="650" height="500">
        </div>        
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center"> Connect With Us </h2>
    </div>

    <div>
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="on" class="form-control">
        </div>

        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="on" class="form-control">
        </div>

        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" name="mobile" autocomplete="on" class="form-control">
        </div>

        <div class="form-group">
          <label> Comment </label>
          <textarea class="form-control" name="comments">
          </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </section>

  <footer>
    <p class="p-3 bg-dark text-white text-center"> @Copyright Shreya Choudhary </p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>

</html>