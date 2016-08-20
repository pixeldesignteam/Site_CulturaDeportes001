<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: XXVSamuraiVXX
 * Date: 11/08/2016
 * Time: 02:03 AM
 */
class Aplasticas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aplasticas_model');

    }

    //-------------Cargar Vista Login-------------//
    public function login_taller(){
        if($this->session->userdata('autentificado')) {
            $data['content'] = 'talleres/login_Taller/inicio';
            $this->load->view('talleres/login_Taller/plantilla', $data);
        }else{
            redirect('Home/index');
        }
    }

    //-------------Cargar Vista aPlasticas------------//
    public function a_Plasticas($id = null){
        if($this->session->userdata('autentificado')) {
            $data['alum'] = $this->Aplasticas_model->getAlumno($id);
            $data['content'] = 'talleres/a_Plasticas/inicio';
            $data['nombre'] = $this->session->userdata('nombre');
            $this->load->view('talleres/a_Plasticas/plantilla', $data);
        }else{
            redirect('Home/index');
        }
    }

    //--------------Envar datos recibidos del login--------//
    public function login_data(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('matricula', 'Matricula', 'required|trim|min_length[8]|max_length[8]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[15]');
        if ($this->form_validation->run() == FALSE) {
            $data['content'] = 'talleres/login_Taller/inicio';
            $this->load->view('talleres/login_Taller/plantilla', $data);
        }else{
            if($this->session->userdata('autentificado')) {
                $matricula=$this->input->post('matricula');
                $password=$this->input->post('password');
                //Se verifica si el usuario existe en la base de datos//
                $profesor = $this->Aplasticas_model->sesion($matricula, $password);

                if ($profesor){
                    $arreglo_profesor = array(
                        'idProfesor'=> $profesor->idProfesor,
                        'matricula' => $profesor->matricula,
                        'nombre' => $profesor->nombre,
                        'privilegios' => $profesor->privilegios,

                        'autentificado' => TRUE
                    );

                    $this->session->set_userdata($arreglo_profesor);
                    redirect('CPProfesor/Aplasticas/a_Plasticas');

                }else{

                    redirect('Home/l_profesor');
                }
            }else{
                redirect('Home/index');
            }
        }





    }

    //--------------Cargar vista frmAlumno-----------------//
    public function frmAlumno(){
        if($this->session->userdata('autentificado')) {
            $data['content'] = 'talleres/frmAlumno/inicio';
            $this->load->view('talleres/frmAlumno/plantilla', $data);
        }else{
            redirect('Home/index');
        }
    }


    //------------------Agregar----------------//
    public function addAlumno(){
        if($this->session->userdata('autentificado')) {
            $config['upload_path'] = "./upload";
            $config['allowed_types'] = "png|jpg|gif|jpeg";
            $config['max_size'] = "28000";
            $this->load->library('upload',$config);

            $mat = $this->input->post('matricula');
            $foto = $this->input->post('foto');
            $nom = $this->input->post('nombre');
            $dir = $this->input->post('direccion');
            $tel = $this->input->post('telefono');
            $email = $this->input->post('email');
            $carr = $this->input->post('carrera');
            $niv = $this->input->post('nivel');





            if (!$this->upload->do_upload('foto')){
                echo $this->upload->display_errors();
            }else{
                $file_info = $this->upload->data();
                $this->Aplasticas_model->addAlumno($mat, $file_info['file_name'] , $nom, $dir, $tel, $email, $carr, $niv);
                redirect('CPProfesor/Aplasticas/a_Plasticas');
                $this->a_Plasticas();
            }
        }else{
            redirect('Home/index');
        }
    }

    //-------------Cargar vista frmUpAlumno----------//
    public function frmUpAlumno($id = null){
        if($this->session->userdata('autentificado')) {
            $data['al'] = $this->Aplasticas_model->getAlumno($id);
            $data['content'] = 'talleres/frmUpAlumno/inicio';
            $this->load->view('talleres/frmUpAlumno/plantilla', $data);
        }else{
            redirect('Home/index');
        }
    }

    //-----------------Actualizar-----------------//
    public function upAlumno(){
        if($this->session->userdata('autentificado')) {
            $id = $this->input->post('id');
            $mat = $this->input->post('matricula');
            $nom = $this->input->post('nombre');
            $dir = $this->input->post('direccion');
            $tel = $this->input->post('telefono');
            $email = $this->input->post('email');
            $carr = $this->input->post('carrera');
            $niv = $this->input->post('nivel');

            $this->Aplasticas_model->upAlumno($id, $mat ,$nom, $dir, $tel, $email, $carr, $niv);
            redirect('CPProfesor/Aplasticas/a_plasticas');
        }else{
            redirect('Home/index');
        }

    }


    //------------------Eliminar--------------------//
    public function delAlumno($id){
        if($this->session->userdata('autentificado')) {
            $this->Aplasticas_model->delAlumno($id);

            redirect('CPProfesor/Aplasticas/a_plasticas');
        }else{
            redirect('Home/index');
        }
    }


    //----------------------Reporte XML------------------//
    public function tuXML($nombre){
        if($this->session->userdata('autentificado')) {
            $xml = $this->Aplasticas_model->tuXML();
            $this->load->helper('download');
            $nombre.='.xml';
            force_download($nombre, $xml);
        }else{
            redirect('Home/index');
        }
    }

    //------------------------Reporte Exel-----------------//
    public function tuExel(){
        if($this->session->userdata('autentificado')) {
            $this->load->helpers('mysql_to_excel_helper');
            to_excel($this->Aplasticas_model->tuExel(),"ReporteAlumno");
        }else{
            redirect('Home/index');
        }
    }


    //--------------Cerrar sesion---------------//
    public function endSession(){
        $arreglo_profesor = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($arreglo_profesor);
        redirect('home/index');
    }

    public function endSessionT(){
        $arreglo_profesor = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($arreglo_profesor);
        redirect('CPProfesor/Aplasticas/a_Plasticas');
    }






}