<div class="col-4  bg-white shadow py-4">
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Roles</li>
    @forelse ($user->roles->pluck('name') as $item)
    <li class="list-group-item">{{$item}}</li>
    @empty
    <h2>No tienes roles asignados</h2>
    @endforelse
      </ul>

  <hr>



      <ul class="list-group ">
        <li class="list-group-item active" aria-current="true">Planes</li>
    @forelse ($user->planes as $item)
    <li class="list-group-item">{{$item->name}}  - <small class="text-muted"> Adquirido:  <b> {{$item->created_at}} </b> </small> </li>
    @empty
    <h2>No tienes planes asignados</h2>
    @endforelse
      </ul>
</div>