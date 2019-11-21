<?php

class Content extends CI_model {
    public function __construct() {
        parent::__construct();
        $this->db =  $this->load->database('default', TRUE);
    }


    public function store($data){

          $result_set =  $this->db->insert('content', $data);
          return $result_set;
    }


    public function all(){
        $result_set = $this->db->get('content');
        return $result_set->result_array();
    }

}
