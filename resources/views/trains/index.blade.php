@extends('layouts.main')

@section('title', 'trains')

@section('main-content')
    <div class="container-fluid bg-danger">
        <div class="row text-center">
            <div class="col-12">
                <h1>TRAINS</h1>
            </div>
        </div>
        <div class="row d-flex flex-wrap row-cols-6 justify-content-center text-white">
            @foreach ($trains as $train)
            <div class="card col bg-white m-3">
                <div class="card-body">
                    <h5 class="card-title text-center text-dark fw-bold mb-3">{{ucfirst($train['Azienda'])}}</h5>
                    <p class="text-dark">Stazione di partenza: <span class="text-primary">{{$train['Stazione_di_partenza']}}</span></p>
                    <p class="text-dark">Stazione di arrivo: <span class="text-primary">{{$train['Stazione_di_arrivo']}}</span></p>
                    <p class="text-dark">Data di partenza: <span class="text-primary">{{$train['Data_di_partenza']}}</span></p>
                    <p class="text-dark">Orario di partenza: <span class="text-primary">{{$train['Orario_di_partenza']}}</span></p>
                    <p class="text-dark">Orario di arrivo: <span class="text-primary">{{$train['Orario_di_arrivo']}}</span></p>
                    <p class="text-dark">Codice del treno: <span class="text-primary"></span>{{$train['Codice_Treno']}}</p>
                    <p class="text-dark">Numero di carrozze: <span class="text-primary">{{$train['Numero_Carrozze']}}</span></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection