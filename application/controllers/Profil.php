<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index()
	{
        echo "hello profil<br>";
        $data['judul'] = 'daftar mahasiswa';
        $this->load->view('profil', $data);
	} 
}
