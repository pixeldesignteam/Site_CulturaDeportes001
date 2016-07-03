<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Alumnos_model');
    }

    public function getAlumno($id=null){
      $data['alumno'] = $this->Alumnos_model->getAlumno();
      $this->load->view('admin/alumno', $data);
    	}

      public function nuevoAlumno(){
      $this->load->view('admin/alumnos/nuevoAlumno');
  }

  public function addAlumno(){
      $m = $this->input->post('matricula');
      $f = $this->input->post('foto');
      $n = $this->input->post('nombreAlumno');
      $d = $this->input->post('direccion');
      $t = $this->input->post('telefono');
      $a = $this->input->post('alergias');
      $e = $this->input->post('enfermedades');
      $al = $this->input->post('altura');
      $p = $this->input->post('peso');
      $s = $this->input->post('sangre');

      $this->Alumnos_model->addAlumno($m,$f,$n,$d,$t,$a,$e,$al,$p,$s);

      $this->getAlumno();
  }


  public function actualizarAlumno($id){
      $data['alumno'] = $this->Alumnos_model->getAlumno($id);
      $this->load->view('admin/alumnos/actualizarAlumno', $data);
  }

  public function upAlumno(){
      $id = $this->input->post('id');
      $m = $this->input->post('matricula');
      $f = $this->input->post('foto');
      $n = $this->input->post('nombreAlumno');
      $d = $this->input->post('direccion');
      $t = $this->input->post('telefono');
      $a = $this->input->post('alergias');
      $e = $this->input->post('enfermedades');
      $al = $this->input->post('altura');
      $p = $this->input->post('peso');
      $s = $this->input->post('sangre');

      $this->Alumnos_model->upAlumno($id,$m,$f,$n,$d,$t,$a,$e,$al,$p,$s);
      $this->getAlumno();

  }



  public function delAlumno($id){
      $this->Alumnos_model->delAlumno($id);

      $this->getAlumno();
  }


    }
