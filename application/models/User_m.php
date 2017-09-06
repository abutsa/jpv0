<?php

class User_m extends CI_Model {
	public function __construct() {
        parent::__construct();
		$this->load->library('Db_lib');
    }
	
	function get_user_data($filter=null){
		$this->db->select('*');
		$this->db->from('user');
		
		if($filter <> null)
			$this->db->where($filter);
		$this->db->order_by('first_name');
		$query = $this->db->get();
		
		return $this->db_lib->return_select($query);
	}

	function get_user_info($user_id){
		$this->db->select('u.id_user as key_user_id, u.*, ui.*, m.*');
		$this->db->from('user u');
		$this->db->join('user_profile ui', 'u.id_user = ui.id_user','left' );
		$this->db->join('media_files m', 'ui.photo_primary_id = m.id', 'left');
		$this->db->where('u.id_user', $user_id);

		$query = $this->db->get();

		return $this->db_lib->return_select_first_row($query);
	}

	function get_user_profile($user_id){
		$this->db->select('*');
		$this->db->from('user_profile ui');
		$this->db->join('media_files m', 'ui.photo_primary_id = m.id', 'left');
		$this->db->where('ui.id_user', $user_id);

		$query = $this->db->get();

		return $this->db_lib->return_select_first_row($query);
	}

	function get_user_by_id($userid){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $userid);
		
		$query = $this->db->get();

		return $this->db_lib->return_select_first_row($query);
	}

	function check_user_id_exist($userid){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $userid);

		$query = $this->db->get();

		if($query->num_rows() > 0)
			return true;
		else return false;
	}

	function check_user_email_exist($email){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email_login', $email);

		$query = $this->db->get();

		if($query->num_rows() > 0)
			return true;
		else return false;
	}

	function check_exist_user($email, $password=null){
		$this->db->select('*');
		$this->db->from('user');
		if($password==null){
			$this->db->where('email_login', $email);
                } else {
			$this->db->where('email_login', $email);
                        $this->db->where('password', $password);
                        
                }
                
                $this->db->join('user_profile', "user_profile.id_user = user.id_user");
                
		$query = $this->db->get();

		if($query->num_rows() > 0)
			return $query->row();
		else return false;
	}
        
        function get_salt($email) {
            $this->db->select('salt');
            $this->db->where('email_login', $email);
            $res = $this->db->get('user');
            return $res->row('salt');
        }
        
	function update_password($email, $new_pass){
		$this->db->where('email_login', $email);
		$this->db->update('user', array('password' => md5($new_pass)));
		if($this->db->affected_rows() > 0)
			return true;
		else{
			$error = $this->db->error();
			if($error['code']<>0)
				return $error['message'];
		}
	}

	function get_reset_password($user_id){
		$this->db->select('password_generated');
		$this->db->from('request_reset_password');
		$this->db->where('id_user', $user_id);

		$query = $this->db->get();

		if($query->num_rows() > 0)
			return $query->row();
		else return false;
	}

	function increment_total_user_viewed($user_id){
		$query = $this->db->query("UPDATE user_profile SET total_viewed = total_viewed + 1 WHERE id_user = '".$user_id."'");

		return true;
	}

	function count_user_level($level){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_level', $level);

		$query = $this->db->get();
		return $query->num_rows();
	}

	function get_user_bank($user_id){
		$this->db->select('*');
		$this->db->from('user_bank_account');
		$this->db->where('id_user', $user_id);

		$query = $this->db->get();

		return $this->db_lib->return_select_first_row($query);
	}

	function get_education_history_by_userid($user_id){
		$this->db->select('e.*, ma.file_name certificate_filename, mb.file_name transcript_filename');
		$this->db->from('user_education_experiences e');
		$this->db->join('media_files ma', 'e.certificate_media_id = ma.id', 'left');
		$this->db->join('media_files mb', 'e.transcript_media_id = mb.id', 'left');
		$this->db->where('id_user', $user_id);
		$this->db->order_by('date_in desc');

		$query = $this->db->get();
		// print_r($this->db->last_query());
		return $this->db_lib->return_select($query);
	}

	function get_education_history_by_id($edu_id){
		$this->db->select('e.*, ma.file_name certificate_filename, mb.file_name transcript_filename');
		$this->db->from('user_education_experiences e');
		$this->db->join('media_files ma', 'e.certificate_media_id = ma.id', 'left');
		$this->db->join('media_files mb', 'e.transcript_media_id = mb.id', 'left');
		$this->db->where('e.id', $edu_id);

		$query = $this->db->get();
		// print_r($this->db->last_query());
		return $this->db_lib->return_select_first_row($query);
	}

	function get_salary_per_hour($user_id){
		$this->db->select('salary_per_hour');
		$this->db->from('user_profile');
		$this->db->where('id_user', $user_id);

		$query = $this->db->get();
		// print_r($this->db->last_query());

		return $query->row()->salary_per_hour;
	}

	function get_user_by_level($level){
		$this->db->where('user_level', $level);
		$this->db->order_by('first_name');
		
		$query = $this->db->get('user');
		
		return $this->db_lib->return_select($query);
	}

	function search_user_autocomplete($term){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('(id_user LIKE "%'.$term.'%" OR first_name LIKE "%'.$term.'%" OR last_name LIKE "%'.$term.'%" OR email_login LIKE "%'.$term.'%")');

		$query = $this->db->get();
		
		return $this->db_lib->return_select($query);
	}

	function search_tutor($term){
		$this->db->select('*');
		$this->db->from('user');
		// $this->db->like('user_id', $term);
		$this->db->where('user_level', 'teacher');
		$this->db->where('(id_user LIKE "%'.$term.'%" OR first_name LIKE "%'.$term.'%" OR last_name LIKE "%'.$term.'%" OR email_login LIKE "%'.$term.'%")');

		$query = $this->db->get();
		
		return $this->db_lib->return_select($query);
	}

	function get_subscribers($filter_array=null){
		$this->db->select('n.*, u.email_login, u.first_name, u.last_name');
		$this->db->from('newsletter_subscriber n');
		$this->db->join('user u', 'n.related_user = u.id_user', 'left');
		if($filter_array <> null)
			$this->db->where($filter_array);
		$this->db->order_by('id desc');
		$query = $this->db->get();
		
		return $this->db_lib->return_select($query);
	}

	function count_snapshot($user_id){
		$this->db->select('*')
				->from('snapshot_user_view')
				->where('id_user', $user_id);
		$get = $this->db->get();

		return $get->num_rows();
	}
}