<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }

    public function getalumnos($matri = null){
        $this->db->select('*');
        $this->db->from('alumno');
        if($matri != null){
            $this->db->where('Matricula', $matri);
        }
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }


    }

    public function addAlumno($m,$f,$n,$d,$t,$a,$e,$p,$al,$ti){
        $data = array(

          'Matricula' =>  $m,
          'Foto' =>  $f,
          'NombreAlumno' =>  $n,
          'Direccion' =>  $d,
          'Telefono' =>  $t,
          'Alergias' =>  $a,
          'EnfermedadesCronicas' =>  $e,
          'Peso' =>  $p,
          'Altura' =>  $al,
         'TipoSangre' =>  $ti


        );
        return $this->db->insert('alumnos', $data);

    }

    public function upAlumno($m,$f,$n,$d,$t,$a,$e,$p,$al,$ti){
        //UPDATE Usuario SET (username= '$u', password='$p',
        //        email = '$e') WHERE idUsuario = $id
        $data = array(
          'Matricula' =>  $m,
          'Foto' =>  $f,
          'NombreAlumno' =>  $n,
          'Direccion' =>  $d,
          'Telefono' =>  $t,
          'Alergias' =>  $a,
          'EnfermedadesCronicas' =>  $e,
          'Peso' =>  $p,
          'Altura' =>  $al,
         'TipoSangre' =>  $ti
        );
        $this->db->where('Matricula', $matri);
        return $this->db->update('alumno', $data);
    }

    public function delAlumno($matri){

        $this->db->where('Matricula', $matri);

        return $this->db->delete('alumno');
    }




}
