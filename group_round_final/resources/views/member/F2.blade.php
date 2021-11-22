@extends('layouts.alter')

@section('title')
    發起的活動
@endsection


@section('content')
    <section>
        <h2>發起的活動</h2> 
        <div class="AllCard">
            @foreach ($createEvent as $create)                
            <a href="#">
                <div class="card" id="card1">
                    <img src="#" class="card-img-top" alt="{{ $create->eventImg }}">
                    <div class="card-body">
                        <p class="card-text">{{ $create->eventTitle }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{ $create->eventDateTime }}</small>
                    </div>
                </div>
            </a>
        @endforeach
        </div>
        <br>
        <br>
        <br>
    </section>
    
@endsection