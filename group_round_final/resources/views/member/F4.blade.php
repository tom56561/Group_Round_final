@extends('layouts.alter')

@section('title')
    收藏的活動
@endsection

@section('content')
    <section>
        <h2>收藏的活動</h2> 
        <div class="AllCard">
            <a href="#">
                <div class="card" id="card1">
                    <img src="/img/boardgame1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">一起來玩瘟疫危機！</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">10月24日 19:00</small>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card" id="card2">
                    <img src="/img/room1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">國慶連假密室脫逃團！</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">10月10日 14:30</small>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card" id="card3">
                    <img src="/img/TRAVEL1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">台中各景點一日遊！</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">10月19日 08:00</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="AllCard">
            <a href="#">
                <div class="card" id="card1">
                    <img src="/img/boardgame1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">一起來玩瘟疫危機！</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">10月24日 19:00</small>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card" id="card2">
                    <img src="/img/room1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">國慶連假密室脫逃團！</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">10月10日 14:30</small>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card" id="card3">
                    <img src="/img/TRAVEL1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">台中各景點一日遊！</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">10月19日 08:00</small>
                    </div>
                </div>
            </a>
        </div>  
        <button id="submitBtn" class="btn btn-orange">看更多</button>
    </section>
    
@endsection