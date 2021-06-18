<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{$pan->Nombre}}" id="Nombre">
    <br>

    <label for="Ingredientes">Ingredientes</label>
    <input type="text" name="Ingredientes" value="{{$pan->Ingredientes}}" id="Ingredientes">
    <br>

    <label for="ClasePan">Clase de pan</label>
    <input type="text" name="ClasePan" value="{{$pan->ClasePan}}" id="ClasePan">
    <br>

    <label for="FechaHecho">Fecha de Elaboración</label>
    <input type="date" name="FechaHecho" value="{{$pan->FechaHecho}}" id="FechaHecho">
    <br>

    <label for="Foto">Fotografía</label>
    <img src="{{asset('storage').'/'.$pan->Foto}}" width="100" alt="">
    <input type="file" name="Foto" value="{{$pan->Foto}}" id="Foto">
    <br>

    <label for="Coste">Valor</label>
    <input type="text" name="Coste" value="{{$pan->Coste}}" id="Coste">
    <br>

    <label for="Panadero_id">Id Panadero</label>
    <input type="text" name="Panadero_id" value="{{$pan->Panadero_id}}"="Panadero_id">
    <br>

    <input type="submit" value="Conservar Datitos">

