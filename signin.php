<?php

// Start the session
session_start();
// print_r($_SESSION['user']);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="icon/css/all.css">
    <link rel="stylesheet" href="css/datetimepicker.css">
    <title>Ta'aruf Yuk</title>


</head>

<body>
    <!--awal navigasi-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="">Ta'aruf Yuk</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">Contact</a>
                    <a class="nav-item nav-link" href="#" id="btn_signin">Sign In</a>
                </div>
            </div>
        </div>
    </nav>
    <!--akhir navigasi-->

    <!--awal header-->
    <style>
        .jumbotron {
            height: auto;
            background-image: url('img/ta_aruf_bg.jpg');
            color: white;
            background-attachment: fixed;
            background-size: cover;
            background-position: 0 -200px;
        }

        .jumbotron h1,
        .jumbotron p {
            text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
        }
    </style>
    <div class="jumbotron">
        <div class="row" style="padding-top: 20px;">
            <!--KALIMAT PEMBUKA-->
            <div class="col-4">
                <h1 class="display-5 font-weight-bold text-left ">Temukan Pasagan Ta'arufmu</h1>
                <p class="lead " style="text-align: justify;">"Ketimbang seorang pria dan wanita menjalin pacaran
                    sebelum ke pelaminan. Sebab jika pacaran dikhawatirkan pria dan wanita yang bukan muhrim melakukan zina."
                    <br> Mending Ta'aruf Aja!
                </p>
                <button class="btn btn-primary"> Cari Ta'arufmu . . .</button>
            </div>
            <!--FORM SIGN IN-->
            <div class="col-4 offset-3" id="form_signin" <?= (isset($_POST['signin']) || isset($_GET['signin'])) ? ' ' : 'hidden'; ?>>
                <form action="" method='post'>
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <input type="text" id="inusername" name="email" autocomplete='off' class="form-control" value="" placeholder="Email">
                    <div class="input-group mt-2">
                        <input type="password" class="form-control inpass" value="" placeholder="Password" name="pass" autocomplete>
                        <div class="input-group-text showhide" onclick="showpassword('show')">
                            <a href="#"><i class="far fa-eye-slash show"></i></a>
                        </div>
                    </div>
                    <div class="checkbox mb-1">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <input class="w-100 btn btn-lg btn-primary" onclick="validasisignin()" type="submit" name='signin' value="Sign In">
                </form>
                <div class="container" style="padding-top: 10px;">
                    <?php

                    if (isset($_POST['signin'])) {
                        $user = $_POST['email'];
                        $pass = $_POST['pass'];
                        // echo $pass;
                        require 'database/read.php';
                        $read = new Read;
                        $val = $read->rAkunsignup($user);
                        // echo $val['pass'];
                        if ($user === '' || $pass === '') {
                    ?>
                            <div class="alert bg-info" role="alert">
                                Username dan Password Kosong!
                            </div>
                        <?php
                        } else if ($user == $val['email'] && $pass == $val['pass']) {
                            $_SESSION['user'] = $val;
                            header('location: index.php');
                        } else {
                            ?>
                            <div class="alert bg-danger " role="alert">
                                Username atau Password Salah!
                            </div>

                            <?php
                        }
                    }


                    ?>
                </div>
                <div class="container">
                    <p>Belum punya akun? <a href="#" id="linksignup" class="alert-link">Sign Up</a></p>
                </div>

            </div>
            <!--FORM SIGN UP-->
            <div class="col-4 offset-3" id="form_signup" <?= (isset($_POST['daftar'])) ? ' ' : 'hidden'; ?>>
                <form action="" method='post'>
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" id="namauser" name="nama_lngkp" autocomplete="off" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-auto">
                                <div class="datepicker date input-group">
                                    <input type="text" placeholder="Tanggal Lahir" name="tgl_lahir" autocomplete="off" class="form-control" id="reservationDate">
                                    <div class="input-group-append"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                </div>
                            </div>
                            <div class="col-auto mt-1">
                                <div class="btn-group-toggle ml-2 form-row" data-toggle="buttons">
                                    <label class="btn btn-light col-auto mr-2" style="width: 45px;">
                                        <input type="radio" name="jns_kel" value="L" id="kl1" autocomplete="off"><i class="fas fa-male"></i>
                                    </label>
                                    <label class="btn btn-light col-auto " style="width: 45px;">
                                        <input type="radio" name="jns_kel" value="P" id="kl2" autocomplete="off"><i class="fas fa-female"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" id="useremail" name="uEmail" placeholder="Email" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" id="passuser" class="form-control inpass" name="uPass" placeholder="Password" autocomplete class="form-control">
                                <div class="input-group-text showhide" id="" onclick="showpassword('show')">
                                    <a href="#"><i id="" class="far fa-eye-slash show"></i></a>
                                </div>
                            </div>
                        </div>
                        <input class="w-100 btn btn-lg btn-primary" type="submit" name='daftar' value="Lanjut">
                    </div>
                </form>
                <?php
                if (isset($_POST['daftar'])) {

                    $nama = $_POST['nama_lngkp'];
                    $tgl_lahir = $_POST['tgl_lahir'];
                    if (isset($_POST['jns_kel'])) {
                        $jns_kel = $_POST['jns_kel'];
                    } else {
                        $jns_kel = '';
                    }
                    $email = $_POST['uEmail'];
                    $pass = $_POST['uPass'];

                    if ($nama === '' || $jns_kel === '' || $email === '' || $pass === '') { ?>
                        <div class="alert bg-info" role="alert">
                            Nama, Jenis Kelamin, Email dan Password harus diisi!
                        </div>
                <?php } else {
                        require 'database/read.php';
                        $read = new Read;
                        $dataR = $read->rAkun();
                        $id = 1;
                        for ($i = 0; $i < count($dataR); $i++) {
                            if ($id == $dataR[$i]['id_user']) {
                                $id++;
                            } else {
                                break;
                            }
                        }
                        // echo 'simpan';
                        require 'database/insert.php';
                        $insert = new Insert;
                        $dataI = $insert->iAkun($id, $email, $pass, $nama, $jns_kel, $tgl_lahir);
                        echo "<script>window.location.replace('signin.php?signin=signin')</script>";
                        // echo $dataI;
                    }
                }
                ?>
                <div class="container">
                    <p>Sudah punya akun? <a href="#" id="linksignin" class="alert-link">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12"></div>
    </div>
    </div>
    <!--akhir header-->

    <!--awal tentang-->
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Mengapa harus Ta'aruf?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <p>Setiap orang pasti menginginkan bahwa pernikahan ini akan bertujuan untuk ibadah nantinya. Oleh
                    karena itu, sebagian dari mereka memilih ta'aruf sebagai jalan awal menuju gerbang pernikahan.

                    Ingin mendapatkan ridho Allah. Hal ini juga salah satu alasan kenapa memilih ta'aruf. Karena
                    ta'aruf
                    tidak sama dengan pacaran. Tidak ada aktifitas berduaan, chatting an, bersentuhan dll.</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <h2>Apa manfaat Ta'aruf?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <p>Pencarian cinta sejati dengan melalui proses ta'aruf lebih baik lho daripada melalui proses
                    pacaran.
                    Salah satu manfaat dari ta'aruf yaitu dapat terhindar dari php (pemberi harapan palsu) karena
                    ta'aruf memiliki batas waktu perkenalan antar kedua pihak selama 4-6 bulan, jika dalam rentang
                    waktu
                    tersebut tidak ada kecocokan maka bisa dibatalkan, tentunya dengan alasan-alasan yang masih bisa
                    dimengerti. Selain jauh dari php (pemberi harapan palsu), ta'aruf juga bisa menjauhkan kita dari
                    dosa ketika menjalani suatu hubungan seperti zina, dan masih banyak manfaat
                    lainnya.</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <h2>Yuk Ta'aruf!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <p>Buat yang sudah berusia matang dan yang sudah memiliki modal untuk menikah apa lagi buat kamu
                    yang
                    sedang cari pendamping hidup. Tunggu apa lagi, dari pada pacaran nanti malah jadi dosa. Mending
                    kita
                    ta'aruf aja!.
                    Ayo Ta'aruf!</p>
            </div>
        </div>
    </div>
    <!--akhir tentang-->

    <!--awal tata cara-->
    <section style="background-color: #e9ecef;">
        <div class="container" style="padding-top: 25px; padding-bottom: 25px; margin-top: 10px;">
            <div class="row">
                <div class="col text-center">
                    <h2>Cara Ta'aruf</h2>
                </div>
            </div>
            <div class="row text-center" style="padding-top: 19px;">
                <div class="col-md-4" style="padding: 17px;">
                    <div class="card" style="width: 18rem; height: 28rem;">
                        <img src="img/niat.jpg" class="card-img-top" alt="niat">
                        <div class="card-body">
                            <h5 class="card-title text-center">1. Niat</h5>
                            <p class="card-text text-center">Sebelum melakukan taaruf, seseorang harus memiliki niat
                                karena Allah.
                                Tidak boleh menjalankan taaruf apabila terdapat niat buruk di dalamnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding: 17px;">
                    <div class="card" style="width: 18rem; height: 28rem;">
                        <img src="img/pacar2-300x268.jpg" class="card-img-top rounded-circle" alt="niat">
                        <div class="card-body">
                            <h5 class="card-title text-center">2. Dilarang Berduaan</h5>
                            <p class="card-text text-center">Sebelum terjadi pernikahan, pasangan yang sedang
                                menjalani
                                taaruf dilarang berduaan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding: 17px;">
                    <div class="card" style="width: 18rem; height: 28rem;">
                        <img src="img/proposal-taaruf.jpg" class="card-img-top" alt="niat">
                        <div class="card-body">
                            <h5 class="card-title text-center">3. Bertukar Biodata</h5>
                            <p class="card-text text-center">Untuk saling mengenal satu sama lain harus melalui
                                pertukaran biodata tertulis yang kemudian ada pihak ketiga yang menjadi perantara
                                pertukaran biodata tersebut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding: 17px;">
                    <div class="card" style="width: 18rem; height: 28rem;">
                        <img src="img/bertemu.jpeg" class="card-img-top" alt="niat">
                        <div class="card-body">
                            <h5 class="card-title text-center">4. Nadzar untuk bertemu</h5>
                            <p class="card-text text-center">Setelah permohonan taaruf diterima, dapat dilanjutkan
                                dengan bernadzar yang dilakukan dengan cara datang ke rumah calon pengantin wanita
                                dan
                                menghadap langsung kepada orang tuanya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding: 17px;">
                    <div class="card" style="width: 18rem; height: 28rem;">
                        <img src="img/hadiah.jpg" class="card-img-top" alt="niat">
                        <div class="card-body">
                            <h5 class="card-title text-center">5. Boleh memberi hadiah</h5>
                            <p class="card-text text-center">Hadiah sebelum pernikahan hanya boleh dimiliki oleh
                                wanita
                                calon istri dan bukan keluarganya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--awal tata cara-->


    <!--awal footer-->
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="color:white;">
                    <p>&copy; copyright 2020 | build by <a href="https://www.instagram.com/ahmad.ilahana/">Ahmad Arif
                            Ilahana</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!--akhir footer-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="js/jquery-3.3.1.slim.min.js"> </script> -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/datetimepicker.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#btn_signin').on('click', function() {
                console.log('helo');
                $("#form_signin").removeAttr('hidden');
                $('#form_signup').attr('hidden', 'true');
            });
            $('#linksignup').on('click', function() {
                console.log('helo');
                $('#form_signin').attr('hidden', 'true');
                $("#form_signup").removeAttr('hidden');
            });
            $('#linksignin').on('click', function() {
                console.log('helo');
                $('#form_signup').attr('hidden', 'true');
                $("#form_signin").removeAttr('hidden');
            });
            $('.datepicker').datepicker({
                clearBtn: true,
                format: "yyyy-mm-dd",
                autoclose: true
            });
        });

        function showpassword(val) {
            if (val === 'show') {
                $('.inpass').attr('type', 'text');
                $('.showhide a i').attr('class', 'far fa-eye');
                $('.showhide').attr('onclick', "showpassword('hide')");
            } else {
                $('.inpass').attr('type', 'password');
                $('.showhide a i').attr('class', 'far fa-eye-slash');
                $('.showhide').attr('onclick', "showpassword('show')");
            }

        }
    </script>

</body>

</html>