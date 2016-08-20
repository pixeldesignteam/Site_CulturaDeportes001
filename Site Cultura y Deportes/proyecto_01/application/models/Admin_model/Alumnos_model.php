<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }


    public function getAlumno($id = null){
      $this->db->order_by('nombreAlumno', 'asc');
      if ($id != null ) {
        $this->db->where('idAlumno', $id);
      }
      $alumno = $this->db->get('alumno');

      if ($alumno->num_rows() > 0):
        return $alumno->result();
      endif;
    }

    public function addAlumno($m,$file_info,$n,$d,$t,$c,$e,$i){
    $data = array(
        'idAlumno' => 0,
        'matricula'  => $m,
        'foto'  => $file_info,
        'nombreAlumno'  => $n,
        'direccion'  => $d,
        'telefono'  => $t,
        'carrera'  => $c,
        'email'  => $e,
        'nombreBeca'  => $i
    );
    return $this->db->insert('alumno', $data);

}

public function upAlumno($id,$m,$n,$d,$t,$c,$e,$no){

    $data = array(
        'matricula'  => $m,
        'nombreAlumno'     => $n,
        'direccion'     => $d,
        'telefono'     => $t,
        'carrera'     => $c,
        'email'     => $e,
        'nombreBeca'     => $no

    );
    $this->db->where('idAlumno', $id);
    return $this->db->update('alumno', $data);
}


public function delAlumno($id){
    $this->db->where('idAlumno', $id);

    return $this->db->delete('alumno');
}






  }
