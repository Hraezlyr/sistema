@extends('welcome')
@section('content')
<br>
<br>
<a href="{{url('/persona/create')}}" class="btn btn-success large">Agregar nuevo registro</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Factultad</th>
                <th>Fecha de ingreso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php($count=1)
            @foreach ($persona as $item)
            <tr>
                <th>{{$count}}</th>
                <th>{{$item->nombre}}</th>
                <th>{{$item->facultad}}</th>
                <th>{{$item->fecha_ingreso}}</th>
                <th>
                    <a href="{{route('persona.edit',$item)}}" class="btn btn-primary">Editar</a>
                    <form class="borrar_registro" action="{{route('persona.destroy',$item)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>

                </th>
            </tr>
            @php($count++)
            @endforeach

        </tbody>
    </table>
    {{$persona->links()}}
@endsection
