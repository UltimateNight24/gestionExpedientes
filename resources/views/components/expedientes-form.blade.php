<div>
    <form method="POST" action="@if($expediente->id) {{route('expediente.update',$expediente->id)}} @endif">
        @csrf
        <div class="row">
            <div class="col">
                <label for="numeroExpediente">Numero de expediente</label>
                <input type="text" name="numeroExpediente" id="numeroExpediente" class="form-control" value="{{old('numeroExpediente',$expediente->numero_expediente)}}" disabled>
            </div>
            <div class="col">
                <label for="asunto">Asunto</label>
                <input type="text" name="asunto" id="asunto" class="form-control" value="{{old('asunto',$expediente->asunto)}}">
            </div>
            <div class="col">
                <label for="fecha_inicio">Fecha de inicio</label>
                <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{old('fecha_inicio',$expediente->fecha_inicio)}}">
            </div>
            <div class="col">
                <label for="estatus">Numero de expediente</label>
                <select name="estatus" class="form-select">
                    @foreach($estatus as $estatu)
                        <option value="{{$estatu->id}}" @if($estatu->id==old('fecha_inicio',$expediente->id_estatus)) selected @endif)>{{$estatu->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="submit" value="Guardar" class="btn btn-success">
            </div>
        </div>
    </form>
</div>