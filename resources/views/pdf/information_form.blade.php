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
    <div style="clear:both;">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:normal;"><img src="https://myfiles.space/user_files/175332_31c7bb70f49aab29/1694955715_--------creditline/1694955715_--------creditline-1.png" width="210" height="38" alt=""><br></p>
    </div>
    @php($date = \Carbon\Carbon::make($application->created_at))
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:150%;"><strong><span style="">Приложение №1&nbsp;</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:150%;"><strong><span style="">к Правилам внутреннего контроля</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><strong><span style="">г. Алматы</span></strong><strong><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span style="width:58.76pt;  display:inline-block;">&nbsp;</span></strong><strong><span style="width:42.5pt;  display:inline-block;">&nbsp;</span></strong><strong><span style="width:5.7pt;  display:inline-block;">&nbsp;</span></strong><strong><span style="width:8.2pt;  display:inline-block;">&nbsp;</span></strong><strong><span style="width:36pt;  display:inline-block;">&nbsp;</span></strong><strong><span style="">Дата заполнения:&nbsp;</span></strong><strong><span style="">&laquo;</span></strong><strong><span style="">{{ $date->day }}</span></strong><strong><span style="">&raquo;&nbsp;{{ \App\Enums\MonthEnum::getInTheGenetiveCase($date->month) }}</span></strong><strong><span style="">&nbsp;{{ $date->year }}г.</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><strong><span style="">&nbsp;</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal;"><strong><span style="">Форма сведений о бенефициарных собственниках клиента ТОО &laquo;Ломбард &laquo;CreditLine&raquo;</span></strong><strong><span style="">&nbsp;</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:normal;"><span style="">&nbsp;</span></p>
    @php($birth_date = $application->client['birth_date'] ?? '')
    @php($date_doc = $application->client['date_doc'] ?? '')
    @php($issued_by_doc = $application->client['issued_by_doc'] ?? '')
    @php($tech_date = $application->car['tech_date'] ?? '')
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><strong><u><span style="">1.Заемщик</span></u></strong><span style="">:&nbsp;</span><strong>
            <span style="">{{ ($application->client['patronymic'] ?? '') .', '. ($application->client['name'] ?? '') .', '. ($application->client['surname'] ?? '') }}</span></strong>
        <span style="">, {{ \Carbon\Carbon::make($birth_date)->format('d.m.Y') }}</span><span style="">&nbsp;г.р., удостоверение личности №&nbsp;</span>
        <span style="">{{ $application->client['number_doc'] ?? '' }},</span><span style="">&nbsp;выданное М</span>
        <span style="">{{ $application->getIssuedByDocument()[$issued_by_doc] ?? '' }}</span><span style="">&nbsp;РК от&nbsp;</span>
        <span style="">{{ \Carbon\Carbon::make($date_doc)->format('d.m.Y') }}</span><span style="">&nbsp;г., проживающий (-ая) по адресу: Республика Казахстан,&nbsp;</span>
        <span style="">{{ $application->address['locality'] ?? '' }},</span><span style="">&nbsp;</span>
        <span style="">{{ $application->address['street'] ?? '' }},</span><span style="">&nbsp;дом №</span>
        <span style="">{{ $application->address['number_home'] ?? '' }}</span><span style="">, к</span><span style="">.{{ $application->address['apartment'] ?? '' }},</span><span style="">&nbsp;ИИН&nbsp;</span><span style="">{{ $application->loan['iin'] ?? '' }}.</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%;"><strong><span style="">&nbsp;</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><strong><u><span style="">2.Предмет залога:</span></u></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><span style="">Марка, модель:&nbsp;</span><strong><span style="">{{ ($application->car['brand'] ?? '') .', '. ($application->car['model'] ?? '') }}</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><span style="">Регистрационный №&nbsp;</span><strong><span style="">{{ ($application->car['tech_password'] ?? '') }}</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><span style="">Год выпуска ТС&nbsp;</span><strong><span style="">{{ ($application->car['year'] ?? '') }}</span></strong><span style="">&nbsp;год</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><span style="">Идентификационный №&nbsp;</span><strong><span style="">{{ ($application->car['number'] ?? '') }}</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><span style="">Цвет:&nbsp;</span><strong><span style="">{{ ($application->car['color'] ?? '') }}</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><span style="">Право собственности Залогодателя на Предмет залога подтверждается следующими оригиналами документов:</span></p>
    <p style="margin-top:0pt; margin-bottom:10pt; text-align:justify; line-height:normal;"><span style="">- свидетельство о регистрации транспортного средства,&nbsp;</span><strong><span style="">{{ ($application->car['tech_password'] ?? '') }}</span></strong><strong><span style="">&nbsp;</span></strong><span style="">№</span><strong><span style="">&nbsp;</span></strong><strong><span style="">{{ ($application->car['number'] ?? '') }}</span></strong><strong><span style="">&nbsp;</span></strong><span style="">выданное&nbsp;</span><strong><span style="">{{ \Carbon\Carbon::make($tech_date)->format('d.m.Y') }}</span></strong><strong><span style="">&nbsp;</span></strong><span style="">года.</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><strong><u><span style=" font-size:11pt;">3.Цель получения микрокредита:</span></u></strong><strong><span style=" font-size:11pt;">&nbsp;&nbsp;</span></strong><em><u><span style="">Потребительский.</span></u></em></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><span style="">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:normal;"><span style="">4. Являетесь ли Вы публичным должностным лицом и/или причастны к публичному должностному лицу, его супруге (супругу) и близким родственникам: ДА</span><span style="">&nbsp;&nbsp;</span><img src="https://myfiles.space/user_files/175332_31c7bb70f49aab29/1694955715_--------creditline/1694955715_--------creditline-2.png" width="26" height="22" alt=""><span style="">&nbsp;&nbsp;</span><span style="">НЕТ&nbsp;</span><img src="https://myfiles.space/user_files/175332_31c7bb70f49aab29/1694955715_--------creditline/1694955715_--------creditline-3.png" width="25" height="23" alt=""></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:normal;"><span style="">&nbsp;</span></p>
    <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
        <tbody>
        <tr>
            <td colspan="4" style="border-style:solid; border-width:0.75pt 1pt 1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Порядок осуществления бенефициарным собственником контроля над клиентом субъекта финансового мониторинга *</span></p>
            </td>
        </tr>
        <tr style="height:37.8pt;">
            <td style="border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">1.</span></p>
            </td>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Более 25% долей участия в уставном капитале/владение более 25% размещенных и голосующих акций</span></p>
            </td>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Да</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="https://myfiles.space/user_files/175332_31c7bb70f49aab29/1694955715_--------creditline/1694955715_--------creditline-4.png" width="27" height="22" alt=""></p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Нет</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="https://myfiles.space/user_files/175332_31c7bb70f49aab29/1694955715_--------creditline/1694955715_--------creditline-5.png" width="26" height="24" alt=""></p>
            </td>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td rowspan="2" style="border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; vertical-align:middle;">
                <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt;">&nbsp;</p>
            </td>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Осуществление контроля над клиентом</span></p>
            </td>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Да</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="https://myfiles.space/user_files/175332_31c7bb70f49aab29/1694955715_--------creditline/1694955715_--------creditline-4.png" width="27" height="22" alt=""></p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Нет</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="https://myfiles.space/user_files/175332_31c7bb70f49aab29/1694955715_--------creditline/1694955715_--------creditline-6.png" width="27" height="25" alt=""></p>
            </td>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Лицо, в интересах которого совершаются операции с деньгами и (или) иным имуществом</span></p>
            </td>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Да</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="https://myfiles.space/user_files/175332_31c7bb70f49aab29/1694955715_--------creditline/1694955715_--------creditline-4.png" width="27" height="22" alt=""></p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Нет</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="https://myfiles.space/user_files/175332_31c7bb70f49aab29/1694955715_--------creditline/1694955715_--------creditline-7.png" width="28" height="26" alt=""></p>
            </td>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">&nbsp;</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">Данные бенефициарного собственника клиента субъекта финансового мониторинга*</span></p>
            </td>
        </tr>
        <tr>
            <td style="border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">2.</span></p>
            </td>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Фамилия</span></p>
            </td>
            <td colspan="2" style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">3.</span></p>
            </td>
            <td style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Имя</span></p>
            </td>
            <td colspan="2" style="border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width:15pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">4.</span></p>
            </td>
            <td style="width:249.35pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Отчество (при наличии)</span></p>
            </td>
            <td colspan="2" style="width:153pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width:15pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">5.</span></p>
            </td>
            <td style="width:249.35pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Дата рождения</span></p>
            </td>
            <td colspan="2" style="width:153pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width:15pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">6.</span></p>
            </td>
            <td style="width:249.35pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Страна резидентства**</span></p>
            </td>
            <td colspan="2" style="width:153pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width:15pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">7.</span></p>
            </td>
            <td style="width:249.35pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Индивидуальный идентификационный номер (ИИН)</span></p>
            </td>
            <td colspan="2" style="width:153pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width:15pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">8.</span></p>
            </td>
            <td style="width:249.35pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Номер документа, удостоверяющего личность</span></p>
            </td>
            <td colspan="2" style="width:153pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width:15pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">9.</span></p>
            </td>
            <td style="width:249.35pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Когда и кем выдан</span></p>
            </td>
            <td colspan="2" style="width:153pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width:15pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:7.9pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="">10.</span></p>
            </td>
            <td style="width:249.35pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="">Иная информация (при наличии)</span></p>
            </td>
            <td colspan="2" style="width:153pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:7.9pt; padding-left:8.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;"><span style="">&nbsp;</span></p>
            </td>
        </tr>
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-bottom:8pt; page-break-inside:avoid; line-height:50%;"><a name="_bookmark0"></a><span style="">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:8pt; page-break-inside:avoid; line-height:normal;"><strong><span style="">&nbsp;</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:8pt; page-break-inside:avoid; line-height:normal;"><strong><span style="">&nbsp;</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:8pt; page-break-inside:avoid; line-height:normal;"><strong><span style="">&nbsp;</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:8pt; page-break-inside:avoid; line-height:normal;"><strong><span style="">&nbsp;</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:8pt; page-break-inside:avoid; line-height:normal;"><strong><span style="">Ф.И.О. заемщика:&nbsp;</span></strong><strong><span style="">{{ ($application->client['patronymic'] ?? '') .', '. ($application->client['name'] ?? '') .', '. ($application->client['surname'] ?? '') }}</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:8pt; page-break-inside:avoid; line-height:normal;"><strong><span style="">ИИН:&nbsp;</span></strong><strong><span style="">{{ $application->loan['iin'] ?? '' }}</span></strong></p>
    <p style="margin-top:4.7pt; margin-right:28.65pt; margin-bottom:8pt; text-align:justify; line-height:normal;"><span style="">Подписано Заемщиком посредством многофакторной аутентификации</span></p>
    @php($sendSms = $application->sendSms->where('step', 9)->first() ?? null)
    <p style="margin-top:4.7pt; margin-right:28.65pt; margin-bottom:8pt; text-align:justify; line-height:normal;"><span style="">Подпись (SMS код) :&nbsp;</span><span style="">{{ $sendSms->code ?? '' }}</span></p>
    <div style="clear:both;">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:12pt;"><span style="">&nbsp;</span></p>
    </div>
</div>
</body>
</html>
