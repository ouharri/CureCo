<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <?php include_once VIEWS . 'component' . DS . 'asset' . DS . 'header.php'; ?>

</head>

<body>

<!-- Navbar  -->
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 d-flex justify-content-between"
         style="opacity: 95%;">
        <div class="container">
            <a class="navbar-brand" href="#">LoGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class='bx bx-menu bx-md' id="menU" style="transition: all 0.38s ease;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?= url() ?>">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?= url('cuirses') ?>">Cuirses</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav align-items-center">
                    <?php if (!isset($_SESSION['id_c'])) : ?>
                        <li class="nav-item">
                            <a class="text-white text-decoration-none btn-login" href="<?= url('Login') ?>"
                               id="btnLogin">Login</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button" id="btnLogin" class="btn dropdown-toggle btn-login"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    <?= $_SESSION['firstName_c']; ?>
                                </button>
                                <ul class="dropdown-menu text-center">
                                    <li>
                                        <a class="dropdown-item" href="<?= url('reservation') ?>">reservation</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= url('Login/deconnect') ?>"><i
                                                    class='bx bx-log-out'></i> Log out</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
    </nav>
</header>
