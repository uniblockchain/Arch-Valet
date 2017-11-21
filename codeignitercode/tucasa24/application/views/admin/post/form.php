<?php
$arr = array();
if (isset($result)) {
    $id = $result['id'];
    $parent_id = $result['parent_id'];
    $path = admin_url('post/update');
} else {
  $id = '';
  $parent_id = '';
    $path = admin_url('post/save');
}
?>


       <form action="<?= $path; ?>" method="post" enctype="multipart/form-data" role="form"> 
           <div class="panel panel-default"> 

                  <div class="tabbable page-tabs"> 
                    <ul class="nav nav-tabs"> 
                      <li class="active">
                        <a href="#content" data-toggle="tab"> Content</a>
                      </li> 
                      <li class="">
                        <a href="#attributes" data-toggle="tab"> ATTRIBUTES</a>
                      </li>
                      <li class="">
                        <a href="#category" data-toggle="tab"> Category</a>
                      </li>
                      <li class="">
                        <a href="#seo" data-toggle="tab"> SEO</a>
                      </li> 
                      
                    </ul>
                  <div class="tab-content"> 
                  <!-- First tab --> 
                    <div class="tab-pane fade active in" id="content">
 
                     <div class="panel-body">
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>English Title</label> 
                                     <input type="text" required name="en_title" id="title" class="form-control" value="<?php if(isset($result['en_title'])){echo $result['en_title'];};?>">
                                 </div>

                                 <div class="col-md-6">
                                     <label>Spanish Title</label> 
                                     <input type="text" required name="es_title"  class="form-control" value="<?php if(isset($result['es_title'])){echo $result['es_title'];};?>">
                                 </div>


                             </div>
                         </div>



                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>English Excerpt</label> 
                                     <input type="text"  name="en_excerpt" class="form-control" value="<?php if(isset($result['en_excerpt'])){echo $result['en_excerpt'];};?>">
                                 </div>

                                 <div class="col-md-6">
                                     <label>Spanish Excerpt</label> 
                                     <input type="text"  name="es_excerpt"  class="form-control" value="<?php if(isset($result['es_excerpt'])){echo $result['es_excerpt'];};?>">
                                 </div>


                             </div>
                         </div>


                        
                          <div class="form-group">
                             <label>English Description</label> 
                             <textarea name="en_description"  class="form-control mceEditor" rows="5" id="content" >
                               <?php if(isset($result['en_description'])){ echo $result['en_description']; } ?>
                             </textarea>
                          </div>



                          <div class="form-group">
                             <label>Spanish Description</label> 
                             <textarea name="es_description"  class="form-control mceEditor" rows="5" id="content" >
                               <?php if(isset($result['es_description'])){ echo $result['es_description']; } ?>
                             </textarea>
                          </div>


                        
                     </div>

                    </div> 
                    <!-- /first tab --> 


                    <!-- Second tab --> 
                    <div class="tab-pane fade" id="attributes"> 
                      <div class="panel-body">
                        
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-6">
                               <label>Slug</label> 
                               <input type="text" name="slug" class="form-control" value="<?php if(isset($result['slug'])){echo $result['slug'];};?>" >
                               
                            </div> 


                            <div class="col-md-6">
                               <label>Custom Url</label> 
                               <input type="text" name="custom_url" class="form-control" value="<?php if(isset($result['custom_url'])){echo $result['custom_url'];};?>" >
                               
                            </div> 


                          </div>
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-6">
                                <label>Parent</label> 


  <?php
  $options  = array();
  $options[0] = 'Select Parent Page';
  function page_loop($pages, $dash = '', $id=0)
  {
    $options  = array();
    foreach($pages as $page)
    {
      if($id != $page->id)
      {
        $options[$page->id] = $dash.' '.$page->en_title . ' ('.$page->es_title.')';
        $options      = $options + page_loop($page->children, $dash.'-', $id);
      }
    }
    return $options;
  }
  $options  = $options + page_loop($pages, '', $id);
  echo form_dropdown('parent_id', $options,  set_value('parent_id', $parent_id), 'class="select-search my_select_opt"', 'tabindex="2"');
  
  ?>





                              </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-6">
                               <label>Order</label> 
                               <input type="text" name="order_id" class="form-control" value="<?php if(isset($result['order_id'])){echo $result['order_id'];}else{echo '0';}?>" >
                               
                            </div> 
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="row">
                              <div class="col-md-6">
                                <label>Featured Image:</label> 
                                <input type="file" class="styled form-control" id="report-screenshot" name="image">
                              </div>

                           <?php if(isset($result['image'])){ if(!empty($result['image'])){ ?>
                           <div class="col-md-6 hide_me_feature">
                               <a href="<?php echo site_url('uploads/images/full/'.$result['image']); ?>" class="lightbox">
                                    <img src="<?php echo site_url('uploads/images/thumbnails/'.$result['image']); ?>" alt="Route Image" class="img-media admin-logo-img">
                                </a> 
                                <a href="javascript:void(0);" onclick="remove_feature_img(<?php echo $result['id']; ?>)" class="btn btn-danger my_btn" style="margin-top:0px; margin-left:10px;">Remove Image</a>

                           </div>

                           <?php } } ?>



                          </div>
                        </div>







                        <div class="form-group">
                          <div class="row">
                              <div class="col-md-6">
                                <label>Background Image:</label> 
                                <input type="file" class="styled form-control" id="report-screenshot" name="background_image">
                              </div>

                           <?php if(isset($result['background_image'])){ if(!empty($result['background_image'])){ ?>
                           <div class="col-md-6 hide_me_background">
                               <a href="<?php echo site_url('uploads/images/full/'.$result['background_image']); ?>" class="lightbox">
                                    <img src="<?php echo site_url('uploads/images/thumbnails/'.$result['background_image']); ?>" alt="Background Image" class="img-media admin-logo-img">
                                </a> 
                                <a href="javascript:void(0);" onclick="remove_background_img(<?php echo $result['id']; ?>)" class="btn btn-danger my_btn" style="margin-top:0px; margin-left:10px;">Remove Image</a>

                           </div>

                           <?php } } ?>



                          </div>
                        </div>












                      </div>
                    </div> 
                    <!-- /second tab --> 




                    <div class="tab-pane fade" id="category"> 
                      <div class="panel-body">
                   

                         <div class="form-group">
                             <div class="row">
                                <div class="col-sm-12">
                                <label>Choose Category</label>
                                  
                                <?php foreach($category as $c){ 
                                  if(isset($result)){
                                    $res_cat = $this->db->get_where('tbl_category', array('category_id'=>$c['id'],'post_id'=>$result['id']))->row_array(); 
                                    //debug($res_cat);
                                  }
                                  ?>  
                                  <div class="checkbox">
                                    <label>
                                      <div class="checker">
                                        <span>
                                          <input type="checkbox" name="cat[]" value="<?php echo $c['id']; ?>" class="styled" <?php if(!empty($res_cat)){ echo "checked"; } ?> >
                                        </span>
                                      </div><?php echo $c['en_title'] .' ('.$c['es_title'].')'  ; ?>
                                    </label>
                                  </div>
                                <?php } ?>  

                                </div>
                             </div>
                         </div>


                      </div>
                    </div> 








                    <!-- Third tab --> 
                    <div class="tab-pane fade" id="seo"> 
                      <div class="panel-body">
                   
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-12">
                               <label>SEO Title</label> 
                               <input type="text" name="seotitle" class="form-control" value="<?php if(isset($result['seotitle'])){echo $result['seotitle'];};?>">
                            </div>
                          </div>
                        </div>


                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-12">
                              <label>SEO Keywords</label> 
                                <input type="text" name="seokeyword" class="form-control" value="<?php if(isset($result['seokeyword'])){echo $result['seokeyword'];};?>">
                            </div>
                          </div>
                        </div>

                       <div class="form-group">
                          <label>SEO Description</label> 
                          <textarea rows="5" name="seodescription" cols="5" class="elastic form-control"><?php if(isset($result['seodescription'])){ echo $result['seodescription']; } ?></textarea>
                       </div> 

                      </div>
                    </div> 
                    <!-- /third tab --> 

                    <div class="panel-body no-padding-top">
                    <div class="form-actions text-left "> 
                        <input type="hidden" name="id" value="<?php if (isset($result['id'])) { echo $result['id']; }; ?>"/>
                      <input type="submit" value="<?php if(isset($result)){ echo "update"; }else{ echo "save"; } ?>" class="btn btn-primary"> 
                       <a href="<?php echo admin_url('post'); ?>" class="btn btn-danger">Cancel</a> 
                       
                    </div>
                    </div>
                </div> 
              </div>
           </div>
       </form>



<style>
  .my_select_opt{
    width: 467px!important;
  }  .my_btn{
    margin-top: 22px;
  }
</style>

<script type="text/javascript">


function remove_feature_img(image_id){
    var admin_url = '<?php echo admin_url() ?>';

    $.ajax({
        method: 'POST',
        processData: false,
        contentType: false,
        url: admin_url + '/post/remove_feature_img/'+image_id,
        success: function(result) {
          $('.hide_me_feature').hide();
          alert(result);
        }
    });
    return false;
}




function remove_background_img(image_id){
    var admin_url = '<?php echo admin_url() ?>';

    $.ajax({
        method: 'POST',
        processData: false,
        contentType: false,
        url: admin_url + '/post/remove_background_img/'+image_id,
        success: function(result) {
          $('.hide_me_background').hide();
          alert(result);
        }
    });
    return false;
}


</script>