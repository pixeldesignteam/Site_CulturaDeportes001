<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Talleres_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


    public function getTaller(){
      $this->db->order_by('nombreTaller', 'asc');
      $taller = $this->db->get('taller');

      if ($taller->num_rows() > 0):
        return $taller->result();
      endif;
    }

    public function addTaller($n,$d){
    $data = array(
        'idTaller' => 0,
        'nombreTaller'  => $n,
        'descripcion'  => $d
    );
    return $this->db->insert('taller', $data);

}

public function upTeller($id,$n,$d){
    $data = array(
      'nombreTaller'  => $n,
      'descripcion'  => $d
    );

    $this->db->where('idTaller', $id);
    return $this->db->update('taller', $data);
}

public function delTaller($id){
    $this->db->where('idTaller', $id);

    return $this->db->delete('taller');
}



}
