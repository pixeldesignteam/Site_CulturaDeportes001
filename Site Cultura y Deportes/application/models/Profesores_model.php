<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


    public function getProfe(){
      $this->db->order_by('nombreProfesor', 'asc');
      $profesor = $this->db->get('profesor');

      if ($profesor->num_rows() > 0):
        return $profesor->result();
      endif;
    }

    public function addProfe($m,$f,$n,$d,$t,$p){
    $data = array(
        'idProfesor' => 0,
        'matricula'  => $m,
        'foto'  => $f,
        'nombreProfesor'  => $n,
        'direccion'  => $d,
        'telefono'  => $t,
        'privilegios'     => $p
    );
    return $this->db->insert('profesor', $data);

}

public function upProfe($id,$m,$f,$n,$d,$t,$p){
    $data = array(
      'matricula'  => $m,
      'foto'  => $f,
      'nombreProfesor'  => $n,
      'direccion'  => $d,
      'telefono'  => $t,
      'privilegios'     => $p
    );

    $this->db->where('idProfesor', $id);
    return $this->db->update('profesor', $data);
}

public function delProfe($id){
    $this->db->where('idProfesor', $id);

    return $this->db->delete('profesor');
}



}
