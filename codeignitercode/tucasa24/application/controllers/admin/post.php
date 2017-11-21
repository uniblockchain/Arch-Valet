<?php

class Post extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');



    }

    function index() {
        $this->list_post();
    }




    function get_pages($parent = 0)
    {
        $result = $this->db->order_by('order_id','ASC')->get_where('tbl_post', array('parent_id'=>$parent,'remark'=>'3'))->result();
        $return = array();
        foreach($result as $page)
        {
            $return[$page->id]              = $page;
            $return[$page->id]->children    = $this->get_pages($page->id);
        }
        
        return $return;
    }



    function list_post() {
        $data['logo'] = $this->db->get('site_settings')->row();
        $data['res'] = $this->html_ordered_menu();
        $data['title'] = 'Post & Category';
        $data['main'] = 'post/list';
        $this->load->view('admin/index', $data);
    }


    function add() {
        $data['logo'] = $this->db->get('site_settings')->row();
        $data['title'] = 'Add';
        $data['pages'] = $this->get_pages();
        $data['category'] = $this->db->order_by('order_id','ASC')->get_where('tbl_post', array('remark'=>'6'))->result_array();
        $data['main'] = 'post/form';
        $this->load->view('admin/index', $data);
    }

    function add_link() {
        $data['logo'] = $this->db->get('site_settings')->row();
        $data['title'] = 'Add Link';
        $data['pages'] = $this->get_pages();
        $data['main'] = 'post/link_form';
        $this->load->view('admin/index', $data);
    }

    function save_link(){
        $data['en_title'] = $this->input->post('en_title');
        $data['es_title'] = $this->input->post('es_title');
        $data['order_id'] = $this->input->post('order_id');
        $data['parent_id'] = $this->input->post('parent_id');
        $data['url'] = $this->input->post('url');
        $data['remark'] = '3';
        $this->db->insert('tbl_post',$data);
        redirect(admin_url('post'));
    }

    function edit_link($id){
        $data['logo'] = $this->db->get('site_settings')->row();
        $data['title'] = 'Add Link';
        $data['pages'] = $this->get_pages();
        $data['result'] = $this->db->get_where('tbl_post', array('id'=>$id))->row_array();
        $data['main'] = 'post/link_form';
        $this->load->view('admin/index', $data);
    }

    function update_link(){
        $id = $_POST['id'];
        $data['order_id'] = $this->input->post('order_id');
        $data['en_title'] = $this->input->post('en_title');
        $data['es_title'] = $this->input->post('es_title');
        $data['parent_id'] = $this->input->post('parent_id');
        $data['url'] = $this->input->post('url');
        $this->db->where('id',$id);
        $this->db->update('tbl_post',$data);
        redirect(admin_url('post'));
    }


    function save() {

            $config['upload_path'] = 'uploads/images/full';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG|GIF';
            $config['max_size'] = '200000';
            $config['max_width'] = '1024000';
            $config['max_height'] = '768000';
            $config['encrypt_name'] = false;
            $config['remove_spaces'] = false;

        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('image'))
        {

            $upload_data    = $this->upload->data();
            
            $this->load->library('image_lib');

            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/full/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 600;
            $config['height'] = 500;
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            //small image
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/small/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 300;
            $config['height'] = 300;
            $this->image_lib->initialize($config); 
            $this->image_lib->resize();
            $this->image_lib->clear();

            //cropped thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/small/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/thumbnails/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            $this->image_lib->initialize($config);  
            $this->image_lib->resize(); 
            $this->image_lib->clear();

            $data['image'] = $upload_data['file_name'];
        }






            $config['upload_path'] = 'uploads/images/full';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG|GIF';
            $config['max_size'] = '200000';
            $config['max_width'] = '1024000';
            $config['max_height'] = '768000';
            $config['encrypt_name'] = false;
            $config['remove_spaces'] = false;

        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('background_image'))
        {

            $upload_data    = $this->upload->data();
            
            $this->load->library('image_lib');

            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/full/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 600;
            $config['height'] = 500;
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            //small image
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/small/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 300;
            $config['height'] = 300;
            $this->image_lib->initialize($config); 
            $this->image_lib->resize();
            $this->image_lib->clear();

            //cropped thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/small/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/thumbnails/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            $this->image_lib->initialize($config);  
            $this->image_lib->resize(); 
            $this->image_lib->clear();

            $data['background_image'] = $upload_data['file_name'];
        }



            $data['remark'] = '3';
            $data['order_id'] = $_POST['order_id'];
            $data['parent_id'] = $_POST['parent_id'];
            

            $data['en_title'] = $_POST['en_title'];
            $data['en_description'] = $_POST['en_description'];
           

            $data['es_title'] = $_POST['es_title'];
            $data['es_description'] = $_POST['es_description'];


            $data['en_excerpt'] = $_POST['en_excerpt'];
            $data['es_excerpt'] = $_POST['es_excerpt'];


            $data['custom_url'] = $_POST['custom_url'];


          $data['seotitle'] = $this->input->post('seotitle');
          $data['seokeyword'] = $this->input->post('seokeyword');
          $data['seodescription'] = $this->input->post('seodescription');


            if(empty($_POST['slug'])){
                $slug = url_title($_POST['en_title']);
            }else{
                $slug = url_title($this->input->post('slug'));
            }
            $data['slug'] = $slug;
            $this->db->insert('tbl_post', $data);
                
            $order_id = $this->db->insert_id();



            /*category start*/

            $category = array();
             if(isset($_POST['cat']))
            {
                 foreach($_POST['cat'] as $rescheck)
                 {
                     $category['category_id'] = $rescheck;
                     $category['post_id'] = $order_id;
                     $this->db->insert('tbl_category', $category); 
                 }
             }
              
            /*category end*/   



            $route['slug'] = $slug;
            $route['route'] = 'front/post/'.$order_id;
            $this->db->insert('tbl_route',$route);
            $route_id = $this->db->insert_id();


            
            $order['order_id'] = $this->input->post('order_id');
            $order['route_id'] = $route_id;

            $this->db->where('id',$order_id);
            $this->db->update('tbl_post',$order);

            redirect(base_url() . 'admin/post');

    }

    function delete($id) {

        $post = $this->db->get_where('tbl_post', array('id'=>$id))->row();
        $this->db->where('id',$post->route_id);
        $this->db->delete('tbl_route');

        $this->db->where('post_id',$id);
        $this->db->delete('tbl_category');

        $this->db->where('id', $id);
        $this->db->delete('tbl_post');
        redirect(base_url() . 'admin/post');
    }


    function edit($id) {
        $data['logo'] = $this->db->get('site_settings')->row();
        $data['title'] = "Edit";
        $data['pages'] = $this->get_pages();
        $data['result'] = $this->db->get_where('tbl_post', array('id'=>$id))->row_array();
        $data['category'] = $this->db->order_by('order_id','ASC')->get_where('tbl_post', array('remark'=>'6'))->result_array();
        $data['main'] = 'post/form';
        $this->load->view('admin/index', $data);
    }

    function update() {
        $id = $_POST['id'];
        

/*category start*/
            $this->db->where('post_id',$id);
            $this->db->delete('tbl_category');

            $category = array();
             if(isset($_POST['cat']))
            {
                 foreach($_POST['cat'] as $rescheck)
                 {
                     $category['category_id'] = $rescheck;
                     $category['post_id'] = $id;
                     $this->db->insert('tbl_category', $category); 
                 }
             }
  
/*category end*/ 




            $config['upload_path'] = 'uploads/images/full';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG|GIF';
            $config['max_size'] = '200000';
            $config['max_width'] = '1024000';
            $config['max_height'] = '768000';
            $config['encrypt_name'] = false;
            $config['remove_spaces'] = false;

        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('image'))
        {

            $upload_data    = $this->upload->data();
            
            $this->load->library('image_lib');

            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/full/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 600;
            $config['height'] = 500;
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            //small image
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/small/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 300;
            $config['height'] = 300;
            $this->image_lib->initialize($config); 
            $this->image_lib->resize();
            $this->image_lib->clear();

            //cropped thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/small/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/thumbnails/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            $this->image_lib->initialize($config);  
            $this->image_lib->resize(); 
            $this->image_lib->clear();

            $data['image'] = $upload_data['file_name'];
        }








            $config['upload_path'] = 'uploads/images/full';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG|GIF';
            $config['max_size'] = '200000';
            $config['max_width'] = '1024000';
            $config['max_height'] = '768000';
            $config['encrypt_name'] = false;
            $config['remove_spaces'] = false;

        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('background_image'))
        {

            $upload_data    = $this->upload->data();
            
            $this->load->library('image_lib');

            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/full/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 600;
            $config['height'] = 500;
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            //small image
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/small/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 300;
            $config['height'] = 300;
            $this->image_lib->initialize($config); 
            $this->image_lib->resize();
            $this->image_lib->clear();

            //cropped thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/small/'.$upload_data['file_name'];
            $config['new_image']    = 'uploads/images/thumbnails/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            $this->image_lib->initialize($config);  
            $this->image_lib->resize(); 
            $this->image_lib->clear();

            $data['background_image'] = $upload_data['file_name'];
        }




        $post = $this->db->get_where('tbl_post', array('id'=>$id))->row();
        $data['parent_id'] = $_POST['parent_id'];
        $data['order_id'] = $_POST['order_id'];

        $data['en_title'] = $_POST['en_title'];
        $data['en_description'] =$_POST['en_description'];


        $data['es_title'] = $_POST['es_title'];
        $data['es_description'] =$_POST['es_description'];


            $data['en_excerpt'] = $_POST['en_excerpt'];
            $data['es_excerpt'] = $_POST['es_excerpt'];


            $data['custom_url'] = $_POST['custom_url'];


      $data['seotitle'] = $this->input->post('seotitle');
      $data['seokeyword'] = $this->input->post('seokeyword');
      $data['seodescription'] = $this->input->post('seodescription');



        if(empty($_POST['slug'])){
            $slug = url_title($_POST['en_title']);
        }else{
            $slug = url_title($this->input->post('slug'));
        }
        $data['slug'] = $slug;

        $this->db->where('id', $id);
        $this->db->update('tbl_post', $data);

        $route['slug'] = $slug;
        $route['route'] = "front/post/".$id;
        $this->db->where('id',$post->route_id);
        $this->db->update('tbl_route', $route);

        redirect(base_url() . 'admin/post');
    }
    


    function enable($id){
        $data['status'] = '1';
        $this->db->where('id',$id);
        $this->db->update('tbl_post',$data);
        redirect(admin_url('post'));
    }


    function disable($id){
        $data['status'] = '0';
        $this->db->where('id',$id);
        $this->db->update('tbl_post',$data);
        redirect(admin_url('post'));
    }
    

    function manage_order(){
        
        $i = 0;
       
        foreach ($_POST['item'] as $value) {
            $data['order_id'] = $i;
            $this->db->where('id', $value);
            $this->db->update('tbl_post', $data);
            $i++;
        }
        echo "successfully updated";
    }



function html_ordered_menu($array=0, $parent_id = 0)
    {
      $array =   $this->db->order_by('order_id','ASC')->get_where('tbl_post', array('remark'=>'3'))->result_array();

      $menu_html = '<ul class="message-list droptrue" id="theList">';
      foreach($array as $element)
      {
        if($element['parent_id']==$parent_id)
        {
            $menu_html .= '<li id="item-'.$element['id'].'">';
            $menu_html .= '<div class="clearfix">';
            $menu_html .= '<div class="chat-member">';
            $menu_html .= '<h6> '.$element['en_title']. ' ('.$element['es_title'].')'. '</h6>';
            $menu_html .= '</div>';

            $menu_html .= '<div class="status">';
            $menu_html .= '<h6>';
            if($element['status'] == '0'){
            $menu_html .=   '<a href="'.admin_url('post/enable/'.$element['id']).'" class="btn btn-danger">Unpublished</button></a>';
            }if($element['status'] == '1'){
            $menu_html .=   '<a href="'.admin_url('post/disable/'.$element['id']).'" class="btn btn-success">Published</button></a>';
            }
            $menu_html .= '</h6>';
            $menu_html .= '</div>';



            $menu_html .= '<div class="chat-actions">';
            if($element['url'] != ''){
            $menu_html .= '<a title="Edit" href="'.admin_url('post/edit_link/'.$element['id']).'" class="btn btn-link btn-icon btn-xs"><i class="icon-pen"></i></a>';
            }else{
            $menu_html .= '<a title="Edit" href="'.admin_url('post/edit/'.$element['id']).'" class="btn btn-link btn-icon btn-xs"><i class="icon-pen"></i></a>';    
            }
            $menu_html .= '<a title="Remove" href="'.admin_url('post/delete/'.$element['id']).'" class="btn btn-link btn-icon btn-xs" onclick="return confirm(\'Are you sure ?\');"><i class="icon-remove"></i></a>';
            $menu_html .= '</div>';
            $menu_html .= '</div>';
            $menu_html .= $this->html_ordered_menu($array,$element['id']);
            $menu_html .= '</li>';
        }
      }
      $menu_html .= '</ul>';
      return $menu_html;
    }


    function remove_feature_img($id){
      $this->db->where('id',$id);
      $this->db->set('image','');
      $this->db->update('tbl_post');
      echo "Feature image removed successfully !";
    }


    function remove_background_img($id){
      $this->db->where('id',$id);
      $this->db->set('background_image','');
      $this->db->update('tbl_post');
      echo "Background image removed successfully !";
    }



}

?>