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
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="tabel-tambah">
                <tr id="no-col1">
                    <td><input type="text" name="nm_perusahaan[]" id="" class="form-control" value="" autocomplete="off"></td>
                    <td><input type="text" name="jabatan[]" id="" class="form-control" value="" autocomplete="off"></td>
                    <td><input type="text" name="periode[]" id="" class="form-control" value="" autocomplete="off"></td>
                    <td>
                        <button type="button" name="hapus" onclick="hapuscolom(this.value)" class="btn btn-danger" value="1" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="far fa-times-circle"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex flex-row-reverse pr-5">
            <button type="submit" name="simpan" class="btn btn-info w-25" value="simpan">Simpan</button>
            <button type="button" name="tambah" id="btn-tambah" class="btn btn-info w-25 mr-2" value="1"><i class="fas fa-plus"></i> Kolom</i></button>
        </div>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
        // echo 'simpan data';

        $id = $_SESSION['user']['id_user'];
        $nm_perusahaan = $_POST['nm_perusahaan'];
        $jabatan = $_POST['jabatan'];
        $periode = $_POST['periode'];
        // echo $id;

        require_once 'database/insert.php';
        $insert = new Insert;
        $insert->iPekerjaan($id,$nm_perusahaan,$jabatan,$periode);
        // var_dump($nm_perusahaan);
        echo "<script>window.location.replace('?page=pekerjaan&menu=true')</script>";
    }

    ?>
</section>
<script src="js/jquery.js"></script>
<script>
    $(document).ready(function() {
        $('#btn-tambah').on('click', function() {
            no = parseInt($('#btn-tambah').val());
            no = no + 1;
            console.log(no);
            $('#btn-tambah').val(no);
            $('#tabel-tambah').append(`
            <tr id="no-col` + no + `">
                    <td><input type="text" name="nm_perusahaan[]" id="" class="form-control" value="" autocomplete="off"></td>
                    <td><input type="text" name="jabatan[]" id="" class="form-control" value="" autocomplete="off"></td>
                    <td><input type="text" name="periode[]" id="" class="form-control" value="" autocomplete="off"></td>
                    <td>
                        <button type="button" name="hapus" onclick="hapuscolom(this.value)" class="btn btn-danger" value="` + no + `" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="far fa-times-circle"></i></button>
                    </td>
                </tr>
        `);
        });
    });

    function hapuscolom(clik) {
        console.log(clik);
        $('#no-col' + clik).remove();
    }
</script>