<style>
    .scrollbar {
        display: block;
        padding: 5px;
        margin-top: 5px;
        width: auto;
        height: 500px;
        overflow: auto;
    }

    /*css3 design scrollbar*/
    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        background: #666;
    }

    ::-webkit-scrollbar-thumb {
        background: #232323;
    }

    .gambar {
        border: 2px solid #dedede;
        background-color: #f1f1f1;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
    }

    /* Darker chat container */
    .darker {
        border-color: #ccc;
        background-color: #ddd;
    }

    /* Clear floats */
    .gambar::after {
        content: "";
        clear: both;
        display: table;
    }

    .pesan-active {
        background-color: #17a2b8 !important;
        color: #fff !important;
    }

    /* Style images */
    .gambar img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
    }

    /* Style the right image */
    .gambar img.right {
        float: right;
        margin-left: 20px;
        margin-right: 0;
    }

    /* Style time text */
    .time-right {
        float: right;
        color: #aaa;
    }

    /* Style time text */
    .time-left {
        float: left;
        color: #999;
    }
</style>
<section class="container-fluid">
    <div class=" d-flex justify-content-between bg-info rounded pr-3 pl-3" style="margin-top: 70px;">
        <h2 class="align-self-center text-white">Pesan</h2>
    </div>
    <div class="row ml-2"">
        <!--USER-->
        <div class=" col-3 border-right">
        <div class="container mt-2 mb-2">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="scrollbar" style="height: 430px;">
            <a type="button" class="d-flex w-100 pesan-active rounded border-bottom p-2">
                <img src="img/profile1.png" height="50" width="50" class="mr-2 rounded rounded-circle" alt="">
                <div>
                    <label class="m-0" for="">Nama User</label>
                    <p class="m-0">pesan terakhir</p>
                </div>
            </a>
            <a type="button" class="d-flex w-100  rounded border-bottom p-2">
                <img src="img/profile1.png" height="50" width="50" class="mr-2 rounded rounded-circle" alt="">
                <div>
                    <label class="m-0" for="">Nama User</label>
                    <p class="m-0">pesan terakhir</p>
                </div>
            </a>
            <a type="button" class="d-flex w-100  rounded border-bottom p-2">
                <img src="img/profile1.png" height="50" width="50" class=" mr-2 rounded rounded-circle" alt="">
                <div>
                    <label class="m-0" for="">Nama User</label>
                    <p class="m-0">pesan terakhir</p>
                </div>
            </a>
            <a type="button" class="d-flex w-100  rounded border-bottom p-2">
                <img src="img/profile1.png" height="50" width="50" class=" mr-2 rounded rounded-circle" alt="">
                <div>
                    <label class="m-0" for="">Nama User</label>
                    <p class="m-0">pesan terakhir</p>
                </div>
            </a>
            <a type="button" class="d-flex w-100  rounded border-bottom p-2">
                <img src="img/profile1.png" height="50" width="50" class=" mr-2 rounded rounded-circle" alt="">
                <div>
                    <label class="m-0" for="">Nama User</label>
                    <p class="m-0">pesan terakhir</p>
                </div>
            </a>
            <a type="button" class="d-flex w-100  rounded border-bottom p-2">
                <img src="img/profile1.png" height="50" width="50" class=" mr-2 rounded rounded-circle" alt="">
                <div>
                    <label class="m-0" for="">Nama User</label>
                    <p class="m-0">pesan terakhir</p>
                </div>
            </a>
            <a type="button" class="d-flex w-100  rounded border-bottom p-2">
                <img src="img/profile1.png" height="50" width="50" class=" mr-2 rounded rounded-circle" alt="">
                <div>
                    <label class="m-0" for="">Nama User</label>
                    <p class="m-0">pesan terakhir</p>
                </div>
            </a>
            <a type="button" class="d-flex w-100  rounded border-bottom p-2">
                <img src="img/profile1.png" height="50" width="50" class=" mr-2 rounded rounded-circle" alt="">
                <div>
                    <label class="m-0" for="">Nama User</label>
                    <p class="m-0">pesan terakhir</p>
                </div>
            </a>
            <a type="button" class="d-flex w-100  rounded border-bottom p-2">
                <img src="img/profile1.png" height="50" width="50" class=" mr-2 rounded rounded-circle" alt="">
                <div>
                    <label class="m-0" for="">Nama User</label>
                    <p class="m-0">pesan terakhir</p>
                </div>
            </a>
        </div>
    </div>
    <!--PESAN MASUK-->
    <div class="col-9">
        <nav class="navbar bg-info text-white mt-2 rounded justify-content-between">
            <a class=" d-flex">
                <img src="img/profile1.png" height="50" width="50" class=" mr-2 rounded rounded-circle" alt="">
                <div>
                    <label class="m-0" for="">Nama User</label>
                    <p class="m-0">Terakhir aktif</p>
                </div>
            </a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </nav>
        <div class="container-fluid scrollbar w-100  rounded border-bottom p-2" style="height: 340px;">
            <div class="gambar">
                <img src="img/profile1.png" alt="Avatar">
                <p style="float: left;">Hello. How are you today?</p>
                <span class="time-right">11:00</span>
            </div>

            <div class="gambar darker">
                <img src="img/profile2.png" alt="Avatar" class="right">
                <p style="float:right;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-left">11:01</span>
            </div>
            <div class="gambar">
                <img src="img/profile1.png" alt="Avatar">
                <p style="float: left;">Hello. How are you today?</p>
                <span class="time-right">11:00</span>
            </div>

            <div class="gambar darker">
                <img src="img/profile2.png" alt="Avatar" class="right">
                <p style="float:right;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-left">11:01</span>
            </div>
            <div class="gambar">
                <img src="img/profile1.png" alt="Avatar">
                <p style="float: left;">Hello. How are you today?</p>
                <span class="time-right">11:00</span>
            </div>

            <div class="gambar darker">
                <img src="img/profile2.png" alt="Avatar" class="right">
                <p style="float:right;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-left">11:01</span>
            </div>
            <div class="gambar">
                <img src="img/profile1.png" alt="Avatar">
                <p style="float: left;">Hello. How are you today?</p>
                <span class="time-right">11:00</span>
            </div>

            <div class="gambar darker">
                <img src="img/profile2.png" alt="Avatar" class="right">
                <p style="float:right;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-left">11:01</span>
            </div>
        </div>
        <div class="container-fluid mt-3">
            <form action="" method="post">
                <div class="form-group form-row">
                    <input type="text" class="form-control col-10 mr-4" placeholder="Tulis pesan. . .">
                    <button class="btn btn-success col-1"><i class="far fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>