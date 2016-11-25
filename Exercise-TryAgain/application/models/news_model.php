<?php
class News_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_users($user_id = FALSE)
    {
        if ($user_id === FALSE)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('users', array('user_id' => $user_id));
        return $query->row_array();
    }
    
    public function get_user_by_id($user_id = 0)
    {
        if ($user_id === 0)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('users', array('user_id' => $user_id));
        return $query->row_array();
    }
    
    
    public function set_user($user_id = 0)
    {
        $this->load->helper('url');
 
        $user_id = url_title($this->input->post('user_id'), 'dash', TRUE);
 
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'user_id' => $user_id,
            'last_name' => $this->input->post('last_name'),
            'nickname' => $this->input->post('nickname'),
            'email' => $this->input->post('email'),
            'user_City' => $this->input->post('user_City'),
            'gender' => $this->input->post('gender'),
            'mobile' => $this->input->post('mobile'),
            'comment' => $this->input->post('comment')
        );
        
        if ($id == 0) {
            return $this->db->insert('news', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('news', $data);
        }
    }
    
    public function delete_news($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('news');
    }
}