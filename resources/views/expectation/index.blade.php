<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>想定質問</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <a href='/exquestions/create'>想定質問作成</a>
        <div>
            @foreach ($exquestions as $exquestion)
                @if($exquestion->user_id==Auth::id())
        
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        質問：<a href="/exquestions/{{ $exquestion->id }}">{{ $exquestion->question }}</a>
                    </p>
                </div>
                @endif
            @endforeach
        </div>
    </body>
</html>
