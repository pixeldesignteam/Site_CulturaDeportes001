<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Danza_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }


    public function getAlumno($id = null){
      $this->db->order_by('nombre_alumno', 'asc');
      if ($id != null ) {
        $this->db->where('id_alumno', $id);
      }
      $alumno = $this->db->get('d_folklorica');

      if ($alumno->num_rows() > 0):
        return $alumno->result();
      endif;
    }

    public function addAlumno($m,$file_info,$n,$d,$t,$e,$c,$ni){
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
    return $this->db->insert('d_folklorica', $data);

}

public function upAlumno($id,$m,$n,$d,$t,$e,$c,$ni){

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
    return $this->db->update('d_folklorica', $data);
}


public function delAlumno($id){
    $this->db->where('id_alumno', $id);

    return $this->db->delete('d_folklorica');
}


public function tuXML(){
    $this->load->dbutil();
    $consulta = $this->db->get('d_folklorica');
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
