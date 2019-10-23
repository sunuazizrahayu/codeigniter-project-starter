<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function set_baseurl()
{
	if (isset($_SERVER['HTTP_HOST']) && empty($_ENV['BASE_URL'])) {
		$base_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
		$base_url .= '://'. $_SERVER['HTTP_HOST'];
		$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
	} else {
		$base_url = $_ENV['BASE_URL'];
	}

	$CI =& get_instance();
	$CI->config->set_item('base_url', $base_url);
}

/* End of file env_baseurl.php */
/* Location: ./application/hooks/env_baseurl.php */