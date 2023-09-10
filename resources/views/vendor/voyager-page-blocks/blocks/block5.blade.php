<div class="block5">
    <div class="bg"></div>
    <picture class="bg2">
        <source srcset="/assets/images/icons/Ellipse2.webp" type="image/webp">
        <source srcset="/assets/images/icons/Ellipse2.webp" type="image/pjp2">
        <img src="/assets/images/icons/Ellipse2.png" alt="ellipse2-icon">
    </picture>
    <div class="container">
        <div class="mainTitle">{{ $blockData->title }}</div>
        <div class="box">
            <div class="items">
                <div class="items_line"></div>
                @for($i = 1; $i < 4; $i++)
                    @if(!empty($blockData->{'name_'.$i}))
                        <div class="item">
                            <div class="item_dots"></div>
                            <div class="item_num">{{$i}}</div>
                            <div class="item_desc">{{ $blockData->{'name_'.$i} }}</div>
                        </div>
                    @endif
                @endfor
            </div>
            <a class="btn btn_green" href="{{ route('form') }}">{{ $blockData->btn_text }}</a>
        </div>
    </div>
</div>
