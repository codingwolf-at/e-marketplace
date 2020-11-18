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