<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Categoria extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function selCategoria(){
         $query = $this->db->query("SELECT * FROM categorias");
        //retornamos todos los registros de categorias
        return $query->result();
    }
    
}
