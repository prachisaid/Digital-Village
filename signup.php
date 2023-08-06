<?php
$showError = false;
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_connect.php';

    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['signupemail'];
    $password = $_POST['signuppass'];

    $existssql = "SELECT * FROM `client` WHERE 'client_email' = '$email'";
    $result = mysqli_query($conn, $existssql);
    $numexistsrow = mysqli_num_rows($result);

    if ($numexistsrow >= 1) {
        $showError = "Email aleready exists";
    } else {
        // $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `client` (`client_email`,`client_fname`, `client_lname` ,`password`) VALUES ('$email', '$firstname', '$lastname', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        }
    }
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dvillage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div id="navbar" style="position: initial;">
        <nav>
            <div class="logo">
                <a href="index.html" style="text-decoration: none;">Dvillage</a>
            </div>

            <div class="login">
                <a href="login.html" class="loginbtn">Log in</a>
            </div>

            <div class="signup">
                <a href="signup.html" class="signupbtn">Sign up</a>
            </div>
        </nav>
    </div>

    <?php
    if ($showAlert) {
        echo '<div style="position:absolute; top:72px; width:100%" class="alert alert-success alert-dismissible fade show" role="alert">
        Your account is now created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>


    <div class="loginform">
        <h3>Sign up and get digital</h3>
        <form action="signup.php" method="POST">
            <input type="text" name="firstName" id="signupname" placeholder="First Name">
            <input type="text" name="lastName" id="signupname" placeholder="Last Name">
            <input type="email" name="signupemail" id="signupemail" placeholder="Email">
            <input type="password" name="signuppass" id="signuppass" placeholder="Password">
            <button class="signupbutton">Sign Up</button>
        </form>
        <div class="terms">
            By signing up you agree to our <a href="" style="color: #a435f0;">Terms</a> and <a href="" style="color: #a435f0;">Privacy Policy</a>
            <!-- <hr style=""> -->
        </div>
        <div style="text-align: center;
        margin: 4px 0px 9px 34px;
        padding-left: 54px;
        font-size: 14.5px;">
            Already have an account? <a href="login.html" style="color: #a435f0; font-weight: 700;">Login</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>