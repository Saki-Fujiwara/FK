<x-app-layout>
        <h2>過去質問作成</h2>
        <form action="/pasts" method="PAST">
            @csrf
            <div>
                <h2>質問</h2>
                <textarea name="paquestion[question]" placeholder="今日も1日お疲れさまでした。">{{ old('past.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('past.body') }}</p>
            </div>
            <div>
                <h2>回答</h2>
                <textarea name="paquestion[answer]" placeholder="今日も1日お疲れさまでした。">{{ old('past.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('past.body') }}</p>
            </div>
            <input type="hidden" name="paquestion[user_id]" value="{{ Auth::user()->id }}">
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
</x-app-layout>