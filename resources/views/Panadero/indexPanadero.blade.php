<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>DNI</th>
            <th>Móvil</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Código Postal</th>
        </tr>
    </thead>
    <tbody>
    @foreach($panaderos as $panadero)
        <tr>
            <td>{{$panadero->id_Panadero}}</td>

            <td>{{$panadero->Nombre}}</td>

            <td>{{$panadero->Apellido}}</td>

            <td>{{$panadero->Telefono}}</td>

            <td>{{$panadero->DNI}}</td>

            <td>{{$panadero->Movil}}</td>

            <td>{{$panadero->Correo}}</td>

            <td>{{$panadero->Direccion}}</td>

            <td>{{$panadero->CodPostal}}</td>

            <td>
            
                <a href="{{url('/panadero/'.$panadero->id_Panadero.'/edit')}}">
            
                Modificar

                </a> 
            
            | 
            
                <form action="{{url('/panadero/'.$panadero->id_Panadero)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres borrar de verdad de la buena?')" value="Suprimir">
                
                </form>
            
            </td>
        </tr>
    @endforeach
    </tbody>
</table>