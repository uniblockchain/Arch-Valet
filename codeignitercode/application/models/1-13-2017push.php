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
		$results = $this->db->get_where('tbl_device_token', array('platform'=>'0'))->result();

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


	
}
