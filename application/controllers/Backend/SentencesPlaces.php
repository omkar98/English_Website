<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SentencesPlaces extends CI_Controller {

	//Places List
	public function list(){
		$data['title'] = 'Sentences-Places';
		$data['places_list'] = $this->db->get('englishguru_places')->result_array(); 
		$this->load->view('backend/templates/header.php',$data);
		$this->load->view('backend/sentences-places/list.php',$data);
		$this->load->view('backend/templates/footer.php',$data);
	}

	public function insert(){
		$config['upload_path'] = './uploads/images/';
		$config['allowed_types'] = '*';
		$config['file_name'] = $_FILES['place_image']['name'];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('place_image')){
			$uploadData = $this->upload->data();
		}
		$insert_places = array(
			'place_name' => $this->input->post('place_name'),
			'place_image' => $uploadData['file_name'],
			'created_at' => date('Y-m-d H:i:s')
		);	
		$this->db->insert('englishguru_places',$insert_places);
	}

	/************************Titles CRUD*******************************/

	//Title-List
	public function titleLists(){
		$data['title'] = 'Title-List';
		$data['places_list'] = $this->db->get('englishguru_titles')->result_array(); 
		$this->load->view('backend/templates/header.php',$data);
		$this->load->view('backend/sentences-places/title_lists.php',$data);
		$this->load->view('backend/templates/footer.php',$data);
	}
	//Titles-Add
	public function titleAdd(){
		$data['title'] = 'Title-Add';
		$data['places_list'] = $this->db->get('englishguru_places')->result_array(); 
		$this->load->view('backend/templates/header.php',$data);
		$this->load->view('backend/sentences-places/title_add.php',$data);
		$this->load->view('backend/templates/footer.php',$data);
	}
	public function insert_title(){
		$insert_title = array(
			'title_name' => $this->input->post('title_name'),
			'title_text' => $this->input->post('title_text'),
			'place_id' => $this->input->post('place_id'),
			'created_at' => date('Y-m-d H:i:s')
		);	
		$this->db->insert('englishguru_titles',$insert_title);
	}

}

?>