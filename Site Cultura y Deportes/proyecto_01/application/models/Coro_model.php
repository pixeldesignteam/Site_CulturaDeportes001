<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: XXVSamuraiVXX
 * Date: 11/08/2016
 * Time: 02:06 AM
 */
class Coro_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //-------------Consulta si el usuario existe-----//
    public function sesion($matricula, $password){
        $this->db->select('*');
        $this->db->from('profesor');
        $this->db->where('matricula', $matricula);
        $this->db->where('password' , $password);

        $sql = $this->db->get();

        if ($sql->num_rows() > 0){
            return $sql->row();
        }else{
            return null;
        }
    }

    //----------------Agregar------------------//
    public function addAlumno($mat, $file_info, $nom, $dir, $tel, $email, $carr, $niv){
        $data = array(
            'id_alumno' => 0,
            'matricula' => $mat,
            'foto' => $file_info,
            'nombre_alumno' => $nom,
            'direccion' => $dir,
            'telefono' => $tel,
            'email' => $email,
            'carrera' => $carr,
            'nivel' => $niv


        );

        return $this->db->insert('coro', $data);
    }

    //----------------Obtener registro------------//
    public function getAlumno($id = null){
        $this->db->select('*');
        $this->db->from('coro');
        if ($id != null){
            $this->db->where('id_alumno', $id);
        }

        $sql = $this->db->get();

        if ($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    //----------------Actualizar-------------------//
    public function upAlumno($id, $mat ,$nom, $dir, $tel, $email, $carr, $niv){
        $data = array(

            'matricula' => $mat,
            'nombre_alumno' => $nom,
            'direccion' => $dir,
            'telefono' => $tel,
            'email' => $email,
            'carrera' => $carr,
            'nivel' => $niv
        );
        $this->db->where('id_alumno', $id);
        $this->db->update('coro', $data);

    }

    //-----------------Eliminar--------------------//
    public function delAlumno($id){
        $this->db->where('id_alumno', $id);
        $this->db->delete('coro');
    }


    //------------------Reporte XML--------------//
    public function tuXML(){
        $this->load->dbutil();
        $consulta = $this->db->get('coro');
        $config = array (
            'root' => 'coro',
            'element' => 'elemento',
            'newline' => "\n",
            'tab'  => "\t"
        );
        $xml = $this->dbutil->xml_from_result($consulta, $config);//<----
        return $xml;


    }

    //------------------Reporte Exel-----------------//
    public function tuExel(){
        $fields = $this->db->field_data('coro');
        $this->db->order_by('id_alumno','asc');
        $query =$this->db->get('coro');
        return array("fields" => $fields, "query" => $query);
    }




}