<?php 

class Cempresa extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        //$this->load->model('model/Model_Producto');
         $autoload['model'] = array('Model_empresa');
         $this->load->model('Model_empresa');
         }
    

    public function  index(){
        $data['contenido'] ="usuario/empresa";  //enviar a plantilla vista index
        $data['selPais']= $this->Model_empresa->selPais();
        $data['selDepartamento']= $this->Model_empresa->selDepartamento();
        $data['selCiudades']= $this->Model_empresa->selCiudades();
         $data['error'] ="";
         $data['titulo'] ="";
         $data['imagen'] ="";
         $data['datos']="";
        $this->load->view('plantilla',$data);

    }
    public function getCiudades(){
        $s= $this->input->post('ubicado');
        $resultado=$this->Model_empresa->selCiudad($s);
        echo json_encode($resultado);
        
    }
    
    public function subirArchivo(){
        
        $config['upload_path']='./uploads/archivos/';
        $config['allowed_types']='txt';
        $config['max_size']='20048';
        
        $this->load->library('upload',$config);
        
        if(!$this->upload->do_upload("archivo")){
            $data['contenido'] ="usuario/index"; 
            $data['errorArch'] = $this->upload->display_errors();
            $this->load->view('plantilla',$data);
            echo 'erorrrrrr';
        }
        else{
            $file_info = $this->upload->data();
            
            $titulo = "logo";
            $archivo =$file_info['file_name'];
            
            $leer= fopen('uploads/archivos/'.$file_info['file_name'], 'r');                        
            $mostrar = fgets($leer);
            $data = explode(";", $mostrar);
            $nit_empresa=$data[0];
            //echo $data[0];
           // echo $data[1];
           // echo $data[2];
            
            $result =$this->Model_empresa->comprobar($data[0],$data[1]);
            if($result==1){
            
            $total = count($data); 
             $i=0;
                    $array[]="";
                    if ($leer) {
                        while (($búfer = fgets($leer)) !== false) {
                        $lineas= explode(";", $búfer);
                        // echo $búfer;
                        if($i==0){    
                           // echo $lineas[2];
                            $this->Model_empresa->insertarFactura($lineas[0],$lineas[1],$lineas[4],$lineas[5],$lineas[6],$lineas[7],$lineas[8]);
                          
                            $cli_resultado=$this->Model_empresa->compInsertarCliente($lineas[1]);
                          
                            if($cli_resultado==0){
                            $this->Model_empresa->insertarCliente($lineas[1],$lineas[2],$lineas[3]);
                            }
                           
                        }  
                        if($i>0){
                        $lineas= explode(";", $búfer);
                            //$prod_resultado=$this->Model_empresa->compInsertarProducto($lineas[0],$nit_empresa);
                            //yecho $prod_resultado;
                            
                            $this->Model_empresa->insertProducto($lineas[1],$nit_empresa,$lineas[2],$lineas[6],$lineas[4],$lineas[5]); 
                       
                            
                       // $this->Model_empresa->insertProducto($lineas[1],$nit_empresa,$lineas[2],$lineas[6],$lineas[4],$lineas[5]);    
                        $this->Model_empresa->insertDetllesFactura($lineas[0],$lineas[1],$lineas[3]);
                       }    
                       $i++;
                        }
                        
                        if (!feof($leer)) {
                            echo "Error: fallo inesperado de fgets()\n";
                        }
                        fclose($leer);
                    }
                   
            }
            else{
                echo '<script language="javascript">alert("favor ingresar un nit y serial valido");</script>'; 
            }
            
            
          //  $total = count($data);
            $data['contenido'] ="usuario/index"; 
            
            
            $this->load->view('plantilla',$data);
            
            
            $data['estado'] = "archivo subido";
            $data['archivo'] = $archivo;
            $data['error'] = "";
            $data['errorArch'] = "";
            
           
        }
    }
    
    public function crearMiniatura($file_name){
          
        $config['image_library']='gd2';
        $config['source_image']='uploads/imagenes/'.$file_name;
        $config['crate_thumb']=true;
        $config['maintain_ratio']=true;
        $config['new_image']='uploads/imagenes/thumbs/';
        $config['thumb_marker']='';
        $config['width']=150;
        $config['height']=150;
        $this->load->library('image_lib',$config);
        $this->image_lib->resize();
        
    }
    
    public function loginEmpresa(){
        $user = isset($_GET['usuario_empresa']) ? $_GET['usuario_empresa'] : "0";
        $password = isset($_GET['contrasena_empresa']) ? $_GET['contrasena_empresa'] : "0";

        $data->codigo = "0";
        $data->respuesta = "";

        $prueba = $this->Model_empresa->obtenerUsuario($user,$password);

        if($prueba != null){
            $data->codigo = "1";
            $data->respuesta = "Usuario Correcto, Bienvenido";
        } else{
            $data->codigo = "2";
            $data->respuesta = "Usuario o Clave Incorrectos";
        }

        echo json_encode($data);
    }

    
    
    
    
  
    public function insert(){
        $config['upload_path']='./uploads/imagenes/';
        $config['allowed_types']='gif|jpg|png';
        $config['max_size']='2048';
        $config['max_width']='2024';
        $config['max_heigth']='2008';

        $this->load->library('upload',$config);
        
        if(!$this->upload->do_upload("logo")){
            $data['contenido'] ="usuario/index"; 
            $data['error'] = $this->upload->display_errors();
            $this->load->view('plantilla',$data);
            echo 'erorrrrrr';
        }
        else{
            $data['contenido'] ="usuario/index"; 
            $file_info = $this->upload->data();
            
            $this->crearMiniatura($file_info['file_name']);
            $titulo = $this->input->post('nombreLogo');
            $imagen =$file_info['file_name'];
            //$subir = $this->Model_empresa->insertar($titulo,$imagen);        
            $data['titulo'] = $titulo;
            $data['imagen'] = $imagen;
            echo $titulo+"esta vaciaaa";
            $this->load->view('plantilla',$data);
        
        
        $datos = $this->input->post();
        $serial= $this->load->Model_empresa->generarCodigo(10);
        
        $contra= $this->load->Model_empresa->generarCodigo(10);
         
        $clave=  sha1($contra);
       
        if(isset($datos)){
            $txtRegimen= $datos['txtRegimen'];
            $txtNit = $datos['txtNit'];
            $serial_unico =$serial; 
            $password=$clave;
            $txtCiudades = $datos['txtCiudades'];
            $txtNombreComercial = $datos['txtNombreComercial'];
            $txtIdentificacionRepLegal = $datos['txtIdentificacionRepLegal'];
            $txtNombreRegistro = $datos['txtNombreRegistro'];
            //$Logo = $datos['Logo'];
            $txtDireccion = $datos['txtDireccion'];
            $txtTelefono = $datos['txtTelefono'];
            $txtResolucionDian = $datos['txtResolucionDian'];
            $this->Model_empresa->insertEmpresa($txtRegimen,$txtCiudades,$txtNit,$serial_unico,$txtNit,$password,
                    $txtNombreComercial,$txtIdentificacionRepLegal,$txtNombreRegistro,$imagen,$txtDireccion,$txtTelefono,$txtResolucionDian);
            redirect('');
            exit;
        }
        }
    }
}