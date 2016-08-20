<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lugares_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


    public function getLugar(){
      $this->db->order_by('nombreLugar', 'asc');
      $lugar = $this->db->get('lugar');

      if ($lugar->num_rows() > 0):
        return $lugar->result();
      endif;
    }

    public function addLugar($n,$d,$idTaller){
    $data = array(
        'idLugar' => 0,
        'nombreLugar'  => $n,
        'direccion'  => $d,
        'idTaller'  => $idTaller
    );
    return $this->db->insert('lugar', $data);

}

public function upLugar($id,$n,$d,$idTaller){
    $data = array(
      'nombreLugar'  => $n,
      'direccion'  => $d,
      'idTaller'  => $idTaller
    );

    $this->db->where('idLugar', $id);
    return $this->db->update('lugar', $data);
}

public function delLugar($id){
    $this->db->where('idLugar', $id);

    return $this->db->delete('lugar');
}

public function tuXML(){
    $this->load->dbutil();
    $consulta = $this->db->get('lugar');
    $config = array(
        'root' => 'proyecto_01',
        'element' => 'elemento',
        'newline' => "\n",
        'tab' => "\t",

    );

    $respuestaXML = $this->dbutil->xml_from_result($consulta, $config);
    return $respuestaXML;
}



}
