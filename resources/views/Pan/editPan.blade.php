
<form action="{{url('/pan/'.$pan->id_Pan)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('pan.formPan');


</form>
