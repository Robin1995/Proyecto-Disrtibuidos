<h1>!!FACATURACION ELECTRONICA!!</h1>


  <!-- Nav tabs -->
  
   <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#home" role="tab" data-toggle="tab">registrar</a></li>
        <li class="nav-item"><a class="nav-link" href="#profile" role="tab" data-toggle="tab">seleccionar</a></li>
        <li class="nav-item"><a class="nav-link" href="#messages" role="tab" data-toggle="tab">Messages</a></li>
        <li class="nav-item"><a class="nav-link disabled" href="#settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul
  
  

  <!-- Tab panes -->
  <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
          <div class="col-md-9">
              
            <!-- form start -->
            <form method="POST" action="<?php echo base_url();?>index.php/Cempresa/insert" class="form-horizontal" enctype="multipart/form-data">
            
              <div class="box-body">
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-8 control-label">Regimen contributivo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" value="" name="txtRegimen" placeholder="Regimen contributivo" required>
                  </div>
                </div>
                  
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-8 control-label">Pais</label>
                  <div class="col-sm-10">
                     <select id="Pais" name ="txtPais"  class="col-sm-12">
                      
                        <option value ="">
                           ::Pais
                        </option>
                       
                    </select> 
                  </div>
                </div>
                    
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-8 control-label">Departamento</label>
                  <div class="col-sm-10">
                     <select id="Departamentos" name ="txtDepartamentos"  class="col-sm-12">
                       
                        <option value ="">
                          ::departamentos
                        </option>
                       
                    </select> 
                  </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-8 control-label">Ciudad</label>
                  <div class="col-sm-10">
                     <select id="Ciudades" name ="txtCiudades"  class="col-sm-12">
                        
                        <option value ="">
                            ::Ciudades
                        </option>
                        
                    </select> 
                </div>
                  
                  
                 </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-lg-8 control-label">NIT</label>
                  <div class="col-lg-10">
                    <input type="text" value="" class="form-control" id="inputEmail3" name="txtNit" placeholder="NIT" required>
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-8 control-label">Nombre comercial</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="txtNombreComercial" placeholder="Nombre comercial" min="0" max="9999"  > 
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-8 control-label">Identificacion representante legal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3"name="txtIdentificacionRepLegal"  placeholder="identificacion_rep_legal"min="0" max="9999999999" >
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-8 control-label" >Nombre registro</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="txtNombreRegistro" placeholder="Nombre registro"min="0" max="9999" >
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 control-label">Logo</label>
                  
                  <div class="col-sm-12">
                    
                      <input type="file"  class="btn btn-info" id="inputEmail3" name="logo"  placeholder="Logo" required="">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-8 control-label">Direccion</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="txtDireccion"  placeholder="Direccion" >
                  </div>
                </div>
                        
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-8 control-label">Telefono</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputEmail3" name="txtTelefono"  placeholder="Telefono"min="0" max="9999999999" >
                  </div>
                </div>
                      
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-8 control-label">Resolucion de la dian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="txtResolucionDian"  placeholder="resolucion_dian"min="0" max="9999999999" >
                  </div>
                </div>          
              </div>
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
              <!-- /.box-footer -->
                    </div>
            </form>
         
        </div>
          <div class="col-md-3">
              
              
          </div>
          
  
</div>
      <div role="tabpanel" class="tab-pane" id="profile">
          
      </div>
          
          
      <div role="tabpanel" class="tab-pane" id="messages">
                          
                 <h2>Selecciona un archivo para subir </h2>
                 <form action="<?php echo base_url();?>index.php/Cempresa/subirArchivo" method="post" enctype="multipart/form-data">
                     <input class="btn btn-info" type="file" name="archivo" id="archivo"required="">
                
                 <input type="submit" value="Subir archivo" class="btn btn-success"/>
                 </form>
                 
                 
         
      </div>
          
          
    <div role="tabpanel" class="tab-pane" id="settings">
        <!--<h1><?php echo$titulo;?></h1>-->
        <!--<img src="<?=base_url()?>uploads/imagenes/thumb/<?php echo$imagen;?>"/>-->
    </div>
          
  </div>
       
  