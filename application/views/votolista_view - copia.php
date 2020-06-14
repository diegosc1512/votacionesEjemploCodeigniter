<script type="text/javascript">
document.getElementById("breadcrumb_items").innerHTML +=  
      '<li class="breadcrumb-item">Votos</li>';
</script>

            <h3>Administracíon de cursos
               <br>
               <small>Edite los cursos</small>
            </h3>
            <!-- START row-->



         <div class="panel panel-default">
            <div class="panel-heading">Ingresar nuevo Curso</div>
               <div class="panel-body">
                     <div class="form-group">
                        <input name="voto" class="form-control"  type="text" placeholder="voto">
                     </div>
                     <div class="form-group">
                        <input name="departamento" class="form-control"  type="text" placeholder="departamento">
                     </div>
                     <button id="btnAgregar" class="btn btn-default" type="submit">Agregar</button>
               </div>
            </div>

<script type="text/javascript">

    $("#btnAgregar").click(function(e){

       e.preventDefault();
    
       var voto = $("input[name='voto']").val();
       var departamento = $("input[name='departamento']").val();

        $.ajax({

           url: "<?php echo base_url(); ?>index.php/voto/agregarbd_ajax",
           type: "POST",
           data: {voto: voto, departamento: departamento},

           error: function() {

              alert('Something is wrong adding ' + voto);// + ' ' + descripcion + ' ' + this.url);

           },

           success: function($id_voto) {
             
              $('input[type="text"],textarea').val('');
              
              var rowCount = document.getElementById('tabla').rows.length;
              
              //$("tbody").append("<tr><td>"+rowCount+"</td><td>"+nombre_curso+"</td><td>"+descripcion+"</td><td>"+nivel+"</td><td></td><td></td><td></td></tr>");
              $("tbody").append("<tr><td>"+rowCount+"</td><td>"+voto+"</td><td>"+departamento+"</td><td>"+
                    '<td>'+ 
                        '<?php echo form_open_multipart('voto/modificar'); ?>'+
                        '<input type="hidden" name="id_voto" value="'+$id_voto+'" >'+
                        '<button type="submit" class="btn btn-xs btn-default "><div>'+
                          '<em class="fa fa-edit"></em>'+
                          '<span class="text-muted"></span>'+
                       '</div></button>'+
                       '<?php echo form_close();?>'+
                    '</td>'+

                   '<td>'+
                       '<?php echo form_open_multipart('voto/eliminarbd'); ?>'+
                       '<input type="hidden" name="id_voto" value="'+$id_voto+'" >'+
                       '<button type="submit" class="btn btn-xs btn-default"><div>'+
                          '<em class="fa fa-times"></em>'+
                          '<span class="text-muted"></span>'+
                       '</div></button>'+
                       '<?php echo form_close();?>'+
                    '</td>'+


                    
                  '</tr>');


              alert('Record added successfully: ' + voto + ' con id ' + $id_voto);// + ' ' + descripcion + ' ' + this.url);
           }

        });
    });



</script>



            <div class="row">
            
               <div class="col-lg-12">
                  <!-- START panel-->
                  <div class="panel panel-default">
                     <div class="panel-heading">Cursos</div>
                     <div class="panel-body">
                        <!-- START table-responsive-->
                        <div class="table-responsive">
                           <table class="table" id="tabla">
                              <thead>
                                 <th>Curso</th>
                                 <th>Nombre del curso</th>
                                 <th>Descripción</th>
                                 <th>Nivel</th>
                                 <th>Editar</th>
                                 <th>Eliminar</th>
                                <th>Ver Capitulos</th>
                                <th>Ver pruebas del curso</th>
                              </thead>
                              <tbody>
              <?php
              
              $cont=1;
              foreach ($votos->result() as $row )
              {
              
              ?>
              <tr>
                 <td><?php echo $cont ; ?> </td>
                
                 <td><?php echo $row->voto;?> </td>
                 <td><?php echo $row->departamento;?></td>

                    <td>
                       <?php echo form_open_multipart('voto/modificar'); ?>
                       <input type="hidden" name="id_voto" value="<?php echo $row->id_voto;?>" >
                       <button type="submit" class="btn btn-xs btn-default "><div >
                          <em class="fa fa-edit"></em>
                          <span class="text-muted"></span>
                       </div></button>
                       <?php echo form_close();?>
                    </td>

                   <td>
                       <?php echo form_open_multipart('voto/eliminarbd'); ?>
                       <input type="hidden" name="id_voto" value="<?php echo $row->id_voto;?>" >
                       <button type="submit" class="btn btn-xs btn-default"><div >
                          <em class="fa fa-times"></em>
                          <span class="text-muted"></span>
                       </div></button>
                       <?php echo form_close();?>
                    </td>

              </tr>
              <?php

              $cont++;
              }

              ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- END table-responsive-->
                  </div>
                </div>
                <!-- END panel-->
              </div>
            </div>