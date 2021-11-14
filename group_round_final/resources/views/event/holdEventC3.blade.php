<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/holdEvent.css')}}">
    <link rel="icon" href="{{ asset('img/logo.png')}}" type="image/gif" sizes="16x16">
    <title>團團轉 Group Round</title>
</head>
<body>
     <!-- 頁首 -->
     <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded">
            <div class="container-fluid">
                {{-- home --}}
                <button type="button" class="btn">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('img/logo-text-1.png') }}" type="image/gif" width="120px">
                    </a>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- 活動建立頁面 -->
                        <li class="nav-item">
                            <button type="button" class="btn btn-orange btn-sm"><a href="{{ route('eventcreate') }}" {{--活動route--}}
                                    class="link-light">辦活動</a></button>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <!-- 搜尋 -->
                        <input class="form-control me-2 bg-light" type="search" placeholder="搜尋..." aria-label="Search">
                        <a href="{{--搜尋route--}}"><button class="btn btn-secondary btn-sm" type="submit">
                            <img src="{{ asset('img/search.svg') }}" type="image/gif" size="16x16"></button>
                        </a>
                    </ul>
                    </form>
                    
                    <!-- Authentication Links -->
                    <div class="nav-link link-dark">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link link-dark" href="{{ route('login') }}">
                                        <img src="{{ asset('img/log-in.svg') }}" type="image/gif" size="16x16">{{ __('登入/註冊') }}
                                    </a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                            
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>
            </div>
            </div>
        </nav>
    </header>

    <div class="container">

        <!-- Oreder -->
        <div class="position-relative m-4">
            <div class="progress" style="height: 1px;">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <button type="button"
                class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-main rounded-pill"
                style="width: 2rem; height:2rem;">1</button>
            <button type="button"
                class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-main rounded-pill"
                style="width: 2rem; height:2rem;">2</button>
            <button type="button"
                class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-main rounded-pill"
                style="width: 2rem; height:2rem;">3</button>
        </div>

        <!-- <div class="row py-4">

            <div class="col-6">
                <div>
                    <label for="title" class="form-label pb-2 h4">活動時間：</label>
                    <input class="form-control bg-main" type="text" id="title">
                </div>
                <div class="mt-5">
                    <label for="title" class="form-label pb-2 h4">活動地點：</label>
                    <input class="form-control bg-main" type="text" id="title">
                </div>
                <div class="mt-5">
                    <label for="title" class="form-label pb-2 h4">參加人數：</label>
                    <input class="form-control bg-main" type="text" id="title">
                </div>
                <div class="mt-5">
                    <label for="title" class="form-label pb-2 h4">性別限制：</label>
                    <input class="form-control bg-main" type="text" id="title">
                </div>


            </div>
            <div class="col-6">
                <div>
                    <label for="content" class="form-label pb-2 h4">注意事項：</label>
                    <textarea class="form-control bg-main" id="content" rows="18"></textarea>
                </div>
            </div>
        </div> -->
        <!-- Information -->
        <form method="post" action="/holdevent/store3" class="form-horizontal">
            @csrf
            <div class="row py-4">
                <div class="col-4"></div>
                <div class="col-4">
                    <div>
                        <label for="title" class="form-label pb-2 h4">活動時間：</label>
                        <input class="form-control bg-main" type="text" name="time" id="time">
                    </div>
                    <div class="mt-4 pt-3">
                        <label for="title" class="form-label pb-2 h4">活動地點：</label>
                        <input class="form-control bg-main" type="text" name="location" id="location">
                    </div>
                    <div class="mt-4 pt-3">
                        <label for="title" class="form-label pb-2 h4">參加人數：</label>
                        <input class="form-control bg-main" type="text" name="people" id="people">
                    </div>
                    <div class="mt-4 pt-3">
                        <label for="title" class="form-label pb-2 h4">性別限制：</label>
                        <input class="form-control bg-main" type="text" name="gender" id="gender">
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
    
            <!-- Button -->
            <div class="d-flex justify-content-between mb-2 py-4">
                <input class="px-3 btn btn-secondary" id="btn" type="button" onclick="" value="上一步" />
                <input class="px-3 btn btn-main" id="btn" type="submit" onclick="" value="下一步" />
            </div>
        </form>

    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-lg-start">
        <div class="container ">
            <!-- Copyright -->
            <div class="text-center p-4 text-light">
                <span>© 2021 Copyright GroupRound團團轉共遊平台製作小組</span>
            </div>
        </div>
    </footer>

</html>