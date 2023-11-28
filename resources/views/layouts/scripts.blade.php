<script src="{{ asset('/assets/js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('/assets/js/slick.min.js') }}" defer></script>
<script src="{{ asset('/assets/js/baguetteBox.min.js') }}" defer></script>
<script src="{{ asset('/assets/js/wow.min.js') }}" defer></script>
<script src="{{ asset('/assets/js/cacheJS.min.js') }}" defer></script>
<script src="{{ asset('/assets/js/iincheck.min.js') }}" defer></script>
<script src="{{ asset('/assets/js/date-ru-RU.js') }}" defer></script>
<script src="{{ asset('/assets/js/script.js?v='. time()) }}" defer></script>
<script src="{{ asset('/assets/js/mask.js?v='. time()) }}" defer></script>
<script type="text/javascript">
    var app = {
        token: "{{ csrf_token() }}",
        validateMsg: '{{ __('general.messages.validate') }}',
        errorMsg: '{{ __('general.messages.error') }}',
        successMsg: '{{ __('general.messages.success') }}',
    }
</script>

@yield('scripts')

<script src="{{ asset('/assets/js/ajax.js?v='. time()) }}"></script>
