<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plasticas extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Plasticas_model');
    }

    public function getArte($id=null){
			if($this->session->userdata('autentificado')){
      $data['arte'] = $this->Plasticas_model->getArte();
      $this->load->view('admin/artes', $data);
		}else {

			redirect('Home/index');

		}
	}

  public function nuevoArte(){
    if($this->session->userdata('autentificado')){
     $this->load->view('admin/Artes/nuevoArte');
 }  else {
     redirect('Home/index');
 }

}

  public function addArte(){
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
		 		$this->Plasticas_model->addArte($m,$file_info['file_name'],$n,$d,$t,$e,$c,$ni);

		 		redirect('CA/Plasticas/getArte');
		 }

		}else {

		 redirect('Home/index');

	 }

 }



  public function actualizarArte($id){
		if($this->session->userdata('autentificado')){
      $data['arte'] = $this->Plasticas_model->getArte($id);
      $this->load->view('admin/artes/actualizarArte', $data);
  }else {

	 redirect('Home/index');

 }
}

public function upArte(){
		$id = $this->input->post('id');
		$m = $this->input->post('matricula');
		$n = $this->input->post('nombre_alumno');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
    $c = $this->input->post('carrera');
		$ni = $this->input->post('nivel');

		$this->Plasticas_model->upArte($id,$m,$n,$d,$t,$e,$c,$ni);

			redirect('CA/Plasticas/getArte');}

  public function delArte($id){
      $this->Plasticas_model->delArte($id);
			redirect('CA/Plasticas/getArte');
  }

	public function tuXML($nombre){
		$xml = $this->Plasticas_model->tuXML();
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
