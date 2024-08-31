<?php $include_path = './'; ?>
<?php include $include_path . 'include/head.php'; ?>

    <body>
        <?php include $include_path . 'include/header.php'; ?>

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mb-5">  
                            <h2>مدرسة الذكاء الاصطناعي</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card bg-light bg-gradient rounded-lg shadow mb-3 cxm-card-box">
                            <div class="card-body p-0">
                                <div class="text-center">
                                    <img class="img-fluid w-100 xcxm-box-img wow zoomIn" data-wow-delay="0.2s" src="<?php echo BASE_URL; ?>assets/imgs/middle-school.png" alt="<?php echo WEBSITE_NAME; ?>">
                                </div>
                                <a href="<?php echo BASE_URL; ?>detail.php" class="stretched-link"><span class="d-none">Go somewhere</span></a>
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