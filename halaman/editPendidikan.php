<section class="container-fluid bg-light mb-5">
    <div class=" d-flex justify-content-between bg-info rounded mt-3 pr-3 pl-3">
        <h2 class="align-self-center text-white">Pendidikan</h2>
        <div class="d-flex">
            <a href="?page=pendidikan&menu=true" class="btn btn-light btn-sm align-self-center">Pendidikan</a>
        </div>
    </div>
    <form action="" method="post">
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Sekolah/Perguruan</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tahun Ajaran</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'database/read.php';
                $read = new Read;
                $dataR = $read->rPendidikan($_SESSION['user']['id_user']);
                foreach ($dataR as $key => $value) {

                ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <input type="text" name="id[]" hidden value="<?= $value['id_pendidikan'] ?>">
                        <td><input type="text" name="nm_sekolah[]" id="" class="form-control" value="<?= $value['nm_sekolah'] ?>"></td>
                        <td><input type="text" name="jurusan[]" id="" class="form-control" value="<?= $value['jurusan'] ?>"></td>
                        <td><input type="text" name="tahun[]" id="" class="form-control" value="<?= $value['th_ajaran'] ?>"></td>
                        <td>
                            <button type="submit" name="hapus" class="btn btn-danger" value="<?= $value['id_pendidikan'] ?>" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="far fa-times-circle"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="d-flex flex-row-reverse pr-5">
            <button type="submit" name="simpan" class="btn btn-info w-25" value="haloo">Simpan</button>
        </div>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
        // echo 'simpan';
        $id = $_SESSION['user']['id_user'];
        $id_pend=$_POST['id'];
        $nm_sekolah = $_POST['nm_sekolah'];
        $jurusan = $_POST['jurusan'];
        $th_ajaran = $_POST['tahun'];

        require_once 'database/update.php';
        $update = new Update;
        $update->uPendidikan($id_pend,$id,$nm_sekolah,$jurusan,$th_ajaran);
        echo "<script>window.location.replace('?page=pendidikan&menu=true')</script>";

    } else if(isset($_POST['hapus'])) {
        // echo 'hapus';
        $id=$_SESSION['user']['id_user'];
        $id_pend=$_POST['hapus'];
        require_once 'database/delete.php';
        $delete = new Delete;
        $delete->dPendidikan($id_pend,$id);
        echo "<script>window.location.replace('?page=editpendidikan&menu=true')</script>";
    }
    
    ?>
</section>