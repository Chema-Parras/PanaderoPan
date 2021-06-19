
@extends('layouts.app')
@section('content')
<div class="container">



@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif



<a href="{{url('pan/create')}}" class="btn btn-success">Registrar nuevo Panesito</a>
<br>
<br>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Ingredientes</th>
            <th>Tipo de Pan</th>
            <th>Fecha de Elaboración</th>
            <th>Fotografía</th>
            <th>Valor</th>
            <th># Panadero</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
    @foreach($pans as $pan)
        <tr>
            <td>{{$pan->id_Pan}}</td>
            
            <td>{{$pan->Nombre}}</td>

            <td>{{$pan->Ingredientes}}</td>

            <td>{{$pan->ClasePan}}</td>
            
            <td>{{$pan->FechaHecho}}</td>

            <td>
                <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$pan->Foto}}" width="100" alt="">
                
            </td>
            
            <td>{{$pan->Coste}}</td>
            
            <td>{{$pan->Panadero_id}}</td>

            <td>
            
            <a href="{{url('/pan/'.$pan->id_Pan.'/edit')}}" class="btn btn-warning">
            
            Modificar
            
            </a>
             | 
            
                <form action="{{url('/pan/'.$pan->id_Pan)}}" class="d-inline" method="post" >
                @csrf
                {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar de verdad de la buena?')" value="Suprimir">
                
                </form>
            
            
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
{!! $pans->links() !!}
</div>
@endsection