    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>面接での想定質問</title>
        <!-- Fonts -->
 <link rel="stylesheet" href="padetailstylesheet.css">
    </head>
    <body>
        <h1>想定質問</h1>
        <h2>詳細画面</h2>
        <div>
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        質問：{{ $exquestion->question }}
                    </p>
                </div>
        </div>
        
        
    <div>回答メモ</div>
    
        <form action="/exquestions/{{ $exquestion->id }}/comment" method="post">
            @csrf
            <div class="content">
                <h2>コメント</h2><br>
                <textarea name="comment[comment]" placeholder="ここに内容を入力してください"></textarea><br>
                <input type="submit" value="投稿"/>
            </div>
        </form>

    </body>
</html>

    