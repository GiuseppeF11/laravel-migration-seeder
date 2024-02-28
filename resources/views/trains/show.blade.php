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
            <div class="row d-flex justify-content-center">
                <div class="col-5 mb-3 ">
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
                            <strong>Price:</strong> {{ $train->price }}€
                        </p>
                        <p>
                            @if ($train->cancelled == true)
                                @else
                                <strong>Status:</strong> 
                                @if ($train->on_time == true)
                                    Treno in orario
                                    @else
                                    Treno in ritardo
                                @endif
                            @endif
                        </p>
                        <p>
                           <strong>Train Code:</strong> {{ $train->train_code }}
                        </p>
                        <button class="btn btn-danger">
                            Acquista biglietto
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection