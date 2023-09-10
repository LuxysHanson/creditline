<div class="block1">
    <img class="bg" src="/assets/images/icons/Ellipse1.svg" alt="ellipse-icon">
    <picture class="bg2">
        <source srcset="/assets/images/icons/Ellipse4.webp" type="image/webp">
        <source srcset="/assets/images/icons/Ellipse4.webp" type="image/pjp2">
        <img src="/assets/images/icons/Ellipse4.png" alt="ellipse4-icon">
    </picture>
    <picture class="bg3">
        @if($photo = \App\Helpers\Common::getWebpFormat($blockData, 'image_car1'))
            <source srcset="{{ $photo }}" type="image/webp">
            <source srcset="{{ $photo }}" type="image/pjp2">
        @endif
        <img src="{{ \App\Helpers\Common::getImage($blockData->image_car1) }}" alt="image-car1" loading="lazy">
    </picture>
    <picture class="bg4">
        @if($photo = \App\Helpers\Common::getWebpFormat($blockData, 'image_car2'))
            <source srcset="{{ $photo }}" type="image/webp">
            <source srcset="{{ $photo }}" type="image/pjp2">
        @endif
        <img src="{{ \App\Helpers\Common::getImage($blockData->image_car2) }}" alt="image-car2" loading="lazy">
    </picture>
    <picture class="bg5">
        @if($photo = \App\Helpers\Common::getWebpFormat($blockData, 'image'))
            <source srcset="{{ $photo }}" type="image/webp">
            <source srcset="{{ $photo }}" type="image/pjp2">
        @endif
        <img src="{{ \App\Helpers\Common::getImage($blockData->image) }}" alt="banner-image" loading="lazy">
    </picture>
    <div class="container">
        <h1 class="mainTitle title">{{ $blockData->title }}</h1>
        <div class="block1_row">
            <div class="item">
                <div class="item_desc">@lang('general.block1.desc1')</div>
                <div class="item_title">{{ $blockData->amount_from }}<span>₸</span></div>
            </div>
            <div class="item">
                <div class="item_desc">@lang('general.block1.desc2')</div>
                <div class="item_title">{{ $blockData->amount_to }}<span>₸</span></div>
            </div>
        </div>
        <div class="block1_text">{!! $blockData->desc !!}</div>
        <div class="block1_row">
            <a class="btn btn_green" href="{{ route('form') }}">{{ $blockData->btn_text1 }}</a>
            <div class="btn btn_red" onclick="lazyScroll('.mainPage .block3', 0)">
                <div>{{ $blockData->btn_text2 }}</div>
                <img src="/assets/images/icons/calculator.svg" alt="calculator-icon">
            </div>
        </div>
    </div>
</div>
