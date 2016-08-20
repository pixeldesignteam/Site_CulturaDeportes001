<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Beca_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


    public function getBeca(){
      $this->db->order_by('nombreBeca', 'asc');
      $beca = $this->db->get('beca');

      if ($beca->num_rows() > 0):
        return $beca->result();
      endif;
    }

    public function addBeca($n,$d){
    $data = array(
        'idBeca' => 0,
        'nombreBeca'  => $n,
        'descripcion'  => $d

    );
    return $this->db->insert('beca', $data);

}

public function upBeca($id,$n,$d){
    $data = array(
      'nombreBeca'  => $n,
      'descripcion'  => $d
    );

    $this->db->where('idBeca', $id);
    return $this->db->update('beca', $data);
}

public function delBeca($id){
    $this->db->where('idBeca', $id);

    return $this->db->delete('beca');
}



}
