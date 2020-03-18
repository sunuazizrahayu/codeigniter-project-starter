<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function env_v3()
{
	$dotenv = Dotenv\Dotenv::create(APPPATH.'..');
	$dotenv->load();
}

function env_v4()
{
	$dotenv = Dotenv\Dotenv::createImmutable(APPPATH.'..');
	$dotenv->load();
}

/* End of file env.php */
/* Location: ./application/hooks/env.php */