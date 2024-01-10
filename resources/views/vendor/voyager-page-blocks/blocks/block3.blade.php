<div class="block3" id="third-block">
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
                    <label class="d-line-1">@lang('general.block3.deadline_title_1')</label>
                    <label class="d-line-2" style="display: none">@lang('general.block3.deadline_title_2')</label>
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
                            <div class="center month-center">{{ $blockData->deadline_avg }}</div>
                        @endif
                        <div class="max">{{ $blockData->deadline_max }}</div>
                    </div>
                </div>
                <div class="question" id="gps"><img src="/assets/images/icons/warning.svg" alt="">
                    <div class="text">@lang('general.block3.gps_text')</div><img class="info" src="/assets/images/icons/question.svg" alt="">
                    <div class="absolute info-5">@lang('general.block3.gps_desc')</div>
                </div>
                <?/*
                @if(intval($blockData->cost) >= 2000000)
                    <div class="question">
                        <img src="/assets/images/icons/warning.svg" alt="warning-icon">
                        <div class="text">@lang('general.block3.gps_text')</div>
                        <img class="info" src="/assets/images/icons/question.svg" alt="question-icon">
                        <div class="absolute">@lang('general.block3.gps_desc')</div>
                    </div>
                @endif
*/?>
            </div>
            <div class="box">
                <div class="box_inner">
                    <div class="row">
                        <div class="row_title">@lang('general.block3.cost_title')</div>
                        <div class="row_desc allSumRow">{{ number_format($blockData->cost, 0, ',', ' ') }} ₸</div>
                    </div>
                    <div class="row">
                        <div class="row_title">@lang('general.block3.payment_title')</div>
                        <div class="row_desc calcSumRow">{{ number_format($blockData->payment, 0, ',', ' ') }} ₸</div>
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
                                <label for="repaymentType1"  onclick="showTable(1)">@lang('general.block3.repayment_type1')</label>
                                <div class="links_row" onclick="showTable(1)">@lang('general.block3.repayment_schedule')</div>
                            </div>
                            <div class="select_row">
                                <input type="radio" name="repaymentType" id="repaymentType2" value="2">
                                <label for="repaymentType2"  onclick="showTable(2)">@lang('general.block3.repayment_type2')</label>
                                <div class="links_row" onclick="showTable(2)">@lang('general.block3.repayment_schedule')</div>
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

<div class="table table-repaymentType1">
    <div class="table_head">
        <div class="text">График погашения</div><img src="/assets/images/icons/union.svg" alt="" onclick="closeTable(1)">
    </div>
    <div class="container">
        <div class="table_desc">
            <p>Для продления срока микрокредита необходимо своевременно оплатить ежемесячный платеж (вознаграждение) <strong class="calc-pay">37 200 ₸</strong>. </p>
            <p><br></p>
            <p> <strong>При уплате ежемесячного платежа (вознаграждения) сумма основного долга не погашается!</strong></p>
        </div>
        <!--div class="cell">
            <table>
                <thead
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Дата</th>
                    <th scope="col">Ежемесячный платеж</th>
                    <th scope="col">Проценты</th>
                    <th scope="col">Основной долг</th>
                    <th scope="col">Остаток основного долга</th>
                </tr>
                </thead>
                <tbody>
                <tr><td>1</td><td>9.11.2023</td><td>37 200 ₸</td><td>3.72 % </td><td>37 200 ₸</td><td>37 200 ₸</td></tr><tr><td>2</td><td>9.12.2023</td><td>37 200 ₸</td><td>3.72 % </td><td>37 200 ₸</td><td>0 ₸</td></tr></tbody>
            </table>
        </div-->
        <div class="table_desc table_desc2">
            <h3>Плюсы процентного платежа:</h3>
            <ol>
                <li>Срок займа регулируете Вы сами.</li>
                <li>Микрокредит может быть частично погашен в любой момент и платеж по микрокредиту будет уменьшен.</li>
                <li>Сумма микрокредита <strong class="calc-allpay">1 000 000 ₸</strong> может быть погашена в любой момент без штрафных санкций.</li>
            </ol>
        </div>
    </div>
    <div class="table_footer">
        <div class="container">
            <p>Ежемесячно оплачивается только процент за пользование микрокредитом, а сумма основного долга погашается либо частично закрывается в любой момент на Ваше усмотрение. ГЭСВ до 56%</p>
        </div>
    </div>
</div>
<div class="table table-repaymentType2">
    <div class="table_head">
        <div class="text">График погашения</div><img src="./assets/images/icons/union.svg" alt="" onclick="closeTable(2)">
    </div>
    <div class="container">
        <div class="cell">
            <table>
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Дата</th>
                    <th scope="col">Ежемесячный платеж</th>
                    <th scope="col">Проценты</th>
                    <th scope="col">Основной долг</th>
                    <th scope="col">Остаток основного долга</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1.</td>
                    <td>01.08.2023</td>
                    <td>230 640 ₸</td>
                    <td>230 640 ₸</td>
                    <td>0 ₸</td>
                    <td>6 200 000 ₸</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>01.08.2023</td>
                    <td>230 640 ₸</td>
                    <td>230 640 ₸</td>
                    <td>0 ₸</td>
                    <td>6 200 000 ₸</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="table_desc2">
            <h3>Плюсы аннуитетного платежа:</h3>
            <ol>
                <li>Простота оплаты: Вы просто выплачиваете каждый месяц сумму, размер которой не меняется.</li>
                <li>Индивидуальный график погашения: Вы четко знаете, через какой срок Вы погасите микрокредит.</li>
                <li>В любой момент можно погасить микрокредит досрочно без штрафных санкций.</li>
            </ol>
        </div>
    </div>
    <div class="table_footer">
        <div class="container">
            <p>Ежемесячно оплачивается только процент за пользование микрокредитом, а сумма основного долга погашается либо частично закрывается в любой момент на Ваше усмотрение. ГЭСВ до 56%</p>
        </div>
    </div>
</div>
