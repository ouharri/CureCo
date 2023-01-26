<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include_once VIEWS . 'component' . DS . 'asset' . DS . 'header.php'; ?>

    <link rel="stylesheet" href="<?= url('css/dashboard.css?v=') . time() ?>" type="text/css" media="all"/>

</head>

<body>

<div class="container-dash">
    <div class="navigation-dash">
        <ul>
            <li>
                <a href="#">
                        <span class="icon" style="color: rgba(2,100,52,0.69) !important;">
                            <ion-icon name="medical-outline"></ion-icon>
                            <img src="https://cdn.discordapp.com/attachments/1026552757135605851/1067480189803708526/favicon_Cureco.png"
                                 style="position: absolute; top: 50px;opacity: .5;">
                        </span>
                    <span class="title text-3xl">
                        Cure
                        <span style="color: rgba(2,100,52,0.69) !important;">Co</span>
                    </span>
                </a>
            </li>

            <li id="home">
                <a href="<?= url('dashboard') ?>">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li id="table" class="">
                <a href="javascript:;">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                    <span class="title">Tables</span>
                </a>
            </li>
            <div id="tableShow" class="d-none m-0 p-0 boxShow">
                <li class="m-0 p-0"></li>
                <li class="m-0 p-0">
                    <a href="<?= url('dashboard/category') ?>" class="mx-4 border-radius-2xl box cursor-pointer">
                        <span class="icon">
                            <ion-icon name="apps-outline"></ion-icon>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li>
                <li class="m-0">
                    <a href="<?= url('dashboard/product') ?>" class="mx-4 border-radius-2xl box cursor-pointer">
                        <span class="icon">
                            <ion-icon name="pricetags-outline"></ion-icon>
                        </span>
                        <span class="title">Product</span>
                    </a>
                </li>
            </div>


            <li id="add">
                <a href="#">
                        <span class="icon">
                            <ion-icon name="add-outline"></ion-icon>
                        </span>
                    <span class="title">Add</span>
                </a>
            </li>
            <div id="addShow" class="d-none boxShow">
                <li class="m-0 p-0"></li>
                <li class="m-0">
                    <a href="<?= url('dashboard/addcategory') ?>" class="mx-4 border-radius-2xl box cursor-pointer">
                        <span class="icon">
                            <ion-icon name="apps-outline"></ion-icon>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li>
                <li class="m-">
                    <a href="<?= url('dashboard/addproduct') ?>" class="mx-4 border-radius-2xl box cursor-pointer">
                        <span class="icon">
                            <ion-icon name="pricetags-outline"></ion-icon>
                        </span>
                        <span class="title">Product</span>
                    </a>
                </li>
            </div>

            <li id="Customers">
                <a href="<?= url('dashboard/users') ?>">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                    <span class="title">Users</span>
                </a>
            </li>

            <li id="history">
                <a href="<?= url('dashboard/history') ?>">
                        <span class="icon">
                            <ion-icon name="stopwatch-outline"></ion-icon>
                        </span>
                    <span class="title">history</span>
                </a>
            </li>

            <li>
                <a href="javascript:;" onclick="printTicket()">
                        <span class="icon">
                            <ion-icon name="print-outline"></ion-icon>
                        </span>
                    <span class="title">Print</span>
                </a>
            </li>

            <li>
                <a href="<?= url('dashboard/help') ?>">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                    <span class="title">Help</span>
                </a>
            </li>

            <!--            <li>-->
            <!--                <a href="#">-->
            <!--                        <span class="icon">-->
            <!--                            <ion-icon name="settings-outline"></ion-icon>-->
            <!--                        </span>-->
            <!--                    <span class="title">Settings</span>-->
            <!--                </a>-->
            <!--            </li>-->

            <!--            <li>-->
            <!--                <a href="#">-->
            <!--                        <span class="icon">-->
            <!--                            <ion-icon name="lock-closed-outline"></ion-icon>-->
            <!--                        </span>-->
            <!--                    <span class="title">Password</span>-->
            <!--                </a>-->
            <!--            </li>-->

            <li>
                <a href="<?= url('logout') ?>">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search mt-2">
                <label>
                    <input type="text" placeholder="Search here" id="seachBox">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <div class="img__wrap gap-2">
                <div class="user">
                    <img src="<?= $_SESSION['user']['img_u'] ?>" alt="">
                </div>
                <div class="img__description"><?= $_SESSION['user']['firstName_u'] . ' ' . $_SESSION['user']['lastName_u'] ?></div>
            </div>
        </div>

