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
    <link rel="stylesheet" href="css/login_signup.css">
    <title>Contact Us</title>
</head>

<body>

    <?php include 'partials/_dbconnect.php' ?>
    <?php include 'partials/_navbar.php'; ?>
    <div class="contanner">


        <div class="cover"></div>

        <?php
            // $showError = "false";
            $passError = 0;
            $usernotError = 0;
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                include 'partials/_dbconnect.php';
                $email = $_POST['email'];
                $email = str_replace("<","&lt;",$email);
                $email = str_replace(">","&gt;",$email);
                $pass = $_POST['password'];
                $pass = str_replace("<","&lt;",$pass);
                $pass = str_replace(">","&gt;",$pass);

                $sql = "SELECT * FROM `users` WHERE user_email='$email'";
                $result = mysqli_query($conn, $sql);
                $numRows = mysqli_num_rows($result);
                // check user email is present or not
                if($numRows == 1) {
                    // if user email is present
                    $row = mysqli_fetch_assoc($result);
                    // varifing password
                    if(password_verify($pass, $row['user_pass'])) {
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['sno'] = $row['sno'];
                        $username = $row['user_name'];
                        $_SESSION['username'] = $username;
                        $_SESSION['useremail'] = $email;
                        echo '
                            <script>
                            window.location="index.php";
                            </script>
                        ';
                    }
                    else {
                        $passError = 1;
                        $message = "Wrong Password!";
                    }
                }
                else {
                    $usernotError = 1;
                    $message = "User not found !";
                }
            }
        ?>

        <!-- <div class="space" style="background-color: transparent;"></div> -->

        <div class="login_container">
            <form action="login.php" method="POST">
                <h3>Login</h3>
                <p class="access">Enter Login details to get access</p>
                <?php
                if($passError == 1 || $usernotError ==1 ){
                    echo '
                        <p class="access notification">'.$message.'</p>
                    ';
                }
                ?>

                <label for="Email">Email Address</label>
                <input type="email" id="Email" name="email" placeholder="Email address" required>

                <label for="password">Password </label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>

                <label for="tandc">
                    <p><input style="width: auto;" type="checkbox" id="tandc" name="tandc" required> I agree to the
                        StackForum <a href="terms_service.php">Terms of service</a></p>
                </label>

                <button type="submit">Login</button>
                <p class="account">Don't have an account? <a href="signup.php">Sign up</a></p>
            </form>
        </div>


        <div class="space" style="background-color: transparent;"></div>

        <!-- <div class="topspace"></div> -->

        <!-- space -->
        <!-- <div class="space"></div> -->

        <!-- --------------------------------------- Footer  ------------------------------ -->
        <?php include 'partials/_footer.php'; ?>

    </div>

    <!--------------------------------------------------- Script -------------------------------- -->
    <!-- Menu -->
    <script src="js/menu.js"></script>

</body>

</html>