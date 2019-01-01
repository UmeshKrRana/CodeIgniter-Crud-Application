<?php

class Post_data extends CI_Model {
	
	// insert query for inserting the records
	public function insert_data($data) {
		return $this->db->insert('post', $data);
	}

	// select query for getting all the records from the database
	public function display_data() {
		$query = $this->db->get('post');
		return $query->result();
	}

	// getting single record from the database

	public function display_single_data($id) {
		$query = $this->db->get_where('post', array('id'=>$id));
		if($query->num_rows() > 0) {
			return $query->row();
		}
	}

	// update function
	public function update_record($records, $id) {
		return $this->db->where('id', $id)->update('post', $records);
	}

	// delete function
	public function delete_record($id) {
		return $this->db->delete('post', array('id'=>$id));

	}
}

?>