<?php
$server='localhost';
$username='root';
$password='';
$database='zalego';

$conn=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['submit']))
{
  $email=$_POST['email'];

  $emaildata=mysqli_query($conn, "INSERT INTO
  subscribers(email)VALUES('$email')");
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
</head>
<body>

      <!--nav-->
      <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardiplaynavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbardiplaynavigations">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="#" class="nav-link">About Us</a>
                    <a href="enroll.php" class="nav-link btn btn-primary">Register Now</a>
                </div>
            </div>
        </div>
        
    </nav>
    <br>
      <!--nav-->

     <main class="p-5 mb-4 bg-light">
        <h1>About Us</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quibusdam voluptates omnis, doloremque tempora sint quos fugit voluptate obcaecati modi accusantium assumenda earum 
            sunt libero aliquam debitis explicabo laudantium maiores.
        </p>
     </main>
     <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Our Program</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed harum reiciendis amet atque deserunt commodi dolor aperiam est blanditiis nesciunt obcaecati molestiae praesentium doloribus
                     consequatur molestias soluta ab, perferendis eaque.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="images/comp.jpg" alt="computer image">
            </div>
        </div> 

        <form action="about.php" method="POST">
        <!--card starting-->
        <h1>The Programs</h1>
        <br>
        <div class="row">
            <div class="col-sm-4 shadow">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Skill Discovery</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, soluta!</p>
                  <button class="btn btn-primary">View Details</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 shadow">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Upskilling Program</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, soluta!</p>
                  <button class="btn btn-primary">View Details</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 shadow">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Path finding Program</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, eum.</p>
                  <button class="btn btn-primary">View Details</button>
                </div>
              </div>
            </div>
          </div>
          <!--card ending-->


     </div>
     <br>

        <p class="paragraph form-text">
            Subscribe to get information, latest news About<br>
            Zalego Academy
        </p>


        <div class="row">
        <div class="mb-3 col-lg-6">
          <input type="email" name="email" class="form-control" placeholder="Your email address">
        </div>


        <div class="col-lg-6">
          <button type="submit" name="submit" class="btn btn-primary" >Subscribe</button>
        </div>

      </div>
    </form>
     <hr>
     <footer>
         &copy; Company 2022
     </footer>

     <!--<script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>-->
     <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>
</html>