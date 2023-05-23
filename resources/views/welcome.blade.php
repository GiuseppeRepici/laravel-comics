@extends('layouts.app')

@section('content')
    <div class="comics-container py-4">
        <div class="container">
            <h2>comics</h2>
            <div class="row row-cols-6 g-3">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div>
                            <img class="foto" src="{{ $comic['thumb'] }}" alt="">
                            <div>
                                <h5>{{ $comic['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection