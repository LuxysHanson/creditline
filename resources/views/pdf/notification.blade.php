<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CREDITLINE.KZ PDF DOCUMENT</title>
    <style>
        @page { margin: 30px; }
        body { font-family: inter, sans-serif; }
    </style>
</head>
<body>
<div>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:28pt;"><strong>ТОО &laquo;Ломбард &laquo;CreditLine&raquo;</strong></p>
    <div style="border-bottom:1.5pt solid #000000; clear:both;">
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center;">Тел.: +7 (727) 222 31 31, +7&nbsp;701&nbsp;222 33 19</p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; padding-bottom:1pt;">г. Алматы, ул. Ауэзова, дом 163 А, н.п. 207, creditline@creditline.kz</p>
    </div>
    <p style="margin-top:0pt; margin-bottom:0pt;"><span style="font-family:'Arial Narrow';">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt;">Исх. № ______________</p>
    @php($date = \Carbon\Carbon::make($application->created_at))
    <p style="margin-top:0pt; margin-bottom:0pt;">От <span style="">{{ $date->day }} {{ \App\Enums\MonthEnum::getInTheGenetiveCase($date->month) }} {{ $date->year }}</span> года</p>
    <p style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
    <p style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt;"><strong>Начальнику Управления административной полиции&nbsp;</strong></p>
    <p style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt;"><strong>по г. Алматы</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    <p style="margin-top:0pt; margin-left:132pt; margin-bottom:0pt; text-indent:45pt;"><strong>УВЕДОМЛЕНИЕ&nbsp;</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-indent:45pt; text-align:justify;">&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-indent:45pt; text-align:justify;">Просим Вас зарегистрировать залог транспортного средства со следующими данными о залоге:</p>
    <ol type="1" style="margin:0pt; padding-left:0pt;">
        @php($date_doc = $application->client['date_doc'] ?? '')
        @php($issued_by_doc = $application->client['issued_by_doc'] ?? '')
        @php($tech_date = $application->car['tech_date'] ?? '')
        <li style="margin-left:41pt; text-align:justify; padding-left:13pt;">Залогодатель (Заемщик) &ndash; <span style="">{{ ($application->client['patronymic'] ?? '') .', '. ($application->client['name'] ?? '') .', '. ($application->client['surname'] ?? '') }}</span>, ИИН
            <span style="">{{ $application->loan['iin'] ?? '' }},</span> удостоверение личности №
            <span style="">{{ $application->client['number_doc'] ?? '' }},</span> выдано {{ $application->getIssuedByDocument()[$issued_by_doc] ?? '' }} от
            <span style="">&quot;{{ \Carbon\Carbon::make($date_doc)->format('d') }}&quot;</span>
            <span style="">{{ \App\Enums\MonthEnum::getInTheGenetiveCase(\Carbon\Carbon::make($date_doc)->format('m')) }}</span> {{ \Carbon\Carbon::make($date_doc)->format('Y') }}г., проживающий (-ая) по адресу: Республика Казахстан,
            {{ $application->address['locality'] ?? '' }}, улица
            <span style="">{{ $application->address['street'] ?? '' }}.</span><strong>&nbsp;</strong></li>
        <li style="margin-left:41pt; text-align:justify; padding-left:13pt;">Залогодержатель &ndash; ТОО &laquo;Ломбард &laquo;CreditLine&raquo;, БИН 100740008000, г. Алматы, ул. Ауэзова, дом 163А, н. п. 207.</li>
        <li style="margin-left:41pt; text-align:justify; padding-left:13pt;">Документ, содержащий условия о залоге: Залоговый билет № <span style="">_________________</span> от
            <span style="">{{ $date->format('d.m.Y') }}</span> года (далее &ndash; Залоговый билет), заключенный в г. Алматы.</li>
        <li style="margin-left:41pt; text-align:justify; padding-left:13pt;">Сведения о предмете залога:</li>
    </ol>
    <p style="margin-top:0pt; margin-left:72pt; margin-bottom:0pt; text-align:justify;">Марка, модель: <span style="">{{ ($application->car['brand'] ?? '') .', '. ($application->car['model'] ?? '') }}</span></p>
    <p style="margin-top:0pt; margin-left:72pt; margin-bottom:0pt; text-align:justify;">Государственный регистрационный № <span style="">{{ ($application->car['tech_password'] ?? '') }}</span></p>
    <p style="margin-top:0pt; margin-left:72pt; margin-bottom:0pt; text-align:justify;">Идентиф. № <span style="">{{ ($application->car['number'] ?? '') }}</span></p>
    <p style="margin-top:0pt; margin-left:72pt; margin-bottom:0pt;">Цвет: <span style="">{{ ($application->car['color'] ?? '') }}</span></p>
    <p style="margin-top:0pt; margin-left:72pt; margin-bottom:0pt; text-align:justify;">Свидетельство о регистрации транспортного средства, серия <span style="">{{ ($application->car['vin'] ?? '') }}</span> выданное
        <span style="">{{ \Carbon\Carbon::make($tech_date)->format('d.m.Y') }}</span> года;</p>
    <ol start="5" type="1" style="margin:0pt; padding-left:0pt;">
        <li style="margin-left:41pt; text-align:justify; padding-left:13pt;">Денежный эквивалент обязательства, обеспеченного залогом <span style="">{{ $application->loan['summa'] ?? '' }}</span>.</li>
        <li style="margin-left:41pt; text-align:justify; padding-left:13pt;">Срок залога &ndash; 30 дней.</li>
        <li style="margin-left:41pt; text-align:justify; padding-left:13pt;">Предмет залога остаётся во владении и пользовании Залогодателя.</li>
    </ol>
    <p style="margin-top:0pt; margin-bottom:0pt; text-indent:45pt; text-align:justify;">&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify;">Приложение:</p>
    <ol type="1" style="margin:0pt; padding-left:0pt;">
        <li style="margin-left:32pt; text-align:justify; padding-left:4pt;">Квитанция об оплате сбора за государственную регистрацию залога движимого имущества.</li>
    </ol>
    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    <table cellspacing="0" cellpadding="0" style="width:511.85pt; border-collapse:collapse;">
        <tbody>
        <tr>
            <td style="width:489.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <table cellspacing="0" cellpadding="0" style="width:489.95pt; border-collapse:collapse;">
                    <tbody>
                    <tr>
                        <td style="width:468.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                            <table cellspacing="0" cellpadding="0" style="width:491.4pt; border:0.75pt solid #000000; border-collapse:collapse;">
                                <tbody>
                                <tr style="height:110.4pt;">
                                    <td style="width:231.8pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">Залогодержатель:</p>
                                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">ТОО &laquo;Ломбард &laquo;CreditLine&raquo;&nbsp;</p>
                                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&nbsp;</p>
                                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&nbsp;</p>
                                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">Директор</p>
                                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">Казимиров В.Б. __________________</p>
                                    </td>
                                    <td style="width:237.25pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">Ф.И.О. Заёмщика:</p>
                                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; page-break-inside:avoid; font-size:12pt;"><u><span style="">{{ ($application->client['patronymic'] ?? '') .', '. ($application->client['name'] ?? '') .', '. ($application->client['surname'] ?? '') }}</span></u></p>
                                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; page-break-inside:avoid; font-size:12pt;">&nbsp;</p>
                                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; page-break-inside:avoid; font-size:12pt;">ИИН <span style="">{{ $application->loan['iin'] ?? '' }}</span></p>
                                        <p style="margin-top:4.7pt; margin-right:28.65pt; margin-bottom:0pt; text-align:center; line-height:105%; font-size:12pt;">Подписано Заемщиком посредством многофакторной аутентификации</p>
                                        @php($sendSms = $application->sendSms->where('step', 14)->first() ?? null)
                                        <p style="margin-top:0pt; margin-right:28.65pt; margin-bottom:0pt; text-align:center; font-size:12pt;">Подпись (SMS код): <span style="">{{ $sendSms->code ?? '' }}</span></p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><br></p>
                        </td>
                        <td style="width:0.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&nbsp;</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><br></p>
            </td>
            <td style="width:0.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&nbsp;</p>
            </td>
        </tr>
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    <div style="clear:both;">
        <p style="margin-top:0pt; margin-bottom:0pt;"><img src="https://myfiles.space/user_files/175341_1b766013520f46bd/1694961113_-------/1694961113_--------1.png" width="243" height="45" alt=""></p>
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    </div>
</div>
</body>
</html>
