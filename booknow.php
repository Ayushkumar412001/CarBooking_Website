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
    <link rel="stylesheet" href="css/counter.css">
    <link rel="stylesheet" href="css/aboutUS.css">
    <link rel="stylesheet" href="css/booknow.css">
    <title>Book now</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_navbar.php'; ?>

    <div class="contanner">

        <div class="about">
            <div class="carimgcontanner">
                <?php
                    $id = $_GET['catid']; 
                    echo '<img src="images/'.$id.'-min-min.jpg">';   
                
                    $success = 0;

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $user_name = $_POST['user_name'];
                        $pnumber = $_POST['pnumber'];
                        $p_location = $_POST['p_location'];
                        $d_location = $_POST['d_location'];
                        $p_date = $_POST['p_date'];
                        $d_date = $_POST['d_date'];
                        $p_time = $_POST['p_time'];
                        $carid = $_POST['carid'];

                        $sql = "INSERT INTO `bookinfo` (`car_id`, `user_name`, `pnumber`, `p_location`, `d_location`, `p_date`, `d_date`, `p_time`, `time`) VALUES ('$carid', '$user_name', '$pnumber', '$p_location', '$d_location', '$p_date', '$d_date', '$p_time', current_timestamp());";
                        $result = mysqli_query($conn, $sql);
                        
                        if($result) {
                            $success = 1;
                        }else {
                            $success = 0;
                        }
                    }
    
                ?>
                
            </div>
            <div class="aboutcontent">
                <?php  
                    if($success == 1) {
                        echo '<h3 style="color: #00ff08;">Booking Successful!!</h3>';
                    }
                ?>
                <h5>BOOK NOW</h5>
                <h1>Booking Details of Car</h1>
                <?php

                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) {

                        echo '
                        <div class="booknow">
                            <form action="" method="POST">

                                <label for="user_name">FULL NAME</label>
                                <input type="text" name="user_name" placeholder="Name" required>

                                <label for="pnumber">PHONE NUMBER</label>
                                <input type="number" name="pnumber" placeholder="ex-9876543210" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required>

                                <label for="pick-up">PICK-UP LOCATION</label>
                                <input type="text" name="p_location" placeholder="City, Airpot, Station, etc" required>

                                <label for="drop-off">DROP-OFF LOCATION</label>
                                <input type="text" name="d_location" placeholder="City, Airpot, Station, etc" required>

                                <label for="pickup-date">PICK-UP DATE</label>
                                <input type="date" name="p_date" required>

                                <label for="dropoff-date">DROP-OFF DATE</label>
                                <input type="date" name="d_date" required>

                                <label for="pickup-time">PICK-UP TIME</label>
                                <input type="time" name="p_time" required>

                                <input type="hidden" name="carid" value="'.$_GET['catid'].'">

                                <button type="submit">Rent A Car Now</button>

                            </form>
                        </div>
                        ';
                    }else {
                        echo '
                        <div class="booknow">
                            <div class="listhead">
                                <h3 style="margin: 50px 0 20px 0;">You are not Logged in!!</h3>
                                <a href="login.php">Log in</a>
                            </div>
                            <p style="margin:50px 0;">Login to start Booking Your car.</p>
                        </div>
                        ';
                    }

                ?>

                

            </div>
        </div>





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