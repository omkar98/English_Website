<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SentencesPlaces extends CI_Controller {

	//Places List
	public function place_list(){
		$data['title'] = 'Sentences-Places';
		$data['places_list'] = $this->db->get('englishguru_places')->result_array(); 
		$this->load->view('backend/templates/header.php',$data);
		$this->load->view('backend/sentences-places/list.php',$data);
		$this->load->view('backend/templates/footer.php',$data);
	}

	public function place_insert(){
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
	
		if($this->db->insert('englishguru_places',$insert_places)){
			$this->session->set_flashdata('success', "<h6>Place Added Successfully</h6>");
		}else{
			$this->session->set_flashdata('error', "<h6>Error to delete data</h6>");
		}
		redirect('places/list');
	}
	public function place_update(){
		$this->db->set($_POST['column_name'], $_POST['value']);
		$this->db->where('id', $_POST['id']);
		$this->db->update('englishguru_places');
	}
	
	public function place_delete($id){
		if($this->db->where('id',$id)->delete('englishguru_places')){
			$this->session->set_flashdata('success', "<h6>Place Deleted Successfully</h6>");
		}else{
			$this->session->set_flashdata('error', "<h6>Error to delete data</h6>");
		}
		redirect('places/list/');
	}

	/************************Titles CRUD*******************************/

	//Title-List
	public function title_list(){
		$data['title'] = 'Title-List';
		$data['titles_list'] = $this->db->get('englishguru_titles')->result_array(); 
		$this->load->view('backend/templates/header.php',$data);
		$this->load->view('backend/sentences-places/title_lists.php',$data);
		$this->load->view('backend/templates/footer.php',$data);
	}
	//Titles-Add
	public function title_add(){
		$data['title'] = 'Title-Add';
		$data['places_list'] = $this->db->get('englishguru_places')->result_array(); 
		$this->load->view('backend/templates/header.php',$data);
		$this->load->view('backend/sentences-places/title_add.php',$data);
		$this->load->view('backend/templates/footer.php',$data);
	}
	public function title_insert(){
				date_default_timezone_set('Asia/Kolkata');

		$insert_title = array(
			'title_name' => $this->input->post('title_name'),
			'title_text' => $this->input->post('title_text'),
			'place_id' => $this->input->post('place_id'),
			'created_at' => date('Y-m-d H:i:s')
		);	
		$this->db->insert('englishguru_titles',$insert_title);
		redirect('titles/list');
	}
	public function title_delete($id){
		if($this->db->where('id',$id)->delete('englishguru_titles')){
			$this->session->set_flashdata('success', "<h6>Title Deleted Successfully</h6>");
		}else{
			$this->session->set_flashdata('error', "<h6>Error to delete data</h6>");
		}
		redirect('titles/list/');
	}

}

?>