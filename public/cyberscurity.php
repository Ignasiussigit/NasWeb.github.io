<!-- =====================================================================================================
========================== Halooo !!! ngintip aja nih ============================================
==========================================================================================================

NYARI APA NIH? HEHE... I CAN SEE YOU
SELAMAT BELAJAR, JANGAN JADI ORANG BIASA !!! HUSST JANGAN BILANG BILANG UDAH LIAT INI !

                                                                                            
     :::       .:.                                   ::          .:.                  .&@~          
    .@@@#      P@#                                  ^@@:         B@Y                  .@@!          
    .@@#@#     P@#     ..^~~~^.          .:~~~~~:   .@@^         &@7      .~~~:       .@@~  :~~:    
    .@@^5@#    P@#    !@&BGGB&@&!      !#@#GGGB#J    &@7   ..    @@^   .5@&BGB&@B^    .@@JP@&&&@@P  
    .@@^ G@B   P@#     .      ?@@^    ~@@~           #@Y  :@@?  .@@.  :@@7     !@@~   .@@@B^   :@@G 
    .@@^  B@G  P@#       :^~~^7@@!    .&@&Y~.        G@P  #@@@: :@@   #@&^^~~~^^&@#   .@@J      7@@:
    .@@^   #@P 5@#    7#@&BBBB#@@!      ~5#&@@&P^    J@B J@7~@# ^@#   @@&GBBBBBBGBY   .@@~      ^@@^
    .@@^    #@JP@#   ?@@!     .@@!          .^P@@7   !@&:@#  G@Y!@G   #@#             .@@~      Y@&.
    .@@^     &@@@#   J@@~   .?&@@!    ..      !@@!   :@@&@.   &@&@5   :@@B^     ..    .@@?    .Y@@^ 
    .&&^     .#@&G    ?&@&###P^B@^    J@&&###&&P^    .&&@7    ^&@@!     J#&&&###&B     G&&&&#&&#?   
                         ...            .....                              ....           ....      

==========================================================================================================
==========================================================================================================
=======================================================================================================-->




<?php

include '../config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:../login.php');
};

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:../login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberScurity</title>

    <link rel="icon" href="../images/linux-hero.png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> NasWeb </a>

        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="../index.html" class="anim-text">home</a>
            <a href="./about.html" class="anim-text">about</a>
            <a href="../public/blog.html" class="anim-text">blog</a>
            <a href="../public/contact.html" class="anim-text">contact</a>
        </nav>

        <div class="icons">
            <a href="../home.php">
                <div id="account-btn" class="fas fa-user"></div>
            </a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </header>

    <!-- account form section starts  -->

    <div class="account-form">

        <div id="close-form" class="fas fa-times"></div>

        <div class="buttons">
            <span class="btn active login-btn">login</span>
            <span class="btn register-btn">register</span>
        </div>

        <form class="login-form active" action="">
            <h3>login now</h3>
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
                <a href="#">forgot password?</a>
            </div>
            <input type="submit" value="login now" class="btn">
        </form>

        <form class="register-form" action="">
            <h3>register now</h3>
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            <input type="password" placeholder="confirm your password" class="box">
            <input type="submit" value="register now" class="btn">
        </form>

    </div>

    <!-- account form section ends -->

    <!-- header section ends -->

    <section class="heading-link1">
        <h3>CyberScurity</h3>
        <p> <a href="../index.html">home</a> / CyberScurity </p>
    </section>

    <!-- contact section starts  -->

    <div class="warna1">
        <section class="about">
            <div class="content">
                <p class="pembukaan" style="padding: 20px;">Pertama tama sebelum kalian pelajari lebih lanjut tentang
                    dunia CYBER
                    di NasWeb kalian terlebih
                    dahulu harus paham basic nya tentang CyberScurity. setelah kalian telah mempelajari sedikit , kalian
                    langsung saja download OS (operating system) seperti : KaliLinux, ParrotOS, Garuda Linux, BlackArch,
                    BackBox, dll... .
                    <br>
                    <br>
                    Jika kalian tidak tahu bagaimana cara penginstalan nya , di NasWeb telah menyediakan cara
                    penginstalan OS KaliLinux silahka di cek Guysss.... Happy hacking
                </p>
            </div>
        </section>
        <section class="contact">
            <h1 class="heading"> Pilih Tipe </h1>

            <div class="icons-container">

                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/install kalilinux.jpg" alt="" style="width: 100%; border-radius: 20px;">
                    </div>
                    <h3>Penginstalaan</h3>
                    <h3>KaliLinux</h3>
                    <a href="../public/1router.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>

                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/root-kali.jpg" alt="" style="width: 100%; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Cara masuk root </h3>
                    <h3>di KaliLinux</h3>
                    <a href="../public/2router.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>

                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/ngrok-setting.jpg" alt="" style="width: 100%; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Setting Ngrok</h3>
                    <a href="../public/3router.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/Keylogger.jpeg" alt="" style="width: 100%; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Setting KeyLooger</h3>
                    <a href="../public/vlan1.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/wordlist1.png" alt="" style="width: 100%; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Cara membuat </h3>
                    <h3>Wordlist</h3>
                    <a href="../public/1server.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/metasploit.jpg" alt="" style="width: 100%; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Cara membuat </h3>
                    <h3>File Backdoor</h3>
                    <a href="../public/1server.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/njrat.png" alt="" style="width: 100%; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Cara membuat </h3>
                    <h3>virus</h3>
                    <a href="../public/1server.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/lacakfoto.jpg" alt="" style="width: 100%; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Cara melacak file </h3>
                    <h3>Lokasi foto</h3>
                    <a href="../public/1server.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>

                <!-- foto dihilangkan  -->
                <!-- <div class="hilang" id="tampil"> -->
                <!-- <div class="icons-container"> -->
                <div class="icons " style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/lacak-username.png" alt="" style="width: 220px; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Cara melacak Username </h3>
                    <h3>media Social</h3>
                    <a href="../public/1server.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/osintgram.jpg" alt="" style="width: 220px; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>melihat informasi </h3>
                    <h3>user instagram</h3>
                    <a href="../public/1server.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/phising.png" alt="" style="width: 220px; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Cara melakukan </h3>
                    <h3>Phising</h3>
                    <a href="../public/1server.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/burpsuite.png" alt="" style="width: 220px; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Cara melakukan hack password </h3>
                    <h3>menggunakan burpsuite</h3>
                    <a href="../public/1server.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/seeker.jpg" alt="" style="width: 220px; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Cara melacak lokasi </h3>
                    <a href="../public/1server.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
                <div class="icons" style="border-radius: 20px;">
                    <div class="gambar">
                        <img src="../images/aircrack-ng.jpg" alt="" style="width: 220px; height: 180px; border-radius: 20px;">
                    </div>
                    <h3>Cara mendapatkan <br> password tetangga</h3>
                    <a href="../public/1server.html"><button type="button" style="padding: 10px; background-color: #0eb582; color: white; margin-top: 5px;">Buka</button></a>
                </div>
            </div>
    </div>
    </div>


    <!-- 
    <div class="load-more" onclick="myfunction()">
        <div class="btn">load more</div>
    </div> -->


    <marquee direction="left" style="font-size: 20px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        Anjay mau jadi hangker ????????
    </marquee>
    </section>
    </div>
    <!-- switch ke video -->

    <section class="faq">

        <h1 class="heading" style="margin-top: -20px;">frequently asked questions</h1>

        <div class="accordion-container">

            <div class="accordion active">
                <div class="accordion-heading">
                    <h3>VIDEO CISCO</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Jika masih belum paham dengan artikel di atas silahkan pencet link di bawah ini : <br>
                    <button type="button" style="padding:10px; background-color: #0eb582; border-radius: 5px;"><a href="../public/videocisco.html" style="color: white;">Lihat video </a></button>
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>Cara CHEAT QUIZIZZ</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Cara mengetahui jawaban pada quizizz <br>
                    <button type="button" style="background-color: #0eb582;; border-radius: 5px; padding: 10px;"><a href="./maunyariapa.html" style="color: #fff;">Klik disini</a></button>
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>Apa Karir Terbaik Di Tahun 2022?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere
                    laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum
                    voluptatibus deserunt quidem. Natus, quo.
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>Berapa Biaya Untuk Pengembangan Web?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere
                    laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum
                    voluptatibus deserunt quidem. Natus, quo.
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>peralatan apa saja yang digunakan cyber scurity</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere
                    laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum
                    voluptatibus deserunt quidem. Natus, quo.
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>belajar coding mulai dari mana?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere
                    laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum
                    voluptatibus deserunt quidem. Natus, quo.
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>cara menggunakan WinBox Mikrotik</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Cara mengkonfigurasi Mikrotik VLAN dengan menggunakan Software WinBox <br>
                    <button type="button" style="background-color: #0eb582;; border-radius: 5px; padding: 10px;"><a href="./mikrotik_1.html" style="color: #fff;">Klik disini</a></button>
                </p>
            </div>

        </div>

    </section>

    <!-- contact section ends -->






    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> <i class="fas fa-lightbulb"></i> NasWeb </h3>
                <p>NasWeb akan mmeberikan Edukasi kepada kalian semua tentang ilmu. Anjay ????????</p>
                <div class="share">
                    <a href="https://m.facebook.com/ignasius.sigit.1" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/ignasiussigit/" class="fab fa-instagram"></a>
                    <a href="https://tiktok.com/@matrix007213" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="../index.html" class="link">home</a>
                <a href="../public/about.html" class="link">about</a>
                <a href="../public/blog.html" class="link">courses</a>
                <a href="../public/contact.html" class="link">contact</a>
            </div>

            <div class="box">
                <h3>useful links</h3>
                <a href="#" class="link">help center</a>
                <a href="#" class="link">ask questions</a>
                <a href="#" class="link">send feedback</a>
                <a href="#" class="link">private policy</a>
                <a href="#" class="link">terms of use</a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest upadates</p>
                <form action="">
                    <input type="email" name="" placeholder="enter your email" id="" class="email">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>

        </div>


        <div class="credit"> di buat dengan <i class="fas fa-heart" style="color: red;"></i> oleh <span>Ignasius</span>
            <br>
            &copy; NasWeb 2022
        </div>

    </section>

    <!-- footer section ends -->





    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>

    <script>
        function myfunction() {
            document.getElementById("tampil").style.display = 'block'
        }
    </script>

</body>

</html>