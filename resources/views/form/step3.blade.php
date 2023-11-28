<div class="container">
        <div class="img"><img src="./assets/images/icons/checklist.svg" alt=""></div>
        <div class="title">@lang('form.step3.title')</div>
        <div class="input">
            <div class="input_title">@lang('form.step3.iin')</div>
                <div class="input_input">
                    <input class="a_iin" type="iin" placeholder="XXX-XXX-XXX-XXX" name="iin" autocomplete="off"
                           value="{{ $application->loan['iin'] ?? '' }}">
                </div>
        </div>
        <div class="calculate">
            <div class="input">
                <label>@lang('general.block3.cost_title')</label>
                <input class="allSum tengeInput" type="text" value="{{ preg_replace("/[^0-9]+/", "", $application->loan['summa'] ?? $blockData->cost) ?? $blockData->cost }}"
                       onkeypress="return AllowOnlyNumbers(event);">
            </div>
            <div class="range">
                <input class="allSumRange" type="range"
                       min="{{ $blockData->cost_min }}"
                       max="{{ $blockData->cost_max }}"
                       value="{{ $application->loan['summa'] ?? $blockData->cost }}" step="10000">
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
                @php($deadline = $application->loan['deadline'] ?? $blockData->deadline)
                <input class="monthInput" type="text" value="{{ intval($deadline) ?? intval($blockData->deadline) }}"
                       onkeypress="return AllowOnlyNumbers(event);">
            </div>

            <div class="range mount">
                <input class="monthRange" type="range"
                       min="{{ intval($blockData->deadline_min) }}"
                       max="{{ intval($blockData->deadline_max) }}"
                       value="{{ intval($deadline) ?? intval($blockData->deadline) }}" step="1">
                <div class="range_row">
                    <div class="min">{{ $blockData->deadline_min }}</div>
                    @if($blockData->deadline_avg)
                        <div class="center">{{ $blockData->deadline_avg }}</div>
                    @endif
                    <div class="max">{{ $blockData->deadline_max }}</div>
                </div>
            </div>

            @php($cost = $application->loan['summa'] ?? $blockData->cost)
            @php($clearCost = preg_replace("/[^0-9]+/", "", $cost))
                <div class="question" id="gps" @if(intval($clearCost) >= 2000000)style="display: flex"    @endif>
                    <img src="/assets/images/icons/warning.svg" alt="warning-icon">
                    <div class="text">@lang('general.block3.gps_text')</div>
                    <img class="info" src="/assets/images/icons/question.svg" alt="question-icon">
                    <div class="absolute info-1">@lang('general.block3.gps_desc')</div>
                </div>


            <div class="select">
                @php($type = $application->loan['repayment_type'] ?? 1)
                <div class="title">@lang('general.block3.type_repayment')</div>
                <div class="select_row type_repayment">
                    <input type="radio" name="repaymentType" id="repaymentType1" value="1"  class="selectPayment block3"
                           @if($type == 1) checked @endif>
                    <label for="repaymentType1">@lang('general.block3.repayment_type1')</label>
                    <div class="links_row" onclick="showTable(1)">@lang('general.block3.repayment_schedule')</div>
                </div>
                <div class="select_row type_repayment">
                    <input type="radio" name="repaymentType" id="repaymentType2" value="2"  class="selectPayment block3"
                           @if($type == 2) checked @endif>
                    <label for="repaymentType2">@lang('general.block3.repayment_type2')</label>
                    <div class="links_row" onclick="showTable(2)">@lang('general.block3.repayment_schedule')</div>
                </div>
            </div>

            <div class="monthlyPay">
                <div class="monthlyPay_title">@lang('general.block3.payment_title')</div>
                <div class="monthlyPay_sum calcSumRow">{{ $blockData->payment }} ₸</div>
            </div>
        </div>

        <div class="input">
            <div class="input_title">@lang('form.step3.payment')</div>
            <div class="input_input">
                <input class="tengeInput monthlyIncome" type="text" name="monthlyIncome" value="{{ $application->loan['payment'] ?? '0'}}"
                       onkeypress="return AllowOnlyNumbers(event);" autocomplete="off">
            </div>
        </div>

        <div class="input">
            <div class="question">
                <div class="input_title">@lang('form.step3.additional_phone')</div><img class="info" src="./assets/images/icons/question.svg" alt="">
                <div class="absolute info-2">@lang('general.block3.addphone_desc')</div>
            </div>
            <div class="input_input">
                <input class="a_phoneNumber2" type="tel2" placeholder="+7 (___) ___-__-__"
                       name="phoneNumber2" autocomplete="off" value="{{ $application->loan['additional_phone'] ?? '' }}">
            </div>
        </div>

        <div class="input">
            <div class="input_title">@lang('form.step3.email')</div>
            <div class="input_input">
                <input class="anketEmail" type="email" placeholder="" name="email" autocomplete="off"
                       value="{{ $application->loan['email'] ?? '' }}">
            </div>
        </div>

        <div class="input">
            <div class="question">
                <div class="input_title">@lang('form.step3.iban')</div><img class="info" src="./assets/images/icons/question.svg" alt="">
                <div class="absolute info-3">@lang('general.block3.iban_desc')</div>
            </div>
            <div class="input_input">
                <input class="a_iban" type="iban" placeholder="KZ**************" name="iban" autocomplete="off"
                       value="{{ $application->loan['iban'] ?? '' }}">
            </div>
        </div>

        <div class="btn_row">
            <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=2') }}">
                @lang('form.back_btn')
            </div>
            <div class="btn btn_green infoBTN" data-id="{{ $application->id }}" data-key="loan" data-step="4">
                @lang('form.continue_btn')
                <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
            </div>
        </div>
</div>

<div class="table table-repaymentType1">
    <div class="table_head">
        <div class="text">График погашения</div><img src="/assets/images/icons/union.svg" alt="" onclick="closeTable(1)">
    </div>
    <div class="container">
        <div class="table_desc">
            <p>Для продления срока микрокредита необходимо своевременно оплатить ежемесячный платеж (вознаграждение) <strong class="calc-pay">{{ $blockData->payment }} ₸</strong>. </p>
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