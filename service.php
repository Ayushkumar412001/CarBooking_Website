<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/service.css">
    <link rel="stylesheet" href="css/counter.css">
    <link rel="stylesheet" href="css/becomeDriver.css">
    <title>Service</title>
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
                    <p><a href="index.php">HOME <i class="fas fa-angle-right"></i></a> SERVICE <i
                            class="fas fa-angle-right"></i></p>
                    <h1>Service</h1>
                </div>
            </div>

        </div>

        <div class="topspace"></div>

        <!-- ----------------------------------  Service -------------------------------------- -->
        <?php include 'partials/_service.php'; ?>



        <!------------------------------------------- Become a driver------------------------------------------ -->
        <?php include 'partials/_becomeDriver.php' ?>

        <!-- space -->
        <div class="space"></div>

        <!-- ------------------------------  Counter  ---------------------------------- -->
        <?php include 'partials/_counter.php'; ?>

        <!-- --------------------------------------- Footer  ------------------------------ -->
        <?php include 'partials/_footer.php'; ?>

    </div>


    <!--------------------------------------------------- Script -------------------------------- -->

    <script src="js/menu.js"></script>


</body>

</html>