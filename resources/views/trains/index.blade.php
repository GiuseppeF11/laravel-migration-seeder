@extends('layouts.app')

@section('page-title', 'Trains')

@section('main-content')

<body>
    <main>
        <div class="container">
            <h1 class="text-light">
                TrainAndGo
            </h1>
            <div class="row">
                @foreach ($trains as $index => $train)
                    <div class="col-12 col-sm-3 mb-3 ">
                        <div class="card">
                            <p>
                                <strong>Departure:</strong> 
                                {{ $train->departure_station }} - 
                                {{ $train->departure_date }} - 
                                {{ $train->departure_time }} 
                            </p>
                            <p>
                                <strong>Arrival:</strong> 
                                {{ $train->arrival_station }} - 
                                {{ $train->arrival_date }} - 
                                {{ $train->arrival_time }}
                            </p>
                            @if ($train->cancelled == true)
                                <h4>
                                    TRENO CANCELLATO!
                                </h4>
                            @endif
                            <a href="{{ route('trains.show', ['id'=> $train->id]) }}" class="btn btn-danger ">
                                Vai al treno
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
@endsection

<style lang="scss" scoped>
    
</style>