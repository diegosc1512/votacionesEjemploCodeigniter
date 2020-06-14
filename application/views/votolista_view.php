            <h3>Simulador de elecciones 2019
               <br>
               <small>Elecciones primarias </small>
            </h3>
           <?php
echo form_open_multipart('voto/agregarbd');
?>
<div class="panel panel-default col-md-9  ">
               <div class="panel-heading ">Seleccione un candidato y departamento (el orden de los partidos respeta al sorteo de posiciones del TSE)</div>
               <div class="panel-body">
                  <form class="form-inline" role="form">
                     <div class="form-group">
                       
                     </div>
                 
            
                     <div class="form-group">
                        <select name="departamento" id="departamentos" required>
                            <option value="">seleccione un departamento</option>
                           <option value="1">Beni</option>
                           <option value="2">Chuquisaca</option>
                           <option value="3">Cochabamba</option>
                           <option value="4">La Paz</option>
                           <option value="5">Oruro</option>
                           <option value="6">Pando</option>
                           <option value="7">Potosi</option>
                           <option value="8">Santa Cruz</option>
                           <option value="9">Tarija</option>
                        </select>
                     </div>
           

  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="../../app/img/1.png" />
      <input type="radio" name="voto" value="1" required />
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="../../app/img/2.png" />
      <input type="radio" name="voto" value="2" required/>
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="../../app/img/3.png" />
      <input type="radio" name="voto" value="3" required/>
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="../../app/img/4.png" />
      <input type="radio" name="voto" value="4" required/>
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="../../app/img/5.png" />
      <input type="radio" name="voto" value="5" required/>
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
    <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="../../app/img/6.png" />
      <input type="radio" name="voto" value="6" required />
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
    <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="../../app/img/7.png" />
      <input type="radio" name="voto" value="7" required/>
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
    <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="../../app/img/8.png" />
      <input type="radio" name="voto" value="8" required/>
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
    <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="../../app/img/9.png" />
      <input type="radio" name="voto" value="9" required/>
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 nopad text-center">
     <button class="btn btn-primary btn-lg btn-block" type="submit">Votar</button>
  </div>
                  </form>
               </div>
            </div>
            
            </div>

           <section>
               <footer class="footer-1 bg-white col-md-9">
      <div class="container">
         <div class="row">
      
       

            <div class="col-sm-4 col-xs-6">
               <nav>
                  <h5>Nuestras redes sociales:</h5>
                  <ul class="list-unstyled">
                   
                     <li><a href="https://www.facebook.com//">Facebook</a>
                     </li>
                     
                     <li><a href="https://api.whatsapp.com/send?phone=591">Whatsapp</a>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="col-lg-4 col-xs-12">
               <form action="" method="post">
                  <h5>Contato:</h5>
                  <div class="input-group">
                     <ul class="list-unstyled">
                       <li><a href="#">Correo electrónico</a>
                       </li>
                    </ul>
                  </div>
               </form>
               <p class="text-muted">
                  <small>Todos los derechos reservados para ENCUESTAS REDES SOCIALES BOLIVIA 2019</small>
               </p>
            </div>
         </div>
      </div>
   </footer>


           </section> 
