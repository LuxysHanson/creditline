<?php

namespace App\Listeners;

use App\Events\ApplicationUpdatedEvent;
use App\Models\Application;
use App\Services\BitrixService;
use Barryvdh\DomPDF\Facade\Pdf;
use File;
use Illuminate\Contracts\Queue\ShouldQueue;
use Str;
use Illuminate\Support\Facades\Log;
class SyncBitrixListener implements ShouldQueue
{
    public const CRM_FIELDS = [
        'name' => 'UFM_CRM_NAME',
        'patronymic' => 'UFM_CRM_LAST_NAME',
        'surname' => 'UF_CRM_SECOND_NAME',
        'birth_date' => 'UF_CRM_1699987191588',
        'additional_phone' => 'UF_CRM_1699807073186',
        'deadline' => 'UF_CRM_1697043016244',
        'repayment_type' => 'UF_CRM_1697043046445',
        'payment' => 'UF_CRM_1697043086714',
        'iban' => 'UF_CRM_1697043249063',
        'monthly_pay' => 'UF_CRM_1697043069491',
        'email' => 'UF_CRM_EMAIL_MAILING',
        'iin' => 'UF_CRM_1697042489482',
        'summa' => 'UF_CRM_1697042993350',
        'stage' => 'STAGE_ID',
        'year' => 'UF_CRM_1697095234641',
        'color' => 'UF_CRM_1697095251398',
        'number' => 'UF_CRM_1697095264295',
        'vin' => 'UF_CRM_1697095280945',
        'brand' => 'UF_CRM_1699811440014',
        'model' => 'UF_CRM_1697095201473',
        'tech_password' => 'UF_CRM_1697095299913',
        'tech_date' => 'UF_CRM_1697095314657',
        'doc_type' => 'UF_CRM_1697095504282',
        'selfie' => 'UF_CRM_1697095585048',
        'sms_2' => 'UF_CRM_1699806985731',
        'latitude' => 'UF_CRM_1699983391221',
        'longitude' => 'UF_CRM_1699983382179',
        'id_cart' => [
            'front' => 'UF_CRM_1697095546685',
            'back' => 'UF_CRM_1697095570750',
        ],
        'tech_passport' => [
            'front' => 'UF_CRM_1697096699803',
            'back' => 'UF_CRM_1697096724771'
        ],
        'car' => [
            'front_left' => 'UF_CRM_1697096743870',
            'front_right' => 'UF_CRM_1697096819099',
            'back_left' => 'UF_CRM_1697096841752',
            'back_right' => 'UF_CRM_1697096867031',
            'speedometer' => 'UF_CRM_1697096892863',
            'vin' => 'UF_CRM_1697096913885',
        ]
    ];
    protected BitrixService $bitrixService;

    public function __construct(BitrixService $bitrixService)
    {
        $this->bitrixService = $bitrixService;
    }

    public function handle(ApplicationUpdatedEvent $event): void
    {
        $application = $event->application;
        $request = $event->request;
        $data = $request['data'] ?? null;
        $currentStep = (int)$request['step'] - 1;
       // Log::debug($currentStep);
        match ($currentStep) {
            3, 2 => $this->sendCreditInfo($data, $application->bitrix_id),
            4 => $this->sendCarInfo($data, $application->bitrix_id),
            5 => $this->sendDocumentPhoto($data, $application),
            6 => $this->sendSelfInfo($data, $application),
            7 => $this->sendLocationInfo($data, $application->bitrix_id),
            8 => $this->signApplication($application, $application->bitrix_id),
            9 => $this->sendDocuments($application),
            10 => $this->sendTechPassport($data, $application->bitrix_id),
            11 => $this->goToCarPhoto($application->bitrix_id),
            12 => $this->sendCarPhoto($data, $application->bitrix_id),
            13 => $this->step13($application->bitrix_id),
            14 => $this->sendDocuments2($application),
            default => null,
        };
    }

    public function sendCreditInfo(array $data, int $id)
    {
        $repaymentTypes = [211, 212];
        return $this->updateDeal($id, [
            self::CRM_FIELDS['iin'] => $this->replace('-', $data['iin']),
            self::CRM_FIELDS['summa'] => $this->replace(['₸', ' '], $data['summa']),
            'OPPORTUNITY' => $this->replace(['₸', ' '], $data['summa']),
            'CURRENCY_ID' => 'KZT',
            self::CRM_FIELDS['sms_2'] => 411,
            self::CRM_FIELDS['monthly_pay'] => $this->replace(['₸', ' '], $data['monthly_pay']),
            self::CRM_FIELDS['payment'] => $this->replace(['₸', ' '], $data['payment']),
            self::CRM_FIELDS['repayment_type'] => $repaymentTypes[(int)$data['repayment_type'] - 1],
            self::CRM_FIELDS['deadline'] => $data['deadline'],
            self::CRM_FIELDS['additional_phone'] => $data['additional_phone'],
            self::CRM_FIELDS['email'] => $data['email'],
            self::CRM_FIELDS['iban'] => $data['iban'],
            self::CRM_FIELDS['stage'] => 'C4:NEW',
        ]);
    }

    public function updateDeal(int $id, array $data)
    {
        return $this->bitrixService->request('crm.deal.update', [
            'id' => $id,
            'fields' => $data,
        ]);
    }

    public function replace($search, $data): array|string
    {
        return trim(str_replace($search, '', $data));
    }

    public function sendCarInfo(array $data, int $id)
    {
        return $this->updateDeal($id, [
            self::CRM_FIELDS['brand'] => $data['brand'],
            self::CRM_FIELDS['model'] => $data['model'],
            self::CRM_FIELDS['year'] => $data['year'],
            self::CRM_FIELDS['color'] => $data['color'],
            self::CRM_FIELDS['stage'] => 'C4:PREPARATION',
            self::CRM_FIELDS['number'] => Str::upper($data['number']),
            self::CRM_FIELDS['vin'] => Str::upper($data['vin']),
            self::CRM_FIELDS['tech_password'] => Str::upper($data['tech_password']),
            self::CRM_FIELDS['tech_date'] => $data['tech_date'],
        ]);
    }

    public function sendDocumentPhoto(array $data, Application $application)
    {
        $docType = (int)$data['doc_type'];
        if ($docType === 1) {
            $data = [
                self::CRM_FIELDS['doc_type'] => 302,
                self::CRM_FIELDS['stage'] => 'C4:PREPAYMENT_INVOICE',
                self::CRM_FIELDS['id_cart']['front'] => $this->prepareFile($data['front_side']),
                self::CRM_FIELDS['id_cart']['back'] => $this->prepareFile($data['back_side']),
                self::CRM_FIELDS['selfie'] => $this->prepareFile($data['selfie']),
                self::CRM_FIELDS['latitude'] => $application->getLatitude(),
                self::CRM_FIELDS['longitude'] => $application->getLongitude(),
            ];
        } else {
            $data = [
                self::CRM_FIELDS['doc_type'] => 303,
                self::CRM_FIELDS['stage'] => 'C4:PREPAYMENT_INVOICE',
                self::CRM_FIELDS['id_cart']['front'] => $this->prepareFile($data['passport']),
                self::CRM_FIELDS['selfie'] => $this->prepareFile($data['with_passport']),
                self::CRM_FIELDS['latitude'] => $application->getLatitude(),
                self::CRM_FIELDS['longitude'] => $application->getLongitude(),
            ];
        }
        return $this->updateDeal($application->bitrix_id, $data);
    }

    public function prepareFile(?string $path): array
    {
        if (!$path) {
            return [];
        }

        $fileName = basename($path);
        $fullPath = public_path($path);
        $fileData = File::get($fullPath);

        return [
            'fileData' => [
                $fileName,
                base64_encode($fileData)
            ]
        ];
    }

    public function sendSelfInfo(array $data, Application $application)
    {
        $familyStatuses = [304, 305, 306];
        $client = $this->bitrixService->request('crm.contact.add', [
            'fields' => [
                'NAME' => $data['name'],
                'LAST_NAME' => $data['patronymic'],
                'SECOND_NAME' => $data['surname'],
                'BIRTHDATE' => $data['birth_date'],
                'OPENED' => 'Y',
                'TYPE_ID' => 'CLIENT',
                'PHONE' => [
                    [
                        'VALUE' => $application->phone,
                        'VALUE_TYPE' => 'WORK',
                    ],
                    [
                        'VALUE' => $application->loan['additional_phone'],
                        'VALUE_TYPE' => 'OTHER',
                    ],
                ],
                'EMAIL' => [
                    [
                        'VALUE' => $application->loan['email'],
                        'VALUE_TYPE' => 'WORK',
                    ],
                ],
                'UF_CRM_1582523108970' => 123,
                'UF_CRM_1697096142676' => ((int)$data['citizienship']) === 0 ? 307 : 308,
                'UF_CRM_1697095920753' => $familyStatuses[(int)$data['family_status']],
                'UF_CRM_1699805900834' => $data['citizienship'],
            ]
        ]);

        $application->update([
            'client' => array_merge($application->client, ['bitrix_id' => $client->result])
        ]);
        if($data['issued_by_doc']==0){
            $issued_by_doc='МВД РК';
        }
        else{
            $issued_by_doc='МЮ РК';
        }
        $this->updateDeal($application->bitrix_id, [
            'UF_CRM_1699805636633' => $data['number_doc'],
            'UF_CRM_1699805763760' => $data['date_doc'],
            'UF_CRM_1699805803279' => $data['date_doc2'],
            'UF_CRM_1699805867897' => $issued_by_doc,
            self::CRM_FIELDS['stage'] => 'C4:EXECUTING',
        ]);
        return $this->bitrixService->request('crm.deal.contact.add', [
            'id' => $application->bitrix_id,
            'fields' => [
                'CONTACT_ID' => $client->result,
                'IS_PRIMARY' => 'Y'
            ]
        ]);
    }

    public function sendLocationInfo(array $data, int $id)
    {
        return $this->updateDeal($id, [
            'UF_CRM_1699805986126' => $data['locality'],
            'UF_CRM_1699806003453' => $data['street'],
            'UF_CRM_1699806015191' => $data['number_home'],
            'UF_CRM_1699806030716' => $data['apartment'],
            self::CRM_FIELDS['stage'] => 'C4:FINAL_INVOICE',
            'UF_CRM_1699806062787' => $data['locality2'],
            'UF_CRM_1699806073568' => $data['street2'],
            'UF_CRM_1699806082935' => $data['number_home2'],
            'UF_CRM_1699806094733' => $data['apartment2'],
        ]);
    }
    public function signApplication(Application $application, int $id)
    {
        return $this->updateDeal($id, [
            self::CRM_FIELDS['stage'] => 'C4:UC_0SBHI4',
            'UF_CRM_1698856510880' => $this->preparePdf($application, 'questionnaire'),
            'UF_CRM_1698856532766' => $this->preparePdf($application, 'consent'),
            'UF_CRM_1698856564350' => $this->preparePdf($application, 'agreement'),
            'UF_CRM_1699807755232' => 414
        ]);
    }

    public function sendDocuments(Application $application)
    {
        Log::debug('Отправка документов');
        return $this->updateDeal($application->bitrix_id, [
            self::CRM_FIELDS['stage'] => 'C4:UC_0SBHI4',
            //'UF_CRM_1699807755232' => $application->sendSms()->where('step', 9)
            'UF_CRM_1699807755232' => 413
        ]);
    }

    public function preparePdf(Application $application, $type): array
    {
        $html = view('pdf.' . $type, compact('application'))->render();
        $pdf = Pdf::loadHTML($html);

        $fileName = "pdf-$type-" . date('Y-m-d H_i') . '.pdf';

        return [
            'fileData' => [
                $fileName,
                base64_encode($pdf->output())
            ]
        ];
    }

    public function sendTechPassport(array $data, int $id)
    {
        return $this->updateDeal($id, [
            self::CRM_FIELDS['tech_passport']['front'] => $this->prepareFile($data['front_side']),
            self::CRM_FIELDS['tech_passport']['back'] => $this->prepareFile($data['back_side']),
            self::CRM_FIELDS['stage'] => 'C4:UC_YDG61O',
        ]);
    }

    public function goToCarPhoto(int $id)
    {
        return $this->updateDeal($id, [
            self::CRM_FIELDS['stage'] => 'C4:UC_BXMHPO',
        ]);
    }
    public function sendCarPhoto(array $data, int $id)
    {
        return $this->updateDeal($id, [
            self::CRM_FIELDS['car']['front_left'] => $this->prepareFile($data['auto1']),
            self::CRM_FIELDS['car']['front_right'] => $this->prepareFile($data['auto2']),
            self::CRM_FIELDS['car']['back_left'] => $this->prepareFile($data['auto3']),
            self::CRM_FIELDS['car']['back_right'] => $this->prepareFile($data['auto4']),
            self::CRM_FIELDS['car']['speedometer'] => $this->prepareFile($data['auto5']),
            self::CRM_FIELDS['car']['vin'] => $this->prepareFile($data['auto6']),
            self::CRM_FIELDS['stage'] => 'C4:UC_ZPY6IR',
        ]);
    }

    private function step13($id)
    {
        return $this->updateDeal($id, [
            self::CRM_FIELDS['stage'] => 'C4:UC_ZPY6IR',
        ]);
    }

    private function sendDocuments2(Application $application)
    {
        return $this->updateDeal($application->bitrix_id, [
            'UF_CRM_1699808399638' => 417,
            'UF_CRM_1698856594199' => $this->preparePdf($application, 'repayment_schedule'),
            'UF_CRM_1698856602343' => $this->preparePdf($application, 'pledge_ticket'),
            'UF_CRM_1698856611019' => $this->preparePdf($application, 'notification'),
            self::CRM_FIELDS['stage'] => 'C4:WON',
        ]);
    }


}
