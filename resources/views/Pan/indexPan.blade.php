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
                <img src="{{asset('storage').'/'.$pan->Foto}}" width="100" alt="">
                
            </td>
            
            <td>{{$pan->Coste}}</td>
            
            <td>{{$pan->Panadero_id}}</td>

            <td>
            
            <a href="{{url('/pan/'.$pan->id_Pan.'/edit')}}">
            
            Modificar
            
            </a>
             | 
            
                <form action="{{url('/pan/'.$pan->id_Pan)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres borrar de verdad de la buena?')" value="Suprimir">
                
                </form>
            
            
            </td>

        </tr>
    @endforeach
    </tbody>
</table>