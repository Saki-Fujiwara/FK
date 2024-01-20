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
