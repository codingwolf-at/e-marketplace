<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to local CSS file -->
    <link rel="stylesheet" href="style.css">

    <!-- Jquery library -->
    <script type="text/javacsript" src="js/jquery.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <title>E-marketplace</title>
</head>
<body>

    <!-- Header starts -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">

            <!-- Website logo -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">E-marketplace</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- Website Links -->
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.html" class="nav-link">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="test.html" class="nav-link">Test</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- Header ends -->

    <!-- Main body content starts -->
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
               <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Register</h5>
              <form class="form-signin">
                <div class="form-label-group">
                  <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                  <label for="inputUserame">Username</label>
                </div>
  
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                  <label for="inputEmail">Email address</label>
                </div>
                
                <hr>
  
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
                
                <div class="form-label-group">
                  <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                  <label for="inputConfirmPassword">Confirm password</label>
                </div>
  
                <button class="btn btn-lg btn-dark btn-block text-uppercase" type="submit">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Main body content ends -->

    <!-- Footer starts -->
    <footer>
        <div class="container home-center-content">
            <p class="lead">
                Copyright © E-marketplace | All Rights Reserved | Contact Us: +91 90000 00000
            </p>
        </div>
    </footer>
    <!-- Footer ends -->

</body>
</html>