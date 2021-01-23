<?php
// var_dump($large_area);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header><h1>絞り込みの結果</h1>
    <div class="back_btn flex">
        <a class="" href="{{ url('/hello/add')}}">戻る</a>
    </div>
</header>
<main>
    <div class="search_words flex">
        <div class="search_detail flex">
            <p><span class="search_word">キーワード：</span></p>
            <p>{{ $keyword }}</p>
            
            <p><span class="search_word search_address">住所：</span> {{ $address }}</p>
        </div>
        <div class="search_detail flex">
            <p><span class="">{{$results_available}}</span>件表示中</p>
        </div>
        
    </div>
    <?php
    $counter = 0;//カウンター
    foreach( $shops as $shop ){ 
        $counter++;
        ?>
            <ul>
                <li>{{ $counter}}件目</li><br>
                <li><img src="{{ $shop['logo_image']}}" alt=""></li>
                <li><span class="shop_details">店舗名：</span> {{$shop['name']}}</li>
                <li><span class="shop_details">住所：</span> {{$shop['address']}}</li>
                <li><span class="shop_details">最寄り駅：</span> {{$shop['station_name']}}</li>
                <li><span class="shop_details">予算：</span> {{print current( $shop['budget'] )}}</li>
                <li><span class="shop_details">営業時間：</span> {{$shop['open']}}</li>
                <li><a href="{{print current( $shop['urls'] )}}"  target="_blank" rel="noopener noreferrer">このお店をHotPepperで見る</a></li>
                <br>
            </ul>
    <?php } ?>
</main>
</body>
</html>