<?php $include_path = './'; ?>
<?php include $include_path . 'include/head.php'; ?>

    <body>
        <?php include $include_path . 'include/header.php'; ?>

        <style>.cxm-card-box {min-height:100px;}</style>

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="text-center mb-3">  
                            <h1>مدرسة الذكاء الاصطناعي</h1>                            
                        </div>                        
                    </div>
                    <div class="col-auto">
                        <div class="text-end mb-3">
                            <img width="100" class="img-fluid wow zoomIn" data-wow-delay="0.2s" src="<?php echo BASE_URL; ?>assets/imgs/cxm-admin.png" alt="<?php echo WEBSITE_NAME; ?>">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card bg-light bg-gradient rounded-lg shadow mb-3 cxm-card-box">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="img-fluid w-100 xcxm-box-img wow zoomIn" data-wow-delay="0.2s" src="<?php echo BASE_URL; ?>assets/imgs/admin-detail-pic.png" alt="<?php echo WEBSITE_NAME; ?>">
                                </div>
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