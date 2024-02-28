@extends('layouts.app')

@section('page-title', $train->id)

@section('main-content')

    <main>
        <div class="container">
            <h1 class="text-light">
                Company: {{ $train->company }}
            </h1>
            <a href="/trains" class="btn btn-danger ">
                Torna alla lista
            </a>
            <div class="row">
                <div class="col-12 col-sm-3 mb-3 ">
                    <div class="card p-2">
                        <h3>
                            {{ $train->date }}
                        </h3>
                        <p>
                            <strong>Departure:</strong> {{ $train->departure_station }} - {{ $train->departure_date }} - {{ $train->departure_time }} 
                        </p>
                        <p>
                            <strong>Arrival:</strong> {{ $train->arrival_station }} - {{ $train->arrival_date }} - {{ $train->arrival_time }}
                        <p>
                        <p>
                           <strong>Train Code:</strong> {{ $train->train_code }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection