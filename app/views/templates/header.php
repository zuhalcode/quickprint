<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL;?>/bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= BASEURL?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL?>/css/about.css">
    <link rel="stylesheet" href="<?= BASEURL?>/css/uploader.css">
    <title>Quick Print</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light blur2">
        <div class="container position-relative">
            <a class="navbar-brand" href="#"><img src="<?= BASEURL;?>/img/QpLogo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
                    <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">Tentang Kami</a>
                    <a class="nav-item btn btn-primary" href="<?= BASEURL; ?>/auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </nav>