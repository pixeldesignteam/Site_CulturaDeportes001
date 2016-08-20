<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{

  public function index(){
if($this->session->userdata('autentificado')){
		$data['content'] = 'admin/home';
		$this->load->view('admin/plantilla', $data);
	}else {

    redirect('Home/index');

  }
}



  public function cerrarSecion(){
    $arreglo_usuario = array(

    'autentificado' => FALSE
  );
  $this->session->set_userdata($arreglo_usuario);
  redirect('/Home/index');

  }


}
