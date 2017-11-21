<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('client');
        $this->load->helper('admin'); 
    }

    function index(){
        $this->load->view('admin/login_form');
    }


    function push(){



$certi = FCPATH.'assets/pushcert.pem';
//echo $certi; exit;
$deviceToken='556fa4087d4c3f2cc6c92c6a80b5a374848b2245b390f3923e352157b493251d';
$message = 'Hello Neil how are you ?';
    
$body['aps'] = array(
            'alert' => array(
                'title' => 'Push Notification Ko TITLE',
                'body' => 'La kaam banyo aaja',
             ),
            'sound' => 'default',
            'badge' => 1
        );


// $body['category'] = 'message';
$body['category'] = 'profile';
//$body['category'] = 'dates';
//$body['category'] = 'daily_dates';
//$body['sender'] = 'jamesHAW';
$body['sender'] = 'Neil';
    
//Server stuff
$passphrase = '';
$ctx = stream_context_create();
stream_context_set_option($ctx, 'ssl', 'local_cert', $certi);
stream_context_set_option($ctx, 'ssl', 'passphrase', 'k');
$fp = stream_socket_client(
    'ssl://gateway.push.apple.com:2195', $err,
    $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
if (!$fp)
    exit("Failed to connect: $err $errstr" . PHP_EOL);
echo 'Connected to APNS' . PHP_EOL;
$payload = json_encode($body);
// Build the binary notification
$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
// Send it to the server
$result = fwrite($fp, $msg, strlen($msg));
// print_r($result);
// exit;
if (!$result)
    echo 'Message not delivered' . PHP_EOL;
else
    echo 'Message successfully delivered' . PHP_EOL;
fclose($fp);




    }





}

?>