<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 class CLogin extends CI_Controller{
     
     function __construct() {
         parent::__construct();
         $this->load->helper('url');
         $this->load->model('Model_Login');
         $this->load->model('Model_product');
     }
     public function index(){
         $data['mensaje']='';
         $this->load->view('vLogin',$data);
     }
     public function ingresar(){
        $usu=$this->input->post('txtUsuario');
        $pass=$this->input->post('txtClave');
        $result =$this->Model_Login->login($usu,$pass);
         
        
         if($result == 1){
             
               $data['selCategoria']= $this->Model_product->selCategoria();
               $data['selProveedor']= $this->Model_product->selProveedor();
               
             $this->load->view('layout/header');
             $this->load->view('layout/menu');
             $this->load->view('layout/inicial');
             $this->load->view('layout/footer');
             
            // echo '<script language="javascript">alert("usuario si exi"+$usuario);</script>'; 
         }else{
             $data['mensaje'] = "usuario o contraseña erronea";
             $this->load->view('vLogin',$data);
         }
         
     }
 }

