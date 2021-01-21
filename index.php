<?php
session_start();
if (empty($_SESSION['user'])) {
    header('location:signin.php');
} else {
    // print_r($_SESSION['user']);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="icon/css/all.css">
        <link rel="stylesheet" href="css/datetimepicker.css">
        <title>Ta'aruf Yuk!</title>

        <style>
            .aktif {
                font-weight: 700 !important;
            }
        </style>
    </head>

    <body>

        <!--NAVBAR-->
        <?php
        include 'navbar.php';

        ?>

        <!--MENU-->
        <div class="potition-absolute" id="menu-nav" style="margin-top: 56px; background-color: #D3D3D3;">

            <?php
            include 'menu.php';
            ?>
        </div>
        <!--HALAMAN-->
        <section id="body">
            <?php
            error_reporting(0);
            if (empty($_GET['page'])) {
                include 'halaman/home.php';
            } elseif ($_GET['page'] == 'lihatprofil') {
                include 'halaman/lihatprofil.php';
            } elseif ($_GET['page'] == 'editprofil') {
                include 'halaman/editprofil.php';
            } elseif ($_GET['page'] == 'lihatprofile-lain') {
                include 'halaman/lihatprofil-lain.php';
            } elseif ($_GET['page'] == 'foto') {
                include 'halaman/foto.php';
            } elseif ($_GET['page'] == 'foto-lain') {
                include 'halaman/foto-lain.php';
            } elseif ($_GET['page'] == 'editfoto') {
                include 'halaman/editFoto.php';
            } elseif ($_GET['page'] == 'minat') {
                include 'halaman/minat.php';
            } elseif ($_GET['page'] == 'minat-lain') {
                include 'halaman/minat-lain.php';
            } elseif ($_GET['page'] == 'editminat') {
                include 'halaman/editMinat.php';
            } elseif ($_GET['page'] == 'pekerjaan') {
                include 'halaman/mPekerjaan.php';
            } elseif ($_GET['page'] == 'pendidikan') {
                include 'halaman/mPendidikan.php';
            } elseif ($_GET['page'] == 'pekerjaan-lain') {
                include 'halaman/mPekerjaan-lain.php';
            } elseif ($_GET['page'] == 'pendidikan-lain') {
                include 'halaman/mPendidikan-lain.php';
            } elseif ($_GET['page'] == 'editpekerjaan') {
                include 'halaman/editPekerjaan.php';
            } elseif ($_GET['page'] == 'editpendidikan') {
                include 'halaman/editPendidikan.php';
            } elseif ($_GET['page'] == 'tambahpekerjaan') {
                include 'halaman/tambahPekerjaan.php';
            } elseif ($_GET['page'] == 'tambahpendidikan') {
                include 'halaman/tambahPendidikan.php';
            } elseif ($_GET['page'] == 'home') {
                include 'halaman/home.php';
            } elseif ($_GET['page'] == 'usOnline') {
                include 'halaman/halOnline.php';
            } elseif ($_GET['page'] == 'halPencarian') {
                include 'halaman/halPencarian.php';
            } elseif ($_GET['page'] == 'pesan') {
                include 'halaman/halPesan.php';
            } elseif ($_GET['page'] == 'favorit') {
                include 'halaman/halFavorit.php';
            } elseif ($_GET['page'] == 'blokir') {
                include 'halaman/halBlokir.php';
            } elseif ($_GET['page'] == 'cv') {
                include 'halaman/halCVmasuk.php';
            } elseif ($_GET['page'] == 'cv-kirim') {
                include 'halaman/halCVkirim.php';
            } elseif ($_GET['page'] == 'cv-ditolak') {
                include 'halaman/halCVditolak.php';
            } elseif ($_GET['page'] == 'cv-diterima') {
                include 'halaman/halCVditerima.php';
            }
            ?>
        </section>
        <!--FOOTER-->
        <footer class="bg-dark fixed-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" style="color:white;">
                        <p>&copy; copyright 2020 | build by <a style="color: white;" href="https://www.instagram.com/ahmad.ilahana/">Ahmad Arif
                                Ilahana</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <!--JAVASCRIPT-->
        <script src="js/jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/datetimepicker.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>
    </body>

    </html>
<?php }
?>