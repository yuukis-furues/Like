<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div id="header">
            @yield('header')
            <h1>コメント板   </h1>
        </div>
        <div id="main">
            @yield('content')
        </div>
        <div id="app">
    <my-counter init="1"></my-counter>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
   <script src="js4./prop_inner.js"></script>    
    </body>
</html>