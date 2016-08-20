<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Historiales_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


    public function getHistorial(){
      $this->db->order_by('alergias', 'asc');
      $historial = $this->db->get('historialmedico');

      if ($historial->num_rows() > 0):
        return $historial->result();
      endif;
    }

    public function addHistorial($a,$e,$al,$p,$s,$i){
    $data = array(
        'idHistorial' => 0,
        'alergias'  => $a,
        'enfermedades'  => $e,
        'altura'  => $al,
        'peso'  => $p,
        'sangre'  => $s,
        'idAlumno'  => $i
    );
    return $this->db->insert('historialmedico', $data);

}

public function upTeller($id,$a,$e,$al,$p,$s,$i){
    $data = array(
      'alergias'  => $a,
      'enfermedades'  => $e,
      'altura'  => $al,
      'peso'  => $p,
      'sangre'  => $s,
      'idAlumno'  => $i
    );

    $this->db->where('idHistorial', $id);
    return $this->db->update('historialmedico', $data);
}

public function delHistorial($id){
    $this->db->where('idHistorial', $id);

    return $this->db->delete('historialmedico');
}


public function tuXML(){
    $this->load->dbutil();
    $consulta = $this->db->get('historialmedico');
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
