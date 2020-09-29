<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level2 extends CI_Controller {

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
	 private $errorMsg = "";
	 private $levelName = "Level 2";
	public function index() {
		$data = array();
		$data['error'] = $this->errorMsg;
		$data['level'] = $this->levelName;
		$this->load->view('template/header');
		$this->load->view('level2',$data);
		$this->load->view('template/footer');
	}

	public function submit() {
		$data = array(
			'flag' => $this->input->post('flag')
		);
		$result = array();
		//decode
		$devalue = base64_decode($data['flag']);
		//decrypt using private key
		$fp=fopen("C:\wamp64\bin\apache\apache2.4.46\conf\key\privateKey.key","r");
		$priv_key=fread($fp,8192);
		fclose($fp);
		$res = openssl_get_privatekey($priv_key,"localhost");
		openssl_private_decrypt($devalue,$decValue,$res);

		if( $decValue == 'DBLitvnZg7WGZnxKbPDfrV0ryLOKjKMH') {
			$result['status'] = true;
			redirect('/level3');
		}
		else {
			$result['status'] = false;
			$this->errorMsg = "Invalid Flag! Try again.";
			$this->index();
		}
	}
}
