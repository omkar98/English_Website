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
		$data['words_list'] = $this->db->get('englishguru_words')->result_array();
		$this->load->view('frontend/templates/header.php',$data);
		$this->load->view('frontend/dailyUseWords.php',$data);
		$this->load->view('frontend/templates/footer.php',$data);
	}
	public function dailyUseSentences(){
		$data['title'] = 'Daily Use Sentences';
		$data['sentences_list'] = $this->db->get('englishguru_sentences')->result_array();
		$this->load->view('frontend/templates/header.php',$data);
		$this->load->view('frontend/dailyUseSentences.php',$data);
		$this->load->view('frontend/templates/footer.php',$data);
	}
	public function sentencesByPlaces(){
		$data['title'] = 'Sentences by Places';
		$data['places_list'] = $this->db->get('englishguru_places')->result_array();
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
	public function place_title(){
		$url = parse_url($_SERVER['REQUEST_URI']);
		$place_id = $this->uri->segment(3);
		$data['places_titles_list'] = $this->db->where('place_id',$place_id)->get('englishguru_titles')->result_array();
		$data['title'] = $this->uri->segment(2);
		$this->load->view('frontend/templates/header.php',$data);
		$this->load->view('frontend/placesTitles.php',$data);
		$this->load->view('frontend/templates/footer.php',$data);

	}
}
?>
