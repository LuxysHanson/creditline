<header class="header">
    <div class="header_top">
        <div class="container">
            <div class="header_logo">
                <a href="/"><img src="{{ '/storage/'. setting('site.logo') }}" alt="header-logo"></a>
            </div>
            <div class="btns">
                <a class="btn btn_red" href="https://my.creditline.kz/" target="_blank">@lang('general.btn_payment')</a>
                <a class="btn btn_green" href="{{ route('form') }}">@lang('general.btn_loan')</a>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container">
            <div class="header_menuBtn"><img src="/assets/images/icons/menu_btn.svg" alt="menu-icon"></div>
            <div class="links">
                <a class="link" href="/#second-block">@lang('general.header.menu_item1')</a>
                <a class="link" href="/#third-block">@lang('general.header.menu_item2')</a>
                <a class="link" href="/#fifth-block">@lang('general.header.menu_item3')</a>
                <a class="link" href="/#six-block">@lang('general.header.menu_item4')</a>
                <a class="link" href="/#seventh-block">@lang('general.header.menu_item5')</a>
            </div>
            <div class="header_icons">
                <div class="lang">
                    @php($currentLocale = session()->get('locale'))
                    @foreach(config()->get('voyager.multilingual.locales') as $locale)
                        <a class="lang_link {{ $locale != $currentLocale ? 'lang_current' : '' }}"
                           data-href="{{ route('locale.set', $locale) }}"
                           @if($locale == $currentLocale) style="display: none" @endif>
                            {{ config()->get('voyager.multilingual.locale_names')[$locale] ?? '' }}
                        </a>
                    @endforeach
                </div>
                <a class="whatsapp" target="_blank"
                   href="https://wa.me/{{ \App\Helpers\Common::getPhone(setting('site.phone')) }}">
                    <img src="/assets/images/icons/whatsapp.svg" alt="whatsapp-icon">
                </a>
                <a class="call" target="_blank" href="tel:+{{ \App\Helpers\Common::getPhone(setting('site.phone')) }}"><img src="/assets/images/icons/phone.svg" alt="phone-icon"></a>
            </div>
        </div>
    </div>
</header>
<div class="mobileMenu__bloor"></div>
<div class="mobileMenu">
    <div class="mobileMenu_row">
        <a class="mobileMenu_logo" href="/">
            <img src="{{ '/storage/'. setting('site.logo') }}" alt="logo-icon">
        </a>
        <img class="mobileMenu_close" src="/assets/images/icons/close_btn.svg" alt="close-icon">
    </div>
    <a class="btn btn_green"  href="form/">@lang('general.btn_loan')</a>
    <a class="btn btn_red" href="https://my.creditline.kz/">@lang('general.btn_payment')</a>
    <div class="links">
        <a class="link" href="/#first-block">@lang('general.header.menu_item1')</a>
        <a class="link" href="/#third-block">@lang('general.header.menu_item2')</a>
        <a class="link" href="/#fifth-block">@lang('general.header.menu_item3')</a>
        <a class="link" href="/#six-block">@lang('general.header.menu_item4')</a>
        <a class="link" href="/#seventh-block">@lang('general.header.menu_item5')</a>
    </div>
</div>
