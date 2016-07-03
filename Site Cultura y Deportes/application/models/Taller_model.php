
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Taller_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
//______________________Taller_______________________________//


public function getTaller($id = null){
    $this->db->select('*');
    $this->db->from('taller');
    if($id != null){
        $this->db->where('idTaller', $id);
    }
    $sql = $this->db->get();

    if($sql->num_rows() > 0){
        return $sql->result();
    }


}

public function addTaller($no,$d){
    $data = array(

      'idTaller' =>  0,
      'NombreTaller' =>  $no,
      'Descripcion' =>  $d

        );
    return $this->db->insert('taller', $data);

}

public function upTaller($id,$no,$d){

    $data = array(
      'NombreTaller' =>  $no,
      'Descripcion' =>  $d
        );
    $this->db->where('idTaller', $id);
    return $this->db->update('taller', $data);
}

public function delTaller($id){
    $this->db->where('idTaller', $id);

    return $this->db->delete('taller');
}

}
