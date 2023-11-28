@if($questions->isNotEmpty())
    <div class="block7" id="seventh-block">
        <div class="container">
            <div class="mainTitle center">@lang('general.faq_title')</div>
            <div class="items">
                @foreach($questions as $question)
                    @php($question = $question->translate(session()->get('locale')))
                    <div class="item">
                        <div class="item_head">
                            <div class="left">{{ $question->name }}</div>
                            <div class="right">+</div>
                        </div>
                        <div class="item_body">{!! $question->answer !!}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
