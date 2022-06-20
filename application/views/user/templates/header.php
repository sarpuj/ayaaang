<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body class="bg-danger mt-3">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="<?= base_url('assets/img/getih.png'); ?>" alt="" width="50" height="45" class="d-inline-block align-text-center">
                Stock Darah Kab. Kulon Progo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-danger" aria-current="page" href="<?= base_url('dashboard'); ?>">Dashboard</a>
                    <a class="nav-link text-danger" aria-current="page" href="<?= base_url('dashboard/stok_darah'); ?>">Stock Darah</a>
                    <a class="nav-link text-danger" aria-current="page" href="<?= base_url('dashboard/rs'); ?> ">Rumah Sakit</a>
                    <a class="nav-link text-danger" aria-current="page" href="#">Informasi</a>

                </div>
            </div>
        </div>
    </nav>