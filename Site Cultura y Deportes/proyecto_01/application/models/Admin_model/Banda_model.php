<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banda_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }


    public function getBanda($id = null){
      $this->db->order_by('nombre_alumno', 'asc');
      if ($id != null ) {
        $this->db->where('id_alumno', $id);
      }
      $banda = $this->db->get('b_guerra');

      if ($banda->num_rows() > 0):
        return $banda->result();
      endif;
    }

    public function addBanda($m,$file_info,$n,$d,$t,$e,$c,$ni){
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
    return $this->db->insert('b_guerra', $data);

}

public function upBanda($id,$m,$n,$d,$t,$e,$c,$ni){

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
    return $this->db->update('b_guerra', $data);
}


public function delBanda($id){
    $this->db->where('id_alumno', $id);

    return $this->db->delete('b_guerra');
}

public function tuXML(){
    $this->load->dbutil();
    $consulta = $this->db->get('b_guerra');
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
