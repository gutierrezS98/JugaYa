@extends('layouts\master_template')

@section('links')
  <link rel="stylesheet" href="css/main.css">
@endsection

@section('section')
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

  <div class="container principal d-flex flex-row col-md-10">
    <div class= "d-flex flex-column">
      <div class="card mb-3">
         <div class="row no-gutters item-amigo">
          <div class="col-md-4">
           <img src="img/messi.jpg" class="card-img " alt="...">
          </div>
           <div class="card-body-amigo">
           <h5 class="card-title nombre-apellido-amigo">Lionel Messi</h5>
           <p class="nombre-usuario-amigo"> <a href="#">lionelmessi</a></p>
           <p class=""><small class="text-muted amigos-en-comun">3 amigos en comun</small></p>
           </div>
          </div>
         </div>
         <div class="card mb-3">
            <div class="row no-gutters item-amigo">
             <div class="col-md-4">
              <img src="img/messi.jpg" class="card-img " alt="...">
             </div>
              <div class="card-body-amigo">
              <h5 class="card-title nombre-apellido-amigo">Lionel Messi</h5>
              <p class="nombre-usuario-amigo"> <a href="#">lionelmessi</a></p>
              <p class=""><small class="text-muted amigos-en-comun">3 amigos en comun</small></p>
              </div>
             </div>
            </div>
            <div class="card mb-3">
               <div class="row no-gutters item-amigo">
                <div class="col-md-4">
                 <img src="img/messi.jpg" class="card-img " alt="...">
                </div>
                 <div class="card-body-amigo">
                 <h5 class="card-title nombre-apellido-amigo">Lionel Messi</h5>
                 <p class="nombre-usuario-amigo"> <a href="#">lionelmessi</a></p>
                 <p class=""><small class="text-muted amigos-en-comun">3 amigos en comun</small></p>
                 </div>
                </div>
               </div>
               <div class="card mb-3">
                  <div class="row no-gutters item-amigo">
                   <div class="col-md-4">
                    <img src="img/messi.jpg" class="card-img " alt="...">
                   </div>
                    <div class="card-body-amigo">
                    <h5 class="card-title nombre-apellido-amigo">Lionel Messi</h5>
                    <p class="nombre-usuario-amigo"> <a href="#">lionelmessi</a></p>
                    <p class=""><small class="text-muted amigos-en-comun">3 amigos en comun</small></p>
                    </div>
                   </div>
                  </div>
                  <div class="card mb-3">
                     <div class="row no-gutters item-amigo">
                      <div class="col-md-4">
                       <img src="img/messi.jpg" class="card-img " alt="...">
                      </div>
                       <div class="card-body-amigo">
                       <h5 class="card-title nombre-apellido-amigo">Lionel Messi</h5>
                       <p class="nombre-usuario-amigo"> <a href="#">lionelmessi</a></p>
                       <p class=""><small class="text-muted amigos-en-comun">3 amigos en comun</small></p>
                       </div>
                      </div>
                     </div>
                     <div class="card mb-3">
                        <div class="row no-gutters item-amigo">
                         <div class="col-md-4">
                          <img src="img/messi.jpg" class="card-img " alt="...">
                         </div>
                          <div class="card-body-amigo">
                          <h5 class="card-title nombre-apellido-amigo">Lionel Messi</h5>
                          <p class="nombre-usuario-amigo"> <a href="#">lionelmessi</a></p>
                          <p class=""><small class="text-muted amigos-en-comun">3 amigos en comun</small></p>
                          </div>
                         </div>
                        </div>
                        <div class="card mb-3">
                           <div class="row no-gutters item-amigo">
                            <div class="col-md-4">
                             <img src="img/messi.jpg" class="card-img " alt="...">
                            </div>
                             <div class="card-body-amigo">
                             <h5 class="card-title nombre-apellido-amigo">Lionel Messi</h5>
                             <p class="nombre-usuario-amigo"> <a href="#">lionelmessi</a></p>
                             <p class=""><small class="text-muted amigos-en-comun">3 amigos en comun</small></p>
                             </div>
                            </div>
                           </div>

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
            <a href="FAQ.php#sobreJugaYa">Sobre JugaYa</a>
          </li>
          <li>
            <a href="FAQ.php#crearEvento">¿Como creo un evento?</a>
          </li>
          <li>
            <a href="FAQ.php#empresa">Perfil de Empresa</a>
          </li>
          <br>
          <li>
            <a href="FAQ.php">Mas preguntas</a>
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
            <a href="noticiascartas.php">Volver a Inicio</a>
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

  <!-- Call to action -->

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
    <a href="index.php"> JugaYa.com</a>
  </div>
  <!-- Copyright -->
  </footer>
  <!-- Footer -->
@endsection
