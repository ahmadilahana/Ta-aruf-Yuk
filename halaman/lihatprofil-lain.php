<section class="container-fluid">
    <div class=" d-flex justify-content-between bg-info rounded mt-3 pr-3 pl-3">
        <h2 class="align-self-center text-white">Profile</h2>
        <div class="d-flex">
            <a class="btn btn-light btn-sm align-self-center">Kirim CV</a>
        </div>
    </div>
</section>
<div class="container-fluid " style="margin-bottom: 70px;">
    <div class="row justify-content-center">
        <!--FOTO PROFILE DAN NAMA PENGGUNA-->
        <div class="col-3 pt-2 bg-light border">
            <div class="row justify-content-md-center mt-2">
                <img src="img/profile1.png" class="col-auto" alt="" height="200px" width="auto">
                <div class="col-12 text-center mt-2">
                    <h4 class="mb-0"><?= $_SESSION['user']['nama'] ?></h4>
                    <ul class=" list-inline mb-0" style="height: 30px;">
                        <li class=" list-inline-item">
                            <p>Status Nikah</p>
                        </li>
                        <li class=" list-inline-item">
                            <p>Laki-laki</p>
                        </li>
                    </ul>
                    <ul class=" list-unstyled">
                        <li><?= $_SESSION['user']['email'] ?></li>
                        <li>Nomor WA/Hp</li>
                        <li>Sosial Media</li>
                    </ul>
                    <div class="pr-2 pt-2 pl-2 text-center">
                        <a type="button" class="btn btn-link p-1">
                            <h3 class=" text-success" data-toggle="tooltip" data-placement="top" title="Favorit"><i class="fas fa-star"></i></h3>
                        </a>
                        <a type="button" class="btn btn-link p-1">
                            <h3 data-toggle="tooltip" data-placement="top" title="Pesan"><i class="fas fa-comment"></i></h3>
                        </a>
                        <a type="button" class="btn btn-link p-1">
                            <h3 data-toggle="tooltip" data-placement="top" title="Blokir"><i class="fas fa-ban"></i></h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--DATA DIRI-->
        <div class="col-4 pt-2 bg-light border-top border-bottom">
            <div class="row">
                <div class="row col-12 m-0 border-bottom border-dark">
                    <h4 class="col-4 align-self-center mt-2 mb-2">Data Diri</h4>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Agama</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Islam</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info ">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Tempat, Tanggal Lahir</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Semarang, 1 Mei 2020</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info ">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Alamat Sekarang</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Jalan Karang Rejo dlm v No.37A RT 004/RW 007 Srondol Wetan, Banyumanik, Semarang</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info ">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Alamat Asal</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Jalan Karang Rejo dlm v No.37A RT 004/RW 007 Srondol Wetan, Banyumanik, Semarang</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info ">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Suku</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Jawa</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info ">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Gol. Darah</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">B</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info ">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Nama Ayah</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Ayah</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info ">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Nama Ibu</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Ibu</p>
                </div>
            </div>
        </div>
        <!--GAMBARAN DIRI-->
        <div class="col-4 pt-2 bg-light border-left-0 border">
            <div class="row">
                <div class="row col-12 m-0 border-bottom border-dark">
                    <h4 class="col-auto align-self-center mt-2 mb-2">Gambaran Diri</h4>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Bentuk Fisik</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Normal</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Warna Kulit</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Sawo Matang</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Tipe Rambut</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Bergelombang</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Warna Rambut</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Hitam</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Warna Mata</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Hitam</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Cacat Fisik</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">-</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Tinggi Badan</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">182 cm</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Berat Badan</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">70 Kg</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Seni Tubuh</h6>
                    <p class="col-8 align-self-center mt-2 mb-2">Tidak Ada</p>
                </div>
                <div class="row col-12 m-0 border-bottom border-info">
                    <h6 class="col-4 align-self-center mt-2 mb-2">Dokumen Pendukung</h6>
                    <div class="col-4 d-flex align-items-center">
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modallampiran"> Lampiran Surat</button>
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalfoto"> Foto KTP</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MODAL-->
<!--MODAL FOTO-->
<div class="modal fade" id="modalfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Foto KTP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="img/profile1.png" class="img-thumbnail" alt="">
            </div>
        </div>
    </div>
</div>
<!--MODAL LAMPIRAN-->
<div class="modal fade" id="modallampiran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lampiran Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <object data="pdf/Nilai Konsep Basis Data.pdf" width="100%" height="400"></object>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>