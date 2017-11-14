
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>S I G H T</title>

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.css">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/section.css">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/about.css">
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
	</head>
<body>
<!-- Home -->
	<section class="portfolio-header" id="header">
		
		<nav class="navbar navbar-default">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">SIGHT</a>
				</div> <!-- /.navbar-header -->

		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url();?>index.php/Cmain">home</a></li>
						<li class="active"><a href="about.html">about us</a></li>
						<li><a href="service.html">services</a></li>
						<li><a href="portfolio.html">portfolio</a></li>
						<li><a href="contact.html">contact</a></li>
					</ul> <!-- /.nav -->
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container -->
		</nav>
	</section> <!-- /#header -->


<!-- Section Background -->
	<section class="section-background">
            <div class="container">
            <!--nav bar-->
                    <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#registrar" role="tab" data-toggle="tab">registrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#editar" role="tab" data-toggle="tab">editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#consultar" role="tab" data-toggle="tab">consultar</a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="#settings" role="tab" data-toggle="tab">Settings</a></li>
                </ul



              <!-- Tab panes -->
              <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="registrar">

                      <!-- Horizontal Form -->
                      <div class="box box-info">
                        <div class="box-header with-border">
                          <h2 class="box-title col-lg-offset-2 label-info text-center  ">Formulario de Productos</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form method="POST" action="<?php echo base_url();?>index.php/Producto/insert" class="form-horizontal">

                          <div class="box-body">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Codigo Barras</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputEmail3" value="" name="txtCodigoBarras" placeholder="Codigo barras" required>
                              </div>
                            </div>

                              <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Descripcion</label>
                              <div class="col-sm-10">
                                <input type="text" value="" class="form-control" id="inputEmail3" name="txtDescripcion" placeholder="descripcion" required>
                              </div>
                            </div>

                              <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Existencia</label>
                              <div class="col-sm-10">
                                  <input type="number" class="form-control" id="inputEmail3" name="txtExistencia" placeholder="existencia" min="0" max="9999" value="1" > 
                              </div>
                            </div>

                              <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Precio Costo</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputEmail3"name="txtPrecioCosto"  placeholder="precio_costo"min="0" max="9999999999" >
                              </div>
                            </div>

                              <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Stock Minimo</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputEmail3" name="txtStockMinimo" placeholder="stock_minimo"min="0" max="9999" value="1">
                              </div>
                            </div>

                              <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Impuesto</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputEmail3" name="txtImpuesto"  placeholder="impuesto"min="0" max="9999" value="0">
                              </div>
                            </div>

                              <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Precio Venta</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputEmail3" name="txtPrecioVenta"  placeholder="precio_venta"min="0" max="9999999999" >
                              </div>
                            </div>



                          </div>

                          <!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary col-lg-offset-2">Cancel</button>
                            <button type="submit" class="btn btn-info col-lg-offset-0">Guardar</button>
                          </div>
                          <!-- /.box-footer -->
                        </form>
                      </div>
                    </div>  
                  <div role="tabpanel" class="tab-pane" id="editar">

                  </div>


                  <div role="tabpanel" class="tab-pane" id="consultar">
                      <button type="submit" name="buscar" id="btn_buscar_producto" class="btn btn.flat">
                          <i class="fa fa-search">&nbsp;buscar</i>
                      </button>
                      <div class="box box-primary col-sm-9">
                          <table id="tbl_productos"class="table table-bordered">
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Descripcion</th>
                              <th>categoria</th>
                              <th style="width: 40px">existencia</th>
                            </tr>
                            <tr>

                            </tr>

                          </table>
                       </div>
                  </div>


                <div role="tabpanel" class="tab-pane" id="settings">
                   jkkk
                </div>


              </div>

            </div>


    </div>
          

            
            <!--.nav barr-->
           
	</section> <!-- /.section-background -->



<!-- Our Team -->
	<section class="team">
		<div class="container section-wrapper">
			<h2 class="section-title black">
				tus clientes
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="<?php echo base_url();?>assets/images/team-1.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							David Martin
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="<?php echo base_url();?>assets/images/team-2.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Reena Scot
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="<?php echo base_url();?>assets/images/team-3.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Paul Smith
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="<?php echo base_url();?>assets/images/team-4.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Jeneflr White
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="<?php echo base_url();?>assets/images/team-5.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							David Martin
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="<?php echo base_url();?>assets/images/team-6.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Reena Scot
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="<?php echo base_url();?>assets/images/team-7.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Paul Smith
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="<?php echo base_url();?>assets/images/team-8.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Jeneflr White
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.team -->


<!-- Testimonial -->
	<section class="testimonial">
		<div class="container section-wrapper">
			<div class="section-title">
				testmonials
			</div> <!-- /.section-title -->
			<div class="underline white"></div>
			<div class="owl-carousel testimonial-owl">
				<div class="item">
					<p class="testimonial-detail">
						The Department of Computer Science and Engineering, Islamic University of Technology(IUT), is one of the 
					</p>
					<div class="test-name">
						<strong>Mohoshin Ahmed</strong> <br>
						ROX THEME
					</div>
				</div> <!-- /.item -->
				<div class="item">
					<p class="testimonial-detail">
						The Department of Computer Science and Engineering, Islamic University of Technology(IUT), is one of the 
					</p>
					<div class="test-name">
						<strong>Mohoshin Ahmed</strong> <br>
						ROX THEME
					</div>
				</div> <!-- /.item -->
				<div class="item">
					<p class="testimonial-detail">
						The Department of Computer Science and Engineering, Islamic University of Technology(IUT), is one of the 
					</p>
					<div class="test-name">
						<strong>Mohoshin Ahmed</strong> <br>
						ROX THEME
					</div>
				</div> <!-- /.item -->
			</div> <!-- /.owl-carousel -->
		</div> <!-- /.container -->
	</section> <!-- /.testimonial -->


<!-- Add -->
	<section class="section-wrapper add container">
		<div class="owl-carousel add-owl">
				<div class="item">
					<img src="<?php echo base_url();?>assets/images/add-1.png" alt="add" class="add-item">
				</div> <!-- /.item -->
				<div class="item">
					<img src="<?php echo base_url();?>assets/images/add-2.png" alt="add" class="add-item">
				</div> <!-- /.item -->
				<div class="item">
					<img src="<?php echo base_url();?>assets/images/add-3.png" alt="add" class="add-item">
				</div> <!-- /.item -->
				<div class="item">
					<img src="<?php echo base_url();?>assets/images/add-4.png" alt="add" class="add-item">
				</div> <!-- /.item -->
				<div class="item">
					<img src="<?php echo base_url();?>assets/images/add-1.png" alt="add" class="add-item">
				</div> <!-- /.item -->
				<div class="item">
					<img src="<?php echo base_url();?>assets/images/add-2.png" alt="add" class="add-item">
				</div> <!-- /.item -->
				<div class="item">
					<img src="<?php echo base_url();?>assets/images/add-3.png" alt="add" class="add-item">
				</div> <!-- /.item -->
				<div class="item">
					<img src="<?php echo base_url();?>assets/images/add-4.png" alt="add" class="add-item">
				</div> <!-- /.item -->
			</div> <!-- /.owl-carousel -->
	</section>


<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="copy">
						Copyright &copy; 2015 Your Company
					</div>
				</div>
				<div class="col-sm-4 text-center">
					<div class="social-icon">
						<a href="#">
							<div class="icon fb">
								<i class="ion-social-facebook"></i>
							</div>
						</a>
						<a href="#">
							<div class="icon twitter">
								<i class="ion-social-twitter"></i>
							</div>
						</a>
						<a href="#">
							<div class="icon google">
								<i class="ion-social-googleplus"></i>
							</div>
						</a>
						<a href="#">
							<div class="icon rss">
								<i class="ion-social-rss"></i>
							</div>
						</a>
					</div>		
				</div>
				<div class="col-sm-4 text-right">
					<div class="copy">
						Theme by <a href="http://www.themewagon.com">themewagon.com</a>. All Rights Reserved
					</div>
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer>
	


	<script src="<?php echo base_url();?>assets/js/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url();?>public/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/contact.js"></script>
	<!-- // <script src="assets/js/smoothscroll.js"></script> -->
	<script src="<?php echo base_url();?>assets/js/script.js"></script>


</body>
</html>