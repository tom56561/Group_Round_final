@extends('layouts.alter')

@section('title')
    發起的活動
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