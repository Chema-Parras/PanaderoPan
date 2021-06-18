<form action="{{url('/pan')}}" method="post" enctype="multipart/form-data">
@csrf
 @include('pan.formPan');


</form>