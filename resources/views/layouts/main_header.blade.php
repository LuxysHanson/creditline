<header class="header">
    <div class="header_top">
        <div class="container">
            <div class="header_logo">
                <a href="/">
                    <img src="{{ '/storage/'. setting('site.logo') }}" alt="site-logo">
                </a>
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
                <a class="call" target="_blank"
                   href="tel:+{{ \App\Helpers\Common::getPhone(setting('site.phone')) }}">
                    <img src="/assets/images/icons/phone.svg" alt="phone-icon">
                </a>
            </div>
        </div>
    </div>
</header>
