<x-app-layout>
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
</x-app-layout>