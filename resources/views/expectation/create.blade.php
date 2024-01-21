<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>想定質問</title>
    </head>
    <body>
        <h2>想定質問作成</h2>
        <form action="/expectations" method="EXPECTATIONS">
            @csrf
            <div>
                <h2>質問</h2>
                <textarea name="exquestion[question]" placeholder="今日も1日お疲れさまでした。">{{ old('expectation.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('expectation.body') }}</p>
            </div>
            <input type="hidden" name="exquestion[user_id]" value="{{ Auth::user()->id }}">
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
