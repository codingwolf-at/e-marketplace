<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>   
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
    <?php
    include 'includes/header.php';
    ?>
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
                    <form method="POST" action="signup_script.php">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control my-4 p-4" placeholder="Full Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" class="form-control my-4 p-4" placeholder="Email address" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" class="form-control my-4 p-4" placeholder="Password" name="password" required="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="tel"class="form-control my-4 p-4" placeholder="Contact" name="contact" maxlength="10" size="10" required="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control my-4 p-4" placeholder="City" name="city">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control my-4 p-4" placeholder="Address" name="address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="submit" class="btn btn-dark btn-block my-3">Sign Up</button>
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