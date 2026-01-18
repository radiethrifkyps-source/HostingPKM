<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index (Bootstrap)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <!-- <div class="container-main"> -->
    <nav class="navbar navbar-expand-lg  bg-body-secondary" style="min-height: 8vh;">
        <div class="container-fluid">
            <p class="navbar-brand text-primary fs-5 fs-md-4 m-0 fw-bold">📗 Media Pembelajaran Agama Islam</p>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active p-2 mx-3 nav-custom text-black fs-4" href="author.php">AUTHOR</a>
                
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-light nav-bg-image" style="height: 41vh;">
        <div class="container-fluid d-flex justify-content-center align-items-center h-100">
            <img src="img/welcome2.png" class="img-welcome">
        </div>
    </nav>



    <nav class="navbar navbar-expand-lg bg-light px-3 px-md-5" style="min-height: 41vh; height: auto;">
        <div class="container-fluid d-flex flex-column align-items-start h-100 pt-4">
            <h2 class="fw-bold text-black m-0 mb-3">Judul Materi</h2>
            <hr class="w-100 mb-4 text-secondary" style="opacity: 0.6;">

            <div class="row w-100">
                <div class="col-12 col-md-auto mb-3 mb-md-0">
                    <img src="img/Backgrnd3.jpg" class="img-fluid rounded me-md-3 img-materi" style="width: 200px; height: auto;">
                </div>

                <div class="col-12 col-md">
                    <p class="m-0 text-black fs-4 fs-md-4 p-materii">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum lo
                    </p>
                </div>
            </div>

            <hr class="w-100 mb-4 text-secondary" style="opacity: 0.6;">

            <main class="main-content w-100 mt-4">
                <section class="menu-section text-center">
                    <div class="section-header">
                        <h2 class="materi-title mt-1 fw-bold">Menu Belajar Interaktif</h2>
                    </div>
                    <div class="materi-divider mx-auto mb-4" style="width: 50px; height: 3px; background: #000;"></div>

                    <nav class="menu-belajar-container d-flex flex-wrap justify-content-center gap-3 w-100">
                        <a href="views/view.php" class="menu-card">
                            <div class="card-icon">📖</div>
                            <div class="card-info">
                                <h3>MULAI BELAJAR</h3>
                                <p>Materi Dasar Islam</p>
                            </div>
                        </a>
                        <a href="interaktif/mewarnai/mewarnai.php" class="menu-card">
                            <div class="card-icon">🎨</div>
                            <div class="card-info">
                                <h3>AYO MEWARNAI</h3>
                                <p>Kreativitas Anak Sholeh</p>
                            </div>
                        </a>
                        <a href="interaktif/sholawat/sholawat.php" class="menu-card">
                            <div class="card-icon">🎵</div>
                            <div class="card-info">
                                <h3>LAGU & SHOLAWAT</h3>
                                <p>Nada Islami Menyejukkan</p>
                            </div>
                        </a>
                        <a href="interaktif/video_kisah_nabi/video_kisah_nabi.php" class="menu-card">
                            <div class="card-icon">🎬</div>
                            <div class="card-info">
                                <h3>KISAH NABI</h3>
                                <p>Video Edukasi Menarik</p>
                            </div>
                        </a>
                    </nav>
                </section>
            </main>

        </div>
    </nav>

    <!-- TOMBOL -->


    <nav class="navbar navbar-expand-lg bg-body-secondary px-5 d-flex justify-content-center align-items-center mt-3"
        style="height: 10vh;">
        <p class="mb-0 fs-3">&copy; 2026/LoremIpsum</p>
    </nav>

    <!-- </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>