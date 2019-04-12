<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Words extends CI_Controller {

	//Daily Use Words
	public function list(){
		$data['title'] = 'Daily Use Words';
		$data['words_list'] = $this->db->get('englishguru_words')->result_array(); 

		$this->load->view('backend/templates/header.php',$data);
		$this->load->view('backend/words/list.php',$data);
		$this->load->view('backend/templates/footer.php',$data);
	}
	public function add(){
		date_default_timezone_set('Asia/Kolkata');
		$add_word = array(
			'english_word' => $this->input->post('english_word'),
			'hindi_word' => $this->input->post('hindi_word'),
			'created_at' => date('Y-m-d H:i:s')
		);
		if($this->db->insert('englishguru_words', $add_word)){
			$this->session->set_flashdata('success', "<h6>Word Added Successfully</h6>");
		}else{
			$this->session->set_flashdata('error', "<h6>Error to add data</h6>");
		}
		redirect('daily-words/list');
	}
	public function update(){
		$this->db->set($_POST['column_name'], $_POST['value']);
		$this->db->where('id', $_POST['id']);
		$this->db->update('englishguru_words');
	}
	public function delete($id){
		if($this->db->where('id',$id)->delete('englishguru_words')){
			$this->session->set_flashdata('success', "<h6>Word Deleted Successfully</h6>");
		}else{
			$this->session->set_flashdata('error', "<h6>Error to delete data</h6>");
		}
		redirect('daily-words/list/');
	}
}

?>