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
    <link rel="stylesheet" href="css/testimonial.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/aboutUS.css">
    <link rel="stylesheet" href="css/service.css">
    <link rel="stylesheet" href="css/counter.css">
    <link rel="stylesheet" href="css/becomeDriver.css">
    <link rel="stylesheet" href="css/vehicles.css">
    <title>CarBook</title>
</head>
<body onload="loader()">

    <!-- <div id="preloader"></div> -->
    <div id="preloader">
        <img src="images/preload2.gif">
    </div>

    <div class="video" id="video">
        <div class="cross" onclick="closewindo()"><i class="fas fa-times"></i></div>
        <div class="songvideo">
            <video id="myVideo" controls src="videos/video.webm"></video>
            <!-- <iframe id="myVideo" src="https://youtu.be/jdn_sKIkOLE"></iframe>                        for youtube video -->
        </div>
    </div>

    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_navbar.php'; ?>
    <div class="contanner">

        <div class="cover"></div>


        <div class="cutline"></div>

        <div class="content">

            <div class="top">
                <div class="topcontent">
                    <h1>Fast & Easy Way To Rent A Car</h1>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                  
                    <div class="homeplay">
                        <a href="#"><i onclick="playvideo()" class="far fa-play-circle"></i></a>
                        <div class="line"></div>
                        <p>Easy steps for renting a car</p>
                    </div>
               
                </div>
            </div>
        </div>
        
        <div class="destination">

            <div class="trip">
                <div class="tripform">
                    <h3>Make Your Trip</h3>
                    <form action="" method="POST">

                        <label for="pick-up">PICK-UP LOCATION</label>
                        <input type="text" placeholder="City, Airpot, Station, etc" required>

                        <label for="drop-off">DROP-OFF LOCATION</label>
                        <input type="text" placeholder="City, Airpot, Station, etc" required>

                        <label for="pickup-date">PICK-UP DATE</label>
                        <input type="date" required>

                        <label for="dropoff-date">DROP-OFF DATE</label>
                        <input type="date" required>

                        <label for="pickup-time">PICK-UP TIME</label>
                        <input type="time" required>

                        <button type="submit">Rent A Car Now</button>

                    </form>
                </div>
                <div class="tripinfo">
                    <h2>Better Way to Rent Your Perfect Cars</h2>
                    <div class="infoicon">

                        <div class="one">
                            <i class="fas fa-route"></i>
                            <p>Choose Your Pickup Location</p>
                        </div>
                        <div class="two">
                            <i class="far fa-handshake"></i>
                            <p>Select the Best Deal</p>
                        </div>
                        <div class="three">
                            <i class="fas fa-car"></i>
                            <p>Reserve Your Rental Car</p>
                        </div>

                    </div>
                    <button>Research Your Perfect Car</button>
                </div>
            </div>
            
        </div>
        <!-- ----------------------------------------  Cars  --------------------------->
        <?php include 'partials/_vechicles.php'; ?>

        <!-- --------------------  About us Section ------------------------------------>
        <?php include 'partials/_aboutUS_section.php'; ?>

        <!-- ----------------------------------  Service ------------------------------->
        <?php include 'partials/_service.php'; ?>

        <!------------------------------------------- Become a driver------------------->
        <?php include 'partials/_becomeDriver.php'; ?>

        <!-- ---------------------------------- TESTIMONIAL ---------------------------->
        <?php include 'partials/_testimonial.php'; ?>

        <!-- ------------------------------  Counter  ---------------------------------->
        <?php include 'partials/_counter.php'; ?>
        
        <!-- -------------------------------  Footer  ---------------------------------->
        <?php include 'partials/_footer.php'; ?>
        
        <!-- <div class="space"></div> -->
        
        
    </div>


    

    <!--------------------------------------------------- Script -------------------------------- -->

    <!-- play video -->
    <script src="js/play_video.js"></script>

    <!-- Menu -->
    <script src="js/menu.js"></script>

    <!-- Drop Down Cars  -->
    <script src="js/dropDownCars.js"></script>
    
    <!-- preloader -->
    <script src="js/preloader.js"></script>

    <!-- testimonial btn -->
    <script src="js/testimonial.js"></script>

   
</body>
</html>