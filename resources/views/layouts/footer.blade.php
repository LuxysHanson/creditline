<footer class="footer">
    <div class="container">
        <div class="footer_top">
            <div class="ff">
                <div class="footer_logo">
                    <a href="/"><img src="{{ '/storage/'. setting('site.footer_logo') }}" alt="footer-logo"></a>
                </div>
                <div class="footer_desc">{!! setting('site.footer_text_'. session()->get('locale')) !!}</div>
                <a href="{{ route('pages.get', 'documents') }}" class="footer_link">@lang('general.footer.documents')</a>
            </div>
            <div class="items">
                <div class="item">
                    <div class="item_left"><img src="/assets/images/icons/map-pin.svg" alt="map-logo"></div>
                    <div class="item_right">
                        <div class="title">@lang('general.footer.address')</div>
                        <div class="desc">{{ setting('site.address_'. session()->get('locale')) }}</div>
                    </div>
                </div>
            </div>
            <div class="items ss">
                <a class="item tel_fot" target="_blank"
                   href="https://wa.me/{{ \App\Helpers\Common::getPhone(setting('site.phone')) }}">
                    <div class="item_left"><img src="/assets/images/icons/whatsapp.svg" alt="whatsapp-logo"></div>
                    <div class="item_right">
                        <div class="title2">{{ setting('site.phone') }}</div>
                    </div>
                </a>
                <div class="btn_row">
                    <a class="btn_green" href="{{ route('form') }}">@lang('general.btn_get_loan')</a>
                    <a class="btn_red" href="https://my.creditline.kz/" target="_blank">@lang('general.btn_payment')</a>
                </div>
            </div>
        </div>
        <div class="footer_bottom">© 2010-{{ date('Y') }} @lang('general.footer.bottom_text')</div>
    </div>
</footer>
