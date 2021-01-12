<section class="container-fluid mb-5">
    <div class=" d-flex justify-content-between bg-info rounded mt-3 pr-3 pl-3">
        <h2 class="align-self-center text-white">Edit Minat dan Kepribadian</h2>
        <div class="d-flex">
            <a href="?page=minat&menu=true" class="btn btn-light btn-sm align-self-center">Edit Data</a>
        </div>
    </div>
    <?php
    require "database/read.php";
    $read = new Read;
    $dataR = $read->rMinat($_SESSION['user']['id_user']);
    ?>
    <form action="" method="post" class="container mt-4">
        <div class="row">
            <div class="row col-12 m-0 border-bottom border-dark">
                <h4 class="col-4 align-self-center mt-2 mb-2">Minat</h4>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Hobi</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name="hobi"><?= $dataR['hobi']?></textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Film Favorit</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name='film'><?= $dataR['film']?></textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Buku Favorit</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name='buku'><?= $dataR['buku']?></textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Musik Favorit</h6>
                <textarea class="form-control align-self-center mt-2 mb-2"name='musik'><?= $dataR['musik']?></textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Olahraga Favorit</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name="olahraga"><?= $dataR['olahraga']?></textarea>
            </div>
            <div class="row col-12 m-0 border-bottom border-dark">
                <h4 class="col-4 align-self-center mt-2 mb-2">Kepribadian</h4>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Apa yang biasa anda lakukan untuk bersenang-senang atau hiburan?</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name='jawab1'><?= $dataR['jawab1']?></textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Bagaimanan anda menggambarkan kepribadian anda?</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name='jawab2'><?= $dataR['jawab2']?></textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Ceritakan Secara singkat kehidapan atau kegiatan anda ketika didalam dan diluar rumah!</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name='jawab3'><?= $dataR['jawab3']?></textarea>
            </div>
        </div>
        <input type="submit" name='btn-simpan' value="Simpan" class="btn btn-success col-10 offset-1 mt-3 mb-3">
    </form>
    <?php
    if (isset($_POST['btn-simpan'])) {
        $id = $_SESSION['user']['id_user'];
        $hobi = $_POST['hobi'];
        $film = $_POST['film'];
        $buku = $_POST['buku'];
        $musik = $_POST['musik'];
        $olahraga = $_POST['olahraga'];
        $jawab1 = $_POST['jawab1'];
        $jawab2 = $_POST['jawab2'];
        $jawab3 = $_POST['jawab3'];


        require_once 'database/update.php';
        $update = new Update;
        $update->uMinat($id, $hobi, $film, $buku, $musik, $olahraga, $jawab1, $jawab2, $jawab3);
        echo "<script>window.location.replace('?page=minat&menu=true')</script>";
    }
    ?>
</section>