<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url() ?>/assets/img/logo/logo.png" rel="icon">
    <title>RuangAdmin - 404 Page</title>
    <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php if (ENVIRONMENT !== 'production') : ?>
            <div class="container-fluid" id="container-wrapper">
                <div class="text-center">
                    <img src="<?= base_url() ?>/assets/img/error.svg" style="max-height: 100px;" class="mb-3">
                    <h3 class="text-gray-800 font-weight-bold">Oopss!</h3>
                    <p class="lead text-gray-800 mx-auto">404 Page Not Found</p>
                    <a href="<?= base_url('admin') ?>">&larr; Back to Dashboard</a>
                </div>
            </div>
        <?php else : ?>
            <?= lang('Errors.sorryCannotFind') ?>
        <?php endif ?>
        <!-- Sidebar -->

    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="<?= base_url() ?>/assets/#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/ruang-admin.min.js"></script>

</body>

</html>