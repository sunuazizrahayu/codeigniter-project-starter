<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

//load phpdotenv
$hook['pre_system'][] = array(
	'function' => 'env_v4',
	'filename' => 'env.php',
	'filepath' => 'hooks'
);
