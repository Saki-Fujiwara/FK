<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>過去の面接で聞かれた質問</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>過去質問</h1>
        <h2>コメント詳細</h2>
        <a href='/posts/create'>新規コメント</a>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
                    <p>カテゴリー：<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a></p>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
            <div class="card w-50 mx-auto m-5">
        <div class="card-body">
            <div class="pt-2">
                <p class="text-muted font-weight-bold h4 border-bottom border-secondary pb-3">コメント</p>
            </div>
            @if($articles->comments->isNotEmpty())
                @foreach ($articles->comments as $comment)
                    <div class="border-bottom border-secondary pt-2">
                        <p class="text-muted mx-3 pt-1">{{ $comment->user->name }}
                            が{{ $comment->created_at->format('Y年n月j日') }}に投稿</p>
                        <p class="text-muted mx-3">{!! nl2br(e($comment->content)) !!}</p>
                    </div>
                @endforeach
                {{--            TODO:↓コメント入力欄、コメントボタンの設置--}}
            @else
                <p class="text-center pt-2">コメントはまだ投稿されていません。</p>
            @endif
        </div>
    </div>
    </div>

    </body>
</html>
