<?php

class Front extends CI_Controller {

    public function __construct() {
        parent::__construct();

   header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
        header("Cache-Control: no-store,no-cache, must-revalidate");


        $this->load->library('form_validation');
        $this->load->helper('text', 'url', 'text','Stripe_lib');
        $this->load->helper('date');
        $this->load->library('pagination');
        $this->load->helper('language','string');
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->helper("file");
        $this->load->model('Email_model');
        $lang = $this->lang->lang();


        if ($lang == 'en') {
            $this->lang->load('menu', 'english');
        } else {
            $this->lang->load('menu', 'spanish');
        }


    }

    function show_msg() {
        $setting = $this->db->get('site_settings')->row();
        $data['setting'] = $setting;
        $this->load->view('temp', $data);
    }


    function stripe(){
        $this->load->view('stripe');
    }


    public function checkout()
    {

require_once(APPPATH.'libraries/Stripe/init.php');
/*require_once(APPPATH.'libraries/Stripe/lib/Stripe.php');
require_once(APPPATH.'libraries/Stripe/lib/Error/Base.php');
require_once(APPPATH.'libraries/Stripe/lib/Error/Authentication.php');
require_once(APPPATH.'libraries/Stripe/lib/HttpClient/ClientInterface.php');
require_once(APPPATH.'libraries/Stripe/lib/HttpClient/CurlClient.php');
require_once(APPPATH.'libraries/Stripe/lib/Util/Util.php');
require_once(APPPATH.'libraries/Stripe/lib/ApiRequestor.php');
require_once(APPPATH.'libraries/Stripe/lib/Util/RequestOptions.php');
require_once(APPPATH.'libraries/Stripe/lib/Util/Set.php');
require_once(APPPATH.'libraries/Stripe/lib/JsonSerializable.php');
require_once(APPPATH.'libraries/Stripe/lib/StripeObject.php');
require_once(APPPATH.'libraries/Stripe/lib/ApiResource.php');
require_once(APPPATH.'libraries/Stripe/lib/Charge.php');
*/



\Stripe\Stripe::setApiKey("sk_test_iloVvrI1dbpozBFxVs1oesEb");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create a charge: this will charge the user's card
try {
  $charge = \Stripe\Charge::create(array(
    "amount" => 10000, // Amount in cents
    "currency" => "usd",
    "source" => $token,
    "description" => "Test charge"
    ));
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}
 echo $token;
 
    }



    function index() {

        $setting = $this->db->get('site_settings')->row();
        if ($setting->offline == 1) {
            $this->show_msg();
        } else {
            $this->home();
        }
    }


    function home() {
        $lang = $this->lang->lang();

        $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result();


        $data['home_first_step'] = $this->db->query('select tc.category_id as category_id, tp.id as post_id, tp.'.$lang.'_title as title, tp.'.$lang.'_description as description, tp.image as image from tbl_post tp join tbl_category tc on (tc.post_id = tp.id) where category_id=1 order by post_id asc;')->result();


        $data['home_showcase_category'] = $this->db->query('select id, '.$lang.'_title as title, '.$lang.'_description as description, '.$lang.'_excerpt as excerpt, image from tbl_post where id=5 ')->row();

        $data['home_reasons_category'] = $this->db->query('select id, '.$lang.'_title as title, '.$lang.'_description as description, '.$lang.'_excerpt as excerpt, image from tbl_post where id=6 ')->row();


        $data['home_reasons_category_posts'] = $this->db->query('select tc.category_id as category_id, tp.id as post_id, tp.'.$lang.'_title as title, tp.'.$lang.'_description as description, tp.image as image from tbl_post tp join tbl_category tc on(tc.post_id = tp.id) where category_id=6 order by post_id asc;')->result();


        $data['tucasa_warrenty'] = $this->db->query('select id, '.$lang.'_title as title, '.$lang.'_description as description, '.$lang.'_excerpt as excerpt, image, background_image from tbl_post where id=11 ')->row();


        $data['tucasa_service'] = $this->db->query('select id, '.$lang.'_title as title, '.$lang.'_description as description, '.$lang.'_excerpt as excerpt, image, background_image from tbl_post where id=12 ')->row();


        $data['tucasa_service_posts'] = $this->db->query('select tc.category_id as category_id, tp.id as post_id, tp.'.$lang.'_title as title, tp.'.$lang.'_description as description, tp.image as image, background_image from tbl_post tp join tbl_category tc on(tc.post_id = tp.id) where category_id=12 order by post_id asc;')->result();

        $data['tucasa_testimonials'] = $this->db->query('select tc.category_id as category_id, tp.id as post_id, tp.'.$lang.'_title as title, tp.'.$lang.'_description as description, tp.image as image, background_image from tbl_post tp join tbl_category tc on(tc.post_id = tp.id) where category_id=18 order by post_id asc;')->result();

       $this->load->view('bkp',$data);
    }




    function register() {

$user = $this->session->userdata('user_id');

if(!empty($user)){
redirect(site_url('user/profile'));
}

        $lang = $this->lang->lang();
        $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result();


        $this->load->view('register',$data);
    }

    function do_register() {

        $this->form_validation->set_rules('f_name', 'Full Name', 'trim|require_onced|xss_clean');
        $this->form_validation->set_rules('contact_mobile', 'Mobile No', 'trim|require_onced|xss_clean');
        $this->form_validation->set_rules('contact_phone', 'Phone No', 'trim|xss_clean');
        $this->form_validation->set_rules('username', 'User Name', 'trim|require_onced|xss_clean|is_unique[tbl_staff.username]');
        $this->form_validation->set_rules('email', 'Email', 'trim|require_onced||valid_email|is_unique[tbl_staff.email]');
        $this->form_validation->set_rules('address', 'Address', 'trim|require_onced|xss_clean');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|require_onced|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'require_onced');
        $this->form_validation->set_rules('c_password', 'Confirm Password', 'require_onced|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->register();
        } else {
            $data['name'] = $this->input->post('f_name');
            $data['username'] = $this->input->post('username');
            $data['contact_phone'] = $this->input->post('contact_phone');
            $data['contact_mobile'] = $this->input->post('contact_mobile');
            $data['email'] = $this->input->post('email');
            $data['address'] = $this->input->post('address');
            $data['zip'] = $this->input->post('username');
            $data['password'] = md5(config_item('salt') . $this->input->post('password'));
            $data['created'] = time();
            $this->db->insert('tbl_staff', $data);

            $this->session->set_flashdata('registered', 'Congratulations, your account is in pending for for admin approval.');
            redirect(base_url('en/login'));
        }
    }

    function login() {

$user = $this->session->userdata('user_id');

if(!empty($user)){
redirect(site_url('user/profile'));
}

        $lang = $this->lang->lang();
        $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result();        
        $this->load->view('login',$data);
    }
    
    
    function login_process(){
      
        $this->form_validation->set_rules('username', 'Username', 'trim|require_onced');
        $this->form_validation->set_rules('password', 'Password', 'trim|require_onced');
         if ($this->form_validation->run() == FALSE) {
             $this->login();
         }else{
             
             $username = $this->input->post('username');
             $password = md5(config_item('salt') . $this->input->post('password'));
             
             $this->db->where('username',$username);
             $this->db->where('password',$password);
           $query =  $this->db->get('tbl_staff')->row();
             
       if(count($query) == 1){
      
      $this->session->set_userdata('user_id',$query->id);
     redirect(site_url('user/profile'));
           
       }else{
           $this->session->set_flashdata('unsuccess','Username or password not matched.');
           redirect(site_url('login'));
       }
         }
        
    }
    


    function profile(){
     $user = $this->session->userdata('user_id');

     $data['user_detail'] = $this->db->get_where('tbl_staff',array('id'=>$user))->row();
 if ($data['user_detail']->image != '' && file_exists('uploads/users/' . $data['user_detail']->image)) {
                    $data['user_detail']->image_path = base_url('uploads/users/' . $data['user_detail']->image);
                } else {
                    $data['user_detail']->image_path = base_url('assets/images/avatar.png');
                }




     if(!$user || empty($user)){
        redirect(site_url('login'));
     }else{
        $lang = $this->lang->lang();
        $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result();  
        $this->load->view('profile',$data);
    }
}




function edit_profile(){
$id = $this->session->userdata('user_id');



$data['user_detail'] = $this->db->get_where('tbl_staff',array('id'=>$id))->row();


 if ($data['user_detail']->image != '' && file_exists('uploads/users/' . $data['user_detail']->image)) {
                    $data['user_detail']->image_path = base_url('uploads/users/' . $data['user_detail']->image);
                } else {
                    $data['user_detail']->image_path = base_url('assets/images/avatar.png');
                }





 $lang = $this->lang->lang();
        $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result();  
        $this->load->view('profile_edit',$data);



}


function update_profile($id){
   
        $this->form_validation->set_rules('full_name', 'Full Name', 'trim|require_onced|xss_clean');
        $this->form_validation->set_rules('mobile', 'Mobile No', 'trim|require_onced|xss_clean');
        $this->form_validation->set_rules('phone', 'Phone No', 'trim|xss_clean');
        $this->form_validation->set_rules('address', 'Address', 'trim|require_onced|xss_clean');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|require_onced|xss_clean');

     



if ($this->form_validation->run() == FALSE) {
            $this->profile_edit($id);
        } else {





     $this->load->library('upload');
            $config['upload_path'] = './uploads/users';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG';
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('user_image')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $upload = $this->upload->data('user_IMAGE');
                $data['image'] = $upload['file_name'];
            }
              


$data['name'] = $this->input->post('full_name');
$data['contact_phone'] = $this->input->post('phone');
$data['contact_mobile'] = $this->input->post('mobile');
$data['address'] = $this->input->post('address');
$data['zip'] = $this->input->post('zip_code');

$this->db->where('id',$id);
$this->db->update('tbl_staff',$data);

$this->session->set_flashdata('success','Your profile has been updated successfully.');

redirect(site_url('user/profile'));

        }




}



function reset_password(){
      $lang = $this->lang->lang();

      $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result();  
 $this->load->view('reset_password',$data);
}





function reset_password_process(){

  /*  echo random_string('alnum',16);
    exit;*/

 $this->form_validation->set_rules('email','Email','valid_email|require_onced|callback_email_check');
        if ($this->form_validation->run() == FALSE) {
            $this->reset_password();
        } else {
            $user_details = $this->db->get_where('tbl_staff', array('email' => $_POST['email']))->row();
            $data['token'] = random_string('alnum',16);
            $user_details->token_no = $data['token'];
         

                $forgot_password = $user_details->token;
                $this->db->where('id',$user_details->id);
                $this->db->update('tbl_staff', $data);
            $this->Email_model->forgot_email($user_details, $data);
            $this->session->set_flashdata('success', 'An email has been sent to your email. Please Check your email.');
            redirect(site_url('login'));
        }
}


function update_password($key = FALSE){

  $this->db->where('token',$key);
  $user = $this->db->get('tbl_staff')->row();
  $data['user_details'] = $user;
   
  if(empty($user)){
    redirect(site_url('login'));
  }


 $lang = $this->lang->lang();
 $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result(); 

 $this->load->view('change_password_form',$data);



}



function change_confirm_password($key = FALSE){
$this->form_validation->set_rules('newpassword','New Password','require_onced');

if ($this->form_validation->run() == FALSE) {
            $this->update_password($key);
        } else {

$new_password = md5(config_item('salt') . $this->input->post('newpassword'));
  $data['password'] = $new_password;

  $this->db->where('token',$key);
  $this->db->update('tbl_staff',$data);


$dataa['token'] = '';
  $this->db->where('token',$key);
  $this->db->update('tbl_staff',$dataa);

  $this->session->set_flashdata('success','Please login with your new password');
  redirect(site_url('login'));


}
        }













 function email_check($strr) {

        $this->db->where('email', $strr);
        $query = $this->db->get('tbl_staff')->row();

        if (count($query) == 0) {
            $this->form_validation->set_message('email_check', 'This email is not registered in our database');
            return FALSE;
        } else {
            return TRUE;
        }
    }




    function reservation_process(){
       // debug($_POST); exit;
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $email = $this->input->post('email');
        $contact_mobile = $this->input->post('mobile');   
        $address1 = $this->input->post('address_line1');
        $address2= $this->input->post('address_line2');
        $zip = $this->input->post('postal'); 
        $password = $this->input->post('password');
        $TotalAmount = $this->input->post('TotalAmount');
        $cleaning_products = $this->input->post('yesrequire_onced');
        $ChoosedDate = $this->input->post('ChoosedDate');
        $ChoosedTime = $this->input->post('ChoosedTime');
        $TotalTime = $this->input->post('TotalTime');
        $service_type = $this->input->post('ChoosedService');
        $city = $this->input->post('town');
        $message = $this->input->post('message');
        $payment_type = $this->input->post('payment');
        $order_date = time();


// insert user detail
        $user['name'] = $fname.' '.$lname;
        $user['email'] = $email;
        $user['address'] = $address1;
        $user['address1'] = $address2;
        $user['zip'] = $zip;
        $user['city'] = $city;
        $user['user_type'] = '0';
        $user['contact_mobile'] = $contact_mobile;
        $user['created'] = $order_date;
        $user['password'] = md5(config_item('salt') . $password);
        $this->db->insert('tbl_staff',$user);

        $user_id = $this->db->insert_id();
        $order['user_id'] = $user_id;
        $order['address_line1'] = $address1;
        $order['address_line2'] = $address2;
        $order['service_type'] = $service_type;
        $order['postal'] = $zip;
        $order['city'] = $city;
        $order['date'] = $ChoosedDate;
        $order['time'] = $ChoosedTime;
        $order['hours'] = $TotalTime;
        $order['message'] = $message;
        $order['payment_method'] = $payment_type;
        $order['total_cost'] = $TotalAmount;
        $order['cleaning_products'] = $cleaning_products;
        $order['order_date'] = $order_date;
        $this->db->insert('tbl_order', $order);  
        

        $this->checkout();
         //redirect(site_url());     

    }




    
    function faq(){
        $lang = $this->lang->lang();
        $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result();        

        $data['faq_category'] = $this->db->query('select id, '.$lang.'_title as title, '.$lang.'_description as description from tbl_post where parent_id = 28 order by id asc')->result();
 

      $this->load->view('faq',$data);  
    }
    

    function pricing(){
        $lang = $this->lang->lang();
        $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result();    
        $data['pricing'] = $this->db->query('select '.$lang.'_title as title, '.$lang.'_description as description from tbl_post where id = 71 ')->row();    
        $this->load->view('pricing',$data);
    }


    function reservation(){
        $lang = $this->lang->lang();
        $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result();        
        $this->load->view('reservation',$data);        
    }


    function homework(){
        $lang = $this->lang->lang();
        $data['home_main_menu'] = $this->db->query('select '.$lang.'_title as title, url from tbl_post where parent_id=23 ')->result();     
        $data['how_it_works_category'] = $this->db->query('select id, '.$lang.'_title as title from tbl_post where id=52 ')->row();  
        $data['how_it_works_posts'] = $this->db->query('select tc.category_id as category_id, tp.id as post_id, tp.'.$lang.'_title as title, tp.'.$lang.'_description as description, tp.image as image, background_image from tbl_post tp join tbl_category tc on(tc.post_id = tp.id) where category_id=52 order by post_id asc;')->result();
        $data['you_have_doubts'] = $this->db->query('select id, '.$lang.'_title as title, '.$lang.'_description as description from tbl_post where id= 59')->row();
        $data['what_includes_category'] = $this->db->query('select id, '.$lang.'_title as title, '.$lang.'_description as description from tbl_post where id = 60 ')->row();
        $data['what_includes_posts'] = $this->db->query('select tc.category_id as category_id, tp.id as post_id, tp.'.$lang.'_title as title, tp.'.$lang.'_description as description, tp.image as image, background_image from tbl_post tp join tbl_category tc on(tc.post_id = tp.id) where category_id=60 order by post_id asc;')->result();
        $data['what_includes_services'] = $this->db->query('select tc.category_id as category_id, tp.id as post_id, tp.'.$lang.'_title as title, tp.'.$lang.'_description as description, tp.image as image, background_image from tbl_post tp join tbl_category tc on(tc.post_id = tp.id) where category_id=65 order by post_id asc;')->result();
        $data['what_not_includes_post'] = $this->db->query('select id, '.$lang.'_title as title, '.$lang.'_description as description from tbl_post where id = 64 ')->row();
        $data['available_area'] = $this->db->query('select id, '.$lang.'_title as title, '.$lang.'_description as description from tbl_post where id = 70 ')->row();
        $this->load->view('homework',$data);        
    }


    function html_ordered_menu($array = 0, $parent_id = 29) {
        $array = $this->db->order_by('order_id', 'ASC')->get_where('tbl_post', array('remark' => '1'))->result_array();

        $menu_html = '<ul class="message-list droptrue" id="sortable">';
        foreach ($array as $element) {
            if ($element['parent_id'] == $parent_id) {
                $menu_html .= '<li id="item-' . $element['id'] . '">';
                $menu_html .= '<div class="clearfix">';
                $menu_html .= '<div class="chat-member">';
                $menu_html .= '<h6> ' . $element['title'] . '</h6>';
                $menu_html .= '</div>';
                $menu_html .= '</div>';
                $menu_html .= $this->html_ordered_menu($array, $element['id']);
                $menu_html .= '</li>';
            }
        }
        $menu_html .= '</ul>';
        return $menu_html;
    }






    function logout(){

        $this->session->unset_userdata('user_id');
    $this->session->sess_destroy();

    redirect(site_url('login'));

    }



}

?>