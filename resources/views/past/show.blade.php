<x-app-layout>
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
                <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">投稿</button>
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

    </x-app-layout>
