<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Baile_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }


    public function getBaile($id = null){
      $this->db->order_by('nombre_alumno', 'asc');
      if ($id != null ) {
        $this->db->where('id_alumno', $id);
      }
      $baile = $this->db->get('b_salon');

      if ($baile->num_rows() > 0):
        return $baile->result();
      endif;
    }

    public function addBaile($m,$file_info,$n,$d,$t,$e,$c,$ni){
    $data = array(
        'id_alumno' => 0,
        'matricula'  => $m,
        'foto'  => $file_info,
        'nombre_alumno'  => $n,
        'direccion'  => $d,
        'telefono'  => $t,
        'email'  => $e,
        'carrera'  => $c,
        'nivel'  => $ni
    );
    return $this->db->insert('b_salon', $data);

}

public function upBaile($id,$m,$n,$d,$t,$e,$c,$ni){

    $data = array(
      'matricula'  => $m,
      'nombre_alumno'  => $n,
      'direccion'  => $d,
      'telefono'  => $t,
      'email'  => $e,
      'carrera'  => $c,
      'nivel'  => $ni

    );
    $this->db->where('id_alumno', $id);
    return $this->db->update('b_salon', $data);
}


public function delBaile($id){
    $this->db->where('id_alumno', $id);

    return $this->db->delete('b_salon');
}

public function tuXML(){
    $this->load->dbutil();
    $consulta = $this->db->get('b_salon');
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
