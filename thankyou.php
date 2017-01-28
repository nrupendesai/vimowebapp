<?php

$get_params = $_POST;
$message = 'Name : '.$get_params['name'].'<br>'.
			'Phone Number : '.$get_params['phone'].'<br>'.
			'Email : '.$get_params['email'].'<br>'.
			'Message : '.$get_params['message'].'<br>';
$to      = 'nrupen92@gmail.com';
$subject = 'Website Form Contact';
$message = $get_params['message']+ 'Contact Number : '.$get_params['phone'];
$headers = 'From:webapp@vimoconsulting.com'. "\r\n" .
		'X-Mailer: PHP/' . phpversion();
try{
	mail($to, $subject, $message, $headers);
}catch(Exception $e){
	
print_r($e);exit;
}

?>
