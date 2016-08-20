<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voleibol extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Voli_model');
    }

    public function getAlumno($id=null){
			if($this->session->userdata('autentificado')){
      $data['alumno'] = $this->Voli_model->getAlumno();
      $this->load->view('admin/voleibol', $data);
		}else {

			redirect('Home/index');

		}
	}

  public function nuevoAlumno(){
    if($this->session->userdata('autentificado')){
     $this->load->view('admin/voleibol/nuevoAlumno');
 }  else {
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

      $n = $this->input->post('nombre_alumno');
      $d = $this->input->post('direccion');
      $t = $this->input->post('telefono');
			$e = $this->input->post('email');
      $c = $this->input->post('carrera');
			$ni = $this->input->post('nivel');

			if(!$this->upload->do_upload('foto')){
		 		echo $this->upload->display_errors();
		  }else{
		 		$file_info = $this->upload->data();
		 		$this->Voli_model->addAlumno($m,$file_info['file_name'],$n,$d,$t,$e,$c,$ni);

		 		redirect('CA/Voleibol/getAlumno');
		 }

		}else {

		 redirect('Home/index');

	 }

 }



  public function actualizarAlumno($id){
		if($this->session->userdata('autentificado')){
      $data['alumno'] = $this->Voli_model->getAlumno($id);
      $this->load->view('admin/voleibol/actualizarAlumno', $data);
  }else {

	 redirect('Home/index');

 }
}

public function upAlumno(){
		$id = $this->input->post('id');
		$m = $this->input->post('matricula');
		$n = $this->input->post('nombre_alumno');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
    $c = $this->input->post('carrera');
		$ni = $this->input->post('nivel');

		$this->Voli_model->upAlumno($id,$m,$n,$d,$t,$e,$c,$ni);

			redirect('CA/Voleibol/getAlumno');}

  public function delAlumno($id){
      $this->Voli_model->delAlumno($id);
			redirect('CA/Voleibol/getAlumno');
  }

	public function tuXML($nombre){
		$xml = $this->Voli_model->tuXML();
		$this->load->helper('download');

		$nombre.='.xml';

		force_download($nombre,$xml);
}


	public function cerrarSecion(){
		$arreglo_usuario = array(

		'autentificado' => FALSE
	);
	$this->session->set_userdata($arreglo_usuario);
	redirect('/Home/index');

	}




    }
