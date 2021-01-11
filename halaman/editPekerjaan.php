<section class="container-fluid bg-light">
    <div class="d-flex justify-content-between bg-info rounded mt-3 pr-3 pl-3">
        <h2 class="align-self-center text-white">Pekerjaan</h2>
        <div class="d-flex">
            <a href="?page=pekerjaan&menu=true" class="btn btn-light btn-sm align-self-center">Pekerjaan</a>
        </div>
    </div>
    <form action="" method="post">
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'database/read.php';
                $read = new Read;
                $dataR = $read->rPekerjaan($_SESSION['user']['id_user']);
                foreach ($dataR as $key => $value) {

                ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <input type="text" name="id[]" hidden value="<?= $value['id_pekerjaan'] ?>">
                        <td><input type="text" name="nm_perusahaan[]" id="" class="form-control" value="<?= $value['nm_perusahaan'] ?>"></td>
                        <td><input type="text" name="jabatan[]" id="" class="form-control" value="<?= $value['jabatan'] ?>"></td>
                        <td><input type="text" name="periode[]" id="" class="form-control" value="<?= $value['periode'] ?>"></td>
                        <td>
                            <button type="submit" name="hapus" class="btn btn-danger" value="<?= $value['id_pekerjaan'] ?>" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="far fa-times-circle"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="d-flex flex-row-reverse pr-5">
            <button type="submit" name="simpan" class="btn btn-info w-25" value="simpan">Simpan</button>
        </div>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
        // echo 'simpan';
        $id = $_SESSION['user']['id_user'];
        $id_pekerjaan=$_POST['id'];
        $nm_perusahaan = $_POST['nm_perusahaan'];
        $jabatan = $_POST['jabatan'];
        $periode = $_POST['periode'];

        require_once 'database/update.php';
        $update = new Update;
        $update->uPekerjaan($id_pekerjaan, $id, $nm_perusahaan, $jabatan, $periode);
        echo "<script>window.location.replace('?page=pekerjaan&menu=true')</script>";

    } else if(isset($_POST['hapus'])) {
        // echo 'hapus';
        $id=$_SESSION['user']['id_user'];
        $id_pekerjaan=$_POST['hapus'];
        require_once 'database/delete.php';
        $delete = new Delete;
        $delete->dPekerjaan($id_pekerjaan,$id);
        echo "<script>window.location.replace('?page=editpekerjaan&menu=true')</script>";
    }
    
    ?>
</section>