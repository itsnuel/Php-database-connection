<?php

$server='localhost';
$username='root';
$password='';
$database='zalego';

$access=mysqli_connect($server,$username,$password,$database);


if(isset($_POST['submit']))
{
    // fetch form data
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    // submit form data

    $data=mysqli_query($access, "INSERT INTO 
    enrollment(fullname,phonenumber,email,gender,course)VALUES('$fullname','$phonenumber','$email',' $gender','$course')"); 

    if($data)
    {
        echo 'Data submitted successfully';
    }
    else
    {
        echo 'Error occured';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    //navbar
            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand">Zalego Academy</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardiplaynavigations" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>

                        </button>
                        <div class="collapse navbar-collapse" id="navbardiplaynavigations">
                            <div class="navbar-nav">
                                <a href="index.php" class="nav-link active">Home</a>
                                <a href="about.php" class="nav-link">About Us</a>
                                <a href="enroll.php" class="nav-link btn btn-primary">Register Now</a>
                            </div>
                        </div>
                    </div>
                    
             </nav>


             <main class="p-5 mb-4 bg-light">
                <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>

                        <span><i class="fa fa-calendar fa-2x"></i></span>
                        <span>20th July 2022</span>
                <br>
                        <span><i class="fa fa-map-marker fa-2x"></i></span>
                        <span>Zalego Academy,</span> <br>
                        <span>Devan Plaza</span>
                
             </main>

             <p class="pr">Looking for a place to kickstart your career in Technology?<br>
                Whether you`re a local,new in town or just cruising through whileve got<br> 
                loads fo great tips and events for you.
             </p>

             <form action="enroll.php" method="POST">


                    <div class="row">
                        
                    <h2>Sign up today?</h2>

                        <div class="mb-3 col-lg-6">
                            <label for="Fullname" class="form-label">Fullname</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Enter your Fullname">
                            
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phonenumber" class="form-label">Phonenumber</label>
                            <input type="text" name="phonenumber" class="form-control" placeholder="+245.....">
                           
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="gender" class="form-label">What's your gender?</label>
                            <br>
                            <select name="gender" name="gender" id="gender">
                                <option value="">--Select your gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>

                        </div>

                        <div class="mb-3 col-lg-12">

                            <p>In order to complete your registration to the bootcamp,you are required to select one course you will be 
                                undertaking.Please NOTE that this will be your learning track during the 2-weeks immerson
                            </p>

                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="course" class="form-label">What's your preferred course?</label>
                                <br>
                                <select name="course" id="course">
                                    <option value="">--Select your course--</option>
                                    <option value="cyber">cyber</option>
                                    <option value="android">android</option>
                                </select>

                        </div>

                </div>
                        

                    <div class="row">
                        
                        <div class="col-lg-6">
                                <input type="checkbox">
                                <label for="terms">Agree terms and condition</label>
                            </div>
                                <br>
                            <div>
                                <button type="submit" name="submit" class="btn btn-primary" >Submit application</button>
                            </div>

                    </div>
                        
                    
             </form>

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
            
                    <hr>
            <footer>
                &copy; Company 2022
            </footer>


    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>