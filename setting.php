<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
                    <img src="img/setting.jpg" class="img-fluid login-img" alt="">
                </div>
                <div class="col-lg-6 px-5 pt-5">
                    <h1 class="display-4 py-3">CHANGE PASSWORD</h1>
                    <form action="">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" class="form-control my-4 p-4" placeholder="Old Password" name="" id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" class="form-control my-4 p-4" placeholder="New Password" name="" id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" class="form-control my-4 p-4" placeholder="Re-type New Password" name="" id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="button" class="btn btn-dark btn-block my-3">Change Password</button>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- /Main body contet -->

    <!-- Footer starts -->
    <?php
    include 'includes/footer.php';
    ?>
    <!-- /Footer -->


</body>
</html>