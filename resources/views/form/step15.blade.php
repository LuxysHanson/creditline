<div class="container">
    <div class="img"><img src="/assets/images/icons/g2232.svg" alt="g2232-icon"></div>

    @php( $summa = (int) str_replace(' ', '', $application->loan['summa'] ?? ''))
    @if($summa<2000000) <div class="title">@lang('form.step15.title')</div>@endif
    @if($summa>=2000000)    <div class="title">@lang('form.step15.title2')</div> @endif
</div>
