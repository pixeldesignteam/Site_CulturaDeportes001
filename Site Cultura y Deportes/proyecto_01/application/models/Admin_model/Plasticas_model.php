<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Plasticas_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }


    public function getArte($id = null){
      $this->db->order_by('nombre_alumno', 'asc');
      if ($id != null ) {
        $this->db->where('id_alumno', $id);
      }
      $arte = $this->db->get('a_plasticas');

      if ($arte->num_rows() > 0):
        return $arte->result();
      endif;
    }

    public function addArte($m,$file_info,$n,$d,$t,$e,$c,$ni){
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
    return $this->db->insert('a_plasticas', $data);

}

public function upArte($id,$m,$n,$d,$t,$e,$c,$ni){

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
    return $this->db->update('a_plasticas', $data);
}

public function tuXML(){
    $this->load->dbutil();
    $consulta = $this->db->get('a_plasticas');
    $config = array(
        'root' => 'proyecto_01',
        'element' => 'elemento',
        'newline' => "\n",
        'tab' => "\t",

    );

    $respuestaXML = $this->dbutil->xml_from_result($consulta, $config);
    return $respuestaXML;
}

public function delArte($id){
    $this->db->where('id_alumno', $id);

    return $this->db->delete('a_plasticas');
}






  }
