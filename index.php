<?php $include_path = './'; ?>
<?php include $include_path . 'include/head.php'; ?>

    <body>
        <?php include $include_path . 'include/header.php'; ?>

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mb-3">  
                            <img class="img-fluid wow zoomIn" data-wow-delay="0.2s" src="<?php echo BASE_URL; ?>assets/imgs/cxm-heading-1.jpg" alt="<?php echo WEBSITE_NAME; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-light bg-gradient rounded-lg shadow mb-3 cxm-card-box">
                            <div class="card-body p-0">
                                <div class="text-center">
                                    <img class="img-fluid cxm-box-img wow zoomIn" data-wow-delay="0.2s" src="<?php echo BASE_URL; ?>assets/imgs/1.png" alt="<?php echo WEBSITE_NAME; ?>">
                                </div>
                                <a href="<?php echo BASE_URL; ?>student.php" class="stretched-link"><span class="d-none">Go somewhere</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light bg-gradient rounded-lg shadow mb-3 cxm-card-box">
                            <div class="card-body p-0">
                                <div class="text-center">
                                    <img class="img-fluid cxm-box-img wow zoomIn" data-wow-delay="0.2s" src="<?php echo BASE_URL; ?>assets/imgs/2.png" alt="<?php echo WEBSITE_NAME; ?>">
                                </div>
                                <a href="<?php echo BASE_URL; ?>teacher.php" class="stretched-link"><span class="d-none">Go somewhere</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light bg-gradient rounded-lg shadow mb-3 cxm-card-box">
                            <div class="card-body p-0">
                                <div class="text-center">
                                    <img class="img-fluid cxm-box-img wow zoomIn" data-wow-delay="0.2s" src="<?php echo BASE_URL; ?>assets/imgs/3.png" alt="<?php echo WEBSITE_NAME; ?>">
                                </div>
                                <a href="<?php echo BASE_URL; ?>administrator.php" class="stretched-link"><span class="d-none">Go somewhere</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card bg-light bg-gradient rounded-lg shadow mb-3 cxm-card-box">
                            <div class="card-body p-0">
                                <div class="text-center">
                                    <img class="img-fluid cxm-box-img wow zoomIn" data-wow-delay="0.2s" src="<?php echo BASE_URL; ?>assets/imgs/4.png" alt="<?php echo WEBSITE_NAME; ?>">
                                </div>
                                <a href="<?php echo BASE_URL; ?>talk-to-books.php" class="stretched-link"><span class="d-none">Go somewhere</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light bg-gradient rounded-lg shadow mb-3 cxm-card-box">
                            <div class="card-body p-0">
                                <div class="text-center">
                                    <img class="img-fluid cxm-box-img wow zoomIn" data-wow-delay="0.2s" src="<?php echo BASE_URL; ?>assets/imgs/5.png" alt="<?php echo WEBSITE_NAME; ?>">
                                </div>
                                <a href="<?php echo BASE_URL; ?>learn-arabic-from-scholars.php" class="stretched-link"><span class="d-none">Go somewhere</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

        <?php include $include_path . 'include/footer.php'; ?>
        <?php include $include_path . 'include/js-scripts.php'; ?>
    </body>    
</html>