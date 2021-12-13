<?php Flasher::flash(); ?>
<!-- container -->
<div class="blur">
    <div class="jumbotron jumbotron-fluid ">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center text-white">
                    <h1 class="fw-bolder"> Mencetak segala project dari makalah sampai desertasi
                        <h1 />
                        <p class="">Cuman kirim file, kami cetak kami antar</p>
                        <button class="btn btn-primary fw-bolder" onclick="toggle()">Cetak sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container ">

        <!-- INFO PANEL -->
        <div class="row justify-content-center">
            <div class="col-8 info-panel">
                <div class="row">

                    <div class="col-lg">
                        <img class="float-start" src="<?= BASEURL;?>/img/employee.png" alt="">
                        <h4 class="mt-5">24 Hours</h4>
                    </div>

                    <div class="col-lg">
                        <img class="float-start" src="<?= BASEURL;?>/img/hires.png" alt="">
                        <h4 class="mt-5">24 Hours</h4>
                    </div>

                    <div class="col-lg">
                        <img class="float-start" src="<?= BASEURL;?>/img/security.png" alt="">
                        <h4 class="mt-5">24 Hours</h4>
                    </div>

                </div>
            </div>
        </div>
        <!-- END INFO PANEL -->

        <div class="row text-center" id="projects">
            <div class="col">
                <h2>Project yang kami cetak</h2>
            </div>
        </div>
    </div>

    <div class="container content ">
        <!-- PROJECTS -->
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-4">
                <div class="project-box">
                    <h4 class="project-name text-dark">
                        Makalah
                    </h4>
                    <img src="<?= BASEURL;?>/img/pdf.svg" alt="">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="project-box">
                    <h4 class="project-name text-dark">
                        Proposal
                    </h4>
                    <img src="<?= BASEURL;?>/img/pdf.svg" alt="">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="project-box">
                    <h4 class="project-name text-dark">
                        Karya Tulis
                    </h4>
                    <img src="<?= BASEURL;?>/img/pdf.svg" alt="">
                </div>
            </div>
        </div>

        <div class="row mb-5 justify-content-center">
            <div class="col-lg-4">
                <div class="project-box">
                    <h4 class="project-name text-dark">
                        Skripsi
                    </h4>
                    <img src="<?= BASEURL;?>/img/pdf.svg" alt="">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="project-box">
                    <h4 class="project-name text-dark">
                        Tesis
                    </h4>
                    <img src="<?= BASEURL;?>/img/pdf.svg" alt="">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="project-box">
                    <h4 class="project-name text-dark">
                        Desertasi
                    </h4>
                    <img src="<?= BASEURL;?>/img/pdf.svg" alt="">
                </div>
            </div>
        </div>
        <!-- END PROJECTS -->
    </div>

    <div class="container-fluid sosmed ">
        <div class="row justify-content-center mb-5">
            <h4 class="text-center mb-3">Social Media </h4>
            <div class="col-6 text-center text-decoration-none">
                <a class="btn-facebook"><i class="fab fa-facebook-f"></i></a>
                <a class="btn-twitter"><i class="fab fa-twitter"></i></a>
                <a class="btn-instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- end container -->

<!-- uploader -->

<div class="container wrapper" id="popup">
    <h2 class="text-center">Masukkan File Anda </h2>
    <form class="form" action="<?= BASEURL?>/auth/upload" method="POST" enctype="multipart/form-data">
        <label>
            Masukkan jumlah halaman
            <div class="button">
                <button type="button" id="decrement" onclick="stepper(this)"> - </button>
                <input type="number" min="0" max="9999" step="1" value="0" id="my-input" name="number">
                <button type="button" id="increment" onclick="stepper(this)"> + </button>
            </div>
        </label>
        <div class="dashed-content">
            <input type="file" class="file-input" name="file" hidden>
            <i class="fas fa-cloud-upload-alt mt-4"></i>
            <p class="">Browse File to Upload</p>
        </div>

        <section class="progress-area">

        </section>

        <section class="uploaded-area">

        </section>

        <button id="submit" class="btn btn-primary" onclick="toggle()">Submit</button>
    </form>


</div>
</div>