<style>
    .nav-link {
        color: black;
    }
</style>
<?php if (isset($_GET['menu'])) {
    $akun = $_GET['page'];
    if ($_GET['menu'] == 'lain') { ?>

        <ul class="nav justify-content-center menu">
            <li class="nav-item">
                <a class="nav-link <?= $retVal = ($akun == 'lihatprofile-lain') ? 'aktif active' : ' '; ?>" href="?page=lihatprofile-lain&menu=lain">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $retVal = ($akun == 'foto-lain') ? 'aktif active' : ' '; ?>" href="?page=foto-lain&menu=lain">Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $retVal = ($akun == 'pendidikan-lain') ? 'aktif active' : ' '; ?>" href="?page=pendidikan-lain&menu=lain">Pendidikan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $retVal = ($akun == 'pekerjaan-lain') ? 'aktif active' : ' '; ?>" href="?page=pekerjaan-lain&menu=lain">Pekerjaan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $retVal = ($akun == 'minat-lain') ? 'aktif active' : ' '; ?>" href="?page=minat-lain&menu=lain">Minat dan Kepribadian</a>
            </li>
        </ul>

        <?php
        }else if ($_GET['menu'] == 'cv') { ?>

            <ul class="nav justify-content-center menu">
                <li class="nav-item">
                    <a class="nav-link <?= $retVal = ($akun == 'cv') ? 'aktif active' : ' '; ?>" href="?page=cv&menu=cv">CV Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $retVal = ($akun == 'cv-kirim') ? 'aktif active' : ' '; ?>" href="?page=cv-kirim&menu=cv">CV Terkirim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $retVal = ($akun == 'cv-ditolak') ? 'aktif active' : ' '; ?>" href="?page=cv-ditolak&menu=cv">CV Ditolak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $retVal = ($akun == 'cv-diterima') ? 'aktif active' : ' '; ?>" href="?page=cv-diterima&menu=cv">CV Diterima</a>
                </li>
            </ul>

        <?php

        }
    else {
        ?>
        <ul class="nav justify-content-center menu">
            <li class="nav-item">
                <a class="nav-link <?= $retVal = ($akun == 'lihatprofil' || $akun == 'editprofil') ? 'aktif active' : ' '; ?>" href="?page=lihatprofil&menu=true">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $retVal = ($akun == 'foto' || $akun == 'editfoto') ? 'aktif active' : ' '; ?>" href="?page=foto&menu=true">Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $retVal = ($akun == 'pendidikan' || $akun == 'editpendidikan') ? 'aktif active' : ' '; ?>" href="?page=pendidikan&menu=true">Pendidikan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $retVal = ($akun == 'pekerjaan' || $akun == 'editpekerjaan') ? 'aktif active' : ' '; ?>" href="?page=pekerjaan&menu=true">Pekerjaan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $retVal = ($akun =='minat' || $akun == 'editminat') ? 'aktif active' : ' '; ?>" href="?page=minat&menu=true">Minat dan Kepribadian</a>
            </li>
        </ul>
<?php }
} ?>