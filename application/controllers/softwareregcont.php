<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Softwareregcont extends CI_Controller {
	public function index()
	{
		$this->load->view('softwarereg');
	}

	public function add_software_process(){ //pemrosesan dari registration page software
		$tim = $_POST['tim'];
		$ketua = $_POST['ketua'];
		$anggota1 = $_POST['anggota1'];
		$anggota2 = $_POST['anggota2'];
		$anggota3 = $_POST['anggota3'];
		$univ = $_POST['univ'];
		$cp = $_POST['cp'];
		$email = $_POST['email'];

		$data_insert = array(
			'tim' => $tim,
			'ketua' => $ketua,
			'anggota1' => $anggota1,
			'anggota2' => $anggota2,
			'anggota3' => $anggota3,
			'univ' => $univ,
			'cp' => $cp,
			'email' => $email
		);
		$result = $this->mymodel->InsertData('software',$data_insert);
		
		if($result >= 1){
			$this->load->view('timeline');
		}else{
			echo "insert gagal"; 
		}
	}
}