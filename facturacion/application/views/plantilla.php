<html>
    <head>
        <title>MI PROYECTO</title>
       <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css')?>">
       <script src="<?php echo base_url('public/js/jquery.min.js')?>"></script> 
       <script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
        
       <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    
    <body>
        <header>
              
                
        </header>
    
        <div id ="container">
            <div class="col-md-10">
               
                <?php
                $this->load->view($contenido);
                ?>
                
             </div>   
        </div>
            
        
    </body>
    <footer>
          
          <?php if($this->uri->segment(1)=='Cempresa'){?>
        <script src ="<?= base_url(); ?>public/js/lugar.js"></script>
         <?php }?>
      <script  type="text/javascript">
      var baseurl = '<?php echo base_url();?>';
      </script>
      <script src ="<?= base_url(); ?>uploads/lugares.js"></script>
    </footer>
       
    
</html>
