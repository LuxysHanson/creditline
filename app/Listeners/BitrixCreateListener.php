<?php

namespace App\Listeners;

use App\Events\ApplicationCreatedEvent;
use App\Services\BitrixService;

class BitrixCreateListener
{
    private BitrixService $bitrixService;

    public function __construct(BitrixService $bitrixService)
    {
        $this->bitrixService = $bitrixService;
    }

    public function handle(ApplicationCreatedEvent $event): void
    {
        $response = $this->bitrixService->request('crm.deal.add', [
            'fields' => [
                // CRM
                'TITLE' => 'Новая сделка №'.$event->application->id,
                'STAGE_ID' => 'C4:UC_3Q6REZ',
                'CATEGORY_ID' => 4,
                // Client
                'UF_CRM_1582875801909' => $event->application->phone,
                'UF_CRM_PHONE_MOBILE' => $event->application->phone,
            ]
        ]);

        $event->application->update([
            'bitrix_id' => $response->result
        ]);
    }
}
