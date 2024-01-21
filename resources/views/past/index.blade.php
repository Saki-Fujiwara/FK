<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>過去質問</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <a href='/paquestions/create'>過去質問作成</a>
        <div>
            @foreach ($paquestions as $paquestion)
                @if($paquestion->user_id==Auth::id())
        
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        質問：<a href="/paquestions/{{ $paquestion->id }}">{{ $paquestion->question }}</a>
                    </p>
                </div>
                @endif
            @endforeach
        </div>
    </body>
</html>
