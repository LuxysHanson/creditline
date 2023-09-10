<div class="block6">
    <div class="container">
        <div class="bg"></div>
        <picture class="bg2">
            <source srcset="/assets/images/icons/Ellipse2.webp" type="image/webp">
            <source srcset="/assets/images/icons/Ellipse2.webp" type="image/pjp2">
            <img src="/assets/images/icons/Ellipse2.png" alt="ellipse2-bg">
        </picture>
        <picture class="bg3">
            @if($photo = \App\Helpers\Common::getWebpFormat($blockData, 'photo'))
                <source srcset="{{ $photo }}" type="image/webp">
                <source srcset="{{ $photo }}" type="image/pjp2">
            @endif
            <img src="{{ \App\Helpers\Common::getImage($blockData->photo) }}" alt="block6-photo" loading="lazy">
        </picture>
        <div class="box">
            <div class="mainTitle">{{ $blockData->title }}</div>
            <div class="items">
                @for($i = 1; $i < 4; $i++)
                    @if(!empty($blockData->{'name_'.$i}))
                        <div class="item">
                            <div class="item_img">
                                <img src="/assets/images/icons/check-circle.svg" alt="check-icon">
                            </div>
                            <div class="item_desc">{{ $blockData->{'name_'.$i} }}</div>
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>
</div>
