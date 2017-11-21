<?php include('includes/header.php'); ?>
            <div class="row page_title">
                <h1><?php echo $pricing->title; ?></h1>
            </div>

            <div class="row breadcrumb-bar">
                <div class="container">
                    <div class="col-xs-12 col-sm-7 page_chain">
                        <?php echo strtoupper(lang('home')); ?> <span class="br_arrow">></span> <?php echo $pricing->title; ?>
                    </div>
                    <div class="col-xs-12 col-sm-5 social_links">
                        COMPARTIR EN  <a href="#" title=""><i class="fa fa-facebook sm_icon" aria-hidden="true"></i></a> <a href="#" title=""><i class="fa fa-twitter sm_icon" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

<?php echo $pricing->description; ?>



<?php include('includes/footer.php'); ?> 