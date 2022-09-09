<div class="nevbar" id="nevbar">
    <div class="logo">
        <a href="index.php" id="logo">
            <h1>CAR<span>BOOK</span></h1>
        </a>
    </div>
    <div class="menu" id="menu">
        <ul id="menutext">
            <li><a class="menutext" id="home" href="index.php">Home</a></li>
            <li><a class="menutext" id="about" href="aboutus.php">About</a></li>
            <li><a class="menutext" id="service" href="service.php">Service</a></li>
            <li><a class="menutext" id="pricing" href="pricing.php">Pricing</a></li>
            <li><a class="menutext" id="cars" href="cars.php">Cars</a></li>
            <li><a class="menutext" id="contact" href="contact.php">Contact</a></li>
            <?php
                if ( isset ($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) {
                    $username = $_SESSION['username'];
                    $firstName = explode(" ",$username);
                    echo '
                        <li><a class="menutext" id="user" href="#"><i style="font-size: 18px; margin-right:8px; "
                        class="fas fa-user-circle"></i>'.$firstName[0].'</a></li>
                        <li><a class="menutext" id="login" href="logout.php">Logout</a></li>
                    ';
                }else {
                    echo '
                        <li><a class="menutext" id="user" href="#"><i style="font-size: 18px; margin-right:8px; "
                            class="fas fa-user-circle"></i></a></li>
                        <li><a class="menutext" id="login" href="login.php">Sign in</a></li>
                    ';
                }
            ?>
        </ul>
    </div>
    <div class="menuicon">
        <i id="menuicon" onclick="togglemenu()" class="fas fa-bars"></i>
    </div>
</div>