<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container">

        <!-- Website logo -->
        <div class="navbar-header">
            <a href="#" class="navbar-brand">E-marketplace</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Website Links -->
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav">

                <?php
                if (isset($_SESSION['email'])) {
                ?>

                <li class="nav-item">
                    <a href="product.php" class="nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <a href="cart.php" class="nav-link">Cart</a>
                </li>
                <li class="nav-item">
                    <a href="setting.php" class="nav-link">Setting</a>
                </li>
                <li class="nav-item">
                    <a href="logout_script.php" class="nav-link">Logout</a>
                </li>

                <?php
                } else {
                ?>
                
                <li class="nav-item">
                    <a href="index.php" class="nav-link ">Home</a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="nav-link">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li> 

                <?php
                }
                ?>

            </ul>
        </div>

    </div>
</nav>