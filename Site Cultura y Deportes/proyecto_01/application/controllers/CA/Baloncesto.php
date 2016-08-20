<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baloncesto extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Baloncesto_model');
    }

    public function getBalon($id=null){
			if($this->session->userdata('autentificado')){
      $data['balon'] = $this->Baloncesto_model->getBalon();
      $this->load->view('admin/baloncesto', $data);
		}else {

			redirect('Home/index');

		}
	}

  public function nuevoBalon(){
    if($this->session->userdata('autentificado')){
     $this->load->view('admin/balon/nuevoBalon');
 }  else {
     redirect('Home/index');
 }

}

  public function addBalon(){
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
		 		$this->Baloncesto_model->addBalon($m,$file_info['file_name'],$n,$d,$t,$e,$c,$ni);

		 		redirect('CA/Baloncesto/getBalon');
		 }

		}else {

		 redirect('Home/index');

	 }

 }



  public function actualizarBalon($id){
		if($this->session->userdata('autentificado')){
      $data['balon'] = $this->Baloncesto_model->getBalon($id);
      $this->load->view('admin/balon/actualizarBalon', $data);
  }else {

	 redirect('Home/index');

 }
}

public function upBalon(){
		$id = $this->input->post('id');
		$m = $this->input->post('matricula');
		$n = $this->input->post('nombre_alumno');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
    $c = $this->input->post('carrera');
		$ni = $this->input->post('nivel');

		$this->Baloncesto_model->upBalon($id,$m,$n,$d,$t,$e,$c,$ni);

			redirect('CA/Baloncesto/getBalon');}

  public function delBalon($id){
      $this->Baloncesto_model->delBalon($id);
			redirect('CA/Baloncesto/getBalon');
  }

	public function tuXML($nombre){
		$xml = $this->Baloncesto_model->tuXML();
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
