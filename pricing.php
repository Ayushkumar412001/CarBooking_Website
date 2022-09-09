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
    <title>Pricing</title>
</head>
<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_navbar.php'; ?>;
    
    <div class="contanner">

        <div class="coverabout"></div>


        <div class="cutlinemenu"></div>

        <div class="content">

            <div class="topabout">
                <div class="topaboutcontent">
                    <p><a href="/index.html">HOME <i class="fas fa-angle-right"></i></a> PRICING <i class="fas fa-angle-right"></i></p>
                    <h1>Pricing</h1>
                </div>
            </div>
            
        </div>

        <div class="topspace"></div>

        <!-- --------------------------------  Pricing ---------------------------- -->
        <div class="contact">

            <div class="sidescrole">

                <div class="pricingcontanner">
    
                    <div class="pricingheading">
                        <div class="carsno"></div>
                        <div class="rate dayone"><div class="menucut cutone"></div><h3>Per Hour Rate</h3></div>
                        <div class="rate daytwo"><div class="menucut cuttwo"></div><h3>Per Day Rate</h3></div>
                        <div class="rate daythree"><div class="menucut cutthree"></div><h3>Leasing</h3></div>
                    </div>
    
                    <!-- 1st line -->
                    <?php 
                    for($i=1; $i<=6; $i++){
                        echo '
                        <div class="pricingcontent">
    
                            <div class="carimage">
                                <img class="carimgall" style="object-fit: cover; height: 100px; width: 40%; margin: 25px;" src="images/'.$i.'-min-min.jpg">
                                <div class="carinfo">
                                    <p>Cheverolet SUV Car</p>
                                    <div class="rated">
                                        <p>Rated :</p>
                                        <div class="stars">
                                            <i class="far fa-star fas"></i>
                                            <i class="far fa-star fas"></i>
                                            <i class="far fa-star fas"></i>
                                            <i class="far fa-star fas"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="fuel">
                                <p id="per"><span>$10.99</span> / per hour</p>
                                <p id="surcharge">$3 / hour fuel surcharge</p>
                            </div>
        
                            <div class="fuel">
                                <p id="per"><span>$60.99</span> / per day</p>
                                <p id="surcharge">$3 / hour fuel surcharge</p>
                            </div>
        
                            <div class="fuel">
                                <p id="per"><span>$995.99</span> / per month</p>
                                <p id="surcharge">$3 / hour fuel surcharge</p>
                            </div>
        
                        </div>
                        ';
                    }
                    ?>
    
                </div>
                
            </div>
           

        </div>
        
        <!-- space -->
        <!-- <div class="space"></div> -->

        <!-- --------------------------------------- Footer  ------------------------------ -->
        <?php include 'partials/_footer.php'; ?>

    </div>


    <!--------------------------------------------------- Script -------------------------------- -->

    <script src="js/menu.js"></script>


</body>
</html>