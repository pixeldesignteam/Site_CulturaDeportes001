<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }

    public function login($matricula, $pass){
    $this->db->select('*');
    $this->db->from('profesor');
    $this->db->where('matricula', $matricula);
    $this->db->where('password', $pass);

    $sql =$this->db->get();

  if($sql->num_rows() > 0){
        return $sql->row();
    }else{
        return null;

    }

}

  }
