<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tubesregcont extends CI_Controller {
	public function index()
	{
		$this->load->view('tubesreg');
	}

	public function add_tubes_process(){ //pemrosesan dari registration page software
		$matkul = $_POST['matkul'];
		$kelas = $_POST['kelas'];
		$tim = $_POST['tim'];
		$ketua = $_POST['ketua'];
		$nimketua = $_POST['nimketua'];
		$anggota1 = $_POST['anggota1'];
		$anggota2 = $_POST['anggota2'];
		$anggota3 = $_POST['anggota3'];
		$nimanggota1 = $_POST['nimanggota1'];
		$nimanggota2 = $_POST['nimanggota2'];
		$nimanggota3 = $_POST['nimanggota3'];
		$cp = $_POST['cp'];
		$email = $_POST['email'];

		$data_insert = array(
			'matkul' => $matkul,
			'kelas' => $kelas,
			'tim' => $tim,
			'ketua' => $ketua,
			'nimketua' => $nimketua,
			'anggota1' => $anggota1,
			'anggota2' => $anggota2,
			'anggota3' => $anggota3,
			'nimanggota1' => $nimanggota1,
			'nimanggota2' => $nimanggota2,
			'nimanggota3' => $nimanggota3,
			'cp' => $cp,
			'email' => $email
		);
		$result = $this->mymodel->InsertData('tubes',$data_insert);
		
		if($result >= 1){
			$this->load->view('timeline');
		}else{
			echo "insert gagal"; 
		}
	}
}