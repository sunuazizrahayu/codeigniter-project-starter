<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = ''; //ssl://smtp.gmail.com
$config['smtp_user'] = ''; //youremail@gmail.com
$config['smtp_pass'] = ''; //youremailpassword
$config['smtp_port'] = ''; //465

$config['wordwrap'] = TRUE;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";

/* End of file email.php */
/* Location: ./application/config/email.php */