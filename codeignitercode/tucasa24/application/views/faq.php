<?php include('includes/header.php'); ?>
        

        <div class="row page_title">
                <h1>Preguntas frecuentes</h1>
            </div>

            <div class="row breadcrumb-bar">
                <div class="container">
                    <div class="col-xs-12 col-sm-7 page_chain">
                        <?php echo strtoupper(lang('home')); ?> <span class="br_arrow">></span> Preguntas frecuentes

                    </div>
                    <div class="col-xs-12 col-sm-5 social_links">
                        COMPARTIR EN  <a href="#" title=""><i class="fa fa-facebook sm_icon" aria-hidden="true"></i></a> <a href="#" title=""><i class="fa fa-twitter sm_icon" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
<div class="container">
               
<?php 
foreach($faq_category as $fc){ 
$faq_post = $this->db->query('select tc.category_id as category_id, tp.id as post_id, tp.'.$lang.'_title as title, tp.'.$lang.'_description as description, tp.image as image from tbl_post tp join tbl_category tc on (tc.post_id = tp.id) where category_id='.$fc->id.' order by post_id asc;')->result();

?>
                <div class="col-sm-12">
                <div class="faq_panel">

                    <h2><?php echo $fc->title; ?> <?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('category/edit/'.$fc->id); ?>" target="_blank">Edit</a></span>
<?php } ?></h2>
                    <div class="row">
                    <?php foreach($faq_post as $fp){ ?>
                        <div class="col-lg-6 col-sm-6 col-xs-12">



                            <div class="faq_detail">
                                <h4><?php echo $fp->title; ?> <?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$fp->post_id); ?>" target="_blank">Edit</a></span>
<?php } ?></h4>
                                <p><?php echo strip_tags($fp->description); ?></p>
                            </div>
                        </div>
                    <?php } ?>        
                </div>
            </div>
        </div>
<?php } ?>


    </div>



        </div>
        </div>


        
        
<?php include('includes/footer.php');  ?>