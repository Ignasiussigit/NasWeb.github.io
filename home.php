<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
};

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">

</head>

<body>

    <div class="header1" style="padding: 10px;">
        <h1>
            <center><span>N</span>as<span>W</span>eb</center>
        </h1>
    </div>

    <div class="container">

        <div class="profile">
            <?php
            $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
            if (mysqli_num_rows($select) > 0) {
                $fetch = mysqli_fetch_assoc($select);
            }
            if ($fetch['image'] == '') {
                echo '<img src="images/default-avatar.png">';
            } else {
                echo '<img src="uploaded_img/' . $fetch['image'] . '">';
            }
            ?>
            <h3><?php echo $fetch['name']; ?></h3>
            <a href="update_profile.php" class="btn">update profile</a>
            <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
            <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>


            <a href="./public/cyberscurity.php" style="color: white;">
                <div class="baca"><i class="fas fa-chevron-left"> &nbsp; BACK</i></div>
            </a>

        </div>

        <div class="popup-img">
            <span>&times;</span>
            <img src="./images/about-img.jpg">
        </div>

    </div>

    <div class="footer">
        <small class="anim-text">
            <a href="https://www.instagram.com/ignasiussigit/">&copy; NasWeb 2022</a>
        </small>
    </div>


    <script>
        document.querySelectorAll(".profile img").forEach(image => {
            image.onclick = () => {
                document.querySelector(".popup-img").style.display = 'block';
                document.querySelector(".popup-img img").src = image.getAttribute('src');
            }
        });

        document.querySelector(".popup-img span").onclick = () => {
            document.querySelector(".popup-img").style.display = 'none'
        }
    </script>

</body>

</html>