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
                        <img width="500" src="<?php echo BASE_URL; ?>assets/imgs/thankyou.svg" alt="<?php echo WEBSITE_NAME; ?>">
                    </div>
                    <div class="text-center">
                        <h3>THANK YOU!</h3>
                        <p>Thank you for filling in your information. You have been successfully connected with us. We look forward to doing business with you. One of our account managers will get back to you shortly.</p>
                        <p>Feel free to get in touch with us at any time.</p>
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