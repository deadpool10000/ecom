<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html"><i class="bi bi-bag-check"></i> E-Commerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="add-product.php">Add product</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="checkout.php">Checkout</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage-product.php">manage-product</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="aaa.php">aaa</a></li>
                    <li class="nav-item"><a class="nav-link" href="eee.php">eee</a></li>


                    <?php 
                    
                    if(empty($_SESSION['id'])){
                        echo '<li class="nav-item"><a class="nav-link" href="login.php"><i class="bi bi-person-circle"></i>Login</a></li>';
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="logout.php"><i class="bi bi-person-circle"></i>Logout</a></li>'; 
                    }
                    
                    ?>
                </ul>
            </div>
        </div>
    </nav>