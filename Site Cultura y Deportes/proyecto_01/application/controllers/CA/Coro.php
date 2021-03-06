<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coro extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Coro_model');
    }

    public function getCoro($id=null){
			if($this->session->userdata('autentificado')){
      $data['coro'] = $this->Coro_model->getCoro();
      $this->load->view('admin/coro', $data);
		}else {

			redirect('Home/index');

		}
	}

  public function nuevoCoro(){
    if($this->session->userdata('autentificado')){
     $this->load->view('admin/coro/nuevoCoro');
 }  else {
     redirect('Home/index');
 }

}

  public function addCoro(){
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
		 		$this->Coro_model->addCoro($m,$file_info['file_name'],$n,$d,$t,$e,$c,$ni);

		 		redirect('CA/Coro/getCoro');
		 }

		}else {

		 redirect('Home/index');

	 }

 }



  public function actualizarCoro($id){
		if($this->session->userdata('autentificado')){
      $data['coro'] = $this->Coro_model->getCoro($id);
      $this->load->view('admin/coro/actualizarCoro', $data);
  }else {

	 redirect('Home/index');

 }
}

public function upCoro(){
		$id = $this->input->post('id');
		$m = $this->input->post('matricula');
		$n = $this->input->post('nombre_alumno');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
    $c = $this->input->post('carrera');
		$ni = $this->input->post('nivel');

		$this->Coro_model->upCoro($id,$m,$n,$d,$t,$e,$c,$ni);

			redirect('CA/Coro/getCoro');}

  public function delCoro($id){
      $this->Coro_model->delCoro($id);
			redirect('CA/Coro/getCoro');
  }


	public function tuXML($nombre){
		$xml = $this->Coro_model->tuXML();
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
