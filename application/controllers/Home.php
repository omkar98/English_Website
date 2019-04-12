<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$data['title'] = 'English Guru';
		$this->load->view('frontend/templates/header.php',$data);
    $this->load->view('frontend/home.php',$data);
		$this->load->view('frontend/templates/footer.php',$data);
	}
  public function aboutUs(){
		$data['title'] = 'About Us';
		$this->load->view('frontend/templates/header.php',$data);
    $this->load->view('frontend/aboutUs.php',$data);
		$this->load->view('frontend/templates/footer.php',$data);
	}
  public function dailyUseWords(){
		$data['title'] = 'Daily Use Words';
		$this->load->view('frontend/templates/header.php',$data);
    $this->load->view('frontend/dailyUseWords.php',$data);
		$this->load->view('frontend/templates/footer.php',$data);
	}
  public function dailyUseSentences(){
		$data['title'] = 'Daily Use Sentences';
		$this->load->view('frontend/templates/header.php',$data);
    $this->load->view('frontend/dailyUseSentences.php',$data);
		$this->load->view('frontend/templates/footer.php',$data);
	}
  public function sentencesByPlaces(){
		$data['title'] = 'Sentences by Places';
		$this->load->view('frontend/templates/header.php',$data);
    $this->load->view('frontend/sentencesByPlaces.php',$data);
		$this->load->view('frontend/templates/footer.php',$data);
	}
  public function contactUs(){
		$data['title'] = 'Contact Us';
		$this->load->view('frontend/templates/header.php',$data);
    $this->load->view('frontend/contactUs.php',$data);
		$this->load->view('frontend/templates/footer.php',$data);
	}
}
?>
