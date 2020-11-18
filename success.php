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
                        <a href="cart.php" class="nav-link">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a href="setting.php" class="nav-link">Setting</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- /Header-->

    <!-- Main body content -->

    <div class="page-header content">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Your order is confirmed!</h1>
            <p class="lead text-center">
                Thank you for shopping with us. 
                <a href="product.php">Click here</a>
                to purchase more item.  
            </p>
        </div>
    </div>

    <!-- /Main body content-->

    <!-- Footer starts -->
    <?php
    include 'includes/footer.php';
    ?>
    <!-- /Footer -->

</body>
</html>