 <section class="content-header">
          <meta charset="utf-8">
          <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
          <h1>
            <?php echo " "  ?>
            <small></small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-2">

              <a href="<?php echo BASE_URL.'?controller=public&action=registro' ?>" class="btn btn-success btn-block margin-bottom"><i class="fa fa-check"></i> Registrar<br> Clientes </a>
               
                 


              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Options</h3>
                  <br>
                  
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">

                  
                  <ul class="nav nav-pills nav-stacked">
                   
                    <li <?php if($carpeta == 2 ){ echo "class='active'"; } ?>><a href="<?php echo BASE_URL.'?index.php' ?>"><i class="fa fa-user"></i> Clientes</a></li>
                    <li <?php if($carpeta == 1 ){ echo "class='active'"; } ?>><a href="<?php echo BASE_URL.'?controller=public&action=docXml' ?>"><i class="fa fa-download"></i> Reporte XMl</a></li>
                    
                    
                    
           
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->




        
        
            </div><!-- /.col -->
            <div class="col-md-10">
      
        <?php 

                if(isset($pagina_interna) and $pagina_interna!="") { 
                

                $this->view($pagina_interna,array(
                "allusers"=>$allusers,
                "carpeta"=>$carpeta,
                "scripts"=>$scripts,
               
                //"Hola"    =>"Soy Víctor Robles"
                ));

              } 


               ?>
      
      </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->