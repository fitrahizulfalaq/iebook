<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title><?= $menu ?></title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">

    <?php $this->load->view("component/css/arabic") ?>

    <!-- PWA Script -->
    <meta name="apple-mobile-web-app-status-bar" content="#113491">
    <meta name="theme-color" content="#113491">
    <link rel="manifest" href="<?= base_url() ?>/manifest.json">
    <!-- !End PWA Script -->

</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <img src="<?= base_url() ?>/assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary">
        <div class="right">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-forward-outline" class="text-white"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <?= $menu ?>
        </div>
        <!-- <div class="right">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#addCardActionSheet">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div> -->
    </div>
    <!-- * App Header -->

    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <?= $contents ?>
        </div>
        <div class="col-lg-3"></div>
    </div>

    <?php $this->load->view("component/footerDetail") ?>

    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>/assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="<?= base_url() ?>/assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="<?= base_url() ?>/assets/js/base.js"></script>

    <!-- Script for Service Worker -->
    <script>
        window.addEventListener('load', () => {
            registerSW();
        });

        // Register the Service Worker
        async function registerSW() {
            if ('serviceWorker' in navigator) {
                try {
                    await navigator
                        .serviceWorker
                        .register('<?=base_url()?>/serviceworker.js');
                } catch (e) {
                    console.log('SW registration failed');
                }
            }
        }
    </script>
    <!-- Install -->

</body>

</html>