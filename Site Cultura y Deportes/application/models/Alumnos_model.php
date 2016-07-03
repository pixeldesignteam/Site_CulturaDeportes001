<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


    public function getAlumno(){
      $this->db->order_by('nombreAlumno', 'asc');
      $alumno = $this->db->get('alumno');

      if ($alumno->num_rows() > 0):
        return $alumno->result();
      endif;
    }

    public function addAlumno($m,$f,$n,$d,$t,$a,$e,$al,$p,$s){
    $data = array(
        'idAlumno' => 0,
        'matricula'  => $m,
        'foto'  => $f,
        'nombreAlumno'  => $n,
        'direccion'  => $d,
        'telefono'  => $t,
        'alergias'     => $a,
        'enfermedades'     => $e,
        'altura'     => $al,
        'peso'     => $p,
        'sangre'     => $s
    );
    return $this->db->insert('alumno', $data);

}

public function upAlumno($id,$m,$f,$n,$d,$t,$a,$e,$al,$p,$s){
    $data = array(
      'matricula'  => $m,
      'foto'  => $f,
      'nombreAlumno'  => $n,
      'direccion'  => $d,
      'telefono'  => $t,
      'alergias'     => $a,
      'enfermedades'     => $e,
      'altura'     => $al,
      'peso'     => $p,
      'sangre'     => $s
    );

    $this->db->where('idAlumno', $id);
    return $this->db->update('alumno', $data);
}


public function delAlumno($id){
    $this->db->where('idAlumno', $id);

    return $this->db->delete('alumno');
}


  }
