<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap-gridlayout</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    
</head>
<body>
    
    <!-- navigation bar here-->

    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardiplaynavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbardiplaynavigations">
                <div class="navbar-nav">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="about.php" class="nav-link">About Us</a>
                    <a href="#" class="nav-link">Contact Us</a>
                </div>
            </div>
        </div>
        
    </nav>
    <br>


    <!-- end navigation bar-->
    

    <main class="p-5 mb-4 bg-light ">

       
        

     
        <h1 >Welcome, Emmanuel Maingi</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit, magnam quisquam modi illo neque eveniet dolore odio excepturi sint ab cumque similique nulla quis unde corrupti provident, laudantium rem sed aspernatur!.
        </p>
        <button class="btn btn-primary">Learn More</button>

    </main>
    <div class="container">
        <div class="row">
        <div class="col-lg-4">
            <h1>Header 1</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore nesciunt excepturi rerum necessitatibus exercitationem natus aliquid facilis, deserunt modi odio dolorum maxime ipsam officia 
                recusandae, minus debitis assumenda accusantium dolorem.
            </p>
            <button class="btn btn-primary">Learn More</button>
        </div>
        <div class="col-lg-4">
            <h1>Header 2</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore nesciunt excepturi rerum necessitatibus exercitationem natus aliquid facilis, deserunt modi odio dolorum maxime ipsam officia 
                recusandae, minus debitis assumenda accusantium dolorem.
            </p>
            <button class="btn btn-primary">Learn More</button>
        </div>
        <div class="col-lg-4">
            <h1>Header 3</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore nesciunt excepturi rerum necessitatibus exercitationem natus aliquid facilis, deserunt modi odio dolorum maxime ipsam officia 
                recusandae, minus debitis assumenda accusantium dolorem.
            </p>
            <button class="btn btn-primary">Learn More</button>
        </div>
        </div>

        <!--contact us page here-->
        <div class="row pt-5">
            <h1>Contact Us</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis a voluptatibus recusandae 
                temporibus dolorem unde pariatur distinctio soluta earum! Quidem voluptatem minima dolorum tempore 
                nostrum nulla adipisci enim rem a.
            </p>

            <form>

                <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control is-valid" placeholder="Enter your first name">
                            <div class="is-valid">
                                Looks good!
                              </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control is-valid" placeholder="Enter your last name">
                            <div class="is-valid">
                                Looks good!
                              </div>
                        </div>

                </div>

                <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="phonenumber" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" placeholder="Enter your phonenumber">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                    
                </div>
                <div class="row">
                    <div class="col-lf-12">
                    <label for="Your Message">Your Message</label>
                    <textarea cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Send a message</button>
                <br>
                <span class="badge rounded-pill text-bg-success">THANK YOU</span>
            </form>
            


        </div>   
        <!--end of contact us-->




    </div>
    <hr>
    <footer>
        &copy; Company 2022
    </footer>
    
    !<!--<script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>-->
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>
</html>