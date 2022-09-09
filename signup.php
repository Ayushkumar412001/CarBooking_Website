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
            $showError = 0;
            $displaynameError = 0;
            $emailError = 0;
            $passwordError = 0;

            $accountSucc = 0;
            
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                include "partials/_dbconnect.php";
                $user_name = $_POST['name'];
                $user_name = str_replace("<","&lt;",$user_name);
                $user_name = str_replace(">","&gt;",$user_name);
                $user_email = $_POST['email'];
                $user_email = str_replace("<","&lt;",$user_email);
                $user_email = str_replace(">","&gt;",$user_email);
                $pass = $_POST['password'];
                $pass = str_replace("<","&lt;",$pass);
                $pass = str_replace(">","&gt;",$pass);
                $cpass = $_POST['cpassword'];
                $cpass = str_replace("<","&lt;",$cpass);
                $cpass = str_replace(">","&gt;",$cpass);

                // Check whether this user name exists
                $existSql = "select * from `users` where user_name = '$user_name'";
                $result = mysqli_query($conn, $existSql);
                $numRows = mysqli_num_rows($result);

                // Check whether this email exists
                $existSqlone = "select * from `users` where user_email = '$user_email'";
                $resultone = mysqli_query($conn, $existSqlone);
                $numRowsone = mysqli_num_rows($resultone);

                if($numRows>0){
                    $displaynameError = 1;
                    $message = "Display name already in use!";
                }
                else{
                    // Check whether this user email exists

                    if($numRowsone>0){
                        $emailError = 1;
                        $message = "Email already in use!";
                    }
                    else {

                        if($pass == $cpass){
                            $hash = password_hash($pass, PASSWORD_DEFAULT);
                            $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_pass`, `timestamp`) VALUES ('$user_name', '$user_email', '$hash', current_timestamp())";
                            $result = mysqli_query($conn, $sql);
                            
                            if($result){
                                $accountSucc = 1;
                                $message = "New Account is created Successfully!<br>you can now login!";
                            }
                        }
                        else{
                            $passwordError = 1;
                            $message = "Confirm Password does not match!";
                        }
                    }
                }

            }       
        ?>

        <div class="login_container">
            <form action="signup.php" method="POST">
                <h3>Sign Up</h3>
                <p class="access">Create your account to get full access</p>
                <?php
                if($displaynameError == 1 || $emailError == 1 || $passwordError == 1 || $passwordError ==1){
                    echo '
                        <p class="access notification">'.$message.'</p>
                    ';
                }else if($accountSucc ==1) {
                    echo '
                        <p class="access notification" style="color:green";>'.$message.'</p>
                    ';
                }
                ?>

                <label for="name">Display name</label>
                <input type="text" id="name" name="name" maxlength="30" placeholder="Enter full name" required>

                <label for="Email">Email</label>
                <input type="email" id="Email" name="email" maxlength="40" placeholder="Enter email address" required>

                <label for="password">Password </label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
                
                <label for="cpassword">Confirm Password </label>
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required>

                <label for="tandc"><p><input style="width: auto;" type="checkbox" id="tandc" name="tandc" required> I agree to the StackForum <a href="terms_service.php">Terms of service</a></p></label>

                <button type="submit">Sign up</button>
                <p class="account">Already have an account? <a href="login.php">Log in</a></p>
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