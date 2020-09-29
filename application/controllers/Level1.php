<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level1 extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 private $filePath = "";
	 private $errorMsg = "";
	public function index() {
		$data = array();
		$data['error'] = $this->errorMsg;
		$data['file_path'] = $this->filePath;
		$this->load->view('template/header');
		$this->load->view('level1', $data);
		$this->load->view('template/footer');
	}

	public function submit() {
		$data = array(
			'answer' => $this->input->post('answer')
		);
		$result = array();
		if($data['answer'] == '8754') {
			$result['status'] = true;
			$this->filePath = base_url() . "assets/levels/level1/bLN8iypHCBZ9fCrji82TopKNnRqnilWXd2ekooaF/bdqWLe25sMD6aek3sPTc.txt";
			$this->index();
		}
		else {
			$result['status'] = false;
			$this->errorMsg = "Invalid PIN! Try again.";
			$this->index();
		}
	}
}
