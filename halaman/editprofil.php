<section class="container-fluid bg-light">
    <div class="d-flex justify-content-between bg-info rounded mt-3 pr-3 pl-3">
        <h2 class="align-self-center text-white">Edit Profile</h2>
        <div class="d-flex">
            <a href="?page=lihatprofil&menu=true" class="btn btn-light btn-sm align-self-center">Lihat Profile</a>
        </div>
    </div>
</section>
<div class="container-fluid mb-5">
    <form action="" method="post">
        <?php
        require 'database/read.php';
        $read = new Read;
        $dataR = $read->rProfile($_SESSION['user']['id_user']);
        // $dataR = $dataR[0];
        ?>
        <div class="row">
            <!--PAS FOTO DAN KTP-->
            <div class="col-3 pt-2 border">
                <h4 for="" class="font-weight-bold">Pas Foto</h4>
                <hr>
                <div class="form-group">
                    <center>
                        <style>
                            .fileUpload {
                                position: relative;
                                overflow: hidden;
                            }

                            .upload {
                                position: absolute;
                                top: 0;
                                right: 0;
                                margin: 0;
                                padding: 0;
                                font-size: 20px;
                                cursor: pointer;
                                opacity: 0;
                                /* filter: alpha(opacity=0); */
                            }
                        </style>
                        <img src="img/profile1.png" alt="" height="200px" width="auto">
                        <div class="btn btn-info mt-3 fileUpload" style="width: 75%;">
                            <span for="" class="">Upload Foto</span>
                            <input type="file" class="upload" id="customFileLang">
                        </div>
                    </center>
                </div>
                <hr>
                <h4 for="" class="font-weight-bold">Foto KTP</h4>
                <hr>
                <div class="form-group">
                    <center>
                        <img src="img/profile1.png" alt="" height="200px" width="auto">
                        <div class="btn btn-info mt-3 fileUpload" style="width: 75%;">
                            <span for="" class="">Upload Foto</span>
                            <input type="file" name="ft_ktp" class="upload" id="customFileLang">
                        </div>
                    </center>
                </div>
            </div>
            <!--DATA DIRI-->
            <div class="col-5 pt-2 border">
                <h4 for="" class="font-weight-bold">Data Diri</h4>
                <hr>
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lngkp" value="<?= $dataR['nama'] ?>" id="">
                </div>
                <div class="form-group form-row">
                    <div class="col">
                        <label for="">Agama</label>
                        <input type="text" class="form-control" value="Islam" readonly name="" id="">
                    </div>
                    <div class=" col">
                        <label for="">Jenis Kelamin</label>
                        <div class="form-row btn-group-toggle ml-2" data-toggle="buttons">
                            <label class="btn btn-light col-auto mr-2 <?= ($dataR['jns_kel'] == 'L') ? 'active' : ''; ?>" style="width: 45px;">
                                <input type="radio" name="jns_kel" value="L" id="kl1" autocomplete="off" <?= ($dataR['jns_kel'] == 'L') ? 'Checked' : ''; ?>><i class="fas fa-male"></i>
                            </label>
                            <label class="btn btn-light col-auto <?= ($dataR['jns_kel'] == 'P') ? 'active' : ''; ?>" style="width: 45px;">
                                <input type="radio" name="jns_kel" value="P" id="kl2" autocomplete="off" <?= ($dataR['jns_kel'] == 'P') ? 'Checked' : ''; ?>><i class="fas fa-female"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control col-auto" placeholder="Tempat Lahir" value="<?= $dataR['tmp_lahir'] ?>" name="tmp_lahir" id="">
                    </div>
                    <div class="col">
                        <label for="">Tanggal Lahir</label>
                        <div class="datepicker date input-group">
                            <input type="text" name="tgl_lahir" value="<?= $dataR['tgl_lahir'] ?>" class='form-control col-auto' autocomplete="off" placeholder="Tanggal Lahir" id="">
                            <div class=" input-group-append"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Alamat Sekarang</label>
                    <textarea type="text" class="form-control" placeholder="Alamat" name="alamat_skr" id=""><?= $dataR['alamat_skr'] ?></textarea>
                    <div class="form-group form-row">
                        <div class="col">
                            <label for="">Kota</label>
                            <input type="text" class="form-control" placeholder="Kota" name="kota_skr" value="<?= $dataR['kota_skr'] ?>" id="">
                        </div>
                        <div class="col">
                            <label for="">Provinsi</label>
                            <input type="text" name="prov_skr" class='form-control col-auto' value="<?= $dataR['provinsi_skr'] ?>" placeholder="Provinsi" id="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Alamat Asal</label>
                    <textarea type="text" class="form-control" placeholder="Alamat" name="alamat_asl" id=""><?= $dataR['alamat_asl'] ?></textarea>
                    <div class="form-group form-row">
                        <div class="col">
                            <label for="">Kota</label>
                            <input type="text" class="form-control" placeholder="Kota" name="kota_asl" value="<?= $dataR['kota_asl'] ?>" id="">
                        </div>
                        <div class="col">
                            <label for="">Provinsi</label>
                            <input type="text" name="prov_asl" class='form-control col-auto' value="<?= $dataR['prov_asl'] ?>" placeholder="Provinsi" id="">
                        </div>
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col">
                        <label for="">Suku</label>
                        <input type="text" class="form-control" placeholder="Suku" name="suku" value="<?= $dataR['suku'] ?>" id="">
                    </div>
                    <div class="col">
                        <label for="">Gol. Darah</label>
                        <select type="text" name="gol_darah" class='form-control col-auto' placeholder="Golongan Darah" id="">
                            <option value="">-Gol. Darah-</option>
                            <option value="A" <?= ($dataR['gol_darah'] == 'A') ? 'selected' : ' '; ?>>A</option>
                            <option value="B" <?= ($dataR['gol_darah'] == 'B') ? 'selected' : ' '; ?>>B</option>
                            <option value="AB" <?= ($dataR['gol_darah'] == 'AB') ? 'selected' : ' '; ?>>AB</option>
                            <option value="O" <?= ($dataR['gol_darah'] == 'O') ? 'selected' : ' '; ?>>O</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col-12">
                        <label for="">Status Pernikahan</label>
                        <select name="stat_nikah" class="form-control">
                            <option value="">-Pilihan-</option>
                            <option value="perjaka" <?= ($dataR['stat_nikah'] == 'perjaka') ? 'selected' : ' '; ?>>Perjaka</option>
                            <option value="gadis" <?= ($dataR['stat_nikah'] == 'gadis') ? 'selected' : ' '; ?>>Gadis</option>
                            <option value="duda" <?= ($dataR['stat_nikah'] == 'duda') ? 'selected' : ' '; ?>>Duda</option>
                            <option value="janda" <?= ($dataR['stat_nikah'] == 'janda') ? 'selected' : ' '; ?>>Janda</option>
                        </select>
                    </div>
                    <div class="col-12 mt-3 border border-info rounded">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Keterangan</label>
                                <select class="form-control" name="ket_nikah" id="">
                                    <option value="">-Pilih-</option>
                                    <option value="cerai" <?= ($dataR['ket_nikah'] == 'cerai') ? 'selected' : ' '; ?>>Cerai</option>
                                    <option value="meninggal" <?= ($dataR['ket_nikah'] == 'meninggal') ? 'selected' : ' '; ?>>Meninggal</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Upload File</label>
                                <div class=" custom-file">
                                    <input type="file" value="" name="lam_surat" class=" custom-file-input">
                                    <label class=" custom-file-label text-truncate">File Harus PDF</label>
                                </div>
                            </div>
                            <small id="" class="form-text text-muted col-12">
                                Catatan : UPLOAD FILE untuk melampirkan surat keterangan cerai atau meninggal.
                            </small>
                            <small id="" class="form-text text-muted col-12">
                                *) Wajib diisi bagi yang sudah pernah menikah.
                            </small>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Nama Ayah</label>
                    <input type="text" class="form-control" value="<?= $dataR['nm_ayah'] ?>" placeholder="Nama Ayah" name="nm_ayah" id="">
                </div>
                <div class="form-group">
                    <label for="">Nama Ibu</label>
                    <input type="text" class="form-control" value="<?= $dataR['nm_ibu'] ?>" placeholder="Nama Ibu" name="nm_ibu" id="">
                </div>
            </div>
            <!--GAMBARAN DIRI-->
            <div class="col-4 pt-2 border">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" id="" value="<?= $dataR['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Nomor WA/Hp</label>
                    <input type="text" class="form-control" placeholder="Nomor WA/Hp" value="<?= $dataR['no_hp'] ?>" name="no_hp" id="">
                </div>
                <div class="form-group">
                    <label for="">Social Media</label>
                    <textarea type="text" class="form-control" placeholder="Social Media" name="sosmed" id=""><?= $dataR['sosmed'] ?></textarea>
                    <small id="" class="form-text text-muted">
                        Contoh : "Facebook = ContohFacebook".
                    </small>
                </div>
                <h4 class="font--weight-bold" for="">Gambaran Diri</h4>
                <hr>
                <div class="form-group">
                    <label for="">Bentuk Fisik</label>
                    <select class="form-control" name="b_fisik" id="">
                        <option value="">-Bentuk Fisik-</option>
                        <option value="normal" <?= ($dataR['b_fisik'] == 'normal') ? 'selected' : ' '; ?>>Normal</option>
                        <option value="kurus" <?= ($dataR['b_fisik'] == 'kurus') ? 'selected' : ' '; ?>>Kurus</option>
                        <option value="gemuk" <?= ($dataR['b_fisik'] == 'gemuk') ? 'selected' : ' '; ?>>Gemuk</option>
                        <option value="langsing" <?= ($dataR['b_fisik'] == 'langsing') ? 'selected' : ' '; ?>>Langsing</option>
                        <option value="atletis" <?= ($dataR['b_fisik'] == 'altetis') ? 'selected' : ' '; ?>>Atletis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Warna Kulit</label>
                    <input type="text" value="<?= $dataR['w_kulit'] ?>" class="form-control" placeholder="Warna Kulit" name="w_kulit" id="">
                </div>
                <div class="form-group">
                    <label for="">Tipe Rambut</label>
                    <input type="text" class="form-control" value="<?= $dataR['t_rambut'] ?>" placeholder="Tipe Rambut" name="t_rambut" id="">
                </div>
                <div class="form-group">
                    <label for="">Warna Rambut</label>
                    <input type="text" class="form-control" placeholder="Warna Rambut" value="<?= $dataR['w_rambut'] ?>" name="w_rambut" id="">
                </div>
                <div class="form-group">
                    <label for="">Warna Mata</label>
                    <input type="text" class="form-control" value="<?= $dataR['w_mata'] ?>" placeholder="Warna Mata" name="w_mata" id="">
                </div>
                <div class="form-group">
                    <label for="">Cacat Fisik</label>
                    <input type="text" class="form-control" value="<?= $dataR['c_fisik'] ?>" placeholder="Cacat Fisik" name="c_fisik" id="">
                </div>
                <div class="form-group form-row">
                    <div class="col">
                        <label for="">Tinggi Badan</label>
                        <input type="text" class="form-control col-auto" value="<?= $dataR['t_badan'] ?>" placeholder="Tinggi Badan" name="t_badan" id="">
                    </div>
                    <div class="col">
                        <label for="">Berat Badan</label>
                        <input type="text" name="b_badan" class='form-control col-auto' value="<?= $dataR['b_badan'] ?>" placeholder="Berat Badan" id="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Seni Tubuh</label>
                    <select class="form-control" name="s_tubuh" id="">
                        <option value="">-Seni Tubuh-</option>
                        <option value="tidak ada" <?= ($dataR['s_tubuh'] == 'tidak ada') ? 'selected' : ' '; ?>>Tdiak Ada</option>
                        <option value="anting" <?= ($dataR['s_tubuh'] == 'anting') ? 'selected' : ' '; ?>>Anting</option>
                        <option value="tindik" <?= ($dataR['s_tubuh'] == 'tindik') ? 'selected' : ' '; ?>>Tindik</option>
                        <option value="tato" <?= ($dataR['s_tubuh'] == 'tato') ? 'selected' : ' '; ?>>Tato</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="Simpan" name="simpan" class="btn btn-success col-10 offset-1 mt-3 mb-3">
        </div>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
        // echo 'simpan';
        $id = $_SESSION['user']['id_user'];
        $jns_kel = $_POST['jns_kel'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $almt_skr = $_POST['alamat_skr'];
        $kota_skr = $_POST['kota_skr'];
        $prov_skr = $_POST['prov_skr'];
        $almt_asl = $_POST['alamat_asl'];
        $kota_asl = $_POST['kota_asl'];
        $prov_asl = $_POST['prov_asl'];
        $suku = $_POST['suku'];
        $gol_darah = $_POST['gol_darah'];
        $nm_ayah = $_POST['nm_ayah'];
        $nm_ibu = $_POST['nm_ibu'];
        $stat_nikah = $_POST['stat_nikah'];
        $lam_surat = $_POST['lam_surat'];
        $foto_ktp = $_POST['ft_ktp'];
        $no_hp = $_POST['no_hp'];
        $sosmed = $_POST['sosmed'];

        $b_fisik = $_POST['b_fisik'];
        $w_kulit = $_POST['w_kulit'];
        $t_rambut = $_POST['t_rambut'];
        $w_rambut = $_POST['w_rambut'];
        $w_mata = $_POST['w_mata'];
        $c_fisik = $_POST['c_fisik'];
        $t_badan = $_POST['t_badan'];
        $b_badan = $_POST['b_badan'];
        $s_tubuh = $_POST['s_tubuh'];

        require_once 'database/update.php';
        $update = new Update;
        $update->uBiodata($id, $jns_kel, $tmp_lahir, $tgl_lahir, $almt_skr, $kota_skr, $prov_skr, $almt_asl, $kota_asl, $prov_asl, $suku, $gol_darah, $nm_ayah, $nm_ibu, $stat_nikah, $lam_surat, $foto_ktp, $no_hp, $sosmed);
        $update->uGamDiri($id, $b_fisik, $w_kulit, $t_rambut, $w_rambut, $w_mata, $c_fisik, $t_badan, $b_badan, $s_tubuh);
        echo "<script>window.location.replace('?page=editprofil&menu=true')</script>";
    }
    ?>
</div>
<script src="js/jquery.js"></script>
<script src="js/datetimepicker.js"></script>
<script>
    $('.custom-file-input').on('change', function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings('.custom-file-label').html(fileName);
    });
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "yyyy-mm-dd",
        autoclose: true
    });
</script>