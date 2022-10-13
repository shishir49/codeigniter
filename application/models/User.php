<?php 

class User extends CI_Model {

    public $title;
    public $content;
    public $date;
    
    public function getUsers()
    {
        $query = $this->db->get('users', 10);
        return $query->result();
    }
    
}

?>