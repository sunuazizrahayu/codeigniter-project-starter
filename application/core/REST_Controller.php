<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class REST_Controller extends RestController {

	public $data;

	public function __construct()
	{
		parent::__construct();

		// retrieve data request POST
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && getallheaders()['Content-Type'] === 'application/json') {
			$_POST = json_decode(file_get_contents("php://input"), true);
		}

		
		// retrieve data request PUT
		if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
			$putfp = fopen('php://input', 'r');
			$data = fread($putfp, 1024);
			fclose($putfp);

			if (getallheaders()['Content-Type'] === 'application/json') {
				$_POST = json_decode($data, true);
				
				//check form_validation is loaded
				if (isset($this->form_validation)) {
					$this->form_validation->set_data($this->put());
				}
			}
		}
	}

}

/* End of file REST_Controller.php */
/* Location: ./application/core/REST_Controller.php */
