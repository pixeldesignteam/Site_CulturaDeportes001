<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Talleres_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


    public function getTaller(){
      $this->db->order_by('nombreTaller', 'asc');
      $taller = $this->db->get('taller');

      if ($taller->num_rows() > 0):
        return $taller->result();
      endif;
    }

    public function addTaller($n,$d){
    $data = array(
        'idTaller' => 0,
        'nombreTaller'  => $n,
        'direccion'  => $d
    );
    return $this->db->insert('taller', $data);

}

public function upTeller($id,$n,$d){
    $data = array(
      'nombreTaller'  => $n,
      'direccion'  => $d,
    );

    $this->db->where('idTaller', $id);
    return $this->db->update('taller', $data);
}

public function delTaller($id){
    $this->db->where('idTaller', $id);

    return $this->db->delete('taller');
}

public function tuXML(){
    $this->load->dbutil();
    $consulta = $this->db->get('taller');
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
