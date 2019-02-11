@extends('layouts.app')

@section('content')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css6/bootstrap.min.css">
  <title>mywebsite</title>
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
<li class="nav-item"><a href="http://127.0.0.1:8000/posts/create" class="nav-link"></a></li>      </ul>
      <hr class="d-md-none border-secondary my-2">
    </div>
  </nav>

    <div class="jumbotron text-center">
      <div class="container">
        <h1>WElCOME</h1>
      </div>
    </div>
    <div>
      <h2 class="text-center">thankyu！</h2><br>      
  <button class="btn btn-info" data-toggle="modal" data-target="#holiday">please push!</button>
  <div class="modal fade" id="holiday" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title"></h3>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <a href="http://127.0.0.1:8000/about" class="nav-link">こちらよりアクセスお願い致します(´・ω・`)</a>  
          </div>
        <div class="modal-footer">
            <p class="mb-0 mr-3">記述時間：2018：12/19　13:00</p>
          <button class="btn btn-secondary" data-dismiss="modal">閉じる</button>
    　　　</div>
        <div class="container">  
          
@endsection 