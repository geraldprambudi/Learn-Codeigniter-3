<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function profil() {
		echo "hello my name is bewoksatukosong";
		// $this->load->view('profil');
	}

}
