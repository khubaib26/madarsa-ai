<?php $include_path = './'; ?>
<?php include $include_path . 'include/head.php'; ?>

<body>
    <?php // include $include_path . 'include/header.php'; ?>

    <div class="bg-light bg-gradient py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-4"><?php echo WEBSITE_NAME; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <img width="500" src="<?php echo BASE_URL; ?>assets/imgs/404.svg" alt="<?php echo WEBSITE_NAME; ?>">
                    </div>
                    <div class="text-center">
                        <h3>Oops.! Page Not Found!</h3>
                        <p>The page you are looking for does not exist</p>
                        <a class="btn btn-warning cxm-btn-1 rounded-0" href="<?php echo BASE_URL; ?>">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php // include $include_path . 'include/footer.php'; ?>
    
    <!-- JS here -->
    <?php include $include_path . 'include/js-scripts.php'; ?>   
    
</body>

</html>