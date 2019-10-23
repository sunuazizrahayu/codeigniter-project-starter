<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function init_env()
{
	$dotenv = Dotenv\Dotenv::create(FCPATH);
	$dotenv->load();
}

/* End of file env.php */
/* Location: ./application/hooks/env.php */