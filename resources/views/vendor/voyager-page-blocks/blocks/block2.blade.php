<div class="block2">
    <div class="container">
        <picture class="bg1">
            <source srcset="/assets/images/icons/why1.webp" type="image/webp">
            <source srcset="/assets/images/icons/why1.webp" type="image/pjp2">
            <img src="/assets/images/icons/why1.png" alt="why1-bg">
        </picture>
        <picture class="bg2">
            <source srcset="/assets/images/icons/why2.webp" type="image/webp">
            <source srcset="/assets/images/icons/why2.webp" type="image/pjp2">
            <img src="/assets/images/icons/why2.png" alt="why2-bg">
        </picture>
        <div class="mainTitle center">{{ $blockData->title }}</div>
        <div class="items">
            @for($i = 1; $i < 4; $i++)
                @if(!empty($blockData->{'name_'.$i}) && !empty($blockData->{'desc_'.$i}))
                    <div class="item">
                        <img class="item_img" src="{{ \App\Helpers\Common::getImage($blockData->{'icon_'.$i}) }}">
                        <div class="item_right">
                            <div class="item_title">{{ $blockData->{'name_'.$i} }}</div>
                            <div class="item_desc">{{ $blockData->{'desc_'.$i} }}</div>
                        </div>
                    </div>
                @endif
            @endfor
        </div>
    </div>
</div>
