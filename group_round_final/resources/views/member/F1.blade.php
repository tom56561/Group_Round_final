@extends('layouts.alter')

@section('title')
    參加的活動
@endsection

@section('content')
    <section>
        <h2>參加的活動</h2>
        
        <div class="AllCard">
            {{-- @foreach ($joinEvent as $join)
                <a href="#">
                    <div class="card" id="card1">
                        <img src="/img/{{  }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <p class="card-text">一起來玩瘟疫危機！</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">10月24日 19:00</small>
                        </div>
                    </div>
                </a>
            @endforeach --}}
            
           
        </div>  
        <button id="submitBtn" class="btn btn-orange">看更多</button>
    </section>
    
@endsection