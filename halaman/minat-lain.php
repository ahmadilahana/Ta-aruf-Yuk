<section class="container-fluid mb-5">
    <div class=" d-flex justify-content-between bg-info rounded mt-3 pr-3 pl-3">
        <h2 class="align-self-center text-white">Minat dan Kepribadian</h2>
        <div class="d-flex">
            <a href="?page=editminat&menu=true" class="btn btn-light btn-sm align-self-center">Edit Data</a>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <?php
            require_once 'database/read.php';
            $read = new Read;
            $dataR = $read->rMinat($_GET['id']);
            ?>
            <div class="row col-12 m-0 border-bottom border-dark">
                <h4 class="col-4 align-self-center mt-2 mb-2 font-weight-bold">Minat</h4>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2 font-weight-bold">Hobi</h6>
                <p class="align-self-center mt-2 mb-2"><?= $dataR['hobi'] ?></p>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2 font-weight-bold">Film Favorit</h6>
                <p class="align-self-center mt-2 mb-2"><?= $dataR['film'] ?></p>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2 font-weight-bold">Buku Favorit</h6>
                <p class="align-self-center mt-2 mb-2"><?= $dataR['buku'] ?></p>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2 font-weight-bold">Musik Favorit</h6>
                <p class="align-self-center mt-2 mb-2"><?= $dataR['musik'] ?></p>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2 font-weight-bold">Olahraga Favorit</h6>
                <p class="align-self-center mt-2 mb-2"><?= $dataR['olahraga'] ?></p>
            </div>
            <div class="row col-12 m-0 border-bottom border-dark">
                <h4 class="col-4 align-self-center mt-2 mb-2 font-weight-bold">Kepribadian</h4>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2 font-weight-bold">Apa yang biasa anda lakukan untuk bersenang-senang atau hiburan?</h6>
                <p class="align-self-center mt-2 mb-2"><?= $dataR['jawab1'] ?></p>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2 font-weight-bold">Bagaimanan anda menggambarkan kepribadian anda?</h6>
                <p class="align-self-center mt-2 mb-2"><?= $dataR['jawab2'] ?></p>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2 font-weight-bold">Ceritakan Secara singkat kehidapan atau kegiatan anda ketika didalam dan diluar rumah!</h6>
                <p class="align-self-center mt-2 mb-2"><?= $dataR['jawab3'] ?></p>
            </div>
        </div>
    </div>
</section>