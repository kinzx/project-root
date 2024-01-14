<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zaia</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="<?= base_url('bootstrap-5.0.2/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/css/layout.css') ?>" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Navbar Brand -->
            <a class="navbar-brand" href="#">Zaia</a>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Items -->
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-2">
                        <a class="btn btn-dark" aria-current="page" style="border-radius: 50px;" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link"href="<?= base_url('/tambah') ?>">tambah</a>
                    </li>
                    <li class="nav-item  mr-2">
                        <form class="d-flex">
                            <input class="form-control me-2 flex-grow-1" type="search" placeholder="Search" aria-label="Search" style="border-radius: 50px;">
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="d1">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="<?= base_url('img/bantuan.jpg') ?>" alt="">  <i class="fas fa-heart"></i></a>
        <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
        <img src="https://picsum.photos/200/300" alt="">
        <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
        <img src="https://picsum.photos/300/100" alt="">
        <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
        <img src="https://picsum.photos/100/200" alt="">
        <img src="https://picsum.photos/300/200" alt="">
        <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
        <img src="https://picsum.photos/300/100" alt="">
        <img src="https://picsum.photos/100/200" alt="">
        <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
        <img src="https://picsum.photos/300/200" alt="">
        <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
        <img src="https://picsum.photos/200/300" alt="">
        <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
        <img src="https://picsum.photos/300/100" alt="">
        <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
        <img src="https://picsum.photos/100/200" alt="">
        <img src="https://picsum.photos/300/200" alt="">
        <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
        <img src="https://picsum.photos/300/100" alt="">
        <img src="https://picsum.photos/100/200" alt="">
        <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
        <img src="https://picsum.photos/300/200" alt="">

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('img/bantuan.jpg') ?>" alt="">
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>

    <footer>

    </footer>

    <script src="<?= base_url('bootstrap-5.0.2/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap-5.0.2/js/tiny-slider.js') ?>"></script>
    <script src="<?= base_url('bootstrap-5.0.2/js/custom.js') ?>"></script>
</body>

</html>