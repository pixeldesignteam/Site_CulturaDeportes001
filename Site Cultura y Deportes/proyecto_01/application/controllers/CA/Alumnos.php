<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Alumnos_model');
    }

    public function getAlumno($id=null){
			if($this->session->userdata('autentificado')){
      $data['alumno'] = $this->Alumnos_model->getAlumno();
      $this->load->view('admin/alumno', $data);
		}else {

			redirect('Home/index');

		}
	}

      public function nuevoAlumno(){
			if($this->session->userdata('autentificado')){
				$data['alumno'] = 'admin/alumnos/nuevoAlumno';
      	$this->load->view('admin/alumnos/plantilla', $data);
		}else {

			redirect('Home/index');

		}
	}

  public function addAlumno(){
		if($this->session->userdata('autentificado')){

			$m = $this->input->post('matricula');

			$config['upload_path'] = './upload/';
			$config['remove_spaces'] = TRUE;
			$config['allowed_types'] = 'gif|jpg|png';
		 	$this->load->library('upload', $config);

      $n = $this->input->post('nombreAlumno');
      $d = $this->input->post('direccion');
      $t = $this->input->post('telefono');
			$c = $this->input->post('carrera');
			$e = $this->input->post('email');
			$i = $this->input->post('nombreBeca');

			if(!$this->upload->do_upload('foto')){
		 		echo $this->upload->display_errors();
		  }else{
		 		$file_info = $this->upload->data();
		 		$this->Alumnos_model->addAlumno($m,$file_info['file_name'],$n,$d,$t,$c,$e,$i);

		 		redirect('CA/Alumnos/getAlumno');
		 }

		}else {

		 redirect('Home/index');

	 }

 }



  public function actualizarAlumno($id){
		if($this->session->userdata('autentificado')){
      $data['alumno'] = $this->Alumnos_model->getAlumno($id);
      $this->load->view('admin/alumnos/actualizarAlumno', $data);
  }else {

	 redirect('Home/index');

 }
}

public function upAlumno(){
		$id = $this->input->post('id');
		$m = $this->input->post('matricula');
		$n = $this->input->post('nombreAlumno');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$c = $this->input->post('carrera');
		$e = $this->input->post('email');
		$no = $this->input->post('nombreBeca');

		$this->Alumnos_model->upAlumno($id,$m,$n,$d,$t,$c,$e,$no);

			redirect('CA/Alumnos/getAlumno');}

  public function delAlumno($id){
      $this->Alumnos_model->delAlumno($id);
			redirect('CA/Alumnos/getAlumno');
  }

	public function cerrarSecion(){
		$arreglo_usuario = array(

		'autentificado' => FALSE
	);
	$this->session->set_userdata($arreglo_usuario);
	redirect('/Home/index');

	}




    }
