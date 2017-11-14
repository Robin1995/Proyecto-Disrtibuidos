<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Categoria extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        
       
        //$this->load->model('model/Model_Producto');
         //$autoload['model'] = array('Model_product');
         $this->load->model('Model_Categoria');
      
    }

    public function  index(){
        $data['contenido'] ="usuario/index";  //enviar a plantilla vista index
        $data['selCategoria']= $this->Model_Categoria->selCategoria();
        $this->load->view("plantilla",$data);

    }
}
