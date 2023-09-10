<div class="block3">
    <div class="container">
        <div class="mainTitle">{{ $blockData->title }}</div>
        <div class="row">
            <div class="leftSide">
                <div class="input">
                    <label>@lang('general.block3.cost_title')</label>
                    <input class="allSum tengeInput" type="text" value="{{ $blockData->cost }}"
                           onkeypress="return AllowOnlyNumbers(event);">
                </div>
                <div class="range">
                    <input class="allSumRange" type="range"
                           min="{{ $blockData->cost_min }}"
                           max="{{ $blockData->cost_max }}"
                           value="{{ $blockData->cost }}" step="10000">
                    <div class="range_row">
                        <div class="min">{{ \App\Helpers\Common::getCostToString($blockData->cost_min) }}</div>
                        @if($blockData->cost_avg)
                            <div class="center">{{ \App\Helpers\Common::getCostToString($blockData->cost_avg) }}</div>
                        @endif
                        <div class="max">{{ \App\Helpers\Common::getCostToString($blockData->cost_max) }}</div>
                    </div>
                </div>
                <div class="input">
                    <label>@lang('general.block3.deadline_title')</label>
                    <input class="monthInput" type="text" value="{{ intval($blockData->deadline) }}"
                           onkeypress="return AllowOnlyNumbers(event);">
                </div>
                <div class="range">
                    <input class="monthRange" type="range"
                           min="{{ intval($blockData->deadline_min) }}"
                           max="{{ intval($blockData->deadline_max) }}"
                           value="{{ intval($blockData->deadline) }}" step="1">
                    <div class="range_row">
                        <div class="min">{{ $blockData->deadline_min }}</div>
                        @if($blockData->deadline_avg)
                            <div class="center">{{ $blockData->deadline_avg }}</div>
                        @endif
                        <div class="max">{{ $blockData->deadline_max }}</div>
                    </div>
                </div>
                @if(intval($blockData->cost) >= 2000000)
                    <div class="question">
                        <img src="/assets/images/icons/warning.svg" alt="warning-icon">
                        <div class="text">@lang('general.block3.gps_text')</div>
                        <img class="info" src="/assets/images/icons/question.svg" alt="question-icon">
                        <div class="absolute">@lang('general.block3.gps_desc')</div>
                    </div>
                @endif
            </div>
            <div class="box">
                <div class="box_inner">
                    <div class="row">
                        <div class="row_title">@lang('general.block3.cost_title')</div>
                        <div class="row_desc allSumRow">{{ $blockData->cost }} ₸</div>
                    </div>
                    <div class="row">
                        <div class="row_title">@lang('general.block3.payment_title')</div>
                        <div class="row_desc calcSumRow">{{ $blockData->payment }} ₸</div>
                    </div>
                    <div class="row">
                        <div class="row_title">@lang('general.block3.percent_title')</div>
                        <div class="row_desc percentRow">{{ $blockData->percent }} %</div>
                    </div>
                    <div class="row">
                        <div class="row_title">@lang('general.block3.type_repayment')</div>
                    </div>
                    <div class="row select_box">
                        <div class="select">
                            <div class="select_row">
                                <input type="radio" name="repaymentType" id="repaymentType1" value="1" checked>
                                <label for="repaymentType1">@lang('general.block3.repayment_type1')</label>
                                <div class="links_row" onclick="showTable()">@lang('general.block3.repayment_schedule')</div>
                            </div>
                            <div class="select_row">
                                <input type="radio" name="repaymentType" id="repaymentType2" value="2">
                                <label for="repaymentType2">@lang('general.block3.repayment_type2')</label>
                                <div class="links_row" onclick="showTable()">@lang('general.block3.repayment_schedule')</div>
                            </div>
                        </div>
                    </div>
                </div>
                <picture class="box_img">
                    @if($photo = \App\Helpers\Common::getWebpFormat($blockData, 'image'))
                        <source srcset="{{ $photo }}" type="image/webp">
                        <source srcset="{{ $photo }}" type="image/pjp2">
                    @endif
                    <img src="{{ \App\Helpers\Common::getImage($blockData->image) }}" alt="image-calc" loading="lazy">
                </picture>
            </div>
        </div>
    </div>
</div>
