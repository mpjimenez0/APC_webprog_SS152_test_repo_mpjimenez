<? php if(! defined('BASEPATH')) exit ('no direct script access allowed');

    class form_model extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function get_users(){
            $query = $this->db->get('users');
            return $query->result();
        }

        public function insert_users($data){
            return $this->db->insert('users', $data);
            return $query->row_array();
        }

        public function show_users(){
            $query = $this->db->get('users');
            $query_result = $query->result();
            return $query_result;
        }

        public function show_users_id($data){
            $this->db->select('*');
            $this->db->from('users');
            $this-db->where('users_id', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }

        public function update_users($id, $data){
            $this->db->where('user_id', $id);
            $this->db->update('users',$data);
        }

        public function delete_user($user_id){
            $this->db->where('users.user_id', $user_id);
            return $this->db->delete('users');
        }
    }