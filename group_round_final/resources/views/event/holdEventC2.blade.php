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
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded ">
            <div class="container-fluid">
                <button type="button" class="btn"><a class="navbar-brand" href="./header.php">
                <img src="{{ asset('img/logo-text-1.png')}}" type="image/gif" width="120px"></a></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- 活動建立頁面 -->
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary btn-sm" ><a href="" class="link-light">辦活動</a></button>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <!-- 搜尋 -->
                        <input class="form-control me-2 bg-light" type="search" placeholder="搜尋..." aria-label="Search">
                        <button class="btn btn-secondary btn-sm" type="submit"><img src="{{ asset('img/search.svg')}}" type="image/gif" size="16x16"></button>
                    </form>
                    <!-- 登入註冊 -->
                    <a class="nav-link link-dark" href=""><img src="{{ asset('img/log-in.svg')}}" type="image/gif" size="16x16"> 登入/註冊</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">

        <!-- Order -->
        <div class="position-relative m-4">
            <div class="progress" style="height: 1px;">
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <button type="button"
                class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-main rounded-pill"
                style="width: 2rem; height:2rem;">1</button>
            <button type="button"
                class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-main rounded-pill"
                style="width: 2rem; height:2rem;">2</button>
            <button type="button"
                class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                style="width: 2rem; height:2rem;">3</button>
        </div>

        <!-- Information -->
        <form method="post" action="/holdevent/store2" class="form-horizontal">
            @csrf
        <div class="row py-4">
                <!-- Left -->
                <div class="col-6">
                    <div>
                        <label for="title" class="form-label h4">活動名稱：</label>
                        <input class="form-control bg-main" type="text" name="title" id="title" size="50">
                    </div>
    
                    <div class="mt-3">
                        <label for="content" class="form-label h4">活動內容與說明：</label>
                        <textarea class="form-control bg-main" name="content" id="content" rows="15"></textarea>
                    </div>
    
                </div>
                <!-- Right -->
                <div class="col-6">
                    <div>
                        <label for="formFile" class="form-label h4">上傳圖片：</label>
                        <input class="form-control" type="file" name="formFile" id="formFile">
                    </div>
                    <div class="img-frame">
                        <img class="img-content mt-4" 
                        src="https://secure.meetupstatic.com/photos/event/d/b/b/e/clean_493676254.jpeg" alt="">
                    </div>
                </div>
            </div>
            
            <!-- Button -->
            <div class="d-flex justify-content-between mb-2">
                <input class="px-3 btn btn-secondary" id="btn" type="button" onclick="" value="上一步" />
                <input class="px-3 btn btn-main" id="btn" type="submit" onclick="" value="下一步" />
            </div>
        </div>
    </form>

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