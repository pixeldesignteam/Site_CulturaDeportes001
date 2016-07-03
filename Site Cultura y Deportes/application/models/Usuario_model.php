<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Usuario_model extends CI_Model{
      public function __construct() {
          parent::__construct();
      }



      public function contact($empleado, $profesor){
      $this->db->select('*');
      $this->db->from('profesor');
      $this->db->where('NumeroEmpleado', $empleado);
      $this->db->where('NombreProfesor', $profesor);

      $sql =$this->db->get();

    if($sql->num_rows() > 0){
          return $sql->row();
      }else{
          return null;

      }

  }
}
