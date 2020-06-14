
            <h3>Administracíon de archivos
               <br>
               <small>Edite los archivos del capitulo escogido</small>
            </h3>
            <!-- START row-->


           <?php
echo form_open_multipart('archivo/agregarbd');
?>
<div class="panel panel-default">
               <div class="panel-heading">Ingresar nuevo Archivo al capitulo</div>
               <div class="panel-body">
                  <form class="form-inline" role="form">
                     <div class="form-group">
                        <input name="nombre_archivo" class="form-control"  type="text" placeholder="Nombre o descripción del archivo">
                     </div>
                     
                       <div class="form-group">

                    <?php ?>
                     <form action="<?php echo base_url(); ?>index.php/archivo/agregarbd" enctype="multipart/form-data" method="post">
                     <input type="file" name="userfile" />
                     <?php ?>
                       </div>  
                      <input type="hidden" name="id_usuario" value="1" >
                      <input type="hidden" name="capitulo_idcapitulo" value="<?php echo $idcapitulo;?>" >
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
                     <div class="panel-heading">Capitulos</div>
                     <div class="panel-body">
                        <!-- START table-responsive-->
                        <div class="table-responsive">
                           <table class="table">
                              <thead>
                                 <th>Nombre archivo</th>
                                 <th>Ubicacion </th>
                                 <th>Ver</th>
                                 <th>Editar</th>
                                 <th>Eliminar</th>
                              </thead>
                                    <tbody>
            <tr>
               <?php
                     $cont=1;

                  foreach ($archivos->result() as $row )
                   {
                     ?>
               <td><?php echo $cont ; ?> </td>
              
               <td><?php echo $row->nombre_archivo;?> </td>
               <td><?php echo $row->ubicacion;?></td>
                <td>
                     <?php echo form_open_multipart('archivo/modificar'); ?>
                     <input type="hidden" name="idarchivo" value="<?php echo $row->idarchivo;?>" >
                     <button type="submit" class="btn btn-xs btn-default"><div >
                        <em class="fa fa-pen"></em>
                        <span class="text-muted"></span>
                     </div></button>
                     <?php echo form_close();?>
                  </td>

                  <td>
                     <?php echo form_open_multipart('archivo/eliminarbd'); ?>
                     <input type="hidden" name="idarchivo" value="<?php echo $row->idarchivo;?>" >
                      <input type="hidden" name="capitulo_idcapitulo" value="<?php echo $idcapitulo;?>" >
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