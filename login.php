<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location:./public/cyberscurity.php');
    } else {
        $message[] = 'passwordnya salah euyyy!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">

</head>

<body>

    <div class="header1">
        <h1>
            <center><span>N</span>as<span>W</span>eb</center>
        </h1>
    </div>
    <div class="form-container">

        <form action="" method="post" enctype="multipart/form-data">
            <h3>login now</h3>
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                }
            }
            ?>
            <input type="email" name="email" placeholder="enter email" class="box" required>
            <input type="password" name="password" placeholder="enter password" class="box" required>
            <input type="submit" name="submit" value="login now" class="btn">
            <p>Belum punya akun? <a href="register.php">Register sekarang</a></p>
            <a href="./public/blog.html" style="color: white;">
                <div class="baca" style="background-color: salmon;"><i class="fas fa-chevron-left"> &nbsp; BACK</i></div>
            </a>
        </form>

    </div>

    <div class="footer">
        <small class="anim-text">
            <a href="https://www.instagram.com/ignasiussigit/">&copy; NasWeb 2022</a>
        </small>
    </div>


</body>

</html>