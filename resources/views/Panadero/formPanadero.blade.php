    <h1>{{$modo}} Panadero</h1>
    
    @if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
    
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach

        </ul>
    </div>
    @endif
    
    <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{isset($panadero->Nombre)?$panadero->Nombre:old('Nombre')}}" id="Nombre">
    
    </div>

    <div class="form-group">
    <label for="Apellido">Apellido</label>
    <input type="text"  class="form-control" name="Apellido" value="{{isset($panadero->Apellido)?$panadero->Apellido:old('Apellido')}}" id="Apellido">
    
    </div>

    <div class="form-group">
    <label for="Telefono">Teléfono</label>
    <input type="text"  class="form-control" name="Telefono" value="{{isset($panadero->Telefono)?$panadero->Telefono:old('Telefono')}}" id="Telefono">
    
    </div>

    <div class="form-group">
    <label for="DNI">DNI</label>
    <input type="text"  class="form-control" name="DNI" value="{{isset($panadero->DNI)?$panadero->DNI:old('DNI')}}"id="DNI">
    
    </div>

    <div class="form-group">
    <label for="Movil">Móvil</label>
    <input type="text"  class="form-control" name="Movil" value="{{isset($panadero->Movil)?$panadero->Movil:old('Movil')}}" id="Movil">
    
    </div>

    <div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text"  class="form-control" name="Correo" value="{{isset($panadero->Correo)?$panadero->Correo:old('Correo')}}"id="Correo">
    
    </div>

    <div class="form-group">
    <label for="Direccion">Dirección</label>
    <input type="text"  class="form-control" name="Direccion" value="{{isset($panadero->Direccion)?$panadero->Direccion:old('Direccion')}}"id="Direccion">
    
    </div>

    <div class="form-group">
    <label for="CodPostal">Código Postal</label>
    <input type="text"  class="form-control" name="CodPostal" value="{{isset($panadero->CodPostal)?$panadero->CodPostal:old('CodPostal')}}" id="CodPostal">
    
    </div>
    

    <input class="btn btn-success" type="submit" value="{{$modo}} Datitos">

    <a class="btn btn-primary" href="{{url('panadero/')}}">Volver</a>

