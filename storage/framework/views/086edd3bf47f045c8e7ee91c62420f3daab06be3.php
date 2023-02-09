<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gaji</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('assets/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

     <!-- Custom styles for this page -->
     <link href="<?php echo e(asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">

    <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('main'); ?>
          </div>
        </div>
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(asset('assets/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('assets/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('assets/js/sb-admin-2.min.js')); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo e(asset('assets/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo e(asset('assets/js/demo/datatables-demo.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\uasweb\resources\views/template.blade.php ENDPATH**/ ?>