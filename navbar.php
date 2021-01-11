<?php
if (isset($_GET['page'])) {
    $item = $_GET['page'];
}
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand aktif pr-5" style="border-right: 3px solid #dee2e6!important;" href="?page=home">Ta'aruf Yuk!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="nav-item">
            <li class="nav-item">
                <a class="nav-link" href="?page=usOnline"><i class="fas fa-users"> <span class="badge badge-light">9</span></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=halPencarian">Pencarian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=pesan">Pesan <span class="badge badge-light">9</span></a>
            </li>
            <li class="nav-item">
                <div class="btn-group align-items-center justify-content-between flex-wrap">
                    <div class="dropdown">
                        <button class="nav-link btn btn-link dropdown-toggle" role="button" id='aktivitasDR' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Aktivitas</button>
                        <div class="dropdown-menu" aria-labelledby="aktivitasDR">
                            <a href="?page=cv&menu=cv" class="dropdown-item">CV</a>
                            <a href="?page=favorit" class="dropdown-item <?= $retVal = ($item == 'favorit') ? 'active' : ' '; ?>">Favorit</a>
                            <a href="?page=blokir" class="dropdown-item <?= $retVal = ($item == 'blokir') ? 'active' : ' '; ?>">Daftar Blok</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav float-right">
            <li class="nav-item mr-3" id="akundrop">
                <div class="btn-group align-items-center justify-content-between flex-wrap">
                    <div class="dropdown show">
                        <button class="btn btn-link nav-link dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: auto;">
                            <i class="fas fa-user-alt mr-2"></i><?= $_SESSION['user']['nama'] ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item <?= $retVal = ($item == 'lihatprofil') ? 'active' : ' '; ?>" href="?page=lihatprofil&menu=true">Lihat profile</a>
                            <a class="dropdown-item <?= $retVal = ($item == 'pekerjaan') ? 'active' : ' '; ?>" href="?page=pekerjaan&menu=true">Pekerjaan</a>
                            <a class="dropdown-item <?= $retVal = ($item == 'pendidikan') ? 'active' : ' '; ?>" href="?page=pendidikan&menu=true">Pendidikan</a>
                            <a class="dropdown-item <?= $retVal = ($item == 'foto') ? 'active' : ' '; ?>" href="?page=foto&menu=true">Foto</a>
                            <a class="dropdown-item <?= $retVal = ($item == 'minat') ? 'active' : ' '; ?>" href="?page=minat&menu=true">Minat dan Kepribadian</a>
                            <a href="" data-toggle="modal" data-target="#gantiPassword" class="dropdown-item">Ganti Password</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <form action="signout.php" method="post">
                    <button class="btn btn-link nav-link" type="submit"><i class="fas fa-power-off"></i></button>
                </form>
            </li>
        </ul>
    </div>
</nav>
<div class="modal fade" id="gantiPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ganti Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body form-group">
                    <input type="text" name="passBaru" class="form-control mb-2" placeholder="Password Baru">
                    <input type="text" name="passKonfrim" class="form-control mb-2" placeholder="Konfirmasi Password Baru">
                    <input type="text" name="passLama" class="form-control" placeholder="Password Lama">
                </div>
                <div class="modal-footer">
                    <input type="submit" name="btn_ganti" class="btn btn-info" value="simpan">
                </div>
            </form>
            <?php
            if (isset($_POST['btn_ganti'])) {
                // echo $_SESSION['user']['pass'];
                $passBaru = $_POST['passBaru'];
                $passKonfrim = $_POST['passKonfrim'];
                $passLama = $_POST['passLama'];

                if ($passBaru == '' || $passKonfrim == '' || $passLama == '') {
                    echo "<script src='js/jquery.js'></script>";
                    echo "<script>$(document).ready(function () { $('#gantiPassword').modal('show')});</script>";
            ?>
                    <div class="alert alert-primary" role="alert">
                        Form masih ada yang kosong!
                    </div>

                <?php
                } else if ($passBaru !== $passKonfrim) {
                    echo "<script src='js/jquery.js'></script>";
                    echo "<script>$(document).ready(function () { $('#gantiPassword').modal('show')});</script>";
                ?>
                    <div class="alert alert-danger" role="alert">
                        Password Baru tidak sama dengan Konfirmasi!
                    </div>

                <?php
                } else if ($passLama !== $_SESSION['user']['pass']) {
                    echo "<script src='js/jquery.js'></script>";
                    echo "<script>$(document).ready(function () { $('#gantiPassword').modal('show')});</script>";
                ?>
                    <div class="alert alert-danger" role="alert">
                        Password Lama salah!
                    </div>

            <?php
                }else {
                    echo "<script>alert('Password berhasil dirubah.')</script>";
                }
            }
            ?>
        </div>
    </div>
</div>