<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Model_Cliente extends CI_Model{
    
    function __construct() {
        parent::__construct();
       // $this->load->database();
    }
    public function selPais(){
        $query = $this->db->query("SELECT id, nombre FROM lugares WHERE tipo ='P'");
        //retornamos todos los registros de la categoria
        return $query->result();
    }
    public function selDepartamento(){
        $query = $this->db->query("SELECT id, nombre FROM lugares WHERE tipo ='D'");
        //retornamos todos los registros del proveedor
        return $query->result();
    }
    public function selCiudades(){
        //$query = $this->db->query("SELECT id, nombre FROM lugares WHERE tipo ='M'");
        //retornamos todos los registros del proveedor
        //return $query->result(); 
    }
    public function selCiudad($s){
        $query = $this->db->get_where('lugares',array('ubicado' => $s));
        //retornamos todos los registros del proveedor
        return $query->result(); 
    }
    
    public function insertarCliente($nit,$nombre_cliente,$email_cliente){
        $data = array(
            'nit_cliente' =>$nit,
            'nombre_cliente' =>$nombre_cliente,
            'email_cliente' =>$email_cliente
        );
      $this->db->insert('cliente',$data);
    }
    
    
        
     public function compInsertarCliente($nit_cliente){
        $this->db->select('nit_cliente,nombre_cliente');
        $this->db->from('cliente');
        $this->db->where('nit_cliente', $nit_cliente);
        //$query = $this->db->query("SELECT nit_cliente FROM cliente WHERE tipo =$nit_cliente'");
        $result= $this->db->get();
        if($result->num_rows() == 1){
            $r = $result->row();
          return 1;
        }else{
            return 0;
        }
    
       
    }
    
   
}