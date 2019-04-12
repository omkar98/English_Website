<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		$data['title'] = 'AdminDashboard';
		$this->load->view('backend/templates/header.php',$data);
		$this->load->view('backend/templates/footer.php',$data);
	}
	
	//Daily Use Words
	public function words_list(){
		$data['title'] = 'Daily Use Words';
		$this->load->view('backend/templates/header.php',$data);
		$this->load->view('backend/words/list.php',$data);
		$this->load->view('backend/templates/footer.php',$data);
	}
}

?>