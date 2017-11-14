<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Login extends CI_Model{
     
    function __construct() {
        parent::__construct();
    }
    public function login($usu,$pass){
                
        $this->db->select('nombre_usuario, contraseña');
        $this->db->from('usuarios');
        $this->db->where('nombre_usuario', $usu);
        $this->db->where('contraseña', $pass);
        
        $result= $this->db->get();
        if($result->num_rows() == 1){
            $r = $result->row();
            $this->session->userdata('sesion_usuario',$r->nombre_usuario);
        return 1;
        }else{
            return 0;
        }
    }
}