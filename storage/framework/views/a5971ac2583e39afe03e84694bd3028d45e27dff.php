<?php $__env->startSection('links'); ?>
  <link rel="stylesheet" href="css/faq.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>
  <div class="padding principal">
  <div class="container">
   <div class="d-flex flex-row">
      <div id="list-example" class="list-group col-sm-2">
      <a class="list-group-item list-group-item-action" id="linksnavlateral" href="#list-item-1"><i class="fas fa-futbol"></i>Mis proximos eventos</a>
      <br>
      <a class="list-group-item list-group-item-action" id="linksnavlateral" href="#list-item-2"><b>Mis equipos</b></a>
      <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-3"><i class="fas fa-futbol"></i> Boca</a>
      <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-4"><i class="fas fa-futbol"></i>Los 5 fantasticos</a>
      <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-3"><i class="fas fa-running"></i>Runners LP</a>
      <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-4"><i class="fas fa-table-tennis"></i> Nadal y Roger</a>
      <br>
      <br>
      <a class="list-group-item list-group-item-action" id="linksnavlateral" href="#list-item-2"><b>Explorar</b></a>
      <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-3"><i class="fas fa-futbol"></i> Eventos cercanos</a>
      <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-4"><i class="fas fa-user-friends"></i>Jugadores cercanos</a>
      <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-3"><i class="fas fa-running"></i>Deportes</a>

      </div>

      <div class="container principal col-md-10">
      <div class="d-flex flex-column flex-wrap">
          <h3>Crea tu evento</h3>
         <form class="d-flex flex-column" action="guardarevento.php" method="post">
           <label>Fecha:</label>
            <input type="date" name="fecha" min="2019-10-08" step="1">
            <label>Nombre del evento</label>
             <input type="text" name="nombre" value="">
           <label>¿Qué deporte es?</label> <!-- ¿¿HACER UN EVENTO CON VARIOS DEPORTES?? -->
            <select class="form-control" id="exampleFormControlSelect1" name="deporte">
             <option>Futbol 5</option>
             <option>Fubtol 11</option>
             <option>Tenis</option>
             <option>Running</option>
             <option>Basquet</option>
           </select>

           <label>Elegi la ubicacion(DEL 1 AL 7):</label><!--USAMOS UN ENTERTO PARA MARCAR LA UBICACION PORQUE TODAVIA NO ESTAN CRREADAS LAS UBICACIONES Y LA BASE DATOS RECIBE UN INT INDICANDO EL ID DE LA UBICACION-->
           <input type="text" name="ubicacion" value="">
        <label> ¿Con cuantos jugadores contas (incluyendote)?</label>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-success active">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> Todos
          </label>
          <label class="btn btn-success">
          <input type="radio" name="options" id="option2" autocomplete="off"> Un equipo
          </label>
          <label class="btn btn-success">
          <input type="radio" name="options" id="option3" autocomplete="off"> Otra
          </label>
          </div>
             <div class="row justify-content-around">
              <button type="submit" name="">Crear evento</button>
             </div>

        </form>


      </div>
      </div>
   </div>
  </div>
  </div>

    <footer class="page-footer font-small pt-4">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contacto</h5>
          <form>
            <fieldset class="form-group">
              <input type="email" class="form-control" id="InputEmail1" placeholder="Email">
            </fieldset>
            <fieldset class="form-group">
              <textarea class="form-control" id="Message" placeholder="Mensaje"></textarea>
            </fieldset>
            <fieldset class="form-group text-xs-right">
              <button type="button" class="btn btn-secondary-outline btn-dark">Enviar</button>
            </fieldset>
          </form>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">FAQ</h5>
          <ul class="list-unstyled">
            <li>
              <a href="FAQ.html#sobreJugaYa">Sobre JugaYa</a>
            </li>
            <li>
              <a href="FAQ.html#crearEvento">¿Como creo un evento?</a>
            </li>
            <li>
              <a href="FAQ.html#empresa">Perfil de Empresa</a>
            </li>
            <br>
            <li>
              <a href="FAQ.html">Mas preguntas</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">General</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#">Valores</a>
            </li>
            <li>
              <a href="#">Privacidad</a>
            </li>
            <li>
              <a href="#">Desarrolladores</a>
            </li>
            <br>
            <li>
              <a href="indexv2.html">Volver a Inicio</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <hr>
    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <a href="registro.html" class="btn btn-danger btn-rounded">Registrate!</a>
      </li>
    </ul>
    <!-- Call to action -->
    <hr>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a href="https://www.facebook.com"class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://www.twitter.com" class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://www.google.com"class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://www.Instagram.com"class="btn-floating btn-li mx-1">
          <i class="fab fa-instagram"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="index.html"> JugaYa.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts\master_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bruno\JugaYa_\JugaYa\resources\views/crearEvento.blade.php ENDPATH**/ ?>