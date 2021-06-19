
@extends('layouts.app')
@section('content')
<div class="container">


<form action="{{url('/pan/'.$pan->id_Pan)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('pan.formPan',['modo'=>'Editar']);


</form>
</div>
@endsection