<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banda extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Banda_model');
    }

    public function getBanda($id=null){
			if($this->session->userdata('autentificado')){
      $data['banda'] = $this->Banda_model->getBanda();
      $this->load->view('admin/banda', $data);
		}else {

			redirect('Home/index');

		}
	}

  public function nuevaBanda(){
    if($this->session->userdata('autentificado')){
     $this->load->view('admin/banda/nuevaBanda');
 }  else {
     redirect('Home/index');
 }

}

  public function addBanda(){
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
		 		$this->Banda_model->addBanda($m,$file_info['file_name'],$n,$d,$t,$e,$c,$ni);

		 		redirect('CA/Banda/getBanda');
		 }

		}else {

		 redirect('Home/index');

	 }

 }



  public function actualizarBanda($id){
		if($this->session->userdata('autentificado')){
      $data['banda'] = $this->Banda_model->getBanda($id);
      $this->load->view('admin/banda/actualizarBanda', $data);
  }else {

	 redirect('Home/index');

 }
}

public function upBanda(){
		$id = $this->input->post('id');
		$m = $this->input->post('matricula');
		$n = $this->input->post('nombre_alumno');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
    $c = $this->input->post('carrera');
		$ni = $this->input->post('nivel');

		$this->Banda_model->upBanda($id,$m,$n,$d,$t,$e,$c,$ni);

			redirect('CA/Banda/getBanda');}

  public function delBanda($id){
      $this->Banda_model->delBanda($id);
			redirect('CA/Banda/getBanda');
  }


	public function tuXML($nombre){
			$xml = $this->Banda_model->tuXML();
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
