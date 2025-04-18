<div>
    <table class="table">
        <tr>
            <th>
                ID
            </th>
            <td>Numero expediente</td>
            <td>Asunto</td>
            <td>Fecha de inicio</td>
            <td>Estatus</td>
            <td>Nombre del que registra</td>
            <td>Opciones</td>
            @if(Auth::user()->id_rol==1)
                <td></td>
            @endif
            
        </tr>
        @foreach ($expedientes as $expediente)
            <tr>
                <td @if($expediente->deleted_at) style="background-color:gray" @endif>
                    {{$expediente->id}}
                </td>
                <td @if($expediente->deleted_at) style="background-color:gray" @endif>
                    {{$expediente->numero_expediente}}
                </td>
                <td @if($expediente->deleted_at) style="background-color:gray" @endif> 
                    {{$expediente->asunto}}
                </td>
                <td @if($expediente->deleted_at) style="background-color:gray" @endif>
                    {{$expediente->fecha_inicio}}
                </td>
                <td @if($expediente->deleted_at) style="background-color:gray" @endif>
                    {{$expediente->estatus->nombre}}
                </td>
                <td @if($expediente->deleted_at) style="background-color:gray" @endif>
                    {{$expediente->usuario->nombre}}
                </td>
                <td @if($expediente->deleted_at) style="background-color:gray" @endif>
                    <a href="{{route('expediente.mostrar',[$expediente->id])}}" class="btn btn-primary">Editar</a>
                    
                </td>
                @if(Auth::user()->id_rol==1)
                <td @if($expediente->deleted_at) style="background-color:gray" @endif>
                    <a href="{{route('expediente.borrar',[$expediente->id])}}" class="btn btn-danger">Eliminar</a>
                </td>
                @endif
                
            </tr>
        @endforeach
    </table>
    <div style="max-height: 5em">
        {{$expedientes->links()}}
    </div>
    
</div>