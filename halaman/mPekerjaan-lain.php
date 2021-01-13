<section class="container-fluid bg-light">
    <div class="d-flex justify-content-between bg-info rounded mt-3 pr-3 pl-3">
        <h2 class="align-self-center text-white">Pekerjaan</h2>
    </div>
    <table class="table table-striped mt-4">
        <?php
        require_once 'database/read.php';
        $read = new Read;
        $dataR = $read->rPekerjaan($_GET['id']);
        // print_r($dataR);
        ?>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Periode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dataR as $key => $value) {
                // print_r($key);
            ?>
                <tr>
                    <th scope="row"><?= $key + 1 ?></th>
                    <td><?= $value['nm_perusahaan'] ?></td>
                    <td><?= $value['jabatan'] ?></td>
                    <td><?= $value['periode'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>