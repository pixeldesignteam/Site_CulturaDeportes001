<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


    public function getProfe($id = null){
      $this->db->order_by('nombre', 'asc');
      if ($id != null ) {
        $this->db->where('idProfesor', $id);
      }
      $profesor = $this->db->get('profesor');

      if ($profesor->num_rows() > 0):
        return $profesor->result();
      endif;
    }

    public function addProfe($m,$file_info,$n,$p,$d,$t,$p,$e){
    $data = array(
        'idProfesor' => 0,
        'matricula'  => $m,
        'foto'  => $file_info,
        'nombre'  => $n,
        'password'  => $p,
        'direccion'  => $d,
        'telefono'  => $t,
        'privilegios'     => $p,
        'email'     => $e
    );
    return $this->db->insert('profesor', $data);

}

public function upProfe($id,$m,$f,$n,$p,$d,$t,$pr,$e){
    $data = array(
      'matricula'  => $m,
      'foto'  => $f,
      'nombre'  => $n,
      'password'  => $p,
      'direccion'  => $d,
      'telefono'  => $t,
      'privilegios'     => $pr,
      'email'     => $e
    );

    $this->db->where('idProfesor', $id);
    return $this->db->update('profesor', $data);
}

public function delProfe($id){
    $this->db->where('idProfesor', $id);

    return $this->db->delete('profesor');
}

public function tuXML(){
    $this->load->dbutil();
    $consulta = $this->db->get('profesor');
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
