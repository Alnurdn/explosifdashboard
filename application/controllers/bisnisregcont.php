<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bisnisregcont extends CI_Controller {
	public function index()
	{
		$this->load->view('bisnisreg');
	}

	public function add_bisnis_process(){ //pemrosesan dari registration page bisnis
		$tim = $_POST['tim'];
		$ketua = $_POST['ketua'];
		$anggota1 = $_POST['anggota1'];
		$anggota2 = $_POST['anggota2'];
		$univ = $_POST['univ'];
		$cp = $_POST['cp'];
		$email = $_POST['email'];

		$data_insert = array(
			'tim' => $tim,
			'ketua' => $ketua,
			'anggota1' => $anggota1,
			'anggota2' => $anggota2,
			'univ' => $univ,
			'cp' => $cp,
			'email' => $email
		);
		$result = $this->mymodel->InsertData('bisnis',$data_insert);
		
		if($result >= 1){
			$this->load->view('timeline');
		}else{
			echo "insert gagal"; 
		}
	}
}