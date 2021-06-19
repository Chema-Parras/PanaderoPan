
@extends('layouts.app')
@section('content')
<div class="container">


<form action="{{url('/panadero/'.$panadero->id_Panadero)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('panadero.formPanadero',['modo'=>'Editar']);


</form>
</div>
@endsection