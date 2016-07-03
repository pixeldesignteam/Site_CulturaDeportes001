<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profe_model extends CI_Model{
    public function __construct() {
        parent::__onstruct();
    }

    //________________________Profesores_____________________________________//

    public function getProfesores($numero = null){
        $this->db->select('*');
        $this->db->from('profesor');
        if($numero != null){
            $this->db->where('NumeroEmpleado', $numero);
        }
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }


    }

    public function addProfesor($n,$f,$no,$d,$t){
        $data = array(

          'NumeroEmpleado' =>  $n,
          'Foto' =>  $f,
          'NombreProfesor' =>  $no,
          'Direccion' =>  $d,
          'Telefono' =>  $t
            );
        return $this->db->insert('profesor', $data);

    }

    public function upProfesor($id, $u, $p, $e){

        $data = array(
          'NumeroEmpleado' =>  $n,
          'Foto' =>  $f,
          'NombreProfesor' =>  $no,
          'Direccion' =>  $d,
          'Telefono' =>  $t
            );
        $this->db->where('NumeroEmpleado', $numero);
        return $this->db->update('profesor', $data);
    }

    public function delProfesor($id){
        $this->db->where('NumeroEmpleado', $numero);

        return $this->db->delete('profesor');
    }


  }
