<section class="container-fluid" style="margin-bottom: 100px;">
    <div class=" d-flex justify-content-between bg-info rounded mt-3 pr-3 pl-3">
        <h2 class="align-self-center text-white">Foto</h2>
        <div class="d-flex">
            <a href="?page=foto&menu=true" class="btn btn-light btn-sm align-self-center">Lihat Foto</a>
        </div>
    </div>
    <!-- DATA GAMBAR -->
    <div class="container row m-5 gambar">
        <div class="col-12 d-flex flex-column text-center mb-5">
            <a>
                <img src="img/profile1.png" height="50" width="300" class="img-thumbnail" alt="">
            </a>
            <div class="d-flex justify-content-center">
                <input type="file" name="" class="form-control col-3 mr-2 border-info" id="">
                <button class="btn btn-success align-self-center">Tambah</button>
            </div>
        </div>
        <div class="col">
            <button type="submit" name="hapus" class="btn btn-danger btn-sm" value="haloo"><i class="far fa-times-circle"></i></button>
            <a data-toggle="modal" data-target="#exampleModalCenter">
                <img src="img/thumbs/1.png" class="img-thumbnail" alt="">
            </a>
        </div>
        <div class="col">
            <button type="submit" name="hapus" class="btn btn-danger btn-sm" value="haloo"><i class="far fa-times-circle"></i></button>
            <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                <img src="img/thumbs/2.png" class="img-thumbnail" alt="">
            </a>
        </div>
        <div class="col">
            <button type="submit" name="hapus" class="btn btn-danger btn-sm" value="haloo"><i class="far fa-times-circle"></i></button>
            <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                <img src="img/thumbs/3.png" class="img-thumbnail" alt="">
            </a>
        </div>
    </div>

    <!-- PREVIEW GAMBAR -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div id="carouselExampleControls" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item" gmbr="img/thumbs/1.png">
                            <img class="d-block w-100 previewGambar" src="img/thumbs/1.png" alt="First slide">
                        </div>
                        <div class="carousel-item" gmbr="img/thumbs/2.png">
                            <img class="d-block w-100 previewGambar" src="img/thumbs/2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item" gmbr="img/thumbs/3.png">
                            <img class="d-block w-100 previewGambar" src="img/thumbs/3.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="js/jquery.js"></script>
<script>
    $('.gambar a img').on('click', function() {
        $('.carousel-item').removeClass('active');
        gmbr = $(this).attr('src');
        prev = $('.carousel-inner div[gmbr="' + gmbr + '"]').addClass('active');
    });
</script>