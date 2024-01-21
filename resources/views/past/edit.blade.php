<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>過去質問</title>
    </head>
    <body>
        <h1 class="title">過去質問編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $past->id }}" method="PAST">
                @csrf
                @method('PUT')
                <div class='content__body'>
                    <h2>質問</h2>
                    <input type='text' name='past[body]' value="{{ $past->body }}">
                </div>
                <div class='content__body'>
                    <h2>回答</h2>
                    <input type='text' name='past[body]' value="{{ $past->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
</html>