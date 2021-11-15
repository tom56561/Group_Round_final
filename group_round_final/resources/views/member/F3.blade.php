@extends('layouts.alter')

@section('title')
    已結束的活動
@endsection

@section('aside')
    {{-- 行事曆 --}}
    <div id="root"></div>
    {{-- 左選單 --}}
    <div id="userContents">
        <a href="{{ route('member.Alter', $id) }}"><h4>修改基本資料</h4></a>
        <a href="{{ route('member.create', $id) }}"><h4>發起的活動</h4></a>
        <a href="{{ route('member.join', $id) }}"><h4>參加的活動</h4></a>
        <a href="{{ route('member.collect', $id) }}"><h4>收藏的活動</h4></a>
        <a href="{{ route('member.finished', $id) }}"><h4>已結束的活動</h4></a>
        <a href="{{ route('member.comment', $id) }}"><h4>團員回饋</h4></a>
    </div>      
@endsection

@section('content')
    <section>
        <h2>已結束的活動</h2>
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