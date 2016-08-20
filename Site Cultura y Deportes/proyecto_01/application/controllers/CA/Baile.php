<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baile extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Baile_model');
    }

    public function getBaile($id=null){
			if($this->session->userdata('autentificado')){
      $data['baile'] = $this->Baile_model->getBaile();
      $this->load->view('admin/baile', $data);
		}else {

			redirect('Home/index');

		}
	}

  public function nuevoBaile(){
    if($this->session->userdata('autentificado')){
     $this->load->view('admin/baile/nuevoBaile');
 }  else {
     redirect('Home/index');
 }

}

  public function addBaile(){
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
		 		$this->Baile_model->addBaile($m,$file_info['file_name'],$n,$d,$t,$e,$c,$ni);

		 		redirect('CA/Baile/getBaile');
		 }

		}else {

		 redirect('Home/index');

	 }

 }



  public function actualizarBaile($id){
		if($this->session->userdata('autentificado')){
      $data['baile'] = $this->Baile_model->getBaile($id);
      $this->load->view('admin/baile/actualizarBaile', $data);
  }else {

	 redirect('Home/index');

 }
}

public function upBaile(){
		$id = $this->input->post('id');
		$m = $this->input->post('matricula');
		$n = $this->input->post('nombre_alumno');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
    $c = $this->input->post('carrera');
		$ni = $this->input->post('nivel');

		$this->Baile_model->upBaile($id,$m,$n,$d,$t,$e,$c,$ni);

			redirect('CA/Baile/getBaile');}

  public function delBaile($id){
      $this->Baile_model->delBaile($id);
			redirect('CA/Baile/getBaile');
  }


	public function tuXML($nombre){
	$xml = $this->Baile_model->tuXML();
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
