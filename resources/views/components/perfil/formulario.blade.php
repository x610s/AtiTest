<div class="col-4 border page-perfil-formulario shadow rounded bg-white">
    @if (session()->has('status'))
        <div class="alert alert-primary" role="alert">
            <strong>
                {{session('status')}}
            </strong>
           </div>
    @endif
    <form action="{{route('usuario.update',$usuario)}}" method="POST" 
    class="form-group" 
     enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{$usuario->name}}">
        {!! $errors->first('name') !!}

        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email" value="{{$usuario->email}}">
        {!! $errors->first('email') !!}


        <label for="phone">Telefono</label>
        <input type="text" class="form-control"  name="phone" placeholder="Telefono" value="{{$usuario->phone}}">
        {!! $errors->first('phone') !!}

                <label for="company">Compañia</label>
        <input type="text" class="form-control"  name="company" placeholder="Compañia"  value="{{$usuario->company}}">
        {!! $errors->first('company') !!}


        <label for="address">Dirección</label>
        <input type="text" class="form-control"  name="address"  value="{{$usuario->address}}">
        {!! $errors->first('address') !!}


        <div class="custom-file">
             <input type="file" name="avatar" id="avatar" class="custom-file-input"  accept="image/*">
            <label class="custom-file-label" for="avatar"  data-browse="Elegir">Elegir avatar</label>
        {!! $errors->first('avatar') !!}

          </div>

        <button class="btn btn-primary my-4" type="submit">Guardar <i class="fas fa-save mx-2"></i> </button>
    </form>
</div> 