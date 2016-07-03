<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Horarios_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


        public function getHora(){
          $this->db->order_by('hora', 'asc');
          $profesor = $this->db->get('horario');

          if ($profesor->num_rows() > 0):
            return $profesor->result();
          endif;
        }

        public function addHora($h,$d,$l,$c){
        $data = array(
            'idHorario' => 0,
            'hora'  => $h,
            'dia'  => $d,
            'lugar'  => $l,
            'cuatrimestre'  => $c
        );
        return $this->db->insert('horario', $data);

    }

    public function upHora($id,$h,$d,$l,$c){
        $data = array(
          'hora'  => $h,
          'dia'  => $d,
          'lugar'  => $l,
          'cuatrimestre'  => $c
        );

        $this->db->where('idHorario', $id);
        return $this->db->update('horario', $data);
    }

    public function delHora($id){
        $this->db->where('idHorario', $id);

        return $this->db->delete('horario');
    }


}
