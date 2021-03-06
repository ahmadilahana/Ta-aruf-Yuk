<style>
    .shadow {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    }
</style>

<section class="container-fluid">
    <div class=" d-flex justify-content-between bg-info rounded pr-3 pl-3" style="margin-top: 70px;">
        <h2 class="align-self-center text-white">User Online</h2>
    </div>
</section>
<section class="container-fluid" style="margin-top: 10px;">
    <div class=" d-flex justify-content-between bg-light rounded pr-3 pl-3 mt-2">
        <input type="text" class="form-control m-2" id="th_lahir" placeholder="Tahun Kelahiran">
        <input type="text" class="form-control m-2" id="kota" placeholder="Kota Tinggal">
        <input type="button" data-baris="12" id="btn-cari" class="form-control m-2 w-25 btn btn-success" value="Cari">
    </div>
</section>
<div class="container mb-5">
    <div class="row mt-4 p-0" id="tabel-user">
        <?php

        require 'database/read.php';
        $read = new Read;
        $dataR = $read->rUser($_SESSION['user']['id_user']);
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
    </div>
</div>