@extends('layouts.main')

@section('title', 'trains')

@section('main-content')
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h1>TRAINS</h1>
            </div>
        </div>
        <div class="row d-flex flex-wrap row-cols-6 justify-content-center text-white">
            @foreach ($trains as $train)
            <div class="card col bg-danger m-3">
                <div class="card-body">
                    <h5 class="card-title text-center text-dark fw-bold mb-3">{{$train['Azienda']}}</h5>
                    <div class="d-flex justify-content-around">
                        <p>{{$train['Stazione_di_partenza']}}</p>
                        <p>{{$train['Stazione_di_arrivo']}}</p>
                    </div>
                    <div class="d-flex justify-content-around">
                        <p>{{$train['Data_di_partenza']}}</p>
                        <p>{{$train['Data_di_arrivo']}}</p>
                    </div>

                    <div class="d-flex justify-content-around">
                        <p>{{$train['Orario_di_partenza']}}</p>
                        <p>{{$train['Orario_di_arrivo']}}</p>
                    </div>

                    <p>Codice del treno: {{$train['Codice_Treno']}}</p>
                    <p>Numero di carrozze: {{$train['Numero_Carrozze']}}</p>

                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection