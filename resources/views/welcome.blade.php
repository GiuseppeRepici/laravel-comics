@extends('layouts.app')

@section('content')
    <div class="pasta-container py-4">
        <div class="container">
            <h2>comics</h2>
            <div class="row row-cols-6 g-3">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection