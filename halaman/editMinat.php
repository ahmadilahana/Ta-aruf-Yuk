<section class="container-fluid mb-5">
    <div class=" d-flex justify-content-between bg-info rounded mt-3 pr-3 pl-3">
        <h2 class="align-self-center text-white">Edit Minat dan Kepribadian</h2>
        <div class="d-flex">
            <a href="?page=minat&menu=true" class="btn btn-light btn-sm align-self-center">Edit Data</a>
        </div>
    </div>
    <form action="" method="post" class="container mt-4">
        <div class="row">
            <div class="row col-12 m-0 border-bottom border-dark">
                <h4 class="col-4 align-self-center mt-2 mb-2">Minat</h4>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Hobi</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name="hobi">Main game, mendengarkan musik dan menonton film</textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Film Favorit</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name='film'>Anime One Piece</textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Buku Favorit</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name='buku'>Noverl Negeri 5 Menara</textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Musik Favorit</h6>
                <textarea class="form-control align-self-center mt-2 mb-2"name='musik'>One Ok Rock</textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Olahraga Favorit</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name="olahraga">Bulu tangkir dan renang</textarea>
            </div>
            <div class="row col-12 m-0 border-bottom border-dark">
                <h4 class="col-4 align-self-center mt-2 mb-2">Kepribadian</h4>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Apa yang biasa anda lakukan untuk bersenang-senang atau hiburan?</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name='jawab1'>Berkumpul bersama teman untuk saling berbagi cerita sehari atau sekedar berkumpul untuk bermain bersama.</textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Bagaimanan anda menggambarkan kepribadian anda?</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name='jawab2'>Saya suka sekali bermain bersama teman dan tidak memilih-milih teman dalam bermain, saya suka membantu orang yang susah ketika memiliki lebih rizki terkadang ketika saya sedang susah saya juga masih membantu.</textarea>
            </div>
            <div class="col-6 m-0 border-bottom border-info">
                <h6 class="align-self-center mt-2 mb-2">Ceritakan Secara singkat kehidapan atau kegiatan anda ketika didalam dan diluar rumah!</h6>
                <textarea class="form-control align-self-center mt-2 mb-2" name='jawab3'>Ketika saya didalam rumah saya terkadang membantu orang tua dan terkadang sering untuk beres-beres rumah. Kalau saya diluar rumah saya biasa berkumpul bersama teman dan berkumpul komunitas hidroponik untuk berbagi ilmu pertanian seputar hidroponik.</textarea>
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