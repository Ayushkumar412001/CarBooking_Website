<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/vehicles.css">
    <title>Cars</title>
</head>
<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_navbar.php'; ?>
    
    <div class="contanner">

        <div class="coverabout"></div>


        <div class="cutlinemenu"></div>

        <div class="content">

            <div class="topabout">
                <div class="topaboutcontent">
                    <p><a href="index.php">HOME <i class="fas fa-angle-right"></i></a> CARS <i class="fas fa-angle-right"></i></p>
                    <h1>Cars</h1>
                </div>
            </div>
            
        </div>

        <div class="topspace"></div>
        

       <!-- ----------------------------------------  Cars  ------------------------------------ -->
        <div class="vehicles">
            <h5>WHAT WE OFFER</h5>
            <h1>Featured Vehicles</h1>

            <div class="vehiclesinfo" id="firstline">

                <?php
                    for($i=1; $i<=9; $i++){
                        echo '
                        <div class="car one">
                            <img src="images/'.$i.'-min-min.jpg">
                            <div class="info">

                                <h3>Mercedes Grand Sedan</h3>
                                <p>Cheverolet <span>$500</span> /day</p>
                                <button id="book">Book Now</button>
                                <button>Details</button>

                            </div>
                        </div>
                        ';
                    }
                ?>

            </div>

        </div>

        <div class="pageno">
            <ul>
                <li><a href=""><i class="fas fa-angle-left"></i></a></li>
                <li><span>1</span></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href=""> <i class="fas fa-angle-right"></i></a></li>
            </ul>
        </div>
        
        <!-- space -->
        <div class="space"></div>

        <!-- --------------------------------------- Footer  ------------------------------ -->
        <?php include 'partials/_footer.php'; ?>

    </div>


    <!--------------------------------------------------- Script -------------------------------- -->

    <!-- Menu -->
    <script src="js/menu.js"></script>

</body>
</html>