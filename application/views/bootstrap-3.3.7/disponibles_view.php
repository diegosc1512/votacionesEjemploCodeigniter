<!DOCTYPE html>
<html lang="en" class="no-ie">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>Examen</title>
   <link rel="stylesheet" href="../../../app/css/bootstrap.css">
   <link rel="stylesheet" href="../../../vendor/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="../../../vendor/animo/animate+animo.css">
   <link rel="stylesheet" href="../../../vendor/csspinner/csspinner.min.css">
   <link rel="stylesheet" href="../../../app/css/app.css">
   <script src="../../../vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <script src="../../../vendor/fastclick/fastclick.js" type="application/javascript"></script>
</head>

<body>
<section class="wrapper">
      <!-- START Top Navbar-->
      <nav class="navbar navbar-default navbar-top navbar-fixed-top" role="navigation">
         <!-- START navbar header-->
         <div class="navbar-header">
            <a class="navbar-brand" href="javascript:void(0);">
               <div class="brand-logo">Mandala Reservas</div>
               <div class="brand-logo-collapsed">47</div>
            </a>
         </div>
         <!-- END navbar header-->
         <!-- START Nav wrapper-->
         <div class="nav-wrapper">
            <!-- START Left navbar-->
          
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
           
            <!-- END Right Navbar-->
         </div>
         <!-- END Nav wrapper-->
         <!-- START Search form-->
         <form class="navbar-form" role="search">
            <div class="form-group has-feedback">
               <input class="form-control" type="text" placeholder="Type and hit Enter..">
               <div class="fa fa-times form-control-feedback" data-toggle="navbar-search-dismiss"></div>
            </div>
            <button class="hidden btn btn-default" type="submit">Submit</button>
         </form>
         <!-- END Search form-->
      </nav>
      <!-- END Top Navbar-->
      <!-- START aside-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <nav class="sidebar">
            <ul class="nav">
               <!-- START user info-->
              
               <li>
                  <a title="Dashboard" class="has-submenu" href="dashboard.html" data-toggle="collapse-next">
                     <em class="fa fa-dashboard"></em>
                     <span class="item-text">Horarios</span>
                  </a>
               </li>
          
               <li class="active">
                  <a title="Tables" class="has-submenu" href="javascript:void(0);" data-toggle="collapse-next">
                     <em class="fa fa-table"></em>
                     <span class="item-text">Reservas</span>
                  </a>
                  <!-- START SubMenu item-->
              
                  <!-- END SubMenu item-->
               </li>
          
               <li>
                  <a title="Elements" class="has-submenu" href="javascript:void(0);" data-toggle="collapse-next">
                     <em class="fa fa-wrench"></em>
                     <span class="item-text">Configurar cuenta</span>
                  </a>
                  <!-- START SubMenu item-->
                  <!-- END SubMenu item-->
               </li>
               <li >
                  <a title="Elements" class="has-submenu" href="javascript:void(0);" data-toggle="collapse-next">
                  <em class="fa  fa-sign-out"></em>
                  <span class="item-text">Cerrar sesion</span>
               </a>
              </li>
             
            </ul>
         </nav>
      </aside>




   

         <section class="main-content">

         <section class="main-content">
            <h3>Horarios de atención
               <br>
               <small>Edite los horarios de atencion del día</small>
            </h3>
            <!-- START row-->


           <?php
echo form_open_multipart('estudiante/agregarbd');
?>
            <div class="panel panel-default">
               <div class="panel-heading">Ingresar nuevo horario</div>
               <div class="panel-body">
                  <form class="form-inline" role="form">
                     <div class="form-group">
                        <input name="ciudad" class="form-control"  type="text" placeholder="Hora de inicio">
                     </div>
                     <div class="form-group">
                        <input name="pais" class="form-control"  type="text" placeholder="hora de fin">
                     </div>
                   
                     <button class="btn btn-default" type="submit">Agregar</button>
                  </form>
               </div>
            </div>
<?php
echo form_close();
?>


 


            <div class="row">
            
               <div class="col-lg-12">
                  <!-- START panel-->
                  <div class="panel panel-default">
                     <div class="panel-heading">Horarios</div>
                     <div class="panel-body">
                        <!-- START table-responsive-->
                        <div class="table-responsive">
                           <table class="table">
                              <thead>
                                 <th>Horas</th>
                                 <th>Hora Inicio</th>
                                 <th>Hora Fin</th>
                                 <th>Editar</th>
                                 <th>Eliminar</th>
                              </thead>
                                    <tbody>
            <tr>
               <?php
                     $cont=1;

                  foreach ($ciudades->result() as $row )
                   {
                     ?>
               <td><?php echo $cont ; ?> </td>
              
               <td><?php echo $row->horainicio;?> </td>
               <td><?php echo $row->horafin;?></td>
              
                  <td>
                     <?php echo form_open_multipart('estudiante/modificar'); ?>
                     <input type="hidden" name="idciudad" value="<?php echo $row->idhorario;?>" >
                     <button type="submit" class="btn btn-xs btn-default "><div >
                        <em class="fa fa-edit"></em>
                        <span class="text-muted"></span>
                     </div></button>
                     <?php echo form_close();?>
                  </td>

                 <td>
                     <?php echo form_open_multipart('estudiante/eliminarbd'); ?>
                     <input type="hidden" name="idciudad" value="<?php echo $row->idhorario;?>" >
                     <button type="submit" class="btn btn-xs btn-default"><div >
                        <em class="fa fa-times"></em>
                        <span class="text-muted"></span>
                     </div></button>
                     <?php echo form_close();?>
                  </td>

                  

            </tr>
         </tbody>
                                 <?php
                     $cont++;

                     }
                     ?>
                           </table>
                        </div>
                        <!-- END table-responsive-->
                     </div>
                  </div>
                  <!-- END panel-->
               </div>
            </div>
         </section>
      </section>
   </section>
         </section>
            </section>


   <script src="../../../vendor/jquery/jquery.min.js"></script>
   <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Plugins-->
   <script src="../../../vendor/chosen/chosen.jquery.min.js"></script>
   <script src="../../../vendor/slider/js/bootstrap-slider.js"></script>
   <script src="../../../vendor/filestyle/bootstrap-filestyle.min.js"></script>
   <!-- Animo-->
   <script src="../../../vendor/animo/animo.min.js"></script>
   <!-- Sparklines-->
   <script src="../../../vendor/sparklines/jquery.sparkline.min.js"></script>
   <!-- Slimscroll-->
   <script src="../../../vendor/slimscroll/jquery.slimscroll.min.js"></script>
   <!-- START Page Custom Script-->
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src="../../../app/js/app.js"></script>
   <!-- END Scripts-->
</body>

</html>