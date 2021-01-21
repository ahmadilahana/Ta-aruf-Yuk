<?php
$tahun = $_POST['th'];
$kota = $_POST['kt'];
require '../database/read.php';
$read = new Read;
$dataR = $read->rUserFilter($_SESSION['user']['id_user'], $kota, $tahun);
// print_r($dataR);
foreach ($dataR as $key => $user) {


?>
    <div class="col-auto border rounded mr-2 mb-2 p-0 shadow filter-box" style="height: 300px; width: 174px;">
        <div class="d-flex text-center h-50 w-100 border">
            <a href="?page=lihatprofile-lain&menu=lain">
                <img src="img/bertemu.jpeg" class="img-thumbnail" alt="">
            </a>
        </div>
        <div class="pr-2 pt-2 pl-2 w-100 filter-list" style="height: 30%;">
            <a href="?page=lihatprofile-lain&menu=lain&id=<?= $user['id_user'] ?>">
                <h5 class="m-0 text-dark text-truncate" data-val="<?= $user['nama'] ?>" style="font-size: 20px;"><i class="fas fa-circle text-success" style="font-size: 15px;"></i> <?= $user['nama'] ?></h5>
                <p class="m-0 text-dark" style="font-size: 14px;"><?= $user['kota_skr'] ?>, <?= $user['provinsi_skr'] ?> | <?= $user['tgl_lahir'] ?></p>
            </a>
        </div>
        <div class="pr-2 pt-2 pl-2 text-center" style="height: 15%; width:100%">
            <a type="button" class="btn btn-link p-1">
                <h3 class=" text-success"><i class="fas fa-star"></i></h3>
            </a>
            <a type="button" class="btn btn-link p-1">
                <h3><i class="far fa-image"></i></h3>
            </a>
            <a type="button" class="btn btn-link p-1">
                <h3><i class="fas fa-comment"></i></h3>
            </a>
        </div>
    </div>
<?php

}
?>