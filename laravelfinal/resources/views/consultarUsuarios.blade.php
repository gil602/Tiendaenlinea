@extends("layouts.app");

@section("content")
<table class="table table-hover">

    <thead>
        <tr>
            <th>ID</th>
            <th>nombre</th>
            <th>e-mail</th>
            <th>Sexo</th>
            <th>Uso</th>
            <th>Opciones</th>
    </tr>
    </thead>
    <thead>
        <tbody>
            @foreach($user as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>
                    @if($u->sexo==0)
                    <span class="label label-default">Hombre</span>
                    @elseif($u->sexo==1)
                    <span class="label label-primary">Mujer</span>
                    @endif
                </td> 
                <td>
                    @if($u->uso==0)
                    <span class="label label-default">Hogar</span>
                    @elseif($u->uso==1)
                    <span class="label label-primary">Tienda</span>
                    @elseif($u->uso==2)
                    <span class="label label-success">Empresa</span>
                    @endif
                </td>  
            <td>
                    <a href="{{url('/editarUsuarios')}}/{{$u->id}}" class="btn btn-xs btn-primary">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a href="{{url('/eliminarUsuario')}}/{{$u->id}}" class="btn btn-xs btn-danger">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </thead>
  
</table>
   <script type="text/javascript">
        setTimeout(function(){
            $(".alert").fadeOut(1500);

        },1500);
    
   </script>


@endsection