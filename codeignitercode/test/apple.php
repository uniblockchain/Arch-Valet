<?php
$deviceToken='46a477bcdf5458990dba04d2e0b0cc9c2b1409380d27fd5bfac079cfa2784839';
			    
$passphrase = 'kk';
$message = "'Test','Hello Push Notification'";

$body['aps'] = array(
                     'alert' => $message,
                     'badge' => 1,
                     'sound' => 'default'
                     );



$ctx = stream_context_create();
stream_context_set_option($ctx, 'ssl', 'local_cert', 'pushcert.pem'); // Pem file to generated // openssl pkcs12 -in pushcert.p12 -out pushcert.pem -nodes -clcerts // .p12 private key generated from Apple Developer Account
stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
$fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx); // production
 //$fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx); // developement
  echo "<p>Connection Open</p>";
    if(!$fp){
        echo "<p>Failed to connect!<br />Error Number: " . $err . " <br />Code: " . $errstrn . "</p>";
        return;
    } else {
        echo "<p>Sending notification!</p>";    
    }


$payload = json_encode($body);
$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
//var_dump($msg)
$result = fwrite($fp, $msg, strlen($msg));
  if (!$result)
            echo '<p>Message not delivered ' . PHP_EOL . '!</p>';
        else
            echo '<p>Message successfully delivered ' . PHP_EOL . '!</p>';
fclose($fp);




