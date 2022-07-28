@extends('layouts.index')

@section('pageMain')
    <main>

        {{-- @foreach ($movies as $movie)
            <h2>{{ $movie->title }}</h2>
            <h2>{{ $movie->original_title }}</h2>
            <h2>{{ $movie->nationality }}</h2>
            <h2>{{ $movie->date }}</h2>
            <h2>{{ $movie->vote }}</h2>
        @endforeach --}}



        @foreach ($movies as $movie)
            <div class="testimotionals">
                <div class="card">
                    <div class="layer">

                    </div>
                    <div class="content">
                        <div class="details">
                            <h2> Titolo: <br> <span>{{ $movie->title }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Titolo Originale: <br> <span>{{ $movie->original_title }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Nazionalità: <br> <span>{{ $movie->nationality }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Data: <br> <span>{{ $movie->date }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Voto: <br> <span>{{ $movie->vote }}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach




    </main>
@endsection
