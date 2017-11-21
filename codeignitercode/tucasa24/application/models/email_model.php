<?php

class Email_model extends CI_Model {

    function __construct() {
        parent::__construct();

         $this->load->library('email');
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;

$this->email->initialize($config);
      //  $adm = $this->db->get_where('admin',array('id'=>1))->row();

/*
        $config = Array(
            'protocol' => PROTOCOL,
            'smtp_host' => SMTP_HOST,
            'smtp_port' => SMTP_PORT,
            'smtp_user' => SMTP_USER,
            'smtp_pass' => SMTP_PASS,
            'mailtype' => MAIL_TYPE,
            'charset' => CHARSET,
        );
*/
        $this->load->helper('file');
        $this->load->library('email', $config);
    }

    function forgot_email($user_details,$data) {
          
     $datas['user_details'] = $user_details;
     $datas['details'] = $data;

 


        $this->email->from('tucasa24.com', 'Tucasa 24');
        $this->email->to($user_details->email);
       // $this->email->reply_to('ejamjobs@gmail.com');
        $this->email->subject("Tucasa Forgot Password");
        $msg = $this->load->view('email/forgot_pass', $datas, true);
        $this->email->message($msg);
        $this->email->send();
       echo $this->email->print_debugger();
       exit;
        return true;
    }

   

}
