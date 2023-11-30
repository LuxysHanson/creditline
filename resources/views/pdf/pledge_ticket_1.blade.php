<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CREDITLINE.KZ PDF DOCUMENT</title>
    <style>
        @page {
            margin: 30px;
        }

        body {
            font-family: 'DejaVu Sans', inter, sans-serif;
        }
    </style>
</head>
<body>
<style type="text/css">
    .awlist1 {
        list-style: none;
        counter-reset: awlistcounter8_2 3
    }

    .awlist1 > li:before {
        content: '1.8.' counter(awlistcounter8_2) '.';
        counter-increment: awlistcounter8_2
    }

    .awlist2 {
        list-style: none;
        counter-reset: awlistcounter6_0
    }

    .awlist2 > li:before {
        content: counter(awlistcounter6_0) '.';
        counter-increment: awlistcounter6_0
    }

    .awlist3 {
        list-style: none;
        counter-reset: awlistcounter6_1
    }

    .awlist3 > li:before {
        content: counter(awlistcounter6_0) '.' counter(awlistcounter6_1) '.';
        counter-increment: awlistcounter6_1
    }

    .awlist4 {
        list-style: none;
        counter-reset: awlistcounter6_1 1
    }

    .awlist4 > li:before {
        content: '1.' counter(awlistcounter6_1) '.';
        counter-increment: awlistcounter6_1
    }

    .awlist5 {
        list-style: none;
        counter-reset: awlistcounter7_0
    }

    .awlist5 > li:before {
        content: counter(awlistcounter7_0) ')';
        counter-increment: awlistcounter7_0
    }
</style>
<div>
    <div style="clear:both;">
        <p style="margin-top:0pt; margin-bottom:0pt;"><strong><em>Көлік құралын басқару
                    құқығымен&nbsp;</em></strong><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong><strong><em>С
                    правом управления транспортным средством</em></strong></p>
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    </div>
    <table cellspacing="0" cellpadding="0" style="border:0.75pt solid #000000; border-collapse:collapse;">
        <tbody>
        <tr>
            @php($date = \Carbon\Carbon::now('Asia/Almaty'))
            <td style=" border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-left:28.35pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                    <strong>&nbsp;Кепіл билеті №&nbsp;</strong><strong><span style="">{{ $application->getNumberDoc() }}</span></strong></p>

                </strong></p>
                <p style="margin-top:0pt; margin-left:28.35pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-left:1.65pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    Алматы қ.&nbsp;&nbsp; <span
                        style="">{{ $date->day }} {{ \App\Enums\MonthEnum::getInTheGenetiveCase($date->month, 'kz') }} {{ $date->year }}</span>
                    жыл</p>
                <p style="margin-top:0pt; margin-left:1.65pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-left:1.65pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    Бұдан әрі &laquo;Ұйым&raquo; деп аталатын <strong>&laquo;Ломбард &laquo;CreditLine&raquo;
                        ЖШС</strong>, БСН 100740008000, Жарғы негізінде әрекет ететін Директор В.Б.Казимиров тұлғасында,
                    бір тараптан, және</p>
                <p style="margin-top:0pt; margin-left:1.65pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    бұдан әрі &laquo;Қарыз алушы&raquo; деп аталатын <strong><span
                            style="">{{ $application->getFullName() }}</span></strong>,
                    ЖСН
                    <span style="">{{ $application->getIin() }}</span>, екінші тараптан, бірге &laquo;Тараптар&raquo;,
                    ал жеке-жеке &laquo;Тарап&raquo; деп аталатын тараптар, төмендегі туралы осы Микрокредитті (кепілмен
                    қамтамасыз етілген) беру туралы <strong>Кепіл билетті&nbsp;</strong>(бұдан әрі - <strong>Кепіл
                        билет</strong>) жасады:&nbsp; <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                </p>
            </td>
            <td style=" border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>Залоговый билет
                        №&nbsp;</strong><strong><span style="">{{ $application->getNumberDoc() }}</span></strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>&nbsp;</strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">г. Алматы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span
                        style="">{{ $date->day }} {{ \App\Enums\MonthEnum::getInTheGenetiveCase($date->month, 'ru') }} {{ $date->year }}</span>
                    года</p>
                <p style="margin-top:0pt; margin-left:1.75pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    <strong>&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>ТОО &laquo;Ломбард
                        &laquo;CreditLine&raquo;</strong> далее именуемый &laquo;Организация&raquo;, БИН 100740008000, в
                    лице Директора Казимирова В.Б., действующего на основании Устава, с одной стороны и</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><span
                        style="">{{ $application->getFullName() }}</span>,
                    ИИН
                    <span style="">{{ $application->getIin() }}</span>, далее именуемый &laquo;Заёмщик&raquo; с
                    другой стороны, совместно именуемые &laquo;Стороны&raquo;, а по отдельности &laquo;Сторона&raquo;,
                    заключили настоящий Залоговый билет (далее &ndash; Залоговый билет) о нижеследующем:&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>1. Мәні және
                        жалпы шарттары</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.1. Ұйым Қарыз
                    алушыға Микрокредитті&nbsp; Кепіл билетінің 1.7-тармағында&nbsp; көрсетілген көлік құралының
                    кепілімен береді, ал Қарыз алушы Ұйымға Микрокредитті уақытылы қайтаруға және осы Кепіл билетінің
                    тәртібі мен шарттары бойынша тиесілі сыйақыны, тұрақсыздық айыбын (айыппұлдарды, өсімпұлдарды)
                    төлеуді&nbsp; міндетіне алады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.1.1. Микрокредит
                    сомасы - <span style="">{{ $application->loan['summa'] ?? '' }}</span> (бұдан әрі-Микрокредит немесе
                    Негізгі қарыз) Қарыз алушыға мерзімділік, ақылылық, қамтамасыз етілу және қайтарымдылық шарттарында
                    Ұйыммен беріледі.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.1.2. Микрокредит
                    бойынша артық төлем сомасы:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- сыйақы мөлшері <span
                        style="">{{ $application->getMonthlyPay() }}</span>&nbsp; тенге.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- тұрақсыздық айыбы -
                    мерзімі өткізіп алынған тоқсан күн ішінде төлем мерзімі өткен әрбір күн үшін 0,1% мөлшерінде;
                    мерзімін өткізіп алудың&nbsp; тоқсан күні өткеннен кейін төлем мерзімі өткен әрбір күн үшін 0,03%
                    мөлшерінде.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Қарыз алушының кепіл
                    затын бермегені үшін Микрокредит сомасының 3%&nbsp; мөлшерінде айыппұл.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Қарыз алушы GPS
                    жабдығын жоғалтқан немесе бүлдірген жағдайда Микрокредит сомасының 3% мөлшерінде айыппұл.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Қарыз алушы Кепіл
                    билетінің&nbsp; 3.1.4&nbsp; және 3.1.9 тармақтарында көзделген міндеттемелерді орындамаған жағдайда
                    әрбір айқындалған бұзушылық үшін Микрокредит сомасының 3% мөлшерінде айыппұл.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.1.3.Микрокредит өтеу
                    мерзімі Кепіл билеттің ажырамас бөлігі болып табылатын Микрокредитті өтеу кестесіне (бұдан әрі -
                    Өтеу кестесі) сәйкес, бұл ретте Микрокредиттің жалпы мерзімі 1 (бір) жылдан аспайды.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
                        style="font-size:12pt;">1.2. Микрокредит бойынша сыйақы мөлшерлемесі айына 3,72% құрайды, бұл</span><span
                        style="font-size:12pt;">&nbsp;&nbsp;</span><span style="font-size:12pt;">Микрокредит сомасынан жылдық 44,64% құрайды. Жылдық тиімді сыйақы мөлшерлемесі &ndash; 55,95% (ЖТСМ). Сыйақы</span>
                    <span style="font-size:12pt;">Кепіл билеттің барлық әрекет ету кезеңіне, бірақ Микрокредиттің жалпы мерзімінен аспайтын мерзімге, Қарыз алушы Ұйымға Микрокредиттің барлық сомасын толық қайтарғанға дейін есептеледі.&nbsp;</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.3. Микрокредиттерді
                    өтеуді және есептелген сыйақыны, тұрақсыздық айыбын (айыппұлдарды, өсімпұлдарды) төлеуді Кепіл
                    билеті мен Өтеу кестесінің шарттарына сәйкес Қарыз алушы ұйымның кассасы арқылы бір жолғы қолма-қол
                    ақшамен, электрондық терминалдар арқылы немесе &laquo;Қазақстан Халық Банкі&raquo; АҚ-дағы ұйымның
                    есеп айырысу шотына қолма-қол емес тәсілмен жүзеге асырады, ЖСК KZ196017131000031943.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.4. Қарыз алушы
                    сыйақы төлеуді, содан кейін Микрокредитті өтеуді көздейтін аннуитеттік төлем әдісін таңдады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.5. Қарыз алушы
                    Микрокредитті уақытылы өтеу және/немесе сыйақы төлеу бойынша міндеттемелерді бұзған жағдайда, Ұйым
                    мерзімін өткізіп алудың&nbsp; тоқсан күні ішінде - мерзімін өткізіп алудың әрбір күнтізбелік күні
                    үшін Микрокредит бойынша мерзімін өткізіп алған төлем сомасының 0,5 % мөлшерінде;&nbsp; мерзімін
                    өткізіп алудың&nbsp; тоқсан күні өткеннен кейін&nbsp; мерзімі өткізіп алынған&nbsp; әрбір күн үшін
                    мерзімі өткізіп алынған төлем сомасының 0,03 % мөлшерінде, бірақ бір жыл ішінде берілген Микрокредит
                    сомасының он пайызынан аспайтын мөлшерде тұрақсыздық айыбын (өсімпұл) есептеуге құқылы,&nbsp; ал
                    Қарыз алушы Микрокредит бойынша сыйақы мөлшерлемесіне қосымша тұрақсыздық айыбын (өсімпұл) төлеуге
                    міндетті. Тұрақсыздық айыбы (өсімпұл) берешек пайда болған бірінші күннен бастап мерзімі өткен бүкіл
                    кезең үшін күнтізбелік күндермен есептеледі.<br>1.6. Тараптар Микрокредит бойынша берешекті өтеу
                    кезектілігі, оның ішінде егер Қарыз алушы осы Кепіл билеті бойынша жүргізген төлем сомасы Қарыз
                    алушының барлық міндеттемелерін орындау үшін жеткіліксіз болса, Қарыз алушының берешегін мынадай
                    кезектілікпен өтейтіні туралы келісімге келді:</p>
                <p style="margin-top:0pt; margin-left:22.95pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; font-size:12pt;">
                    1)<span style="width:4.2pt; text-indent:0pt; display:inline-block;">&nbsp;</span> төлемдердің
                    ағымдағы кезеңі үшін&nbsp;&nbsp; есепке жазылған сыйақы;</p>
                <p style="margin-top:0pt; margin-left:22.95pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; font-size:12pt;">
                    2)<span style="width:4.2pt; text-indent:0pt; display:inline-block;">&nbsp;</span> төлемдердің
                    ағымдағы кезеңі үшін негізгі борыш сомасы;</p>
                <p style="margin-top:0pt; margin-left:22.95pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; font-size:12pt;">
                    3)<span style="width:4.2pt; text-indent:0pt; display:inline-block;">&nbsp;</span> тұрақсыздық айыбы
                    (айыппұл, өсімпұл);</p>
                <p style="margin-top:0pt; margin-left:22.95pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; font-size:12pt;">
                    4)<span style="width:4.2pt; text-indent:0pt; display:inline-block;">&nbsp;</span> сыйақы бойынша
                    берешек;</p>
                <p style="margin-top:0pt; margin-left:22.95pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; font-size:12pt;">
                    5)<span style="width:4.2pt; text-indent:0pt; display:inline-block;">&nbsp;</span> негізгі борыш
                    бойынша берешек.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.7. Кепіл билет
                    бойынша өзінің барлық&nbsp; міндеттемелерінің орындалуын қамтамасыз ету үшін Қарыз алушы келесі
                    көлік құралын (бұдан әрі - Кепілзат) береді.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Маркасы, моделі <span
                        style="">{{ $application->car('brand') .', '. $application->car('model') }}</span><strong>&nbsp;</strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Мемлекеттік тіркеу
                    нөмірлік белгісі <strong>&nbsp;</strong><strong><span
                            style="">{{ $application->car('tech_password', true) }}</span></strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Шығарылған жылы
                    <strong><span style="">{{ $application->car('year') }}</span></strong> жыл</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Сәйкестендіру нөмірі
                    <span style="">{{ $application->car('number', true) }}</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Түсі: <strong><span
                            style="">{{ $application->car('color') }}</span></strong><strong>&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Кепілзатқа қатысты
                    Қарыз алушының меншік құқығы
                    @php($tech_date = $application->car('tech_date'))
                    <span style="">&quot;{{ \Carbon\Carbon::make($tech_date)->format('d') }}&quot;
                        {{ \App\Enums\MonthEnum::getInTheGenetiveCase($date->month, 'kz') }} {{ \Carbon\Carbon::make($tech_date)->format('Y') }}</span>
                    жылы берілген сериясы <span style="">{{ $application->car('vin', true) }}</span> Көлік құралын
                    тіркеу туралы куәліктің түпнұсқасымен расталады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Тараптар Кепілзатты
                    бағалау және оның бағасын <span style="">{{ $application->loan['summa'] ?? '' }}</span> көлемінде
                    белгілеу туралы келісімге келді.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Кепілзатты бағалау
                    Қазақстан Республикасының нарығындағы ұқсас көлік құралдарының құны негізге алына отырып, Ұйым Кепіл
                    билетін жасау сәтіне мамандандырылған ТҚС-да қарап тексеруді жүргізбестен жүргізілді.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.8. Қарыз алушы Кепіл
                    билеті бойынша міндеттемелерді орындамаған және/немесе тиісінше орындамаған кезде, Қарыз алушы
                    ұйымның құқылы екендігімен келіседі:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.8.1. микрокредит
                    сомасын, есептелген сыйақыны, тұрақсыздық айыбын (айыппұлды, өсімпұлды), нотариустың атқарушылық
                    жазбасы негізінде немесе сот тәртібімен ұйымға тиесілі өзге де төлемдерді мерзімінен бұрын өндіріп
                    алу;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.8.2. Нотариустың
                    атқарушылық жазбасы негізінде және/немесе сот немесе соттан тыс тәртіпте кепіл затын өндіріп алу,
                    берілген сенімхат негізінде кепіл затын өз бетінше сату, сондай-ақ Қазақстан Республикасының
                    қолданыстағы заңнамасына сәйкес кепіл затын өз меншігіне айналдыру. Қарыз алушы кепіл нысанасын
                    жоғалтқан, сол сияқты кепіл нысанасынан (үшінші тұлғаларға тыйым салу және өзге де ауыртпалықтар)
                    өндіріп алуды қолдану мүмкін болмаған жағдайда, ұйым қарыз алушының өзге де жеке мүлкінен өндіріп
                    алады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.8.3. Келісім
                    талаптарына сәйкес одан әрі іске асыру үшін нотариустың атқарушылық жазбасы негізінде немесе сот
                    тәртібімен кепіл затын талап ету және/немесе кепіл затын кепілге алу және кепіл затын Қарыз алушы
                    келісім бойынша барлық міндеттемелерді толық орындаған сәтке дейін мамандандырылған тәулік бойы
                    жұмыс істейтін автотұраққа қою;</p>
                <ol start="4" type="1" class="awlist1" style="margin:0pt; padding-left:0pt;">
                    <li style="margin-left:36pt; text-indent:-36pt; text-align:justify; font-size:12pt;"><span
                            style="width:9pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Қазақстан
                        Республикасының
                    </li>
                </ol>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">қолданыстағы
                    заңнамасына және осы кепілдік билетке сәйкес кез келген шараларды қабылдау.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.9. Кепіл билет оған
                    қол қойған күннен бастап күшіне енеді және Тараптар өздерінің міндеттемелерін толық орындағанға
                    дейін қолданылады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.10. Қарыз алушы бас
                    тарту себептерінің дәлелді негіздемесін көрсете отырып, Ұйымның Кепіл билетінің шарттарын өзгертуден
                    бас тарту туралы шешімін алған күннен бастап күнтізбелік он бес күн ішінде немесе Кепіл билетінің
                    шарттарын өзгерту туралы өзара қолайлы шешімге қол жеткізілмеген кезде Ұйымды бір мезгілде хабардар
                    ете отырып, уәкілетті органға жүгінуге құқылы.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.11. Ұйымның пошталық
                    мекенжайы: Қазақстан Республикасы, 050057, Алматы қ., Әуезов көшесі, 163А үй, н. п. 207.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Электрондық мекенжайы:
                    <a href="file:///%5C%5C192.168.1.242%5Ccreditline%20%D1%80%D0%B0%D0%B1%D0%BE%D1%87%D0%B0%D1%8F%20%D0%B3%D1%80%D1%83%D0%BF%D0%BF%D0%B0%5C%D0%9C%D0%B5%D0%BD%D0%B5%D0%B4%D0%B6%D0%B5%D1%80%D1%8B%5C%D0%9F%D0%B0%D0%BA%D0%B5%D1%82%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%BE%D0%B2%20%D0%B4%D0%BB%D1%8F%20Online%5C%D0%90%D0%BD%D0%BD%D1%83%D0%B8%D1%82%D0%B5%D1%82%5C2%5Ckfm@creditline.kz"
                       style="text-decoration:none;"><u><span style="color:#0000ff;">kfm@creditline.kz</span></u></a>;
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">интернет ресурсы: <a
                        href="online.creditline.kz" style="text-decoration:none;"><u><span style="color:#0000ff;">online.creditline.kz</span></u></a>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.12. Ұйым Кепіл
                    билеті бойынша құқықты (талап етуді) үшінші тұлғаға берген кезде Қазақстан Республикасының
                    заңнамасында Кепіл билеті шегінде е кредитордың қарыз алушымен өзара қарым-қатынастарына қойылатын
                    талаптар мен шектеулер құқық (талап ету) берілген қарыз алушының үшінші тұлғамен құқықтық
                    қатынастарына қолданылады.</p>
            </td>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <ol type="1" class="awlist2" style="margin:0pt; padding-left:0pt;">
                    <li style="margin-left:36pt; text-indent:-18pt; text-align:center; font-size:12pt; font-weight:bold;">
                        <span style="width:9pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Предмет
                        и общие условия
                        <ol type="1" class="awlist3" style="margin-right:0pt; margin-left:0pt; padding-left:0pt;">
                            <li style="margin-left:-31.75pt; text-indent:-2.55pt; text-align:justify; font-weight:normal; list-style-position:inside;">
                                <span style="width:15.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Организация
                                предоставляет Заёмщику Микрокредит под залог транспортного средства, указанного в п.1.7.&nbsp;
                                Залогового билета, а Заемщик обязуется своевременно <span
                                    style="background-color:#ffffff;">&nbsp;</span><span
                                    style="background-color:#ffffff;">возвратить Организации</span><span
                                    style="background-color:#ffffff;">&nbsp;&nbsp;</span><span
                                    style="background-color:#ffffff;">Микрокредит и выплатить причитающееся вознаграждение, неустойки (штрафы, пени)</span>
                                в порядке и на условиях настоящего Залогового билета.
                            </li>
                        </ol>
                    </li>
                </ol>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.1.1. Сумма
                    Микрокредита - <span style="">{{ $application->loan['summa'] ?? '' }}</span> (далее Микрокредит или
                    Основной долг) предоставляется Организацией Заёмщику на условиях срочности, платности,
                    обеспеченности и возвратности.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.1.2. Сумма переплаты&nbsp;
                    по Микрокредиту составляет:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- вознаграждение в
                    размере  <span style="">{{ $application->getMonthlyPay() }}</span> тенге.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;- неустойка,&nbsp;
                    в размере 0,1% за каждый день просрочки платежа в течение девяносто дней просрочки, в размере 0,03 %
                    за каждый день просрочки по истечении девяносто дней просрочки.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- штраф, в размере 3%
                    от суммы Микрокредита за не передачу Заемщиком предмета залога.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- штраф, в размере 3%
                    от суммы Микрокредита в случае утраты или повреждения Заемщиком GPS оборудования.</p>
                <p style="margin-top:0pt; margin-left:4.25pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">-
                    штраф, в размере 3% от суммы Микрокредита за каждое выявленное нарушение<span
                        style="font-size:10pt;">&nbsp;</span>Заёмщиком обязательств, предусмотренных п. п. 3.1.4., и
                    3.1.9. Залогового билета.</p>
                <p style="margin-top:0pt; margin-left:4.25pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-left:4.25pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-left:4.25pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-left:4.25pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    1.1.3. Срок погашения Микрокредита указывается в Графике погашения Микрокредита (далее &ndash;
                    График погашения), являющимся неотъемлемой частью Залогового билета, при этом общий срок
                    Микрокредита не может превышать 1 (одного) года.</p>
                <ol start="2" type="1" class="awlist4" style="margin:0pt; padding-left:0pt;">
                    <li style="margin-left:4.25pt; text-indent:-4.25pt; text-align:justify; font-size:12pt; list-style-position:inside;">
                        <span style="width:17.4pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Ставка
                        вознаграждения по Микрокредиту составляет &ndash; 3,72% в месяц, что составляет&nbsp; 44,64 % в
                        год от суммы Микрокредита. Годовая эффективная ставка вознаграждения &ndash; 55,95% (ГЭСВ).<span
                            style="font-size:16pt;">&nbsp;</span>Вознаграждение начисляется на весь период действия
                        Залогового билета, но не свыше общего срока микрокредита, до полного возврата всей суммы
                        Микрокредита Заёмщиком&nbsp; Организации.
                    </li>
                </ol>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.3. Погашение
                    Микрокредита и уплата начисленного вознаграждения, неустойки (штрафов, пени) производится Заёмщиком
                    согласно условиям Залогового билета и Графика погашения, единовременно наличными средствами через
                    кассу Организации, посредством электронных терминалов или безналичным способом на расчетный счет
                    Организации в АО &laquo;Народный Банк Казахстана ИИК KZ196017131000031943.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.4. Заёмщиком был
                    выбран метод аннуитетного платёжа.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.5.В случае нарушения
                    Заёмщиком обязательств по своевременному погашению Микрокредита и/или уплаты вознаграждения,
                    Организация вправе начислить неустойку (пеню) в течение девяносто дней просрочки - в размере 0,5 %
                    от суммы просроченного платежа по Микрокредиту за каждый календарный день просрочки;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">по истечении девяноста
                    дней просрочки - в размере 0,03 % от суммы просроченного платежа за каждый день просрочки, но не
                    более десяти процентов от суммы выданного Микрокредита за год, а Заёмщик дополнительно к ставке
                    вознаграждения по Микрокредиту обязан оплатить неустойку (пеню).&nbsp; Неустойка (пеня) начисляется
                    в календарных днях за весь период просрочки, начиная с первого дня образования задолженности.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.6. Стороны пришли к
                    соглашению, о том&nbsp; что очередность погашения задолженности по Микрокредиту, в том числе если
                    <span style="background-color:#ffffff;">сумма произведенного Заемщиком платежа по настоящему Залоговому билету недостаточна для исполнения всех обязательств Заемщика, погашает задолженность заемщика в следующей очередности</span>:
                </p>
                <ol type="1" class="awlist5" style="margin:0pt; padding-left:0pt;">
                    <li style="margin-left:37.1pt; text-indent:-28.35pt; text-align:justify; font-size:12pt;"><span
                            style="width:18.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>вознаграждение,
                        начисленное за текущий период платежей;
                    </li>
                    <li style="margin-left:37.1pt; text-indent:-28.35pt; text-align:justify; font-size:12pt;"><span
                            style="width:18.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>сумма
                        основного долга за текущий период платежей;
                    </li>
                    <li style="margin-left:37.1pt; text-indent:-28.35pt; text-align:justify; font-size:12pt;"><span
                            style="width:18.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>неустойка
                        (штраф, пеня);
                    </li>
                    <li style="margin-left:37.1pt; text-indent:-28.35pt; text-align:justify; font-size:12pt;"><span
                            style="width:18.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>задолженность
                        по вознаграждению;
                    </li>
                </ol>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp; 5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    задолженность по основному долгу.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.7.&nbsp; В
                    обеспечение исполнения всех своих&nbsp; обязательств по настоящему Залоговому&nbsp; билету, Заёмщик
                    предоставляет Организации</p>
                <p style="margin-top:0pt; margin-left:1.65pt; margin-bottom:0pt; text-indent:-1.65pt; text-align:justify; font-size:12pt;">
                    &nbsp;в залог следующее транспортное средство&nbsp; (далее &ndash; Предмет залога):</p>
                <p style="margin-top:0pt; margin-left:1.85pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    Марка, модель: <strong><span
                            style="">{{ $application->car('brand') .', '. $application->car('model') }}</span></strong><strong>&nbsp;</strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Государственный
                    регистрационный номерной знак <strong><span
                            style="">{{ $application->car('tech_password', true) }}</span></strong></p>
                <p style="margin-top:0pt; margin-left:1.85pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    Год выпуска <strong><span style="">{{ $application->car('year') }}</span></strong> год</p>
                <p style="margin-top:0pt; margin-left:1.85pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    Идентификационный номер <strong><span
                            style="">{{ $application->car('number', true) }}</span></strong></p>
                <p style="margin-top:0pt; margin-left:1.85pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    Цвет: <strong><span
                            style="">{{ ($application->car['color'] ?? '') }}</span></strong><strong>&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-left:1.85pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    Право собственности Заемщика на Предмет залога подтверждается оригиналом свидетельства о регистрации
                    транспортного средства, серия <span style="">{{ $application->car('vin', true)  }}</span> выданное
                    @php($tech_date = $application->car('tech_date'))
                    <span style="">&quot;{{ \Carbon\Carbon::make($tech_date)->format('d') }}&quot;
                        {{ \App\Enums\MonthEnum::getInTheGenetiveCase($date->month) }} {{ \Carbon\Carbon::make($tech_date)->format('Y') }}</span>
                    года.</p>
                <p style="margin-top:0pt; margin-left:1.85pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    Стороны пришли к соглашению оценить Предмет залога&nbsp;&nbsp; и установить в размере <span
                        style="">{{ $application->loan['summa'] ?? '' }}</span>&nbsp;.</p>
                <p style="margin-top:0pt; margin-left:28.35pt; margin-bottom:0pt; text-indent:-28.35pt; text-align:justify; font-size:12pt;">
                    Оценка Предмета залога произведена исходя</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">из стоимости
                    аналогичных транспортных средств на рынке Республики Казахстан, без</p>
                <p style="margin-top:0pt; margin-left:1.65pt; margin-bottom:0pt; text-indent:-1.65pt; text-align:justify; font-size:12pt;">
                    проведения Организацией осмотра на специализированном СТО, на момент заключения Залогового
                    билета.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.8. При неисполнении
                    и/или ненадлежащем сполнении Заёмщиком обязательств по Залоговому билету, Заемщик согласен с тем,
                    что Организация вправе:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.8.1. досрочно
                    взыскать сумму микрокредита, начисленного вознаграждения, неустойку (штраф, пеня), иные
                    причитающиеся Организации платежи на основании исполнительной надписи нотариуса или в судебном
                    порядке.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.8.2.&nbsp; <span
                        style="width:2.4pt; display:inline-block;">&nbsp;</span>обратить взыскание на предмет залога на
                    основании исполнительной надписи нотариуса и/или в судебном или внесудебном порядке, самостоятельно
                    реализовать предмет залога на основании выданной доверенности, а также обратить в свою собственность
                    предмет залога в соответствии с действующим законодательством Республики Казахстан. В случае утраты
                    Заёмщиком предмета залога, а равно невозможности обращения взыскания на предмет залога (аресты
                    третьих лиц и иные обременения), Организация обращает взыскание на иное личное имущество Заёмщика.
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.8.3.&nbsp; <span
                        style="width:2.4pt; display:inline-block;">&nbsp;</span>истребовать Предмет залога на основании
                    исполнительной надписи нотариуса или в судебном порядке для дальнейшей реализации в соответствии с
                    условиями Соглашения и/или изъять предмет залога в заклад и поставить Предмет залога на
                    специализированную круглосуточную автостоянку до момента полного исполнения Заёмщиком всех
                    обязательств по Соглашению.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.8.4.&nbsp; <span
                        style="width:2.4pt; display:inline-block;">&nbsp;</span>принять любые меры в соответствии с
                    действующим законодательством Республики Казахстан и настоящим <span style="color:#212121;">Залоговым билетом</span>.
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.9.<span
                        style="width:17.4pt; display:inline-block;">&nbsp;</span>Залоговый билет вступает в силу со дня
                    подписания и действует до полного исполнения Сторонами своих обязательств.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.10. Заёмщик в
                    течение пятнадцати календарных дней с даты получения решения организации об отказе в изменении
                    условий Залогового билета с указанием мотивированного обоснования причин отказа или при не
                    достижении взаимоприемлемого решения об изменении условий залогового билета вправе обратиться в
                    уполномоченный орган с одновременным уведомлением организации.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.11.Почтовый адрес
                    Организации: Республика Казахстан, 050057, г. Алматы, улица Ауэзова, дом 163 А, н.п. 207.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Электронный адрес: <a
                        href="kfm@creditline.kz" style="text-decoration:none;"><u><span style="color:#0000ff;">kfm@creditline.kz</span></u></a>;
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">интернет ресурс: <a
                        href="file:///%5C%5C192.168.1.242%5Ccreditline%20%D1%80%D0%B0%D0%B1%D0%BE%D1%87%D0%B0%D1%8F%20%D0%B3%D1%80%D1%83%D0%BF%D0%BF%D0%B0%5C%D0%9C%D0%B5%D0%BD%D0%B5%D0%B4%D0%B6%D0%B5%D1%80%D1%8B%5C%D0%9F%D0%B0%D0%BA%D0%B5%D1%82%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%BE%D0%B2%20%D0%B4%D0%BB%D1%8F%20Online%5C%D0%90%D0%BD%D0%BD%D1%83%D0%B8%D1%82%D0%B5%D1%82%5C2%5Conline.creditline.kz"
                        style="text-decoration:none;"><u><span
                                style="color:#0000ff;">online.creditline.kz</span></u></a></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1.12. При уступке
                    Организацией права (требования) по Залоговому билету третьему лицу, требования и ограничения,
                    предъявляемые законодательством Республики Казахстан к взаимоотношениям кредитора с заемщиком в
                    рамках Залогового билета, распространяются на правоотношения Заёмщика с третьим лицом, которому
                    уступлено право (требование).</p>
            </td>
        </tr>
        <tr>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>2. Тараптардың
                        жауапкершілігі</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.1. Қарыз алушы
                    Микрокредитті уақытылы өтеу және/немесе сыйақы төлеу бойынша&nbsp; міндеттемелерді бұзған жағдайда,
                    Ұйым мерзімін өткізіп алудың тоқсан&nbsp; күні ішінде&nbsp; мерзімі өткізіп алынған&nbsp;&nbsp;
                    әрбір күнтізбелік күні үшін мерзімі өткізіп алынған төлем сомасынның&nbsp;&nbsp;&nbsp; 0,5%&nbsp;
                    мөлшерінде, мерзімін өткізіп алудың тоқсан күні өткеннен кейін&nbsp; мерзімі өткізіп алынған әрбір
                    күн үшін мерзімі өткізіп алынған&nbsp; төлем сомасының 0,03 % мөлшерінде, бірақ бір жыл ішінде
                    берілген микрокредит сомасының он пайызынан аспайтын мөлшерде тұрақсыздық айыбын (өсімпұл) есептеуге
                    құқылы, ал Қарыз алушы Микрокредит бойынша сыйақы мөлшерлемесіне қосымша тұрақсыздық айыбын
                    (өсімпұл) төлеуге міндетті. Тұрақсыздық айыбы (өсімпұл) берешек пайда болған бірінші күннен бастап
                    мерзімі өткен бүкіл кезең үшін күнтізбелік күндермен есептеледі.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.2. Қарыз алушы Кепіл
                    билетінің&nbsp; 3.1.4 және 3.1.9-тармақтарында көзделген міндеттемелерді орындамаған немесе тиісінше
                    орындамаған жағдайда,&nbsp; Ұйым әрбір анықталған бұзушылық үшін Микрокредит сомасының 3% мөлшерінде
                    айыппұлды&nbsp; есептеуге құқылы, ал Қарыз алушы Ұйымға Ұйым белгілеген мерзімде айыппұл төлеуге
                    міндетті.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.3. Қарыз алушы Кепіл
                    билетінің&nbsp; 3.1.11-тармағында көзделген міндеттемені орындамаған жағдайда&nbsp; Ұйым Микрокредит
                    сомасының 3% мөлшерінде мөлшерінде айыппұлды есептеуге құқылы, ал Қарыз алушы Ұйымға Ұйым белгілеген
                    мерзімде айыппұл төлеуге міндетті.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.4.&nbsp;&nbsp; GPS
                    жабдығы жоғалған немесе бүлінген жағдайда (Кепіл билетінің&nbsp; 3.1.7-тармағы)&nbsp; Ұйым
                    Микрокредит сомасының 3% мөлшерінде теңге мөлшерінде айыппұлды есептеуге құқылы, ал Қарыз алушы
                    Ұйымға Ұйым белгілеген міндеттеме бұзылған сәттен бастап 3 (үш) жұмыс күнінен аспайтын мерзімде
                    айыппұл төлеуге міндетті.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.5. Кепілзат бойынша
                    көрінеу жалған құжаттар мен мәліметтерді ұсынған, сонымен қатар Микрокредитті алу үшін елеулі
                    мән-мағынаға ие өзге жағдайлар туралы көрінеу жалған мәліметтерді ұсынған жағдайда, Қарыз алушы
                    Қазақстан Республикасының заңнамасымен белгіленген жауапкершілікті көтереді.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.6. Залалды өтеу және
                    тұрақсыздық айыбын (айыппұл, өсімпұл) төлеу Қарыз алушыны Кепіл билетте көзделген өзінің
                    міндеттемелерін тиісінше орындау міндетінен босатпайды.</p>
            </td>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>2.
                        Ответственность сторон</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.1. В случае
                    нарушения Заёмщиком обязательств по своевременному погашению Микрокредита и/или уплаты
                    вознаграждения, Организация вправе начислить неустойку (пеню) в течение девяносто дней просрочки - в
                    размере 0,5% от суммы просроченного платежа за каждый календарный день просрочки,&nbsp; по истечении
                    девяноста дней просрочки,&nbsp; в размере 0,03 % от суммы просроченного платежа за каждый день
                    просрочки, но не более десяти процентов от суммы выданного микрокредита за год, а Заёмщик
                    дополнительно к ставке вознаграждения по Микрокредиту обязан оплатить неустойку (пеню).&nbsp;
                    Неустойка (пеня) начисляется в календарных днях за весь период просрочки, начиная с первого дня
                    образования задолженности.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.2. В случае
                    неисполнения или ненадлежащего исполнения Заёмщиком обязательств, предусмотренных п. 3.1.4. и
                    3.1.9., Залогового билета, Организация вправе начислить штраф за каждое выявленное нарушение в
                    размере 3% (три) процента от суммы Микрокредита, а Заёмщик обязан выплатить Организации штраф в
                    срок, установленный Организацией.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.3.&nbsp; В случае
                    неисполнения Заёмщиком обязательства, предусмотренного п. 3.1.11. Залогового билета, Организации
                    вправе начислить штраф в размере 3% (три) процента от суммы Микрокредита, а Заёмщик обязан выплатить
                    Организации штраф в срок, установленный Организацией.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.4.&nbsp; В случае
                    утраты или повреждения GPS оборудования (п.3.1.7. Залогового билета), Организация вправе начислить
                    штраф в размере 3% (три) процента от суммы Микрокредита, а Заёмщик обязан выплатить Организации
                    штраф в срок, не превышающий 3 (трех) рабочих дней с момента нарушения обязательства установленной
                    Организацией.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.5. В случае
                    предоставления заведомо ложных документов и сведений по Предмету залога, а также предоставления
                    заведомо ложных сведений об иных обстоятельствах, имеющих существенное значение для получения
                    Микрокредита, Заёмщик несет ответственность, установленную законодательством Республики
                    Казахстан.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2.6. Возмещение
                    убытков и уплата неустойки (штрафа, пени) не освобождает Заёмщика от надлежащего исполнения своих
                    обязательств, предусмотренных Залоговым билетом.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    <strong>&nbsp;</strong></p>
            </td>
        </tr>
        <tr>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>3. Қарыз
                        алушының құқықтары және міндеттері</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>3.1. Қарыз
                        алушының міндеттері:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.1. Микрокредиттің
                    барлық сомасын қайтару және ол бойынша сыйақыны төлеу, осыған байланысты Өтеу кестесінде көзделген
                    мерзімдерден кешіктірмей және көлемдерде Микрокредит сомасын және ол бойынша сыйақыны өтеу үшін
                    төлемдерді уақытылы және толық көлемде енгізуге міндеттенеді;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.2. Қазақстан
                    Республикасы заңнамасының нормаларын сақтау мақсатында Ұйым сұрататын, барлық қажетті құжаттар мен
                    мәліметтерді Ұйымға ұсыну;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.3. Кепілзатты
                    тиісінше ұстау және сақтау үшін қажетті шараларды қабылдау және Кепіл билеттің қолдану кезеңінде
                    Кепілзатты кездейсоқ жою, зақымдау және жоғалту тәуекелін көтеру;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.4. Кепілзатты
                    жоғалтқан, зақымдаған жағдайда, сонымен қатар Қарыз алушыны Кепілзатты иелену және басқару бойынша
                    оның құқықтарында шектейтін кез келген жағдайлар (Кепіл билеттен туындайтындарды қоспағанда) орын
                    алған кезде, бұл туралы Ұйымды осындай жағдайлар орын алған сәттен бастап 1 (бір) жұмыс күні ішінде
                    жазбаша хабардар қылу, сонымен қатар осы мерзімде барлық әрекетті берешекті (Микрокредит сомасы,
                    сыйақы сомасы, тұрақсыздық айыбы (айыппұл, өсімпұл), оның ішінде Кепіл билетте көзделген айыппұлдар)
                    өтеу немесе Ұйымның келісімімен Кепілзатты басқа типі бойынша барабар және тең бағалы мүлікке
                    ауыстыру;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.5. Ұйымның талабы
                    бойынша тіркеу есебінен шығару және Кепілзатты сату құқығымен және осындай өкілеттіктерді басқа
                    тұлғаларға беру құқығымен (қайта сенім білдіру) Ұйым өкілдеріне нотариалды куәландырылған сенімхатты
                    ұсыну. Сенімхаттың қолданылу мерзімі үш жылды құрауы тиіс;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.6. Кепіл билетті
                    жасаған кезде Ұйымға Кепілзаттың барлық кемшіліктері және жасырын ақаулары туралы хабарлау, өзге
                    жағдайда сәйкес жағдайлар орын алған кезде Ұйым белгілеген мерзімде Кепілзатты өз есебінен қалпына
                    келтіру;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.7. Ұйымның талабы
                    бойынша Кепілзатқа Ұйымға меншік құқығы бойынша тиесілі GPS жабдықты орнату;&nbsp;&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.8. Қазақстан
                    Республикасының қолданыстағы заңнамасына сәйкес Кепілзаттың қандай да бір тең иеленушілері тарапынан
                    Кепіл билетін жасауға қажетті барлық құқықтарға, рұқсаттарға және келісімдерге ие болу;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.9. Кепіл билетінің
                    қолданылу уақытында Ұйымның жазбаша келісімінсіз Кепілзатты қайта салмау, сатпау, басқаруға
                    және/немесе жалға бермеу және өзге нысанда иеліктен шығармау;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.10. кепілді
                    белгіленген тәртіппен тиісті тіркеуші органда тіркеу және тіркеу үшін мемлекеттік бажды төлеу,
                    сондай-ақ Кепіл билеті бойынша міндеттемелер толық орындалған кезде кепілді тіркеген органның
                    тізіліміндегі кепіл туралы жазбаның күшін жойғаны үшін мемлекеттік баж салығын төлеу;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt; background-color:#f8f9fa;">
                    3.1.11. <span style="color:#202124;">Сыйақыны төлеу және/немесе ө</span>теу кестесінде көзделген
                    төлемді қайтару төлемін 5 (бес) жұмыс күнінен астам мерзімге кешіктірген жағдайда, барлық бар
                    берешекті өтегенге дейін 1 (бір) тәулік ішінде барлық қажетті құқық белгілейтін құжаттармен және
                    Кепілзаттың кілттерінің түпнұсқасымен бірге ұйымға Кепілзатты дереу беру. Осы тармақтың шарттары
                    уақтылы орындалмаған жағдайда, Кепіл&nbsp; билетінің 2.3-тармағында көзделген айыппұлды төлеу.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt; background-color:#f8f9fa;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt; background-color:#f8f9fa;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.12. Микрокредиттің
                    барлық сомасын төлегеннен және сыйақы сомасын төлегеннен кейін, сонымен қатар болған кезде
                    тұрақсыздық айыбын (айыппұл, өсімпұл) төлегеннен кейін Ұйымға Кепілзатқа орнатылған GPS жабдықты&nbsp;
                    ақаусыз&nbsp; техникалық жай-күйде барлық берешекті өтеу күнінде қайтару;&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.13. ұялы телефон
                    нөмірі,&nbsp; тұрғылықты жері өзгерген кезде, Ұйымға бір тәулік ішінде оның өзгеруі туралы арызды +7&nbsp;701&nbsp;222
                    3319 нөміріне, немесе <a href="mailto:kfm@creditline.kz" style="text-decoration:none;"><u><span
                                style="color:#0000ff;">kfm@creditline.kz</span></u></a> электронды поштасына жіберу;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.14.&nbsp; Кепіл
                    билеттің 4.2.7. т. көзделген жағдайда Кепілзатты өз есебінен жөндеу жүргізу;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.15.&nbsp; Ұйымның
                    кассасына ақшалай қаражат артығымен төленген жағдайда, Ұйымға ақшалай қаражатты қайтару жөніндегі
                    жазбаша өтінішті беру қажет. Артығымен төленген ақшалай қаражат тек Қарыз алушы өтінішінің негізінде
                    ғана қайтарылады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.16. Қазақстан
                    Республикасының заңнамасында белгіленген немесе осы Кепіл билетінен туындайтын өзге де
                    талаптарды/міндеттерді орындау.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>3.2. Қарыз
                        алушының құқықтары:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.1. Ұйымның
                    Микрокредиттер беру қағидаларымен (бұдан әрі - Қағидалар) және Ұйымның Микрокредиттер беру жөніндегі
                    тарифтерімен танысу;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.2. егер
                    Микрокредит сомасын өтеу және/немесе сыйақыны төлеу күні демалыс не мереке күндеріне сәйкес келсе,
                    Микрокредит сомасын және/немесе сыйақыны тұрақсыздық айыбын (айыппұл, өсімпұл) төлемей, одан кейінгі
                    жұмыс күні төлеу.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Қарыз алушы берешекті төлеу бойынша міндеттемені бірінші жұмыс күні орындамаған жағдайда, берешек
                    пайда болған бірінші күннен бастап мерзімі өткен бүкіл кезең үшін (демалыс және мереке күндерін қоса
                    алғанда) тұрақсыздық айыбы (өсімпұл) есептеледі;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.3. Ұйымды өтеу
                    күнінде хабардар қылып, тұрақсыздық айыбын (айыппұл, өсімпұл) төлемей, кез келген сәтте Микрокредит
                    сомасын мерзімінен бұрын толық немесе ішінара өтеу; Мерзімінен бұрын ішінара өтеуге арналған сома
                    екі еселенген мөлшерде ай сайынғы сыйақы сомасынан кем болмайды.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.4. Кепіл билеті
                    бойынша міндеттемені орындау мерзімін өткізіп алу басталған күннен бастап отыз күнтізбелік күн
                    ішінде келуге және (немесе) Кепіл билетінде көзделген тәсілмен Кепіл билеті бойынша міндеттемені
                    орындау мерзімін өткізіп алудың туындау себептері, кірістері және кепіл билетінің талаптарына
                    өзгерістер енгізу туралы, Кепілдік билетімен байланысты басқа да расталған мән-жайлар (фактілер)
                    туралы мәліметтерді қамтитын өтінішті жазбаша нысанда немесе Кепіл билетінде көзделген тәсілмен
                    ұсынуға, оның ішінде келесілермен байланысты;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    сыйақы мөлшерлемесін немесе Кепіл билет бойынша сыйақы мәнін азайту жағына қарай өзгертумен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    негізгі борыш және (немесе) сыйақы бойынша төлемді кейінге қалдырумен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    берешекті өтеу әдісін немесе берешекті өтеу кезектілігін, оның ішінде негізгі борышты басым
                    тәртіппен өтей отырып өзгертумен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    микрокредит мерзімін өзгертумен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    мерзімі өткен негізгі борышты және (немесе) сыйақыны кешірумен, микрокредит бойынша тұрақсыздық
                    айыбының (айыппұлдың, өсімпұлдың) күшін жоюмен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ұйымға кепілге салынған мүлікті беру жолымен Кепіл билеті бойынша міндеттемені орындаудың орнына бас
                    тарту міндеттемесін ұсынумен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ұйымның Кепіл билетінің шарттарын өзгертуден бас тарту туралы шешімін алған күннен бастап
                    күнтізбелік он бес күн ішінде бас тарту себептерінің дәлелді негіздемесін көрсете отырып немесе
                    Кепіл билетінің шарттарын өзгерту туралы өзара қолайлы шешімге қол жеткізілмеген кезде бір мезгілде
                    ұйымды хабардар ете отырып, уәкілетті органға жүгінумен.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">-Қазақстан
                    Республикасының заңнамасымен белгіленген тұлғамен келіспеушіліктерді реттеу үшін Ұйым Кепіл билет
                    бойынша құқықты (талапты) берген жағдайда банктік омбудсманға жүгіну;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">-Ұйымға көрсетілетін
                    қызметтер бойынша даулы жағдайлар туындаған кезде жазбаша өтініш жасау;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.5. сыйақыны,
                    өсімпұлды (айыппұлды, өсімпұлды), Микрокредит сомасын толық немесе ішінара өтеуді <strong><u>my.creditline.kz</u></strong>
                    жеке кабинеті, касса арқылы жүзеге асыру (филиалдардың жұмыс кестесі туралы ақпарат <a
                        href="http://www.creditline.kz" style="text-decoration:none;"><u><span style="color:#0000ff;">www.creditline.kz</span></u></a>),
                    электрондық терминалдар арқылы немесе Кепіл билетінің 7-бөлімінде көрсетілген Ұйымның банк шотына
                    төлем арқылы қолма-қол ақшасыз, Кепіл билетінде және Өтеу кестесінде белгіленген мерзімдерде;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.6. өзі болмаған
                    жағдайда, Кепіл билетте көзделген төлемдерді төлеуді басқа кәмелетке толған тұлғаларға жүзеге
                    асыруға рұқсат ету;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.7. егер Кепіл
                    билетінде өзгеше көзделмесе, алынған Микрокредитке өз қалауы бойынша билік ету.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.8.<span
                        style="font-size:10pt;">&nbsp;</span>Қазақстан Республикасының заңдарында белгіленген тәртіппен
                    өз құқықтарын қорғау.</p>
            </td>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>3. Права и
                        обязанности Заемщика&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                    <strong>&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>3.1.
                        Заёмщик</strong> <strong>обязан:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.1. возвратить всю
                    сумму Микрокредита и выплатить вознаграждение по нему, в связи с чем обязуется своевременно и в
                    полном объёме вносить платежи в счет погашения суммы Микрокредита и вознаграждения по нему, не
                    позднее сроков и в размерах, предусмотренных в Графике погашения;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.2. предоставлять
                    Организации все необходимые документы и сведения, запрашиваемые Организацией в целях соблюдения норм
                    законодательства Республики Казахстан;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.3. принять меры,
                    необходимые для надлежащего содержания и сохранения Предмета залога и нести риск случайной гибели,
                    повреждения и утраты Предмета залога в период действия Залогового билета;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.4. в случае
                    утраты, повреждения Предмета залога, а также при наступлении любых обстоятельств ограничивающих
                    Заёмщика в его правах по распоряжению и владению Предметом залога (кроме вытекающих из Залогового
                    билета), письменно уведомить об этом Организацию в течение 1 (одного) рабочего дня с момента
                    наступления таких обстоятельств, а также в этот же срок погасить всю имеющуюся задолженность (сумму
                    Микрокредита, сумму вознаграждения, неустойку (штраф, пеня), в том числе имеющиеся штрафы,
                    предусмотренные Залоговым билетом) или с согласия Организации заменить Предмет залога на другое
                    аналогичное по типу и равноценное имущество;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.5. По требованию
                    Организации предоставить нотариально удостоверенную доверенность на представителей Организации с
                    правом снятия с регистрационного учёта и реализации Предмета залога, и правом передачи таких
                    полномочий другим лицам (передоверие). Срок действия доверенности должен составлять три года;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.6. при заключении
                    Залогового билета, сообщить Организации обо всех недостатках и скрытых дефектах Предмета залога, в
                    противном случае и при наступлении соответствующих обстоятельств, восстановить за свой счет Предмет
                    залога, в срок установленный Организацией;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.7. По требованию
                    Организации установить на Предмет залога *** оборудование,&nbsp; принадлежащее на праве
                    собственности Организации;&nbsp;&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.8. обладать всеми
                    необходимыми в соответствии с действующим законодательством Республики Казахстан правами,
                    разрешениями и согласиями со стороны каких бы то ни было совладельцев Предмета залога, на заключение
                    Залогового билета;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.9. на время
                    действия Залогового билета не перезакладывать, не продавать, не передавать в управление и/или в
                    аренду и не отчуждать в иной форме Предмет залога без письменного согласия Организации;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.10.
                    зарегистрировать залог в установленном порядке в соответствующем регистрирующем органе и оплатить
                    государственную пошлину за регистрацию, а также при полном исполнении обязательств по Залоговому
                    билету, произвести оплату государственную пошлину за аннулирование записи о залоге в реестре органа,
                    зарегистрировавшего залог;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.11. в случае
                    просрочки оплаты вознаграждения и/или возврата платежа, предусмотренного Графиком погашения более
                    чем &nbsp;на 5 (пять) рабочих дней, в течение 1 (одних) суток передать незамедлительно Предмет
                    залога Организации со всеми необходимыми правоустанавливающими документами и оригиналом ключей на
                    Предмет залога, до погашения всей имеющейся задолженности. В случае несвоевременного исполнения
                    условий настоящего пункта, оплатить штраф, предусмотренный в п.2.3. Залогового
                    билета.&nbsp;&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.12. после оплаты
                    всей суммы Микрокредита и уплаты суммы вознаграждения, а также оплаты неустойки (штрафа, пени) - при
                    их наличии, возвратить Организации установленное на Предмете залога GPS оборудование в исправном&nbsp;
                    техническом состоянии в день погашения всей задолженности;&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.13. при изменении
                    мобильного телефонного номера, местожительства в течение одних суток направить заявление в
                    Организацию о его изменении на номер +7&nbsp;701&nbsp;222 3319, либо на электронную почту <a
                        href="mailto:kfm@creditline.kz" style="text-decoration:none;"><u><span style="color:#0000ff;">kfm@creditline.kz</span></u></a>.;
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.14.&nbsp; в
                    случае, предусмотренном п.4.2.7. Залогового билета, произвести за свой счет&nbsp; ремонт Предмета
                    залога;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.15. в случае
                    излишне оплаченных денежных средств в кассу Организации, обратиться в Организацию с письменным
                    заявлением о возврате денежных средств. Возврат излишне оплаченных денежных средств производится
                    только на основании заявления Заемщика.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.1.16. выполнять иные
                    требования/обязанности, установленные законодательством Республики Казахстан или вытекающие из
                    настоящего Залогового билета.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.<strong>&nbsp;Заёмщик</strong>
                    <strong>вправе:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    3.2.1. ознакомиться с Правилами предоставления микрокредитов Организации (далее &ndash; Правила) и
                    тарифами Организации по предоставлению Микрокредита;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.2. при выпадении
                    даты погашения суммы Микрокредита и/или уплаты вознаграждения на выходной или праздничный день,
                    произвести оплату суммы Микрокредита и/или уплату вознаграждения в следующий за ним рабочий день без
                    уплаты неустойки (штрафа, пени).</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
                        style="font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                        style="font-size:12pt;">В случае неисполнения Заёмщиком обязательства по уплате задолженности в первый рабочий день, неустойка (пеня) начисляется за весь период просрочки (включая выходные и праздничные дни)</span>
                    <span style="font-size:12pt;">начиная с первого дня образования задолженности;</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    3.2.3. в любой момент производить досрочное полное или частичное погашение суммы Микрокредита без
                    уплаты неустойки (штрафа, пени), уведомив об этом Организацию в день погашения. Сумма для досрочного
                    частичного погашения не менее суммы ежемесячного вознаграждения в двойном размере.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    3.2.4. посетить в течение тридцати календарных дней с даты наступления просрочки исполнения
                    обязательства по Залоговому билету и (или) представить в письменной форме либо способом,
                    предусмотренным залоговым билетом, заявление, содержащее сведения о причинах возникновения просрочки
                    исполнения обязательства по залоговому билету, доходах и других подтвержденных обстоятельствах
                    (фактах), которые обуславливают его заявление о внесении изменений в условия Залогового билета, в
                    том числе связанных с:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    изменением в сторону уменьшения ставки вознаграждения либо значения вознаграждения по залоговому
                    билету;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    отсрочкой платежа по основному долгу и (или) вознаграждению;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    изменением метода погашения задолженности или очередности погашения задолженности, в том числе с
                    погашением основного долга в приоритетном порядке;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    изменением срока микрокредита;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    прощением просроченного основного долга и (или) вознаграждения, отменой неустойки (штрафа, пени) по
                    микрокредиту;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    представлением отступного взамен исполнения обязательства по залоговому билету путем передачи
                    организации заложенного имущества;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; в течение пятнадцати календарных дней с даты получения решения
                    организации об отказе в изменении Залогового билета с указанием мотивированного обоснования причин
                    отказа или при не достижении взаимоприемлемого решения об изменении условий Залогового билета
                    обратиться в уполномоченный орган с одновременным уведомлением организации.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">-
                    обратиться к банковскому омбудсману в случае уступки Организацией права (требования) по Залоговому
                    билету для урегулирования разногласий с лицом, установленным законодательством Республики
                    Казахстан;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;- письменно обратиться в Организацию при возникновении спорных ситуаций по получаемым
                    услугам;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    3.2.5. производить погашение вознаграждения, неустойки (пеня, штраф), полное или частичное погашение
                    суммы Микрокредита путем личного кабинета - <strong><u>my.creditline.kz</u></strong>, через кассу
                    (информация по графику работы отделений находится на сайте <a href="http://www.creditline.kz"
                                                                                  style="text-decoration:none;"><u><span
                                style="color:#0000ff;">www.creditline.kz</span></u></a>),<strong>&nbsp;</strong>посредством
                    электронных терминалов либо безналичным платежом на банковский счет Организации, указанный в разделе
                    7 Залогового билета, в сроки, установленные Залоговым билетом и Графиком погашения;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    3.2.6. в случае своего отсутствия, оплату платежей, предусмотренных Залоговым билетом допускать
                    осуществлять другим совершеннолетним лицам;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.7. распоряжаться
                    полученным Микрокредитом по своему усмотрению, если иное не предусмотрено Залоговым билетом.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3.2.8. Защищать свои
                    права в порядке, установленным законами Республики Казахстан.</p>
            </td>
        </tr>
        <tr>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>4. Ұйымға
                        қатысты құқықтар, міндеттер және шектеулер</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>4.1. Ұйымның
                        міндеттері:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.1. Кепіл билет
                    талаптарында көзделген барлық тиесілі ақша қаражатын алғаннан кейін, сонымен қатар Қарыз алушымен
                    Кепіл билеттің барлық талаптарын орындаған кезде, Кепілзат Ұйымда болған жағдайда, Қарыз алушыға
                    Кепілзатты қайтару;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.2. талап ету
                    құқығын үшінші тұлғаға беру шарты жасалғанға дейін Қарыз алушыны (немесе оның уәкілетті өкілін)
                    құқықтардың (талаптардың) өту мүмкіндігі туралы, сондай-ақ осындай беруге байланысты Қарыз алушының
                    дербес деректерін өңдеу туралы телефон/ұялы байланыс, электрондық пошта, тапсырыс хаты бойынша
                    хабарламалар немесе Whatsapp, Telegram мессенджерлері, жұмыс орны бойынша жазбаша хабарламалар,
                    телефонограмма және т. б. арқылы хабардар ету;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.3. үшінші тұлғамен
                    талап ету құқығын басқаға беру шарты жасалған күннен бастап күнтізбелік 30 (отыз) күн ішінде Қарыз
                    алушыны (немесе оның уәкілетті өкілін) талап ету құқығының үшінші тұлғаға ауысуы туралы телефон/ұялы
                    байланыс, электрондық пошта, тапсырыс хаты бойынша хабарламалар не Whatsapp, Telegram
                    мессенджерлері, жұмыс орны бойынша жазбаша хабарламалар, телефонограмма және т. б. арқылы хабардар
                    етуге міндетті. Осы жағдайда хабарламада Микрокредитті өтеу жөніндегі бұдан былайғы төлемдердің
                    тағайындалуы (шарт бойынша құқық (талап ету) өткен тұлғаның атауы және тұрған жері), берілген
                    құқықтардың (талап етулердің) толық көлемі, сондай-ақ Микрокредиттің, сыйақының, тұрақсыздық
                    айыбының (айыппұлдың, өсімпұлдың) мерзімі өткен және ағымдағы сомаларының және төленуге жататын
                    басқа да сомалардың қалдықтары көрсетіледі;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.4. мерзімі өткен
                    күннен бастап күнтізбелік жиырма күннен кешіктірмей Қарыз алушыны хабардар етуге:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Кепіл билеті бойынша
                    міндеттемені орындау бойынша мерзімін өткізіп алудың туындағаны және хабарламада көрсетілген күнге
                    мерзімі өткен берешектің мөлшерін көрсете отырып, төлемдер енгізу қажеттілігі туралы;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- қарыз алушы-жеке
                    тұлғаның Кепіл билеті бойынша ұйымға жүгіну құқығы;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">-&nbsp; Қарыз алушының
                    Кепіл билеті бойынша өз міндеттемелерін орындамауының салдарлары туралы.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;
                    Егер хабарлама борышкерге Кепіл билетінде көзделген мынадай тәсілдердің бірімен жіберілсе, ол
                    жеткізілді деп есептеледі:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;
                    Кепіл билетінде көрсетілген электрондық пошта мекенжайына;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;
                    Кепіл билетінде көрсетілген тұрғылықты жері бойынша, оның табыс етілгені туралы хабарламасы бар
                    тапсырыс хатымен, оның ішінде көрсетілген мекенжайда тұратын отбасының кәмелетке толған мүшелерінің
                    бірі алған;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    жеткізуді тіркеуді қамтамасыз ететін өзге де байланыс құралдарын пайдалана отырып;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.5. Кепіл билетінің
                    шарттарына&nbsp; ұсынылған өзгерістер туралы Қарыз алушының өтінішін алған күннен кейін он бес
                    күнтізбелік күн ішінде қарау және қарыз алушыға жазбаша нысанда не Кепіл билетінде көзделген
                    тәсілмен&nbsp; келесілер туралы хабарлау:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Кепіл билетінің шарттарына&nbsp; ұсынылған өзгерістермен келісуі;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;
                    берешекті реттеу бойынша&nbsp; өз ұсыныстары;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    бас тарту себептерінің дәлелді негіздемесін көрсете отырып, Кепіл билетінің шарттарын өзгертуден бас
                    тарту туралы</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.6.алынатын
                    қызметтер бойынша даулы жағдайлар туындаған кезде Қарыз алушыға оның арызына Қазақстан
                    Республикасының заңнамасында белгілеген мерзімде жазбаша нысанда жауап беруін ұсыну;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.7. жақсарту
                    шарттарын қолданған жағдайда, Қарыз алушыға Кепіл билетте көзделген тәртіппен шарт талаптарының
                    өзгергені туралы кез келген қолжетімді тәсілмен хабардар қылу.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>4.2. Ұйымның
                        құқықтары:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.1. Кепіл билеттің
                    талаптарын Қарыз алушы үшін оларды жақсарту жағына қарай біржақты тәртіппен өзгерту;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.2.қарыз алушы
                    микрокредиттің кезекті бөлігін қайтару және (немесе) сыйақы төлеу үшін белгіленген мерзімді қырық
                    күнтізбелік күннен астам бұзған кезде микрокредит сомасын және ол бойынша сыйақыны мерзімінен бұрын
                    қайтаруды талап ету;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;4.2.3. қарыз
                    алушы-жеке тұлғаның өтінішін қарау нәтижелері бойынша берешекті реттеу бойынша&nbsp; келісімге қол
                    жеткізілмеген және қарыз алушы-жеке тұлға берешек бойынша қарсылықтарды ұсынбаған жағдайда, негізгі
                    борышты, сыйақыны және тұрақсыздық айыбын (айыппұлды, өсімпұлды) қоса алғанда, берешекті қарыз
                    алушы-жеке тұлғаның келісімін алмастан өндіріп алуға не нотариустың атқарушылық жазбасы негізінде
                    кепіл затын талап етуге не кепіл затын&nbsp; өндіріп алу.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Сондай-ақ, Ұйым Қарыз алушы Микрокредитті қайтару және/немесе сыйақы мен тұрақсыздық айыбын
                    (өсімпұл, айыппұл) және Кепіл билеті бойынша басқа да міндеттемелерді орындамаған және/немесе тиісті
                    дәрежеде орындамаған кезде, өз қалауы бойынша сот органдарына тиісті талап-арызбен жүгінуге немесе
                    Қарыз алушыдан кепіл мүлкін бас тарту ретінде қабылдауға немесе соттан тыс тәртіппен кепіл затынан
                    өндіріп алуға құқылы<strong>.</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.4. кепілзатты
                    тоқтатпау, кепілзаттың тоқтатылуын тіркемеу, Кепіл билетінде көзделген барлық талаптарды Қарыз алушы
                    толық орындағанға дейін, оның ішінде Кепілзатта орнатылған GPS жабдық қайтарылмаған, сол сияқты
                    жоғалған немесе бүлінген жағдайда Қарыз алушы Ұйымға келтірілген залалды өтегенге дейін Кепілзатқа
                    ауыртпалықты тіркеуден шығармау;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.5. Қарыз алушыдан
                    Кепіл билетті жасау және Кепіл билетті жасаған кезде, сонымен қатар кез келген уақытта Кепіл билет
                    әрекет ететін барлық мерзім барысында ол бойынша міндеттемелерді орындау үшін қажетті құжаттар мен
                    мәліметтерді сұрату;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.6. Белгіленген
                    сыйақыны төлеу және кейін Кепілзатты Ұйымға ерікті түрде беру бойынша берешек түзілген жағдайда
                    (Кепіл билеттің 3.1.11. тармағына сәйкес), сонымен қатар барлық әрекетті берешекті жабу немесе
                    Микрокредит сомасын өтеу бойынша міндетті шартты ескере отырып, Кепілзатты ұйымға беру сәтінен
                    бастап Қарыз алушымен міндеттемені нақты орындау күніне дейін есепке жазылатын тұрақсыздық айыбын
                    (өсімпұл, айыппұл) 50% дейін азайту, сонымен қатар Кепіл билеттің 2.3. т. көзделген айыппұлдың
                    төленуін болдырмау. Осы жағдайда Кепілзат тек Қарыз алушы Кепіл билет бойынша барлық міндеттемелерді
                    орындаған кезде Ұйымнан қайтадан Қарыз алушыға беріледі;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.7.&nbsp; Қарыз
                    алушы берешекті өтеу үшін қандай да бір жасырын және/немесе айқын ақаулары бар Кепілзатты берген
                    жағдайда, немесе Кепілзаттың құнын азайтатын ақаулықтар туындаған жағдайда, Қарыз алушыдан
                    Кепілзатты қайта бағалау және кейін оны жөндеу ақысын төлеуді талап ету;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.8. Микрокредитті
                    қайтару төлемі Қарыз алушымен 5 (бес) жұмыс күнінен астам мерзімге кешіктірілген кезде,&nbsp; мына
                    жағдайларда Қарыз алушыдан (немесе үшінші тұлғадан) талап ету және Кепілзатты ұстап қалу:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1) Кепілзаттың
                    нашарлауы, сол сияқты Кепілзаттың&nbsp; жоғалу немесе бүліну қаупі;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2) Қарыз алушының
                    Кепілзатты үшінші тұлғаға беруі және Кепіл билетінің 3.1.9-тармағында&nbsp; көзделген жағдайларда
                    Ұйымның жазбаша келісімінсіз.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.9.&nbsp;
                    Микрокредит бойынша төлемдердің мерзімін өткізіп алу фактілері анықталған жағдайда, бұл туралы Қарыз
                    алушыны және/немесе үшінші тұлғаларды телефон/ұялы байланыс, электрондық пошта, тапсырыс хаты
                    бойынша не Whatsapp, Telegram мессенджерлері бойынша хабарламалар, жұмыс орны бойынша жазбаша
                    хабарламалар, телефонограмма және т. б. арқылы хабардар ету. Осы жағдайда Қарыз алушыны оның мерзімі
                    кешіктірілген берешегі туралы хабардар қылу коммерциялық құпияны ашу болып табылмайды, және Қарыз
                    алушы осы Кепіл билетке қол қою арқылы Ұйыммен осы тармақта көзделген әрекеттерді жасауға келісім
                    береді.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.10. Берешекті
                    сотқа дейін өндіріп алу және реттеу, сондай-ақ қарыз алушының берешегіне байланысты ақпарат жинау
                    жөнінде қызметтер көрсету үшін коллекторлық агенттікті тарту.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;4.2.11.Қазақстан
                    Республикасының қолданыстағы заңнамасымен белгіленген өзге де құқықтарды жүзеге асыру.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>4.3. Ұйымның
                        құқықтары жоқ:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.3.1. сыйақы
                    мөлшерлемесін (оларды төмендету жағдайларын қоспағанда) және (немесе) Микрокредитті өтеу тәсілі мен
                    әдісін біржақты тәртіпте өзгерту;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.3.2. Микрокредитті
                    және Микрокредит бойынша тұрақсыздық айыбын (айыппұл, өсімпұл) қоспағанда, Қарыз алушыға кез келген
                    төлемдерді белгілеу және одан өндіріп алу;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.3.3. Қарыз алушымен
                    Микрокредитті мерзімінен бұрын немесе ішінара өтеу кезінде Микрокредитті мерзімінен бұрын қайтарғаны
                    үшін тұрақсыздық айыбын (айыппұл, өсімпұл) және басқа төлемдерді талап ету;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.3.4. егер
                    Микрокредитті және/немесе сыйақыны өтеу күні демалыс немесе мереке күніне сәйкес келсе, тұрақсыздық
                    айыбын (айыппұл, өсімпұл) өндіріп алуға тыйым салынады, және Микрокредитті және/немесе сыйақыны
                    төлеу одан кейін келетін жұмыс күні жүргізіледі, Кепіл билетінің 3.2.2-тармағының 2-абзацында
                    көзделген жағдайларды қоспағанда;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.3.5. кез келген
                    валюта баламасына байланысты Кепіл билет бойынша міндеттемелер мен төлемдерді индекстеу.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">4.3.6. Кепіл билеті бойынша Микрокредит
                    сомасын ұлғайту.</p>
            </td>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>4. Права,
                        обязанности и ограничения для Организации&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>4.1.
                        Организация обязана:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.1. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>после получения всех причитающихся
                    денежных средств, предусмотренных условиями Залогового билета, а также при исполнении Заёмщиком всех
                    условий Залогового билета, в случае нахождения Предмета залога у Организации, вернуть Предмет залога
                    Заёмщику;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.2. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>до заключения договора уступки права
                    требования третьему лицу уведомить Заёмщика (или его уполномоченного представителя) о возможности
                    перехода прав (требований), а также об обработке персональных данных Заёмщика в связи с такой
                    уступкой, посредством сообщений по телефонной/мобильной связи, электронной почтой, заказным письмом
                    либо мессенджерам Whatsapp, Telegram, письменных уведомлений по месту работы, телефонограммы и т.п.;
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.3. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>в течение 30 (тридцати) календарных дней
                    со дня заключения договора уступки права требования с третьим лицом, уведомить Заёмщика (или его
                    уполномоченного представителя) о переходе права требования третьему лицу, посредством сообщений по
                    телефонной/мобильной связи, электронной почтой, заказным письмом либо мессенджерам Whatsapp,
                    Telegram, письменных уведомлений по месту работы, телефонограммы и т.п. При этом в уведомлении
                    указывается назначение дальнейших платежей по погашению Микрокредита третьему лицу (наименование и
                    место нахождение лица, которому перешло право (требование) по Залоговому билету), полный объём
                    переданных прав (требований), а также остаток просроченных и текущих сумм Микрокредита,
                    вознаграждения, неустойки (штрафа, пени) и других подлежащих уплате сумм;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">4.1.4. <strong>&nbsp;</strong>не позднее
                    двадцати календарных дней с даты наступления просрочки<span style="font-size:10pt;">&nbsp;</span>уведомить
                    заемщика:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">-
                    о возникновении просрочки по исполнению обязательства по залоговому билету и необходимости внесения
                    платежей с указанием размера просроченной задолженности на дату, указанную в уведомлении;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;- праве заемщика - физического лица по залоговому билету обратиться в организацию;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">-
                    последствиях невыполнения заемщиком своих обязательств по залоговому билету.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    Уведомление считается доставленным, если оно направлено должнику одним из следующих способов,
                    предусмотренных настоящим залоговым билетом:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    на адрес электронной почты, указанный в договоре;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    по месту жительства, указанному в договоре, заказным письмом с уведомлением о его вручении, в том
                    числе получено одним из совершеннолетних членов семьи, проживающим по указанному адресу;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    с использованием иных средств связи, обеспечивающих фиксирование доставки;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    4.1.5. рассмотреть в течение пятнадцати календарных дней после дня получения заявления заемщика&nbsp;
                    о предложенных изменениях в условия Залогового билета и сообщить заемщику в письменной форме либо
                    способом, предусмотренным Залоговым билетом о (об):</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    согласии с предложенными изменениями в условия залогового билета;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    своих предложениях по урегулированию задолженности;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:20pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    отказе в изменении условий залогового билета с указанием мотивированного обоснования причин
                    отказа;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.6.при
                    возникновении спорных ситуаций по получаемым услугам, предоставить Заёмщику ответ на его заявление в
                    письменной форме в сроки, установленные законодательством Республики Казахстан;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.1.7. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>уведомить Заёмщика об изменении условий
                    Залогового билета, в случае применения улучшающих условий любым доступным способом.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>4.2.
                        Организация вправе:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.1. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>изменять условия Залогового билета в
                    одностороннем порядке в сторону их улучшения для Заёмщика;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.2. требовать
                    досрочного возврата суммы микрокредита и вознаграждения по нему при нарушении заемщиком срока,
                    установленного для возврата очередной части микрокредита и (или) выплаты вознаграждения, более чем
                    на сорок календарных дней;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.3. взыскать
                    задолженность, включая основной долг, вознаграждение и неустойку (штраф, пеню), на основании
                    исполнительной надписи нотариуса без получения согласия заемщика-физического лица в случае не
                    достижения соглашения по урегулированию задолженности по результатам рассмотрения заявления
                    заемщика-физического лица и непредставления заемщиком-физическим лицом возражений по задолженности,
                    либо истребовать предмет залога на основании исполнительной надписи нотариуса либо обратить
                    взыскание на предмет залога.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Также, Организация вправе при неисполнении и/или ненадлежащем исполнении Заемщиком обязательств по
                    возврату Микрокредита и/или уплате вознаграждения и неустойки (пени, штрафа) и других обязательств
                    по Залоговому билету, по своему усмотрению обратиться в судебные органы с соответствующим иском,
                    либо принять от Заемщика залоговое имущество в качестве отступного, либо во внесудебном порядке
                    обратить взыскание на предмет залога.&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.4. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>не прекращать залог, не регистрировать
                    прекращение залога, не снимать с регистрации обременение Предмет залога до полного исполнения
                    Заёмщиком всех условий, предусмотренных Залоговым билетом, в том числе в случае невозврата, а равно
                    утраты или повреждения установленного на Предмете залога GPS оборудования, до возмещения Заёмщиком
                    причиненных убытков Организации;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.5. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>запрашивать у Заёмщика документы и
                    сведения, необходимые для заключения Залогового билета и исполнения обязательств по нему как при
                    заключении Залогового билета, так и в любое время в течение всего срока действия Залогового билета;
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.6.<span
                        style="width:8.4pt; display:inline-block;">&nbsp;</span> в случае образовавшейся задолженности
                    по оплате установленного вознаграждения и последующей добровольной передачи Предмета залога
                    Организации (в соответствии с пунктом 3.1.11. Залогового билета), а также с обязательным условием
                    закрытия всей имеющейся задолженности или погашением суммы Микрокредита, уменьшить до 50%
                    начисляемую неустойку (пеню, штраф) с момента&nbsp; передачи Предмета залога Организации и до даты
                    фактического&nbsp; исполнения Заёмщиком обязательств, а также отменить оплату штрафа,
                    предусмотренного в п. 2.3. Залогового билета. При этом, Предмет залога передаётся обратно от
                    Организации Заёмщику только при исполнении Заёмщиком всех обязательств по Залоговому билету;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.7.<span
                        style="width:8.4pt; display:inline-block;">&nbsp;</span>&nbsp; в случае передачи Заёмщиком в
                    счет погашения задолженности Предмета залога со скрытыми и/или явными дефектами каких-либо узлов и
                    агрегатов, либо возникновения неисправностей, уменьшающих стоимость Предмета залога, переоценить и
                    потребовать от Заемщика произвести за его счет ремонт Предмета залога;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.8.<span
                        style="width:8.4pt; display:inline-block;">&nbsp;</span> при просрочке даты погашения
                    Микрокредита Заёмщиком, более чем на 5 (пять) рабочих дней, истребовать у Заёмщика (или у третьих
                    лиц) и удерживать Предмет залога, а также в случаях:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1) ухудшения Предмета
                    залога, равно как и угроза утраты или повреждения Предмета залога;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2) передачи Заёмщиком
                    Предмета залога третьему лицу и в случаях, предусмотренным п.3.1.9. Залогового билета, без
                    письменного согласия Организации.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.9. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>в случае выявления фактов просрочки
                    платежей по Микрокредиту, оповестить Заёмщика и/или третьих лиц об этом посредством сообщений по
                    телефонной/мобильной связи, электронной почтой, заказным письмом, либо мессенджерам Whatsapp,
                    Telegram, письменных уведомлений по месту работы, телефонограммы и т.п.&nbsp; При этом извещение
                    Заёмщика о его просроченной задолженности не является раскрытием коммерческой, финансовой тайны, и
                    Заёмщик подписанием настоящего Залогового билета дает согласие Организации на совершение действий,
                    предусмотренных настоящим пунктом;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong><span
                            style="color:#4472c4;">&nbsp;</span></strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.10. Привлечь
                    коллекторское агентсво для оказания услуг по досудебным взысканию и урегулированию задолженности, а
                    также сбору информации, связанной с задолженностью заемщика.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.2.11. <span
                        style="background-color:#ffffff;">осуществлять иные права, установленные действующим законодательством Республики Казахстан</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>4.3.
                        Организация не вправе:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.3.1. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>изменять в одностороннем порядке ставки
                    вознаграждения (за исключением случаев их снижения) и (или) способ и метод погашения Микрокредита;
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.3.2. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>устанавливать и взимать с Заёмщика любые
                    платежи, за исключением суммы Микрокредита, вознаграждения и неустойки (штрафа, пени) по
                    Микрокредиту;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.3.3. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>при досрочном или частичном погашении
                    Заёмщиком Микрокредита, требовать неустойку (штраф, пеню) и другие платежи за досрочный возврат
                    Микрокредита;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.3.4. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>взимать неустойку (штраф, пеню) в
                    случае, если дата погашения Микрокредита и/или вознаграждения выпадает на выходной либо праздничный
                    день, и уплата Микрокредита и/или вознаграждения производится в следующий за ним рабочий день, за
                    исключением случаев, предусмотренного абзацем 2 пункта 3.2.2. Залогового билета;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4.3.5. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>производить индексацию обязательства и
                    платежей по Залоговому билету, с привязкой к любому валютному эквиваленту.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">4.3.6. <span
                        style="width:5.4pt; display:inline-block;">&nbsp;</span>увеличивать&nbsp; суммы Микрокредита по
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">Залоговому билету.</p>
            </td>
        </tr>
        <tr>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>5. Берешекті
                        сотқа дейін реттеу тәртібі. Шарттық соттылық</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.1. Ұйым Қарыз
                    алушыға телефон/ұялы байланыс, электрондық пошта, тапсырыс хаты бойынша хабарламалар не Whatsapp,
                    Telegram мессенджерлері, жұмыс орны бойынша жазбаша хабарламалар, телефонограмма және т. б. арқылы
                    жеткізуді тіркеуді қамтамасыз ететін жазбаша хабарламалар арқылы Кепіл билеті бойынша міндеттемені
                    орындау мерзімі өткен күннен бастап күнтізбелік жиырма күннен кешіктірмей, кепілзаттық билетте
                    көрсетілген хабарламаны жіберуге тиіс:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.1.1. міндеттемені
                    орындау бойынша мерзімін өткізіп алудың туындауы хабарламада көрсетілген күнге мерзімі өткен
                    берешектің, оның ішінде негізгі борыштың, сыйақының және тұрақсыздық айыбының (айыппұлдың,
                    өсімпұлдың) мөлшерін көрсете отырып, Кепіл билеті бойынша төлемдер енгізу қажеттілігі;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.1.2. қарыз алушының
                    микроқаржы ұйымына жүгіну туралы;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.1.3. Кепіл билеті
                    бойынша қарыз алушының өз міндеттемелерін орындамауының салдарлары туралы.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Ұйым қарыз алушыға
                    хабарлау үшін коллекторлық агенттікті тартуға құқылы.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.2. Кепіл билеті
                    бойынша міндеттемені орындау мерзімін өткізіп алу басталған күннен бастап отыз күнтізбелік күн
                    ішінде Қарыз алушы микроқаржы ұйымына баруға және (немесе) Кепіл билетінде көзделген тәсілмен Кепіл
                    билеті бойынша міндеттемені орындау мерзімін өткізіп алудың туындау себептері, кірістері және Кепіл
                    билетінің талаптарына өзгерістер енгізу туралы, оның ішінде Кепіл билетімен байланысты басқа да
                    расталған мән - жайлар (фактілер) туралы мәліметтерді қамтитын өтінішті жазбаша нысанда немесе Кепіл
                    билетінде көзделген тәсілмен ұсынуға құқылы, оынң ішінле келесілермен байланысты:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1) сыйақы
                    мөлшерлемесін не&nbsp; Кепіл билеті бойынша сыйақы мәнін азайту жағына қарай өзгертумен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2) негізгі борыш және
                    (немесе) сыйақы бойынша төлемді кейінге қалдырумен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3) берешекті өтеу
                    әдісін немесе өтеу кезектілігін, оның ішінде негізгі борышты басым тәртіппен өтей отырып,&nbsp;
                    өзгертумен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">4) микрокредит
                    мерзімін өзгертумен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5) мерзімі өткен
                    негізгі борышты және (немесе) сыйақыны кешірумен, микрокредит бойынша тұрақсыздық айыбының
                    (айыппұлдың, өсімпұлдың) күшін жоюмен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6) микроқаржы ұйымына
                    кепілге салынған мүлікті беру жолымен Кепіл билеті бойынша міндеттемені орындаудың орнына бас тарту
                    ұсынумен;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.3. Ұйым қарыз алушы
                    - жеке тұлғаның өтінішін алған күннен кейін күнтізбелік он бес күн ішінде Кепіл билетінің шарттарына&nbsp;
                    ұсынылған өзгерістерді уәкілетті органның нормативтік құқықтық актісінде белгіленген тәртіппен және
                    жазбаша нысанда не осы Кепіл билетінде көзделген тәсілмен қарайды, қарыз алушы-жеке тұлғаға&nbsp;
                    мыналар жөнінде хабарлайды: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <p style="margin-top:14pt; margin-bottom:14pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    1) Кепіл билетінің шарттарына ұсынылған өзгерістермен келісуі;</p>
                <p style="margin-top:14pt; margin-bottom:14pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;&nbsp;2) берешекті реттеу жөніндегі өз ұсыныстары;</p>
                <p style="margin-top:14pt; margin-bottom:14pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;&nbsp;3) бас тарту себептерінің дәлелді негіздемесін көрсетумен, шарт талаптарын өзгертуден
                    бас тарту туралы.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.4. Қарыз алушы
                    ұйымның Кепіл билетінің шарттарын өзгертуден бас тарту туралы шешімін алған күннен бастап
                    күнтізбелік он бес күн ішінде бас тарту себептерінің дәлелді негіздемесін көрсете отырып немесе
                    Кепіл билетінің шарттарын өзгерту туралы өзара қолайлы шешімге қол жеткізілмеген кезде микроқаржы
                    ұйымын бір мезгілде хабардар ете отырып, уәкілетті органға жүгінуге құқылы.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Уәкілетті орган қарыз алушының өтінішін оның Ұйымға өтініш білдіргені және Ұйыммен Кепіл билетінің
                    талаптарын өзгерту туралы өзара қолайлы шешімге қол жеткізбегені туралы дәлелдемелер ұсынылған кезде
                    қарайды.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Қарыз алушы - жеке тұлғаның өтінішін уәкілетті орган Қазақстан Республикасының заңнамасында
                    белгіленген тәртіппен қарайды.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.5. Кепіл билетінің
                    5.1.1-тармақшасында көзделген талап қанағаттандырылмаған, сондай-ақ қарыз алушы Кепіл билеті бойынша
                    осы Кепіл билетінің 5.2-тармағында көзделген құқықтарды сатпаған немесе қарыз алушы мен Ұйым
                    арасында Кепіл билетінің талаптарын өзгерту бойынша келісім болмаған жағдайларда Ұйым құқылы:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">1) қарыз алушыға
                    қатысты шаралар қолдану туралы мәселені қарауға.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">2) берешекті сотқа
                    дейін өндіріп алуға және реттеуге коллекторлық агенттікке беруге.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">3) Қазақстан
                    Республикасының заңнамасында және (немесе) Кепіл билетінде көзделген шараларды қолдануға, оның
                    ішінде Кепіл билеті бойынша борыш сомасын өндіріп алу туралы сотқа талап қойып жүгінуге, сондай-ақ
                    кепілге салынған мүліктен соттан тыс тәртіппен не сот тәртібімен өндіріп алуға;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.6. Хабарлама, егер
                    ол Қарыз алушыға шартта көзделген мынадай тәсілдердің бірімен жіберілсе, жеткізілді деп
                    есептеледі:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">телефон/ұялы байланыс,
                    электрондық пошта, тапсырыс хат немесе WhatsApp, ******** мессенджерлері бойынша хабарламалар, жұмыс
                    орны бойынша жазбаша хабарламалар, телефонограммалар және т. б. арқылы.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Хабарламаны адресатқа,
                    алушыға берудің мүмкін еместігі туралы не оны қабылдаудан бас тартумен&nbsp; байланысты, сондай-ақ
                    WhatsApp, Telegram&nbsp; қабылданғанын (оқылғанын) растамауына байланысты және өзге де байланыс
                    құралын пайдалану кезінде оның қабылданғанын растамауына байланысты белгі соғылып қайтарған жағдайда
                    хабарлама тиісті түрде жіберілген болып есептеледі.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.7. Қарыз алушының
                    берешек бойынша өтініш бермеуі оның міндеттемені орындамаудағы кінәсін мойындауы болып табылады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">5.8. Егер берешекті
                    сотқа дейін реттеу бойынша шаралар келіспеушіліктер мен дауларды реттеуге әкелмесе, онда даулар
                    Алматы қаласы Бостандық аудандық сотына шешуге беріледі.</p>
            </td>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>5. Порядок
                        досудебного урегулирования задолженности. Договорная подсудность&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    <span style="color:#151515;">5.1.&nbsp;</span><span style="width:14.4pt; display:inline-block;">&nbsp;</span><span
                        style="color:#151515;">Организация должна направить Заемщику&nbsp;</span>посредством сообщений
                    по телефонной/мобильной связи, электронной почтой, заказным письмом либо мессенджерам Whatsapp,
                    Telegram, письменных уведомлений по месту работы, телефонограммы и т.п.<span style="color:#151515;">, обеспечивающих фиксирование доставки, не&nbsp;</span>позднее
                    двадцати календарных дней с даты наступления просрочки исполнения обязательства по Залоговому
                    билету, уведомление о:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    5.1.1. возникновении просрочки по исполнению обязательства и необходимости внесения платежей по
                    Залоговому <span style="color:#151515;">билету</span><span
                        style="color:#151515;">&nbsp;&nbsp;</span><span style="color:#151515;">с указанием размера просроченной задолженности, в том числе основного долга, вознаграждения и неустойки (штрафа, пени) на дату, указанную в уведомлении;</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    <span style="color:#ff0000;">&nbsp;</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    5.1.2. праве заёмщика обратиться в микрофинансовую организацию;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    5.1.3. последствиях невыполнения заёмщиком своих обязательств по Залоговому билету.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    Организация вправе привлечь коллекторское агентство для уведомления заёмщика.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    5.2. В течение тридцати календарных дней с даты наступления просрочки исполнения обязательства по
                    Залоговому билету заемщик - вправе посетить микрофинансовую организацию и (или) представить в
                    письменной форме либо способом, предусмотренным залоговым билетом, заявление, содержащее сведения о
                    причинах возникновения просрочки исполнения обязательства по залоговому билету, доходах и других
                    подтвержденных обстоятельствах (фактах), которые обуславливают его заявление о внесении изменений в
                    условия залогового билета, в том числе связанных с:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    1) изменением в сторону уменьшения ставки вознаграждения либо значения вознаграждения по залоговому
                    билету;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    2) отсрочкой платежа по основному долгу и (или) вознаграждению;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    3) изменением метода погашения или очередности погашения задолженности, в том числе с погашением
                    основного долга в приоритетном порядке;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    4) изменением срока микрокредита;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    5) прощением просроченного основного долга и (или) вознаграждения, отменой неустойки (штрафа, пени)
                    по микрокредиту;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    6) представлением отступного взамен исполнения обязательства по залоговому билету путем передачи
                    микрофинансовой организации заложенного имущества;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    5.3. Организация в течение пятнадцати календарных дней после дня получения заявления заемщика -
                    физического лица рассматривает предложенные изменения в условия залогового билета в порядке,
                    установленном нормативным правовым актом уполномоченного органа, и в письменной форме либо способом,
                    предусмотренным договором о предоставлении микрокредита, сообщает заемщику -физическому лицу о
                    (об):</p>
                <p style="margin-top:14pt; margin-bottom:14pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    1) согласии с предложенными изменениями в условия залогового билета;</p>
                <p style="margin-top:14pt; margin-bottom:14pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    2) своих предложениях по урегулированию задолженности;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    3) отказе в изменении условий залогового билета с указанием мотивированного обоснования причин
                    отказа.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    5.4. Заемщик в течение пятнадцати календарных дней с даты получения решения Организации<span
                        style="font-size:10pt;">&nbsp;</span>об отказе в изменении условий Залогового билета с указанием
                    мотивированного обоснования причин отказа или при не достижении взаимоприемлемого решения об
                    изменении условий залогового билета вправе обратиться в уполномоченный орган с одновременным
                    уведомлением микрофинансовой организации.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:19.85pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    Уполномоченный орган рассматривает обращение заемщика при представлении доказательств его обращения
                    в Организацию и не достижения с Организацией взаимоприемлемого решения об изменении условий
                    Залогового билета.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:19.85pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    Обращение заемщика - физического лица рассматривается уполномоченным органом в порядке,
                    установленном законодательством Республики Казахстан.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    5.5. В случаях неудовлетворения требования, предусмотренного подпунктом 5.1.1. залогового билета, а
                    также не реализации заемщиком по Залоговому билету прав, предусмотренных пунктом 5.2. настоящего
                    Залогового билета, либо отсутствия согласия между заемщиком и организацией по изменению условий
                    Залогового билета Организация вправе:</p>
                <p style="margin-top:14pt; margin-bottom:14pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    1) рассмотреть вопрос о применении мер в отношении заемщика.</p>
                <p style="margin-top:14pt; margin-bottom:14pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    2) передать задолженность на досудебные взыскание и урегулирование коллекторскому агентству.</p>
                <p style="margin-top:14pt; margin-bottom:14pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    3) применить меры, предусмотренные законодательством Республики Казахстан и (или) Залоговым билетом,
                    в том числе обратиться с иском в суд о взыскании суммы долга по Залоговому билету, а также обратить
                    взыскание на заложенное имущество во внесудебном порядке либо в судебном порядке;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    5.6. <span style="width:14.4pt; display:inline-block;">&nbsp;</span>Уведомление считается
                    доставленным, если оно направлено Заемщику одним из следующих способов, посредством сообщений по
                    телефонной/мобильной связи, электронной почтой, заказным письмом либо мессенджерам Whatsapp,
                    Telegram, письменных уведомлений по месту работы, телефонограммы и т.п. При этом, в случае возврата
                    уведомления с отметкой о невозможности его вручения адресату, получателю, либо в связи с отказом в
                    его принятии (прочтения)<strong>&nbsp;</strong>WhatsApp, Telegram, а также не подтверждением его
                    принятия при использовании иного средства связи, уведомление считается направленным надлежащим
                    образом.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    <span style="color:#151515;">&nbsp;</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    <span style="color:#151515;">5.7.&nbsp;</span><span style="width:14.4pt; display:inline-block;">&nbsp;</span><span
                        style="color:#151515;">Не предоставление Заемщиком заявления по задолженности является признанием его вины в неисполнении обязательства.</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    <span style="color:#151515;">5.8.&nbsp;</span><span style="width:14.4pt; display:inline-block;">&nbsp;</span><span
                        style="color:#151515;">В случае, если меры по досудебному урегулированию задолженности не привели к урегулированию разногласий и споров, то</span><span
                        style="color:#151515;">&nbsp;&nbsp;</span><span style="color:#151515;">споры передаются на разрешение в&nbsp;</span>Бостандыкский
                    районный суд г.Алматы<span style="color:#151515;">.&nbsp;</span></p>
            </td>
        </tr>
        <tr style="height:318.75pt;">
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>6. Ерекше
                        талаптар</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.1. Кепіл билетімен
                    реттелмеген барлық жағдайларда Тараптар Қазақстан Республикасының қолданыстағы заңнамасын және
                    Микрокредиттер беру қағидаларын басшылыққа алатын болады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.2. Қарыз алушы
                    Ұйымның жазбаша келісімінсіз Кепіл билет бойынша өзінің құқықтары мен міндеттерін үшінші тұлғаларға
                    беруге құқылы емес.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.3. Кепіл билеттің
                    қандай да бір ережесі осы ереженің Қазақстан Республикасының заңнамасына қарама-қайшы келуіне
                    байланысты жарамсыз болған жағдайда, Кепіл билеттің қалған ережелері өзінің күшін сақтайды.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.4. Микрокредитті
                    ішінара өтеу Қарыз алушының өтініші негізінде жүзеге асырылады. Қарыз алушы Микрокредитті ішінара
                    өтеген жағдайда болашақ міндетті төлемдер көлемін қайта есептеу жүргізілген мерзімінен бұрын өтеу
                    сомасын ескере отырып жүргізіледі. Микрокредитті ішінара өтеген кезде, Ұйым ең жақын кезекті төлем
                    күніне берешек сомасын қайта есептеуді жүргізеді және Қарыз алушыға жаңа Өтеу кестесін береді, онда
                    төлем сомасын сақтай отырып, микрокредит мерзімі қысқарады немесе микрокредит мерзімі сақталады және
                    төлем сомасы азаюға қарай қайта есептеледі.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Микрокредит сомасы тек Қарыз алушы сыйақы бойынша берешекті және тұрақсыздық айыбын (өсімпұл,
                    айыппұл - болған кезде) өтегеннен кейін өтелуі мүмкін.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Микрокредитті толық өтеу Қарыз алушы Микрокредиттің барлық сомасын бірыңғай төлеммен енгізу кезінде,
                    Қарыз алушы барлық әрекетті Кепіл билет бойынша берешекті өтеу шарттарын сақтаған кезде
                    жүргізіледі.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.5. Қарыз алушы
                    болмаған жағдайда, Кепіл билет бойынша берешекті өтеу, Микрокредитті толық немесе ішінара өтеуді
                    үшінші тұлғаға жүзеге асыруға болады. Бұл ретте үшінші тұлға жүзеге асырған төлемдер Кепіл билеті
                    бойынша оның міндеттемелерін орындау есебіне одан қабылданған болып есептеледі.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.6. Кепіл билеттің
                    6.4. т. сәйкес құрастырылған жаңа Өтеу кестесі Кепіл билеттің 6.13. тармағында көрсетілген Қарыз
                    алушының ұялы телефон нөміріне WhatsApp және Telegram хабарлама қосымшалары арқылы жіберіледі және
                    төлемдер үшін негіз болып табылады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Ұйым Өтеу кестесін
                    жолдаған кезде Қарыз алушы жаңа шарттармен танысқан және келіскен болып саналады. Жаңа өтеу
                    кестесінде көрсетілген жаңа шарттармен келіспеген жағдайда, Қарыз алушы жаңа Кестені алғаннан кейін
                    сол күні өзіне ыңғайлы кез келген тәсілмен (смс-хабарлама, WhatsApp және Telegram мессенджерлері не
                    электрондық пошта) қарсылықтарды жіберуге міндетті.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Осы тармақ шарттары келесі жағдайлар үшін қарастырылған:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- егер Қарыз алушы
                    ақыны төлеуді қолма-қол ақшасыз әдіспен жүргізсе;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- егер төлем үшінші
                    тұлғамен Қарыз алушы атынан жүзеге асырылса.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Қарыз алушы тарапынан
                    наразылықтың жоқ болуы оның жаңа Өтеу кестесінде көрсетілген жаңа шарттармен толық келісуін
                    білдіреді.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><span
                        style="background-color:#ffffff;">Ұйым</span><span style="background-color:#ffffff;">&nbsp;&nbsp;</span><span
                        style="background-color:#ffffff;">Қарыз алушыға жаңа кестені мынадай</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">жолмен</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">ұсынуы мүмкін, Ұйым Қарыз алушыға жаңа кестеге көшуге және құпия кодқа сілтемені қамтитын смс-хабарлама жібереді, Қарыз алушы құпия кодты енгізгеннен кейін жаңа</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">Кестеге</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;&nbsp;</span><span
                        style="background-color:#ffffff;">көп факторлы аутентификация арқылы Қарыз алушымен</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">қол қойылған</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">ретінде</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">саналады.</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><span
                        style="background-color:#ffffff;">Егер Қарыз алушы тіркелген және Қарыз алушының жаңа Кесте</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">берілетін</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;&nbsp;</span><span
                        style="background-color:#ffffff;">my.creditline.kz порталындағы Жеке кабинетке рұқсаты бар болса,</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">Қарыз алушы</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">&laquo;Кестеге қол қою&raquo; батырмасын іске қосқаннан кейін, жаңа Кесте</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">көп факторлы аутентификация арқылы Қарыз алушымен</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">қол қойылған ретінде</span><span
                        style="background-color:#ffffff;">&nbsp;&nbsp;</span><span style="background-color:#ffffff;">саналады.</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.7. Қарыз алушы
                    мынаны растайды:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- өзінің еркімен және
                    өзінің мүддесінде әрекет ететін, толықтай әрекетке қабілетті жеке тұлға болып табылады;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Кепілзат оған меншік
                    құқығында тиесілі, басқа кепіл шарттары бойынша кепілзат болып табылмайды және үшінші тұлғалардың
                    өзге құқықтарымен ауыртпалық салынбаған, сонымен қатар дауда және тыйым шегінде орналаспайды.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Кепіл билетіне қол
                    қойып, Кепілзатты иелену және пайдалану мақсатында ұйымнан Кепілзатты (кілттерді және меншік құқығын
                    растайтын құжаттарды қоса алғанда) алды;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Кепілзатқа Ұйымның
                    меншігі болып табылатын және Кепіл билеттің қолдану мерзімі аяқталғаннан кейін қайтарылуы тиіс GPS
                    жабдық орнатылған;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Кепіл билетінің
                    шарттарымен, Микрокредит алуға байланысты құқықтармен және міндеттермен, Микрокредит беру
                    қағидаларының ережелерімен, ұйымның тарифтерімен, әртүрлі әдістермен есептелген өтеу кестелерінің
                    жобаларымен толық көлемде танысты;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">-&nbsp; Кепілзатты
                    бағалау құнымен келіседі;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Кепіл билетінде
                    көрсетілген ұялы телефон/whatsapp нөмірі дұрыс және жарамды.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.8. Қарыз алушы
                    Ұйымға өзінің келісімін береді:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- берілген сенімхат
                    негізінде Кепілзатты&nbsp; соттан тыс өндіріп алуға/өткізуге немесе Ұйымның өз бетінше өткізуіне,
                    сондай-ақ егер сауда-саттық өтпеді деп танылса, Микрокредит сомасын өтеу, сыйақы және/немесе
                    тұрақсыздық айыбын (өсімпұл, айыппұл) төлеу бойынша өз міндеттемелерін орындамаған немесе тиісінше
                    орындамаған жағдайда Кепілзатты Ұйымның меншігіне айналдыруға;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Қазақстан
                    Республикасы заңнамасының талаптарына сәйкес, оның ішінде, бірақ мұнымен шектелмей: аудиторлық
                    ұйымдарға, сот орындаушыларына, нотариусқа, аударманы жүзеге асыратын аудармашыға, Қазақстан
                    Республикасының Қаржы нарығын реттеу және дамыту агенттігіне, Қаржы мониторингі агенттігіне құпия
                    ақпаратты жариялауға;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Ұйыммен Кепілзатты
                    бағалауға;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- Ұйымнан, сонымен
                    қатар басқа құзыретті тұлғалардан (нотариус, сот органдары, сот орындаушылары және т.б.)
                    смс-хабарламалар және мессенджерлер (WhatsApp, Telegram және т.б.) арқылы хабарламаларды, оның
                    ішінде Микрокредитті өтеу және/немесе сыйақыны, әрекетті мерзімі кешіктірілген төлемді төлеу бойынша
                    қарсаңдағы төлемдер туралы хабарламаларды, сонымен қатар жарнамалық сипаттағы ақпаратты алуға;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- өзінің барлық дербес
                    деректерін жинауға, сақтауға және өңдеуге, оның ішінде Қарыз алушыны фотосуретке түсіруге, Ұйым
                    кеңсесінде видео және аудио жазбаны жүргізуге.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.9.<span
                        style="font-size:10pt;">&nbsp;</span>Кепіл билетінде көзделген міндеттемелер орындалмаған кезде,
                    оның ішінде істің қаралуын сот органдарына берген және/немесе кепіл нысанасын өндіріп алуды/өткізуді
                    соттан тыс жүгінген кезде Қарыз алушы ұйымға барлық сот шығыстарын, орындау бойынша шығыстарды,
                    нотариаттық іс-әрекеттер жасауға арналған шығыстар мыналарды қоса алғанда, бірақ олармен шектелмей,
                    атқарушылық әрекеттер жасау бойынша шығыстарды: кепіл нысанасын сақтау үшін автотұраққа алып қоюға
                    және қамауға алуға байланысты шығыстарды, оның ішінде эвакуатор қызметтерін толық көлемде өтейді;
                    Кепілзатқа арналған құжаттардың түпнұсқаларын қалпына келтіруге байланысты барлық шығындар
                    (техникалық құралды тіркеу туралы куәлік (техникалық паспорт), көрсетілген құжаттарды Қарыз алушы
                    ұсынбаған және/немесе жоғалтқан жағдайларда; Қарыз алушы оны өз бетінше төлемеген жағдайда
                    Кепілзатқа төленген салық сомасы; төленбеген айыппұлдардың жалпы сомасы және т. б.).&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.10. Тараптар
                    арасындағы Кепіл билеті оның барлық шарттары толық орындалғаннан кейін өз қолданысын тоқтатады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.11. Қарыз алушыда
                    берешек пайда болған жағдайда, Ұйым Кепіл билетте көзделген барлық міндеттемелер бойынша талап ету
                    құқығын беруді жүзеге асыруға және оларды талап ету құқығын беру шарты бойынша үшінші тұлғаға беруге
                    құқылы.&nbsp; Ұйым Кепіл билет бойынша құқықты (талап етуді) үшінші тұлғаға берген кезде Қазақстан
                    Республикасының заңнамасында кредитордың қарыз алушымен Кепіл билет шеңберіндегі өзара қатынастарына
                    қойылатын талаптар мен шектеулердің Қарыз алушының құқық (талап ету) берілген үшінші тұлғамен
                    құқықтық қатынастарына қолданылады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.12.&nbsp; Тараптар
                    мынаған келісті: тараптардың құқықтық қатынастары Қазақстан Республикасының қолданыстағы азаматтық
                    заңнамасына сәйкес Кепіл ұстаушы мен Кепіл беруші арасындағы құқықтық қатынастар ретінде
                    қолданылады, осылайша &laquo;Ұйым&raquo; ұғымы &laquo;Кепіл ұстаушы&raquo; ұғымына барабар, ал
                    &laquo;Қарыз алушы&raquo; ұғымы &laquo;Кепіл беруші&raquo; ұғымына барабар.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.13. +7<span
                        style="background-color:#ffff00;">_________________</span> Қарыз алушының мобильді телефон
                    нөмірі.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Телефон нөмірі Жеке
                    кабинетке кіруге арналған сәйкестендіргіштердің бірі болып табылады. Барлық хабарламалар,
                    наразылықтар Ұйыммен Қарыз алушының телефон нөміріне смс-хабарламалар және мессенджерлер (WhatsApp,
                    ******** және т.б.) арқылы жіберіледі.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Тараптар Қарыз
                    алушының телефон нөміріне жіберілген хабарламаның наразылықтардың Қарыз алушының тиісті хабарламасы
                    болып табылатынына келісті.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.14. Кепіл билет
                    талаптары бойынша Кепілзат Қарыз алушының иелігінде және пайдалануында қалады (басқару
                    құқығымен).</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Кепіл билетке қол
                    қойып, Қарыз алушы Ұйымнан Кепілзатты жауапты сақтауға алғанын растайды.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.15. Осы Кепіл
                    билетке барлық Қосымшалар оның ажырамас бөлігі болып табылады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.16. Кепіл билетінің
                    талаптарына өзгерістер мен толықтыруларды Тараптар Кепіл билетіне қосымша келісімге қол қою арқылы
                    Тараптардың екі жақты келісімі бойынша енгізе алады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.17. Кепіл билет&nbsp;
                    мемлекеттік және орыс тілдеріндегі екі бірдей данада жасалған, әр Тарапқа бір данадан беріледі.
                    Мемлекеттік және орыс тілдеріндегі Кепіл билеттің талаптары арасында әртүрлі мәнде оқылу мүмкіндігі&nbsp;
                    немесе қандай да бір сәйкессіздіктер туындаған жағдайда орыс тілінде жазылған мәтін басым күшке ие
                    болады.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.18. Кепіл билетіне
                    және Өтеу кестесіне Тараптар өз қолымен, сонымен қатар электронды тәсілмен Қазақстан Республикасы
                    заңнамасының талаптарына сәйкес қол қоюы мүмкін.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.19. Қаржылық есеп
                    айырысулар кезінде, сондай-ақ Өтеу кестелерін жасау кезінде Қарыз алушы төлемдер сомасын
                    дөңгелектеудің арифметикалық әдісі қолданылатынына келіседі (50 тиынға дейінгі тиын сомасы 0-ге
                    дейін дөңгелектеуге; 50 тиыннан бастап және одан жоғары 1 теңгеге дейін дөңгелектеуге).</p>
            </td>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>6. Особые
                        условия</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.1. Во всём, что не
                    урегулировано Залоговым билетом, Стороны будут руководствоваться действующим законодательством
                    Республики Казахстан и Правилами предоставления микрокредитов.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.2.<span
                        style="width:17.4pt; display:inline-block;">&nbsp;</span>Заёмщик не имеет право передавать свои
                    права и обязанности по Залоговому билету третьим лицам без письменного согласия Организации.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.3.<span
                        style="width:17.4pt; display:inline-block;">&nbsp;</span>В случае, когда какое-либо из положений
                    Залогового билета будет признано недействительным вследствие противоречия данного положения
                    законодательству Республики Казахстан, остальные положения Залогового билета остаются в силе.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.4. <span
                        style="width:14.4pt; display:inline-block;">&nbsp;</span>Частичное погашение Микрокредита
                    осуществляется на основании заявления Заемщика. В случае частичного погашения Заёмщиком
                    Микрокредита, перерасчет размера будущих обязательных платежей производится с учетом суммы
                    произведенного досрочного погашения. При частичном погашении Микрокредита Организация производит
                    перерасчет суммы задолженности на дату ближайшего очередного платежа и выдает Заёмщику новый График
                    погашения, в котором сокращается срок микрокредита с сохранением суммы платежа либо сохраняется срок
                    микрокредита и пересчитывается сумма платежа в сторону уменьшения.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; font-size:12pt;">
                    Сумма Микрокредита может погашаться частично только после погашения Заёмщиком задолженности по
                    вознаграждению и неустойке (пеня, штраф - при наличии).</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Полное погашение Микрокредита производится при внесении Заёмщиком всей суммы Микрокредита единым
                    платежом, при соблюдении условия погашения Заёмщиком всей имеющейся задолженности по Залоговому
                    билету.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.5. <span
                        style="width:14.4pt; display:inline-block;">&nbsp;</span>В случае отсутствия Заёмщика,&nbsp;
                    погашение задолженности по Залоговому билету, полное или частичное погашение Микрокредита
                    допускается производить третьему лицу. При этом платежи, осуществленные третьим лицом, считаются
                    принятыми как от него, в счет исполнения его обязательств по Залоговому билету.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.6. <span
                        style="width:14.4pt; display:inline-block;">&nbsp;</span>Новый График погашения, составленный в
                    соответствии с п. 6.4. Залогового билета,&nbsp; направляется на мобильный номер телефона Заёмщика,
                    указанный в п. 6.13. Залогового билета, посредством мессенджеров WhatsApp и Telegram и является
                    основанием для платежей. При направлении Организацией нового Графика погашения, Заёмщик считается
                    ознакомленным и согласным с новыми условиями. В случае несогласия с новыми условиями, указанными в
                    новом Графике погашения, Заёмщик обязан в тот же день после получения нового Графика направить
                    возражения любым удобным для него способом (смс-сообщение, мессенджеры WhatsApp и Telegram, либо
                    электронная почта).</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; font-size:12pt;">
                    Условия настоящего пункта предусмотрены для следующих случаев:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- если Заёмщик
                    производит оплату платежа безналичным способом;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- если платеж
                    осуществлен третьим лицом от имени Заёмщика.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; font-size:12pt;">
                    Отсутствие возражения со стороны Заёмщика, выражает его полное согласие с новыми условиями,
                    указанными в новом Графике погашения.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Новый график Заемщику
                    также может быть предоставлен Организацией следующим образом, так Организация направляет Заемщику
                    смс-сообщение, которая содержит&nbsp; ссылку на переход к новому Графику и секретный код, после
                    ввода Заемщиком секретного кода, новый График считается подписанным Заемщиком посредством
                    многофакторной аутентификации.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">В случае, если Заемщик
                    зарегистрирован и имеет доступ в Личный кабинет на портале my.creditline.kz, в котором Заемщику
                    предоставляется новый График, после активации Заемщиком кнопки &laquo;Подписать график&raquo;, новый
                    График считается подписанным Заемщиком посредством многофакторной аутентификации.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.7. <span
                        style="width:14.4pt; display:inline-block;">&nbsp;</span>Заёмщик подтверждает, что:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- является полностью
                    дееспособным физическим лицом, действующим своей волей и в своем интересе;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- предмет залога
                    принадлежит ему на праве собственности, не является предметом залога по другим договорам залога и не
                    обременён иными правами третьих лиц, а также в споре и под арестом не состоит;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- подписав Залоговый
                    билет, получил Предмет залога (включая ключи и документы, подтверждающие право собственности) от
                    Организации в целях владения и пользования Предметом залога;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- на Предмет залога
                    установлено GPS оборудование, которое является собственностью Организации и должно быть возвращено
                    после исполнения всех обязательств по Залоговому билету;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- в полном объёме
                    ознакомился с условиями Залогового билета, правами и обязанностями, связанными с получением
                    Микрокредита, положениями Правил предоставления микрокредита, тарифами Организации, проектами
                    графиков погашения рассчитанных различными методами<span style="font-size:8pt;">;</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- согласен со
                    стоимостью оценки Предмета залога;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">- номер мобильного
                    телефона/whatsapp, указанный в Залоговом билете, является правильным и действительным.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    6.8.<span style="width:3.3pt; display:inline-block;">&nbsp;</span><span
                        style="width:14.1pt; display:inline-block;">&nbsp;</span> Заёмщик даёт своё согласие
                    Организации:</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    <strong>-</strong><span style="width:10.2pt; display:inline-block;">&nbsp;</span> на внесудебное
                    обращение взыскание/реализацию Предмета залога или самостоятельную реализацию Организацией Предмета
                    залога на основании выданной&nbsp; доверенности, а также на обращение в собственность Организации
                    предмета залога если торги будут признаны несостоявшимися,&nbsp; в случае неисполнения или
                    ненадлежащего исполнения своих обязательств по погашению суммы Микрокредита, уплате вознаграждения
                    и/или неустойки (пени, штрафа);</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>-</strong>
                    <span style="width:28.4pt; display:inline-block;">&nbsp;</span> на разглашение конфиденциальной
                    информации в соответствии с требованиями законодательства Республики Казахстан, в том числе, но не
                    ограничиваясь: аудиторским организациям, судебным исполнителям, нотариусу, переводчику,
                    осуществляющему перевод, Агентству Республики Казахстан по регулированию и развитию финансового
                    рынка, Агентство по финансовому мониторингу;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>-</strong>
                    <span style="width:28.4pt; display:inline-block;">&nbsp;</span> на оценку Предмета залога
                    Организацией;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>-</strong>
                    <span style="width:28.4pt; display:inline-block;">&nbsp;</span>на получение уведомлений посредством
                    смс-сообщений и мессенджеров <em>(</em>WhatsApp, ******** и т.д.) и другими способами связи
                    предусмотренные Залоговым билетом, как от Организации, так и от других компетентных лиц (нотариус,
                    судебные органы, судебные исполнители и т.д.), в том числе уведомлений о предстоящих платежах по
                    погашению Микрокредита и/или уплате вознаграждения, имеющейся просрочки, а также информации
                    рекламного характера;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong>-</strong>
                    <span style="width:28.4pt; display:inline-block;">&nbsp;</span>на сбор, хранение и обработку всех
                    своих персональных данных, в том числе на фотографирование Заёмщика, ведение видео и аудио записи в
                    офисе Организации.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.9. <span
                        style="width:14.4pt; display:inline-block;">&nbsp;</span>При неисполнении обязательств
                    предусмотренных Залоговым билетом, в том числе при передаче рассмотрения дела в судебные органы
                    и/или внесудебного обращения взыскания/реализации Предмета залога, Заёмщик возмещает Организации в
                    полном объёме все судебные расходы, расходы по исполнению, расходы на совершение нотариальных
                    действий, расходы по совершению исполнительных действий,&nbsp; включая, но не ограничиваясь: расходы
                    связанные с изъятием и водворением для хранения Предмета залога на автостоянку, в том числе и услуги
                    эвакуатора; все затраты, связанные с восстановлением оригиналов документов на Предмет залога
                    (Свидетельство о регистрации технического средства (тех. паспорт), в случаях, когда указанные
                    документы не были предоставлены и/или утеряны Заемщиком; сумму налога, оплаченную на Предмет залога,
                    в случае его неуплаты Заёмщиком самостоятельно; общую сумму неоплаченных штрафов и т.д.&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    6.10. Залоговый билет между Сторонами прекращает свое действие после полного исполнения всех его
                    условий.&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    6.11. В случае образовавшейся задолженности у Заёмщика, Организация вправе осуществить уступку права
                    требования по всем обязательствам, предусмотренным в Залоговом билете и передать их третьему лицу по
                    договору уступки права требования.&nbsp; При уступке Организацией права (требования) по Залоговому
                    билету третьему лицу, требования и ограничения, предъявляемые законодательством Республики Казахстан
                    к взаимоотношениям кредитора с заемщиком в рамках Залогового билета, распространяются на
                    правоотношения Заёмщика с третьим лицом, которому уступлено право (требование).</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    6.12.&nbsp; Стороны договорились, что правоотношения сторон применимы в соответствии с действующим
                    гражданским законодательством Республики Казахстан как правоотношения между Залогодержателем и
                    Залогодателем, тем самым понятие &laquo;Организация&raquo; аналогично понятию &laquo;Залогодержатель&raquo;,
                    а понятие &laquo;Заемщик&raquo; аналогично понятию &laquo;Залогодатель&raquo;.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    6.13. <span style="">{{ $application->phone }}</span> мобильный номер телефона Заёмщика.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    Номер телефона является одним из идентификаторов для входа в Личный кабинет.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    Все уведомления, претензии Организацией будут направлены на номер телефона Заёмщика посредством
                    смс-сообщений и мессенджеров <em>(</em>WhatsApp, Telegram и т.д.).</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    Стороны согласились, что уведомление претензии на номер телефона Заёмщика является надлежащим
                    уведомлением Заёмщика</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    6.14. Залоговый билет заключен с условием, при котором Предмет залога остается во владении и
                    пользовании Заёмщика (с правом управления).</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    Подписав Залоговый билет, Заёмщик подтверждает, что получил Предмет залога от Организации на
                    ответственное хранение.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    6.15. Все Приложения к Залоговому билету являются его неотъемлемой частью.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    6.16. Изменения и дополнения в условия Залогового билета могут вноситься Сторонами по обоюдному
                    соглашению Сторон, путем подписания дополнительного соглашения к Залоговому билету.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    6.17. Залоговый билет составлен в двух идентичных экземплярах на государственном и русском языках,
                    по одному каждой из Сторон.<a name="SUB3390200"></a><a name="SUB3390300"></a><a
                        name="SUB3390400"></a><a name="SUB3400000"></a> В случае возникновения разночтений или
                    каких-либо несовпадений условий Залогового билета на государственном и русском языках,
                    преимущественную силу имеет текст на русском языке.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:2; orphans:2; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.18. Залоговый билет
                    и График погашения могут быть подписаны Сторонами, как собственноручной подписью, так и электронным
                    способом в соответствии с требованиями законодательства Республики Казахстан.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">6.19.<span
                        style="font-size:10pt;">&nbsp;</span>При&nbsp; финансовых расчётах, а также при составлении
                    Графиков погашения Заемщик соглашается, что применяется арифметический метод округления суммы
                    платежей (сумму тиын до 50 тиынов округлять до 0; от 50 тиын и выше округлять до 1 тенге).</p>
            </td>
        </tr>
        <tr>
            <td style=" border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                    <strong>7.</strong><strong>&nbsp;&nbsp;</strong><strong>Тараптардың деректемелері және
                        қолтаңбалары</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">
                    <strong><u>Ұйым</u></strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    <strong>&laquo;Ломбард &laquo;CreditLine&raquo; ЖШС</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    Алматы қ., Әуезов көшесі 163 А үйі, 207 т/е ор.</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    БСН 100740008000</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    ЖСК KZ196017131000031943</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    &laquo;Қазақстан Халық банкі&raquo; АҚ</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    БСК HSBKKZKX БСН (банк) &ndash; 940140000385 БЕК 15</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    электронды пошта: <a href="mailto:kfm@creditline.kz" style="text-decoration:none;"><u><span
                                style="color:#0000ff;">kfm@creditline.kz</span></u></a></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    ресми интернет ресурс: <a href="http://www.creditline.kz" style="text-decoration:none;"><u><span
                                style="color:#0000ff;">online.creditline.kz</span></u></a></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    Директор</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    Казимиров В.Б. _____________________</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    &nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;"><strong><u>Т.А.Ә.
                            Қарыз алушы</u></strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;"><u><span
                            style="">{{ $application->getFullName() }}</span></u>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; page-break-inside:avoid; font-size:12pt;">
                    <strong>&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    @php($birth_date = $application->client['birth_date'] ?? '')
                    @php($issued_by_doc = $application->client['issued_by_doc'] ?? '')
                    @php($date_doc = $application->client['date_doc'] ?? '')
                    <span style="">&quot;{{ \Carbon\Carbon::make($birth_date)->format('d') }}&quot;</span>
                    <span
                        style="">{{ \App\Enums\MonthEnum::getInTheGenetiveCase($date->month, 'kz') }} {{ \Carbon\Carbon::make($birth_date)->format('Y') }}</span>
                    ж.т.,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ЖСН
                    <span style="">{{ $application->getIin() }}</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;">
                    жеке куәлік
                    <span style="">№{{ $application->client['number_doc'] ?? '' }},</span> ҚР
                    <span style="">{{ $application->getIssuedByDocument()[$issued_by_doc] ?? '' }}</span>
                    <span style="">&nbsp;&nbsp;</span><span style="">&quot;{{ \Carbon\Carbon::make($date_doc)->format('d') }}&quot;</span>
                    <span
                        style="">{{ \App\Enums\MonthEnum::getInTheGenetiveCase(\Carbon\Carbon::make($date_doc)->month, 'kz') }} {{ \Carbon\Carbon::make($date_doc)->format('Y') }}</span>ж.
                    берілген,</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; page-break-inside:avoid; font-size:12pt;"> {{ $application->address['locality'] ?? '' }}
                    ,
                    <span style="">{{ $application->address['street'] ?? '' }}</span> көш.,&nbsp;
                    <span style="">{{ $application->address['number_home'] ?? '' }}</span> үй,
                    <span style="">{{ $application->address['apartment'] ?? '' }}</span> пәтер,</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">Whatsapp <span
                        style="">{{ $application->phone }}</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">Электр.почта
                    <span style="">{{ $application->loan['email'] ?? '' }}</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; page-break-inside:avoid; font-size:12pt;">
                    Қарыз алушы көп факторлы аутентификацияарқылы қол қойды</p>
                @php($sendSms = $application->sendSms->where('step', 14)->first() ?? null)
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">Қол қою (SMS код) :
                    <span style="">{{ $sendSms->code ?? '' }}</span></p>
            </td>
            <td style="border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>7. Реквизиты и
                        подписи сторон&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><strong>&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;"><strong><u>Организация:</u></strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;"><strong>ТОО
                        &laquo;Ломбард &laquo;CreditLine&raquo;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">г. Алматы, улица
                    Ауэзова, дом 163 А, офис 207</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">БИН
                    100740008000</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">ИИК
                    KZ196017131000031943</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">АО &laquo;Народный
                    Банк Казахстана&raquo;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">БИК HSBKKZKX</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">БИН (банка)
                    &ndash; 940140000385 КБЕ 15</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;"><a
                        href="mailto:kfm@creditline.kz" style="text-decoration:none;"><u><span style="color:#0000ff;">kfm@creditline.kz</span></u></a>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">интернет ресурс:
                    <a href="http://www.creditline.kz" style="text-decoration:none;"><u><span style="color:#0000ff;">online.creditline.kz</span></u></a>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">Директор</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">Казимиров В.Б.&nbsp;
                    _________________</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">
                    <strong>&nbsp;</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><strong>Ф.И.О. Заемщика:</strong></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;"><u><span
                            style="">{{ $application->getFullName() }}</span></u>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;"><em>&nbsp;</em>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">
                    <span style="">&quot;{{ \Carbon\Carbon::make($birth_date)->format('d') }}&quot;</span>
                    <span
                        style="">{{ \App\Enums\MonthEnum::getInTheGenetiveCase(\Carbon\Carbon::make($birth_date)->format('m'), 'ru') }}</span>
                    <span style="">&nbsp;&nbsp;</span><span
                        style=""> {{ \Carbon\Carbon::make($birth_date)->format('Y') }}</span> г.р.,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ИИН
                    <span style="">{{ $application->getIin() }}</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">удостоверение
                    личности №
                    <span style="">{{ $application->client['number_doc'] ?? '' }},</span> выдано
                    <span style="">{{ $application->getIssuedByDocument()[$issued_by_doc] ?? ''}}</span> от
                    <span style="">&quot;{{ \Carbon\Carbon::make($date_doc)->format('d') }}&quot;</span>
                    <span
                        style="">{{ \App\Enums\MonthEnum::getInTheGenetiveCase(\Carbon\Carbon::make($date_doc)->format('m')) }}</span>
                    <span style="">{{ \Carbon\Carbon::make($date_doc)->format('Y') }}</span>г.,</p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">{{ $application->address['locality'] ?? '' }}
                    , улица
                    <span style="">{{ $application->address['street'] ?? '' }},</span> дом
                    <span style="">{{ $application->address['number_home'] ?? '' }},</span> квартира
                    <span style="">{{ $application->address['apartment'] ?? '' }}.</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">Whatsapp <span
                        style="">{{ $application->phone }}</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">Электр.почта
                    <span style="">{{ $application->loan['email'] ?? '' }}</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; page-break-inside:avoid; font-size:12pt;">&nbsp;</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; page-break-inside:avoid; font-size:12pt;">
                    Подписано Заемщиком посредством многофакторной аутентификации</p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">Подпись (SMS код) :
                    <span style="">{{ $sendSms->code ?? '' }}</span></p>
            </td>
        </tr>
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Микрокредитті өтеу әдісімен,
        сонымен қатар Микрокредиттері беру қағидалары шарттарымен таныстым және келісемін. Кепіл билеттің бір данасын
        алдым./ С методом погашения Микрокредита, а также условиями Правил предоставления микрокредитов ознакомлен и
        согласен. Один экземпляр Залогового билета получил.</p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Қарыз алушы көп факторлы аутентификацияарқылы қол қойды/ Подписано Заемщиком посредством многофакторной
        аутентификации</p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">Қол қою (SMS код) : <span
            style="">{{ $sendSms->code ?? '' }}</span>/ Подпись (SMS код) : <span
            style="">{{ $sendSms->code ?? '' }}</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    <div style="clear:both;">
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    </div>
</div>
</body>
</html>
