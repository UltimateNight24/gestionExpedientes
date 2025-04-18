@extends('layouts.app')

@section('content')

    <div class="container card">
        <div class="card-body">
            <div class="card-title">
                <h1>Expedientes:</h1>
                <a href="{{route('expediente.create')}}" class="btn btn-secondary">
                    crear nuevo expediente
                </a>
            </div>
            <form action="">
                <div class="row">
                    <div class="col">
                        <label for="expediente">Expediente</label>
                        <input type="text" name="expediente" class="form-control" value="{{request('expediente')}}">
                    </div>
                    <div class="col">
                        <label for="expediente">Estatus</label>
                        <select name="estatus" class="form-select">
                            <option value="">Seleccione</option>
                            @foreach($estatus as $estatu)
                                <option value="{{$estatu->id}}" @if(request('estatus')==$estatu->id) selected @endif>{{$estatu->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="fecha_inicio">Desde</label>
                        <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{request('fecha_inicio')}}">
                    </div>
                    <div class="col">
                        <label for="fecha_fin">Hasta</label>
                        <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" value="{{request('fecha_fin')}}">
                    </div>
                    <div class="col">
                        <label for="asunto">Asunto</label>
                        <input type="text" name="asunto" id="asunto" class="form-control" value="{{request('asunto')}}">
                    </div>
                </div>
    
                <div class="row my-3">
                    <div class="col">
                        <input type="submit" value="Filtrar" class="btn btn-success">
                    </div>
                </div>
            </form>

            <div>
                <x-expedientes-table :expedientes="$expedientes"/>
            </div>
        </div>

    </div>
    
@endsection
