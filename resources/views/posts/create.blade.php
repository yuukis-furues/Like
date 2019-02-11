@extends('layouts.defaults')

@section('title', '新規投稿')

@section('content')

<h1>
　<p><a href="http://127.0.0.1:8000/site" class="nav-link">マイページヘ戻る</a></p>
<div class="collapse navbar-collapse" id="nav1">
      <ul class="navbar-nav">
  <a href="http://127.0.0.1:8000/posts" class="header-menu">投稿ページを見る</a>
      </ul>
      <hr class="d-md-none border-secondary my-2">
    </div>
    <p>新規コメント追加(´・ω・`)</p>
</h1>

<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="enter title">
  </p>
  <p>
    <textarea name="body" placeholder="enter body"></textarea>
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
@endsection

