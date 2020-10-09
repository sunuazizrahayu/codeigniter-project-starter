<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol']	 = getenv('MAIL_DRIVER');
$config['smtp_host'] = getenv('MAIL_HOST'); //ssl://smtp.gmail.com
$config['smtp_port'] = getenv('MAIL_PORT'); //465
$config['smtp_user'] = getenv('MAIL_USERNAME'); //youremail@gmail.com
$config['smtp_pass'] = getenv('MAIL_PASSWORD'); //youremailpassword

$config['wordwrap']  = TRUE;
$config['mailtype']  = 'html';
$config['charset'] 	 = 'utf-8';
$config['crlf']	     = "\r\n";
$config['newline']   = "\r\n";

/* End of file email.php */
/* Location: ./application/config/email.php */