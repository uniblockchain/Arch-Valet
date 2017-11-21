<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Push extends CI_Model {

	// api key for the current project
	var $apiKey = "AIzaSyAWggUPb6i7w6ysnj8cwqHL1Tr6qG9fAKU";

	// google GCM url
	var $url = 'https://android.googleapis.com/gcm/send';

	public function android($title,$body, $unite_id)
	{
		$registrationIDs = array();
		// getting all the registred devices from the db
		$results = $this->db->get_where('tbl_device_token', array('user_id'=>$unite_id))->result();

		// loop through them
		foreach ($results as $key => $value) {
				$registrationIDs[] = $value->token;
		}

		// if no device found return 
		if(empty($registrationIDs))
			return;

		// pre the data for push notification
		$fields = array(
			'registration_ids'  => $registrationIDs,
			'data'              => array("title"=>$title,"body"=>$body),
			);
		// set headers
		$headers = array( 
			'Authorization: key=' . $this->apiKey,
			'Content-Type: application/json'
			);

		// init curl request 
		$ch = curl_init();

		curl_setopt( $ch, CURLOPT_URL, $this->url );
		curl_setopt( $ch, CURLOPT_POST, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0); 
		curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($fields) );

		// send request
		$result = curl_exec($ch);
		// debug the error
		if(curl_errno($ch)){ echo 'Curl error: ' . curl_error($ch); }
		// close connections
		curl_close($ch);

	}


	public function android_admin($title,$body)
	{
		$registrationIDs = array();
		// getting all the registred devices from the db
		$results = $this->db->get_where('tbl_device_token', array('user_id'=>'admin'))->result();

		// loop through them
		foreach ($results as $key => $value) {
				$registrationIDs[] = $value->token;
		}

		// if no device found return 
		if(empty($registrationIDs))
			return;

		// pre the data for push notification
		$fields = array(
			'registration_ids'  => $registrationIDs,
			'data'              => array("title"=>$title,"body"=>$body),
			);
		// set headers
		$headers = array( 
			'Authorization: key=' . $this->apiKey,
			'Content-Type: application/json'
			);

		// init curl request 
		$ch = curl_init();

		curl_setopt( $ch, CURLOPT_URL, $this->url );
		curl_setopt( $ch, CURLOPT_POST, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0); 
		curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($fields) );

		// send request
		$result = curl_exec($ch);
		// debug the error
		if(curl_errno($ch)){ echo 'Curl error: ' . curl_error($ch); }
		// close connections
		curl_close($ch);

	}



	function ios($title, $msg, $unite_id){

		$certi = FCPATH.'assets/pushcert.pem';

		$devices = $this->db->get_where('tbl_device_token', array('user_id'=>$unite_id))->result();

		
			$message = $msg;
			    
			$body['aps'] = array(
			            'alert' => array(
			                'title' => $title,
			                'body' => $message,
			             ),
			            'sound' => 'default'
			        );


			$body['category'] = 'profile';
			$body['sender'] = 'Archvalet';
			    
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
			//echo 'Connected to APNS' . PHP_EOL;
			$payload = json_encode($body);

		foreach($devices as $d){
			$deviceToken = $d->token;

			$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

			$result = fwrite($fp, $msg, strlen($msg));

/*			if (!$result)
			    echo 'Message not delivered' . PHP_EOL;
			else
			    echo 'Message successfully delivered' . PHP_EOL;*/
			
		}	
		fclose($fp);

	}



	
}