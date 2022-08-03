<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function output($view, $data = []) {
        $this->load->view("template/header", $data); // ส่วน header
		$this->load->view("template/sidebar", $data); // ส่วน sidebar

		$this->load->view($view, $data); // แสดงหน้า view

        $this->load->view("template/footer", $data); // ส่วน footer
    }

}
