@extends('layouts.defaults')

@section('title', '編集画面')

@section('content')

<h1>
　<p><a href="http://127.0.0.1:8000/site" class="nav-link">マイページヘ戻る</a></p>
<div class="collapse navbar-collapse" id="nav1">
      <ul class="navbar-nav">
  <a href="http://127.0.0.1:8000/posts" class="header-menu">投稿ページを見る</a>
      </ul>
      <hr class="d-md-none border-secondary my-2">
    </div>
</h1>
<h2>
  <p>編集</p>
</h2>
<form method="post" action="{{ url('/posts', $post->id) }}">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <p>
    <input type="text" name="title" placeholder="enter title" value="{{ old('title', $post->title) }}">
    @if ($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p>     
    <textarea name="body" placeholder="enter body">{{ old('body', $post->body) }}</textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Update">
  </p>
</form>
@endsection