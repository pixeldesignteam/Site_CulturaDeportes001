<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Baloncesto_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }


    public function getBalon($id = null){
      $this->db->order_by('nombre_alumno', 'asc');
      if ($id != null ) {
        $this->db->where('id_alumno', $id);
      }
      $balon = $this->db->get('baloncesto');

      if ($balon->num_rows() > 0):
        return $balon->result();
      endif;
    }

    public function addBalon($m,$file_info,$n,$d,$t,$e,$c,$ni){
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
    return $this->db->insert('baloncesto', $data);

}

public function upBalon($id,$m,$n,$d,$t,$e,$c,$ni){

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
    return $this->db->update('baloncesto', $data);
}


public function delBalon($id){
    $this->db->where('id_alumno', $id);

    return $this->db->delete('baloncesto');
}

public function tuXML(){
    $this->load->dbutil();
    $consulta = $this->db->get('baloncesto');
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
