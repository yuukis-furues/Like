@extends('layouts.app')

@section('content')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css6/bootstrap.min.css">
  <title>自己紹介</title>
</head>

<body style="padding-top:5rem">

    
    
<div class="container">     
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a href="#" class="navbar-brand"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav1">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav1">
      <ul class="navbar-nav">
<li class="nav-item"><a href="http://127.0.0.1:8000/site" class="nav-link"></a></li>
<li class="nav-item"><a href="http://127.0.0.1:8000/about" class="nav-link"></a></li>
<li class="nav-item"><a href="http://127.0.0.1:8000/study" class="nav-link"></a></li>
<li class="nav-item"><a href="http://127.0.0.1:8000/posts/create" class="nav-link"></a></li>           </ul>
      <hr class="d-md-none border-secondary my-2">
    </div>
  </nav>
    <div class="jumbotron text-white mb-4"
       style="background:url(img/photo2.jpg);background-size:cover;text-shadow: 2px 2px 4px #666;">
    <h1 class="mb-1">laravel</h1>
    <p>make happy</p>
  </div>
    
<h2>簡単に自己紹介をさせていただきます(*´ω｀)</h2>    
  <p>氏名：古江勇輝</p>
　 　<p>年齢：32歳</p>
    <p>趣味：音学鑑賞、プログラミング</p>
    <p>好きなこと：モノづくり、カラオケ、のんびり過ごすこと</p>
　<h4>苦手なこと</h4>
<p>魚介類=アレルギーなため、食べれません(´;ω;｀)</p>
<p>水泳＝とある出来事がきっかけで湯舟にすら入れなくなりました( ﾟДﾟ)</p>
<p>旅行＝面倒臭がりなためか、全くもっていきません(´・ω・`)＝コテコテのインドア派です(笑)</p>    
  <div class="container">        
  <h5 class="mt-4 mb-0"></h5>
  <hr class="mt-2 mb-4">
  <button class="btn btn-info" data-toggle="modal" data-target="#holiday">GO PUSH!</button>
  <div class="modal fade" id="holiday" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title"></h6>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <a href="http://127.0.0.1:8000/study" class="nav-link">SES時代の生活へ</a>
          </div>
        <div class="modal-footer">
            <p class="mb-0 mr-3">記述時間：2018：12/16　03：31</p>
          <button class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        </div>
      </div>
    </div>
  </div>
@endsection
