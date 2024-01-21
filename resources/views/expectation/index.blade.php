<x-app-layout>
        <a href='/exquestions/create'>予想質問作成</a>
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
</x-app-layout>