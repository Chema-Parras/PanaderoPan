
@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/panadero')}}" method="post" enctype="multipart/form-data">
@csrf
@include('panadero.formPanadero',['modo'=>'Crear']);
</form>
</div>
@endsection