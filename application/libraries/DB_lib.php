<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DB_lib {
	private $ci;
	
	public function __construct()
    {
        $this->ci =& get_instance();
    }
	
	public function check_user_logged_in(){
		$CI =& get_instance();
		
		if($CI->session->userdata('login_data')=="")
			return false;
		else
			return true;
	}
	
	public function return_select($result){
		if($result->num_rows() > 0)
			return $result;
		else
			return false;
	}
	
	public function return_select_first_row($result){
		if($result->num_rows() > 0)
			return $result->row();
		else
			return false;
	}
	
	public function insert_data($table, $data){
		$insert = $this->ci->db->insert($table, $data);
		$error = $this->ci->db->error();
		$result = new stdclass();
		if ($this->ci->db->affected_rows() > 0 or $error['code']==0){
			$result->status = true;
			$result->output = $this->ci->db->insert_id();
			$this->ci->session->set_flashdata('err_no', '200');
			$this->ci->session->set_flashdata('err_msg', 'Data inserted successfully');
		}
		else{
			$result->status = false;
			$result->output = $error['code'].': '.$error['message'];
			$this->ci->session->set_flashdata('err_no', '204');
			$this->ci->session->set_flashdata('err_msg', $error['code'].': '.$error['message']);
		}

		return $result;
	}
	
	public function delete_data($table, $field_id, $id){
		$this->ci->db->delete($table, array($field_id => $id));
		$error = $this->ci->db->error();
		$result = new stdclass();
		if ($this->ci->db->affected_rows() > 0 or $error['code']==0){
			$result->status = true;
			$this->ci->session->set_flashdata('err_no', '200');
			$this->ci->session->set_flashdata('err_msg', 'Data deleted successfully');
		}
		else{
			$result->status = false;
			$result->output = $error['code'].': '.$error['message'];
			$this->ci->session->set_flashdata('err_no', '204');
			$this->ci->session->set_flashdata('err_msg', $error['code'].': '.$error['message']);
		}

		return $result;
	}
	
	public function update_data($table, $field_id, $id, $data){
		$this->ci->db->where($field_id, $id);
		$this->ci->db->update($table, $data);
		$error = $this->ci->db->error();
		$result = new stdclass();
		if ($this->ci->db->affected_rows() > 0 or $error['code']==0){
			$result->status = true;
			$this->ci->session->set_flashdata('err_no', '200');
			$this->ci->session->set_flashdata('err_msg', 'Data updated successfully');
		}
		else{
			$result->status = false;
			$result->output = $error['code'].': '.$error['message'];
			$this->ci->session->set_flashdata('err_no', '204');
			$this->ci->session->set_flashdata('err_msg', $error['code'].': '.$error['message']);
		}

		return $result;
	}
	
}

/* End of file Custom.php */
/* Location: ./application/libraries/Custom.php */