<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oshibori</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="">
    <h1>Oshibori</h1>
</header>
<main class="flex">
    <div class="main_img flex">
        <img src="https://webservice.recruit.co.jp/banner/hotpepper-s.gif" alt="ホットペッパー Webサービス" width="135" height="17" title="ホットペッパー Webサービス"></a>
    </div>
    <div class="main_box flex">
        <form action="{{ url('/hello/result')}}" method="POST" class="flex">
        {{ csrf_field() }}
            <div class="main_box_searches">
                <div> <input class="search_text" type="text" name="keyword" placeholder="キーワード（必須）"></textarea></div>
                <div><input class="search_text" type="text" name="address" placeholder="住所"></div> 
                <div><input class="submit" type="submit" name="add"></div>
            </div>
        </form>
    </div>
</main>
</body>
</html>