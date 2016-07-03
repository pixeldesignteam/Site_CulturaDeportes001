<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profe_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


    //___________________Horario_____________________________//




    public function getHorario($id = null){
        $this->db->select('*');
        $this->db->from('horario');
        if($id != null){
            $this->db->where('idHorario', $id);
        }
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }


    }

    public function addHorario($h,$d,$l,$c){
        $data = array(

          'idHorario' =>  0,
          'Hora' =>  $h,
          'Dia' =>  $d,
          'Lugar' =>  $l,
          'Cuatrimestre' =>  $c

            );
        return $this->db->insert('horario', $data);

    }

    public function upHorario($id,$h,$d,$l,$c){

        $data = array(
          'Hora' =>  $h,
          'Dia' =>  $d,
          'Lugar' =>  $l,
          'Cuatrimestre' =>  $c
            );
        $this->db->where('idHorario', $id);
        return $this->db->update('horario', $data);
    }

    public function delHorario($id){
        $this->db->where('idHorario', $id);

        return $this->db->delete('horario');
    }


  }
