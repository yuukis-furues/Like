@extends('layouts.defaults')

@section('title', '')

@section('content')
<h1>
  <a href="{{ url('/posts/create') }}" class="header-menu">新規作成</a>
<div class="collapse navbar-collapse" id="nav1">
      <ul class="navbar-nav">
        <p><a href="http://127.0.0.1:8000/site" class="nav-link">マイページヘ戻る</a></p>
        <p><a href="http://127.0.0.1:8000/posts" class="nav-link">現在のページ</a></p> 
      </ul>
      <hr class="d-md-none border-secondary my-2">
    </div>
</h1>

<ul>
  @forelse ($posts as $post)
  <li>
    <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
    <a href="{{ action('PostsController@edit', $post) }}" class="edit">[編集 ]</a>
    <a href="#" class="del" data-id="{{ $post->id }}">[消去]</a>
    <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
<script src="/js/main.js"></script>
@endsection