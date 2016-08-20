<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: XXVSamuraiVXX
 * Date: 11/08/2016
 * Time: 02:03 AM
 */
class Mojigangas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mojigangas_model');
    }

    //-------------Cargar Vista Login-------------//
    public function login_taller(){
        if($this->session->userdata('autentificado')) {
            $data['content'] = 'talleres/login_Taller/mojigangas';
            $this->load->view('talleres/login_Taller/plantilla', $data);
        }else{
            redirect('Home/index');
        }
    }

    //-------------Cargar Vista Mojigangas------------//
    public function mojigangas($id = null){
        if($this->session->userdata('autentificado')) {
            $data['alum'] = $this->Mojigangas_model->getAlumno($id);
            $data['content'] = 'talleres/mojigangas/inicio';
            $data['nombre'] = $this->session->userdata('nombre');
            $this->load->view('talleres/mojigangas/plantilla', $data);
        }else{
            redirect('Home/index');
        }
    }

    //--------------Envar datos recibidos del login--------//
    public function login_data(){
        if($this->session->userdata('autentificado')) {
            $matricula=$this->input->post('matricula');
            $password=$this->input->post('password');
            //Se verifica si el usuario existe en la base de datos//
            $profesor = $this->Mojigangas_model->sesion($matricula, $password);

            if ($profesor){
                $arreglo_profesor = array(
                    'idProfesor'=> $profesor->idProfesor,
                    'matricula' => $profesor->matricula,
                    'nombre' => $profesor->nombre,
                    'privilegios' => $profesor->privilegios,

                    'autentificado' => TRUE
                );

                $this->session->set_userdata($arreglo_profesor);
                redirect('CPProfesor/Mojigangas/mojigangas');

            }else{

                redirect('Home/l_profesor');
            }
        }else{
            redirect('Home/index');
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
                $this->Mojigangas_model->addAlumno($mat, $file_info['file_name'] , $nom, $dir, $tel, $email, $carr, $niv);
                redirect('CPProfesor/Mojigangas/mojigangas');
                $this->mojigangas();
            }
        }else{
            redirect('Home/index');
        }
    }

    //-------------Cargar vista frmUpAlumno----------//
    public function frmUpAlumno($id = null){
        if($this->session->userdata('autentificado')) {
            $data['al'] = $this->Mojigangas_model->getAlumno($id);
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

            $this->Mojigangas_model->upAlumno($id, $mat ,$nom, $dir, $tel, $email, $carr, $niv);
            redirect('CPProfesor/Mojigangas/mojigangas');
        }else{
            redirect('Home/index');
        }

    }


    //------------------Eliminar--------------------//
    public function delAlumno($id){
        if($this->session->userdata('autentificado')) {
            $this->Mojigangas_model->delAlumno($id);

            redirect('CPProfesor/Mojigangas/mojigangas');
        }else{
            redirect('Home/index');
        }
    }


    //----------------------Reporte XML------------------//
    public function tuXML($nombre){
        if($this->session->userdata('autentificado')) {
            $xml = $this->Mojigangas_model->tuXML();
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
            $this->load->helper('mysql_to_excel');
            to_excel($this->Mojigangas_model->tuExel(),"ReporteAlumno");
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
        redirect('CPProfesor/Mojigangas/mojigangas');
    }






}