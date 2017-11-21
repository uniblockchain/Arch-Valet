
<a href="<?php echo admin_url('post/add'); ?>" class="btn btn-success add_new" type="button"><i class="icon-plus"></i>Add Post</a>                
<a href="<?php echo admin_url('post/add_link'); ?>" class="btn btn-success add_new" type="button"><i class="icon-plus"></i>Add link</a>                
                
                <br/>  
                <div class="form-group">  
                <div class="row">
             <div class="col-sm-6 has-feedback has-feedback-left"><input type="text" onkeyup="filter(this)" class="form-control" placeholder="Search Post....."><i class="icon-search  form-control-feedback" style="left:15;top:0"></i></div>
</div></div>


                    <!-- Media datatable --> 
                    <div class="panel panel-default"> 



                        <div class="panel-heading">
                            <h6 class="panel-title"><i class="icon-menu"></i>Post's</h6>
                        </div> 


                        <div class="row">
                            <div class="col-sm-12 post-list">




<?php echo $res; ?>

                                
                            </div>
                        </div>


                    </div> 



<script language="javascript" type="text/javascript">
    function filter(element) {
        var value = $(element).val();

        $("#theList > li").each(function() {
            if ($(this).text().search(value) > -1) {
                $(this).show();
            }
            else {
                $(this).hide();
            }
        });
    }
</script>



