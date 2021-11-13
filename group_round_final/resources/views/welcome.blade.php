<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="icon" href="{{ url('img/logo.png') }}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        
        /* -----------------快閃訊息------------------------------------ */
        #notice{
            background-color: #ff8801c0;
            text-align: center;
            line-height:40px;
            color: white;
        }
        /* -----------------快閃訊息------------------------------------ */
        
        #welcome{
            text-align: center;
            margin-top: 200px;
            
        }
        </style>
</head>

<body>
    <div id="welcome">
        <h1><b>這邊放首頁</b></h1>
        <span>當使用者刪除會員資料時會跳轉到此頁，並顯示"成功刪除會員資料"的快閃訊息</span>
    </div>
    
    {{-- /* -----------------快閃訊息------------------------------------ */ --}}
    {{-- 成功刪除會員資料快閃訊息 --}}
    @if (session()->has('notice'))
    <div id="notice">
        {{ session()->get('notice') }}
    </div>
    @endif
    {{-- /* -----------------快閃訊息------------------------------------ */ --}}
    
</body>
</html>