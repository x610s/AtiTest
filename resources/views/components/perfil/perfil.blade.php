<div class="col-3 page-perfil no-gutter">

        <div class="card col-11 shadow rounded py-2 m-auto">
                <img src="{{Storage::url($user->avatar)}}" class="col-12 shadow" alt="{{$user->avatar}}">
                <div class="card-body">
                  <h5 class="card-title"> 
                   {{$user->name}}
                  </h5>
                  <span class="text-muted">{{$user->company ? $user->company :'Sin compañia registrada'  }}</span>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                        <i class="fas fa-map-marker-alt"></i><span>{{$user->address ? $user->address :'Sin dirección registrada'  }}</span>
                </li>
                  <li class="list-group-item">
                        <i class="fas fa-envelope"></i><span>{{$user->email}}</span>
                  </li>
                  <li class="list-group-item">
                        <i class="fas fa-mobile-alt"></i><span>{{$user->phone ? $user->phone :'Sin telefono registrado'}}</span>
                  </li> 
                    <li class="list-group-item">
                            <i class="fas fa-calendar-alt"></i> <span>{{$user->created_at->diffForHumans()}}</span>
                    </li>
                </ul>
              </div>
</div>  