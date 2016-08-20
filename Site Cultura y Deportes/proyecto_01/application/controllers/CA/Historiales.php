<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historiales extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Historiales_model');
    }

    public function getHistorial($id=null){
      if($this->session->userdata('autentificado')){
        $data['historial'] = $this->Historiales_model->getHistorial();
        $this->load->view('admin/historial', $data);
   }  else {
       redirect('Home/index');
   }

    	}


    public function nuevoHistorial(){
      if($this->session->userdata('autentificado')){
       $this->load->view('admin/historiales/nuevoHistorial');
   }  else {
       redirect('Home/index');
   }

}

public function addHistorial(){
  if($this->session->userdata('autentificado')){
    $a = $this->input->post('alergias');
     $e = $this->input->post('enfermedades');
     $al = $this->input->post('altura');
     $p = $this->input->post('peso');
     $s = $this->input->post('sangre');
     $i = $this->input->post('idAlumno');
    $this->Historiales_model->addhistorial($a,$e,$al,$p,$s,$i);

  redirect('CA/Historiales/getHistorial');
   }  else {
       redirect('Home/index');
   }

}

		public function actualizarHistorial($id){
      if($this->session->userdata('autentificado')){
        $data['historial'] = $this->Historiales_model->getHistorial($id);
 				$this->load->view('admin/historiales/actualizarHistorial', $data);
   }  else {
       redirect('Home/index');
   }

		}

		public function upHistorial(){
      if($this->session->userdata('autentificado')){
        $id = $this->input->post('id');
         $a = $this->input->post('alergias');
          $e = $this->input->post('enfermedades');
          $al = $this->input->post('altura');
          $p = $this->input->post('peso');
          $s = $this->input->post('sangre');
          $i = $this->input->post('idAlumno');


        $this->Historiales_model->upTeller($id,$a,$e,$al,$p,$s,$i);
        redirect('CA/Historiales/getHistorial');
   }  else {
       redirect('Home/index');
   }


		}

		public function delHistorial($id){

				$this->Historiales_model->delHistorial($id);

				redirect('CA/Historiales/getHistorial');
		}


		public function tuXML($nombre){
	$xml = $this->Historiales_model->tuXML();
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
