<div class="col-3 page-perfil no-gutter">

        <div class="card col-11 shadow rounded py-2 m-auto">
                <img src="{{Storage::url($usuario->avatar)}}" class="col-12 shadow" alt="{{$usuario->avatar}}">
                <div class="card-body">
                  <h5 class="card-title"> 
                   {{$usuario->name}}
                  </h5>
                  <span class="text-muted">{{$usuario->company ? $usuario->company :'Sin compañia registrada'  }}</span>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                        <i class="fas fa-map-marker-alt"></i><span>{{$usuario->address ? $usuario->address :'Sin dirección registrada'  }}</span>
                </li>
                  <li class="list-group-item">
                        <i class="fas fa-envelope"></i><span>{{$usuario->email}}</span>
                  </li>
                  <li class="list-group-item">
                        <i class="fas fa-mobile-alt"></i><span>{{$usuario->phone ? $usuario->phone :'Sin telefono registrado'}}</span>
                  </li> 
                    <li class="list-group-item">
                            <i class="fas fa-calendar-alt"></i> <span>{{$usuario->created_at->diffForHumans()}}</span>
                    </li>
                </ul>
              </div>
</div>  