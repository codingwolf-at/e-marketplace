<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to custom CSS file -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Jquery library -->
    <script type="text/javacsript" src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.slim.min.js"></script>
    
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <title>E-marketplace</title>
</head>
<body>

    <!-- Header starts -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container">

            <!-- Website logo -->
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">E-marketplace</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- Website Links -->
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.php" class="nav-link active">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- /Header-->

    <!-- Main body content -->
    <section class="form1 my-5 mx-5">
        <div class="container">
            <div class="row row-styling no-gutters">
                <div class="col-lg-6">
                    <img src="img/signup.jpg" class="img-fluid signup-img" alt="">
                </div>
                <div class="col-lg-6 px-5 pt-5">
                    <h1 class="display-4 py-3">USER SIGN UP</h1>
                    <form action="">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control my-4 p-4" placeholder="Full Name" name="" id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" class="form-control my-4 p-4" placeholder="Email address" name="" id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" class="form-control my-4 p-4" placeholder="Password" name="" id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="tel"class="form-control my-4 p-4" placeholder="Contact" name="" id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control my-4 p-4" placeholder="City" name="" id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control my-4 p-4" placeholder="Address" name="" id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="button" class="btn btn-dark btn-block my-3">Sign Up</button>
                            </div>
                        </div>
                        <hr>
                        <p class="lead">Already have an account? <a href="login.php">Login here.</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /Main body content -->

    <!-- Footer-->
    <?php
    include 'includes/footer.php';
    ?>
    <!-- /Footer-->

</body>
</html>