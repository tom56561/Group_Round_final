@extends('layouts.main')

@section('title')
    會員中心
@endsection

@section('content')
<article>
    <div id="leftDiv" style="text-align: center;
     /* border: 1px solid rgb(206, 206, 206); height: 750px; padding-top:30px; */
     ">
        <img src="/upload/{{ $User->userImg }}" alt="" style="width: 200px;">
        <h2 name="userName">{{ $User->userName }}</h2>
        <h6 name='userNickName'>{{ $User->userNickName }}</h6>
        <h6 name='userEmail'>{{ $User->userEmail }}</h6>
        <hr className='hr_slid'>
        <h4>活動滿意度</h4>
        <div name='userEvaluate' style="margin-top: -15px;">
            <img src="/img/star.svg" alt="">
            <img src="/img/star.svg" alt="">
            <img src="/img/star.svg" alt="">
            <img src="/img/star.svg" alt="">
            <img src="/img/star.svg" alt="">
        </div>
        <hr className='hr_slid'>
        <div>
            <h3>個人簡介</h3>
            <p>
                {{ $User->userIntro }}
            </p>
        </div>
        <hr className='hr_slid'>
        <div>
            <a href="{{ route('member.Alter', $id) }}">修改個人資料</a>
        </div>

    

    </div>
    <div id="rightDiv">
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
            <br><br>
            <button type="button" class="btn btn-orange btn-sm"><a href="{{ route('member.create', $id) }}"  style="color: white">看更多</a></button>
        </section>
        <hr class='hr_slid'>
        <section>
            <h3>參加的活動</h3>
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
            <br><br>
            <button type="button" class="btn btn-orange btn-sm"><a href="{{ route('member.join', $id) }}" style="color: white">看更多</a></button>
        </section>
        <section>
            
            @if ($tag[0] !== '')
            <hr class='hr_slid'>
                <h3>興趣</h3>
                <div class="row">
                    @foreach ($tag as $key => $value)
                        <p id="userInterest" class="col-3">{{ $value }}</p>
                    @endforeach
                </div>
            @endif
        </section>
        <br><br><br><br><br>
    </div>
</article>
@endsection