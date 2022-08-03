<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/Base.php");

class Project extends Base {

	public function index() {
		$data['page_name'] = "ตาราง";
		$this->load->model('M_pms');
		$data['data'] = $this->M_pms->get_data('pms_user');
		// $data['data'] = $this->Test->get_data('actor', array('actor_id' => "1"));
		$this->output('index', $data);
	}

	public function example() {
		$data['page_name'] = "ตัวอย่าง";
		$this->output('example', $data);
	}

}
