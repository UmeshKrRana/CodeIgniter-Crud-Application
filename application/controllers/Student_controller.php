<?php


class Student_controller extends CI_Controller {
	public function index() {
		$this->load->model('post_data');
		$result = $this->post_data->display_data();

		$this->load->view('display_record', ['result'=>$result]);
	}

	// function for loading add new student form/view
	public function add_post() {
		$this->load->view('add_post');
	}

	// reading form values
	public function save_post() {
		echo $this->input->post('title');
		$data = array(
				'title'=>$this->input->post('title'),
				'description'=>$this->input->post('description'),
				'category'=>$this->input->post('category')
		);

		$this->load->model('post_data');
		$result = $this->post_data->insert_data($data);
		if($result) {
			$this->session->set_flashdata('msg','Record saved.');
		}
		else{
			$this->session->set_flashdata('msg', 'Failed to save.');
		}

		return redirect('student_controller/index');
	}


	// function for edit/update

	public function get_post($id) {
		// echo $this->uri->segment(3);

		$this->load->model('post_data');
		$value = $this->post_data->display_single_data($id);
		$this->load->view('update', ['value'=>$value]);
		// getting single record for updating single record
	}


	// function for update the record
	public function update_post($id) {
		echo $id;

		$records = array(
				'title'=>$this->input->post('title'),
				'description'=>$this->input->post('description'),
				'category'=>$this->input->post('category')
		);

		$this->load->model('post_data');
		$update = $this->post_data->update_record($records, $id);
		if($update) {
			$this->session->set_flashdata('msg', "Record updated");
		}
		else{
			$this->session->set_flashdata('msg', "Failed to update");
		}

		return redirect('student_controller/');
	}


	// delete function

	public function delete_post($id){
		$this->load->model('post_data');
		$delete = $this->post_data->delete_record($id);
		if($delete) {
			$this->session->set_flashdata('msg', "Post deleted");
		}
		else {
			$this->session->set_flashdata('msg', "Failed to delete");
		}
		return redirect('student_controller/');

	}


}

?>