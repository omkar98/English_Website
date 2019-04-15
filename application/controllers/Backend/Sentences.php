<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sentences extends CI_Controller {

	//Daily Use Words
	public function list(){
		$data['title'] = 'Daily Use Sentences';
		$data['sentences_list'] = $this->db->get('englishguru_sentences')->result_array(); 

		$this->load->view('backend/templates/header.php',$data);
		$this->load->view('backend/sentences/list.php',$data);
		$this->load->view('backend/templates/footer.php',$data);
	}
	public function add(){
		date_default_timezone_set('Asia/Kolkata');
		$add_word = array(
			'english_sentence' => $this->input->post('english_sentence'),
			'hindi_sentence' => $this->input->post('hindi_sentence'),
			'created_at' => date('Y-m-d H:i:s')
		);
		if($this->db->insert('englishguru_sentences', $add_word)){
			$this->session->set_flashdata('success', "<h6>Sentence Added Successfully</h6>");
		}else{
			$this->session->set_flashdata('error', "<h6>Error to add data</h6>");
		}
		redirect('daily-use-sentences/list');
	}
	public function update(){
		$this->db->set($_POST['column_name'], $_POST['value']);
		$this->db->where('id', $_POST['id']);
		$this->db->update('englishguru_sentences');
	}
	public function delete($id){
		if($this->db->where('id',$id)->delete('englishguru_sentences')){
			$this->session->set_flashdata('success', "<h6>Sentence Deleted Successfully</h6>");
		}else{
			$this->session->set_flashdata('error', "<h6>Error to delete data</h6>");
		}
		redirect('daily-use-sentences/list/');
	}
}

?>