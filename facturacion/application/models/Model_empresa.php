<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Model_empresa extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
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
    function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
     }
    public function insertEmpresa($regimen,$id_lugar,$NIT,$serial_unico,$usuario,$clave,$nombre_comercial,$identificacion_rep_legal,$nombre_registro,$logo,$direccion,$telefono,$resolucion_dian){
        $arrayDatos = array(
            'regimen_contributivo' =>$regimen,
            'id_lugar' =>$id_lugar,
            'NIT' =>$NIT,
            'serial_unico' =>$serial_unico,
            'usuario'=>$usuario,
            'clave'=>$clave,
            'nombre_comercial'=>$nombre_comercial,
            'identificacion_rep_legal'=>$identificacion_rep_legal,
            'nombre_registro'=>$nombre_registro,
            'logo'=>$logo,
            'direccion'=>$direccion,
            'telefono'=>$telefono,
            'resolucion_dian'=>$resolucion_dian
        );
        $this->db->insert('empresas',$arrayDatos);
    }
    public function insertarCliente($nit,$nombre_cliente,$email_cliente){
        $data = array(
            'nit_cliente' =>$nit,
            'nombre_cliente' =>$nombre_cliente,
            'email_cliente' =>$email_cliente
        );
      $this->db->insert('cliente',$data);
    }
     public function insertarFactura($numero_factura,$nit_cliente,$fecha_hora,$total,$resolucion_dian,$valor_inicial,$valor_final){
        $data = array(
            'num_factura' =>$numero_factura,
            'nit_cliente' =>$nit_cliente,
            'fecha_hora' =>$fecha_hora,
            'total' =>$total,
            'resolucion_dian' =>$resolucion_dian,
            'vlr_inicial_rango' =>$valor_inicial,
            'vlr_final_rango' =>$valor_final,
              
        );
      $this->db->insert('factura',$data);
    }
    
    public function insertProducto($id,$nit_empresa,$descripcion,$id_tipo_producto,$valor_unitario,$porcentaje_iva){
        $data = array(
            'id' =>$id,
            'nit_empresa' =>$nit_empresa,
            'descripcion' =>$descripcion,
            'id_tipo_producto' =>$id_tipo_producto,
            'valor_unitario' =>$valor_unitario,
            'porcentaje_iva' =>$porcentaje_iva,
              
        );
      $this->db->insert('producto',$data);
    }
     public function insertDetllesFactura($num_factura,$id_producto,$cantidad){
        $data = array(
            'num_factura' =>$num_factura,
            'id_producto' =>$id_producto,
            'cantidad' =>$cantidad,
              
        );
      $this->db->insert('detalles_factura',$data);
    }
    
    
     public function compInsertarProducto($id,$nit_empresa){
           
        $this->db->select('id, nit_empresa');
        $this->db->from('producto');
        $this->db->where('id', $id);
        $this->db->where('nit_empresa', $nit_empresa);
       
        $result= $this->db->get();
        if($result->num_rows() == 1){
            $r = $result->row();
          return 1;
        }else{
            return 0;
        }
    
       
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
    
    function obtenerUsuario($user,$password){
        $query = $this->db->
            get_where("empresas", 
            array('usuario' => $user,"clave" => $password));
        $data = null;
        foreach ($query->result() as $row) {
            $data = $row;
        }
        return $data;
    }
    
    
    
    public function comprobar($nit,$serial){      
        $this->db->select('nit, serial_unico');
        $this->db->from('empresas');
        $this->db->where('nit', $nit);
        $this->db->where('serial_unico', $serial);
        
        $result= $this->db->get();
        if($result->num_rows() == 1){
            $r = $result->row();
          return 1;
        }else{
            return 0;
        }
    }
}


