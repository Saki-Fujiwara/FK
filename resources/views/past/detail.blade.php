<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>過去の面接で聞かれた質問</title>
        <!-- Fonts -->
 <link rel="stylesheet" href="padetailstylesheet.css">
    </head>
    <body>
        <h1>過去質問</h1>
        <h2>詳細画面</h2>
        <div>
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        質問：{{ $paquestion->question }}
                    </p>
                </div>
        </div>
        
        
    <div>振り返り</div>
    
        <form action="/paquestions/{{ $paquestion->id }}/comment" method="post">
            @csrf
            <div>
                <select name='comment[type]'>
                    <option value="">選択してください</option>
                    <option value=1>良かった点</option>
                    <option value=2>悪かった点</option>
                </select><br>
            </div>
    
            <div class="content">
                <h2>コメント</h2><br>
                <textarea name="comment[comment]" placeholder="ここに内容を入力してください"></textarea><br>
                <input type="submit" value="投稿"/>
            </div>
        </form>

        <div>
            @foreach($paquestion->comments as $pacomment)
            <p>種別</p>
            @if($pacomment->pivot->type == 1)
            <p>よかった点</p>
            @else
            <p>悪かった点</p>
            @endif
            <p>コメント内容</p>
            <p>{{ $pacomment->pivot->comment }}</p>
            
            
            @endforeach
        </div>

    </body>
</html>
