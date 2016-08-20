<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beca extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Beca_model');
    }

    public function getBeca($id=null){
      if($this->session->userdata('autentificado')){
        $data['beca'] = $this->Beca_model->getBeca();
        $this->load->view('admin/beca', $data);

   }  else {
       redirect('Home/index');
   }
}


    public function nuevaBeca(){
      if($this->session->userdata('autentificado')){
       $this->load->view('admin/becas/nuevaBeca');
   }  else {
       redirect('Home/index');
   }

}

public function addBeca(){
  if($this->session->userdata('autentificado')){
    $n = $this->input->post('nombreBeca');
    $d = $this->input->post('descripcion');
    $this->Beca_model->addBeca($n,$d);

    redirect('CA/Beca/getBeca');
   }  else {
       redirect('Home/index');
   }

}

		public function actualizarBeca($id){
      if($this->session->userdata('autentificado')){
        $data['beca'] = $this->Beca_model->getBeca($id);
        $this->load->view('admin/becas/actualizarBeca', $data);
   }  else {
       redirect('Home/index');
   }

		}

		public function upBeca(){
      if($this->session->userdata('autentificado')){
        $id = $this->input->post('id');
        $n = $this->input->post('nombreBeca');
        $d = $this->input->post('descripcion');


        $this->Beca_model->upBeca($id,$n,$d);
   redirect('CA/Beca/getBeca');
   }  else {
       redirect('Home/index');
   }

		}

		public function delBeca($id){

				$this->Beca_model->delBeca($id);

  redirect('CA/Beca/getBeca');

	}

	public function cerrarSecion(){
		$arreglo_usuario = array(

		'autentificado' => FALSE
	);
	$this->session->set_userdata($arreglo_usuario);
	redirect('/Home/index');

	}

	}
