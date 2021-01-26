


<section class="content-header">
	<h1>
		Agregar Cliente
		
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo BASE_URL ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="#"><i class="fa fa-gears"></i> Administration</a></li>
		<li class="active">Agregar Cliente</li>
	</ol>
</section>


<!-- Main content -->
<section class="content" id="v_registro">

<div class="row">
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Cliente </h3>
				</div>
				<div class="panel-body">
					
					
				<form id="altaPost" autocomplete="off" @submit.prevent="alta" >
					
						<div class="control-group form-group">
							<div class="controls">
								<label for="username" >Username</label>
								<input type="text" size="30" name="username" id="username" class="form-control">
								<p class="help-block"></p>
							</div>
						</div>
					
					<div class="control-group form-group">
						<div class="controls">
							<label for="nombre" >Nombre</label>
								<input type="text" size="30" maxlength="80" name="nombre" id="nombre" class="form-control">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
								<label for="app" >Apellido Paterno</label>
								<input type="text" size="30" maxlength="80" name="app" id="app" class="form-control">
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
								<label for="username" >Apellido Materno</label>
								<input type="text" size="30" maxlength="80" name="apm" id="apm" class="form-control">
						</div>
					</div>


					<div class="control-group form-group">
						<div class="controls">
								<label for="username" >Email</label>
								<input type="email" size="30" maxlength="80" name="email" id="email" class="form-control">
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
								<label for="username" >Telefono</label>
								<input type="text" size="30" maxlength="80" name="tel" id="tel" class="form-control">
						</div>
					</div>


					<div class="control-group form-group">
						<div class="controls">
								<label for="username" >Direccion</label>
								<input type="text" size="30" maxlength="80" name="dir" id="dir" class="form-control">
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls" >
							<input type="submit" value="Registrar" class="btn btn-success">
						</div>
					</div>
				</form>
			
				
			</div>
		</div>
	</div>
</div>
</div>

</section>



