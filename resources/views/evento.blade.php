@extends('layouts/master')
@section('section')
@php
  use App\User;
  use App\location;
  use Illuminate\Support\Facades\Auth;
@endphp

<body>


  <div class="container-fluid">
    <div class="row justify-content-center mt-3">
        <div class="col-xl-8 col-lg-8">
            <div class="tab-content mb-3">
                <div class="tab-pane show active" id="basic-form-preview">
                  <div class="accordion custom-accordion" id="custom-accordion-one">
                      <div class="card mb-0">
                          <div class="card-header" id="headingFour">
                              <h5 class="m-0">
                                  <a style="color:#0F2D67" class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                      Crear Evento
                                  </a>
                              </h5>
                          </div>

                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#custom-accordion-one">
                              <div class="card-body">
                                <form enctype="multipart/form-data" action="/eventos" method="post">
                                  {{csrf_field()}}
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                          <label style="color:#0F2D67" for="exampleInputEmail1">Título</label>
                                          <input type="text" class="form-control" name="name" placeholder="Nombre del Evento ...">
                                      </div>
                                      <div class="form-group">
                                          <label style="color:#0F2D67" for="exampleInputPassword1">Fecha</label>
                                          <input type="datetime-local" class="form-control" name="date" placeholder="fecha">
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                          <label style="color:#0F2D67" for="exampleInputEmail1">Tipo de Evento</label>
                                          <input type="text" class="form-control" name="deporte" aria-describedby="emailHelp" placeholder="Deporte">
                                      </div>
                                      <div class="form-group">
                                          <label style="color:#0F2D67" for="exampleInputPassword1">Ubicación</label>
                                          <select class="form-control" name="location_id" id="example-select">
                                            <option value="" disabled selected>Seleccione Ubicación</option>
                                            @foreach($locations as $location)
                                              <option value= "{{$location->id}}">{{$location->name}}</option>
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <textarea name="descripcion" rows="5" cols="80" class="form-control" placeholder="Descripcion del evento"></textarea>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xl-12">
                                      <button type="submit" class="btn btn-success">Crear evento</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>
                </div> <!-- end preview-->
            </div> <!-- end tab-content-->

            <!-- end new post -->
            @foreach ($eventos as $evento)
              @php
              $creator_id=$evento->user_id;
              $creator_user=User::find($creator_id);
              $location_id=$evento->location_id;
              $location_name=location::find($location_id)->name;
              $participantes=$evento->Users;
              $pertenece=false;
              $usuario_logeado_id=Auth::id();
              if ($usuario_logeado_id==$creator_id) {
                $pertenece=true;
              }
              foreach ($participantes as $participante) {
              if ($usuario_logeado_id==$participante->id) {
                 $pertenece=true;
              }
              }
              @endphp

              <div class="card">
                  <div class="card-body pb-1">
                      <div class="media">
                          <img class="mr-2 rounded" src="storage/{{$creator_user["profile_img"]}}" alt="imagen de perfil " height="32">
                          <div class="media-body">
                              <div class="dropdown float-right text-muted">
                                  <a href="apps-social-feed.html#" class="dropdown-toggle arrow-none card-drop"
                                      data-toggle="dropdown" aria-expanded="false">
                                      ...
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    @if(Auth::id() == $creator_user["id"])
                                      <!-- item-->
                                      <a href="editarEvento/{{$evento->id}}" class="dropdown-item">Editar</a>
                                      <!-- item-->
                                      <a href="eliminarEvento/{{$evento->id}}" class="dropdown-item">Eliminar</a>
                                    @else
                                      <!-- item-->
                                      <a href="eventoUnico/{{$evento->id}}" class="dropdown-item">Ver Evento</a>
                                    @endif
                                  </div>
                              </div>
                              <h5 class="m-0" style="color:#0F2D67"> <a style="color:#0F2D67" href="/profile/{{$creator_id}}">{{$creator_user["username"]}}</a> </h5>
                              <p style="color:#0F2D67"><small style="color:#0F2D67">{{date('d/m/y H:i', strtotime($evento->date))}} <span class="mx-1">⚬</span> <span>{{$evento->deporte}}</span><span class="mx-1">⚬</span><span>{{$location_name}}</span></span></span></small></p>
                          </div>


                      </div>

                      <hr class="m-0" />

                      <div class="font-16 text-center my-3" style="color:white">
                        {{$evento->descripcion}}
                      </div>

                      <hr class="m-0" />

                      <div class="my-1">

                          @if ($pertenece==false)
                          <a href="/unirParticipante/{{$evento->id}}" class="btn btn-sm btn-success unirse">Unirse</a>
                        @endif
                          @if($pertenece==true)
                          <a href="/sacarParticipante/{{$evento->id}}" class="btn btn-sm btn-danger unirse">Cancelar participación</a>   <script src="/js/evento.min.js"></script>
                          @endif


                      </div>
                      <div class="dropdown">
  <button class="btn btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Participantes
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    @foreach ($participantes as $participante)
    <a class="dropdown-item" href="profile/{{$participante->id}}">{{$participante->username}}</a>
  @endforeach
  </div>
</div>
            <!-- start news feeds -->
                              </div>
                </div> <!-- end card-body -->
               @endforeach
            </div> <!-- end card -->
            <!-- end news feeds -->
        </div>
    </div> <!--end row -->


</body>
@endsection
