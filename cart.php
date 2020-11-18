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
    <div class="container cart">
        <div class="row">
            <div class="col-md-8 col-md-offset-5">
                <table class="table table-bordered">
                    <thead class=" thead-dark">
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <td></td>
                        <td>Total</td>
                        <td>₹0/-</td>
                        <td><a href="success.php" class="btn btn-dark">Confirm Order</a></td>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- /Main body content -->

    <!-- Footer starts -->
    <?php
    include 'includes/footer.php';
    ?>
    <!-- /Footer -->

</body>
</html>