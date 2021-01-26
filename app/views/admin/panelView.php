
<style type="text/css">
	


.container {
	position: absolute;
	top: 0;
	background: #222;
	color: #fff;
	width: 100%;
	min-height: 100vh;
	display: flex;
}
#recha{
	color: white;
}
#rechazo{
	color: black;
}
.preloader {
	margin: auto;
	
	width:100%;
	height:15px;
	background: rgba(255,255,255,0.1);
	
	position: relative;
}

.preloader:before {
	content: "";
	position: absolute;
	background: green;
	width: 0;
	height: 30px;
	
	animation: preloader 10s infinite;
}

.preloader p {
	margin: 0;
	line-height: 30px;
	font-size: 25px;
	font-weight: bold;
	
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
}

.cerrar {
	transform: translateY(-100%);
	transition: all 0.5s;
}

@keyframes preloader {
	90% {
		width: 100%;
		opacity: 1;
	}
	100% {
		width: 100%;
		opacity: 0;
	}
}
#indicadores{
  table-layout: fixed;
}







 #int{
	width: 100px;
  overflow: auto;
}

</style>



<section class="content" id="v_app" >
	<!-- Main row -->
	
	<div class="row">
		<!-- Left col -->
		<section  id="cuadros" class="col-lg-9 connectedSortable" >

			<div class="row">
			<h1 class="text-center"> <?php echo "Clientes"." ";?></h1></center>	
       

       

        

      

			<div class="row">
		
        
		<div class="col-md-12">
			
			<!-- TABLE: LATEST ORDERS -->
			<div class="box box-info">
                <div class="box-header with-border">
					<h3 class="box-title"></h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div><!-- /.box-header -->
                <div class="box-body">
					
					
						<br>
					 <div id="custom-search-input">
					 	<center>
					 		 <div class="input-group col-md-10">
                                <input id="search" type="search" v-model="buscar" class="  search-query form-control" placeholder="Search..." id="seearch" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" id="searching">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>

                            


							   
							</div>

					 	</center>
                           
                        </div>

						<br>
					
				
					<table class="table table-bordered table-hover dataTableREOSC" id="datatables">
						<thead>
							<tr >
								
								<th><center>Username</center></th>
								<th><center>Nombre</center></th>
								<th><center>Apellido Paterno</center></th>
								<th><center>Apellido Materno</center></th>
								<th><center>Email</center></th>
								
								
							</tr>
							
						</thead>

						<tbody v-for="cliente in datosFiltrados">
							
						<tr>
						<td>{{cliente.username}}</td>
						<td>{{cliente.nombre}}</td>
						<td>{{cliente.app}}</td>
						<td>{{cliente.apm}}</td>
						<td>{{cliente.email}}</td>
						</tr>
						



						</tbody>



					</table>
				
					
				</div>
				
			</div>
		</div>
		
	</div>



			
		</section><!-- /.Left col -->
		<!-- right col (We are only adding the ID to make the widgets sortable)-->
		<section class="col-lg-3 connectedSortable">
			<!-- Bienvenida -->
			<?php 
					echo "<h3>Welcome</h3>";
				
			?>
			<div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active">
                  <div class="widget-user-image">
                   <img src="<?php echo  BASE_TEMPLATE.'/'.ROOT_USERS."sinfoto.png"; ?>" class="img-circle" alt="Imagen del Usuario" width="50%"> 
                  </div>
                  <h3 class="widget-user-username"><?php echo "Admin" ?></h3>
                  <h5 class="widget-user-desc">Admin</h5>
                </div>
               
              </div>
              <br>
			<!-- Fin Bienvenida -->
			
			<!-- Fin Usuarios -->
			<!-- Calendario -->
			 <!-- Calendar -->
              <!-- Fin Usuarios -->

               <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                 
                  <center>

                  	 <i class="fa fa-calendar"></i>
                  	 <h1 class="box-title">Calendar</h1></center>
                  <!-- tools box -->
                 
                </div><!-- /.box-header -->
               
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->

               
              </div><!-- /.box -->
		
			<!-- Fin Calendario -->
			<!-- chat -->
		
			<!-- fin chat -->
			
		</section><!-- /.Right col -->
	</div><!-- /.row (main row) -->
	 
</section>


			
<!-- /.content -->
<div class="modal fade" id="cargando" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
			 <div class="container" id="container">
                <div class="preloader">
                    <p>SEARCHING</p>
                </div>
            </div>

		</div>
	</div>
</div