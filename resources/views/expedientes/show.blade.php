@extends('layouts.app')

@section('content')

    <div class="container card">
        <div class="card-body">
            <div class="card-title">
                <h1>Expedientes:</h1>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                   guardado
                </div>
            @endif


            <x-expedientes-form :expediente="$expediente" :estatus="$estatus"/>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

@endsection