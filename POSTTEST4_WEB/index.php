<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    // session_destroy();
    // header('proses_login.php');
    // $_SESSION['username'] = "adityaa";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        FhidityaaHotel
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="gambar/pohon-icon.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body >
    <header>
        <div class="nav container">
            <a href="" class="logo" id="warna">
                Fhidityaa<span>Hotel</span>
            </a>
            <div class="search-box">
                <input type="search" name="search" id="search-input" placeholder="Cari Kamar">
                <i
                href="" class='bx bx-search' id="cari"></i>
                    <!-- <a href="" class='bx bx-search'></a> -->
                </i>
            </div>
            <a href="#about-me" class="user">
                <img src="gambar/pohon-icon.png" alt="" class="user-img">
            </a>
            <div class="navbar">
                <a href="#beranda" class="nav-link">
                    <i class='bx bx-home'></i>
                    <span class="nav-link-title">Beranda</span>
                </a>
                <a href="#populer" class="nav-link">
                    <i class='bx bxs-hot'></i>
                    <span class="nav-link-title">Populer</span>
                </a>
                <a href="#fasilitas" class="nav-link">
                    <i class='bx bx-kamar'></i>
                    <span class="nav-link-title">fasilitas</span>
                </a>
                <a href="#fasilitas" class="nav-link">
                    <i class='bx bx-tv'></i>
                    <span class="nav-link-title">fasilitas</span>
                </a>
                <a href="#about-me" class="nav-link">
                    <i class='bx bx-user'></i>
                    <span class="nav-link-title">About Me</span>
                </a>
                
                <?php if (!isset($_SESSION["username"])){
                    echo(
                        '<a href="proses_login.php" class= "nav-link" id= "login">
                <i class="bx bx-user-circle"></i><span class="nav-link-title">Login</span>');
                } else {
                    echo(
                        '<a href="proses_keluar.php" class= "nav-link" id= "lgout">
                <i class="bx bx-user-circle"></i><span class="nav-link-title">Logout</span>');
                }?>

                <label>
                    <input type="checkbox" class="checkbox" id="tombol">
                    <span class="check"></span>
                </label>
            </div>
        </div>
    </header>
    <!--Section Beranda-->
    <section class="beranda container" id="beranda">
        <img src="gambar/swimmingpool.jpeg" alt="" class="beranda-img" id="gambar1">
        <div class="beranda-teks">
            <h1 class="judul-beranda">FHIDITYAA HOTEL</h1>
            <p>Layanan 24 jam, Bersih, Mewah</p>
            <a href="#" class="tombol-ntn">
                <i class='bx bx-caret-right-circle'></i>
                <span>Pilih Paket Kamar</span>
            </a>
        </div>
    </section>

    <!--Section popular-->
    <section class="populer container" id="populer">
        <div class="head">
            <h2 class="kamar-populer">Kamar Populer</h2>

        </div>
        <div class="list-populer" >
            <div>
                <div>
                    <div>
                        <img src="gambar/kamar1.jpg" alt="" class="Kamar-box">
                        <div class="box-text">
                            <h2 class="judul-kamar">Kamar Healing</h2>
                            <span class="tema-kamar">Tenang, Murah, MEWAT</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class='bx bx-caret-right-circle'></i>
                                <span>Pilih Paket Kamar</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="gambar/kamar2.jpg" alt="" class="Kamar-box">
                        <div class="box-text">
                            <h2 class="judul-kamar">Kamar Elegan</h2>
                            <span class="tema-kamar">Elegan, Mewah, Tenang</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class='bx bx-caret-right-circle'></i>
                                <span>Pilih Paket Kamar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more">
            <a href="#Fasilitas" >Lainnya</a>
        </div>
    </section>

    <!--Section fasilitas-->
    <section class="fasilitas container" id="fasilitas">
        <div class="head">
            <h2 class="judul-fasilitas">fasilitas</h2>

        </div>
        <div class="list-fasilitas" >
            <div>
                <div>
                    <div>
                        <img src="gambar/fasilitas3.jpg" alt="" class="fasilitas-box">
                        <div class="box-text">
                            <h2 class="fasilitas-hotel">Parkir Mewah</h2>
                            <span class="fasilitas-hotel">Cover Mobil, Luas</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class='bx bx-caret-right-circle'></i>
                                <span>lihat Fasilitas</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="gambar/fasilitas4.jpg" alt="" class="fasilitas-box">
                        <div class="box-text">
                            <h2 class="fasilitas-hotel">Kolam Renang</h2>
                            <span class="fasilitas-hotel">Aman,Pelampung Mewah,Instagramable</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class='bx bx-caret-right-circle'></i>
                                <span>lihat Fasilitas</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more">
            <a href="#fasilitas">Lainnya</a>
        </div>
    </section>

    <!--Section Fasilitas-->
    <section class="Fasilitas container" id="fasilitas">
        <div class="head">
            <h2 class="judul-fasilitas">Fasilitas</h2>

        </div>
        <div class="list-fasilitas" >
            <div>
                <div>
                    <div>
                        <img src="gambar/fasilitas1.jpg" alt="" class="Kamar-box">
                        <div class="box-text">
                            <h2 class="fasilitas-Hotel">Tempat Gym</h2>
                            <span class="fasilitas-Hotel">Free WI-FI, Pakai alat sepuasnya, Layanan 24 jam</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class='bx bx-caret-right-circle'></i>
                                <span>lihat Fasilitas</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="gambar/fasilitas2.jpg" alt="" class="kamar-box">
                        <div class="box-text">
                            <h2 class="fasilitas-Hotel">Bar</h2>
                            <span class="fasilitas-Hotel">Sarapan Gratis, Bebas Rokok, Restoran</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class='bx bx-caret-right-circle'></i>
                                <span>lihat Fasilitas</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>

    <footer id="about-me">
        <div class="footer container">
            <h1 align="center">About Me</h1><br>
            <div class="img"></div>
            <div class="text">Fhidityaa<span> Hotel</span></div</div>
        <p class="desc"> Hallo!, nama saya Aditya Rafiqi Pangestu. Saya adalah owner dari Hotel  ini, nikmati kenyaman hotel kami yang harganya murah kualitasnya gak murahan.</p>
        </div>
        <div class="sosmed-footer" align="center">
            <div><a target="blank" href="https://www.instagram.com/adityaaraaa/" class="nav-link">
                <i class='bx bxl-instagram' ></i>
                <span class="sosmed-range">Instagram  </span>
            </a>
            </div>
            <div><a target="blank" href="https://wa.wizard.id/b72094" class="nav-link">
                <i class='bx bxl-whatsapp'></i>
                <span class="sosmed-range">  WhatsApp</span>
                <a/>
            </div>
        </div>
    </footer>
    <script src="javascript.js"></script>
    <script>
        var tombol = document.getElementById("tombol");

        tombol.onclick = function(){
            document.body.classList.toggle("white-mode");
        }
    </script>
    </body>
</html>