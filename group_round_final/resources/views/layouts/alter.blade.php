<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="icon" href="{{URL::asset('img/logo.png')}}" type="image/gif" sizes="16x16">


    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <script src="{{URL::asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{URL::asset('js/jquery-3.6.0.min.js')}}"></script>

    <link rel="stylesheet" href="{{URL::asset('css/member.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/card.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/member_comment.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/member_interest.css')}}">

</head>
<body>
    {{-- 頁首 --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded">
            <div class="container-fluid">
                <button type="button" class="btn"><a class="navbar-brand" href="./mainpageA.html">
                        <img src="/img/logo-text-1.png" type="image/gif" width="120px"></a></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- 活動建立頁面 -->
                        <li class="nav-item">
                            <button type="button" class="btn btn-orange btn-sm"><a href="./holdEventC1.html" class="link-light">辦活動</a></button>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <!-- 搜尋 -->
                        <input class="form-control me-2 bg-light" type="search" placeholder="搜尋..." aria-label="Search">
                        <a href="./actSearch___B.html"><button class="btn btn-secondary btn-sm" type="submit"><img src="/img/search.svg" type="image/gif" size="16x16"></button></a>
                    </form>
                    <!-- 登入註冊 -->
                    <a class="nav-link link-dark" href="./logInE-1.php"><img src="/img/log-in.svg" type="image/gif" size="16x16">
                        登入/註冊</a>
                </div>
            </div>
        </nav>
    </header>
    
    <div id="leftDiv">
        @yield('aside')        
    </div>

    <div id="rightDiv">
        @yield('content')        
    </div>


    {{-- 頁尾 --}}
    <footer class="bg-dark text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-light fw-bold">關於我們</h5>
                    <p class="text-light">
                        團團團<br>
                    </p>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-light fw-bold">聯絡我們</h5>
                    <p class="text-light">
                        電話<br>
                        信箱<br>
                    </p>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <!-- Icon links -->
                    <div class="container pt-4 text-center text-white">
                        <!-- Section: Social media -->
                        <section class="mb-2">
                            <!-- Facebook -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                                <img src="/img/icons8-facebook-24.png" alt="facebook" size="24x24">
                            </a>
                            <!-- Twitter -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                                <img src="/img/icons8-twitter-26.png" alt="twitter" size="24x24">
                            </a>
                            <!-- Instagram -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                                <img src="/img/icons8-instagram-24.png" alt="instagram" size="24x24">
                            </a>
                            <!-- Github -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                                <img src="/img/icons8-github-24.png" alt="github" size="24x24">
                            </a>
                            <!-- mail -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                                <img src="/img/icons8-mail-24.png" alt="mailUs" size="24x24">
                            </a>
                        </section>
                        <!-- Copyright -->
                        <div class="text-center p-3 text-light">
                            <h6>© 2021 GroupRound團團轉共遊平台製作小組</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>