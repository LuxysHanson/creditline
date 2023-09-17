<?php

namespace App\Http\Controllers;

use App\Enums\PdfTemplatesEnum;
use App\Models\Application;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function index(Request $request)
    {

        $doc_type = $request->route('type');
        if (!PdfTemplatesEnum::keyExists($doc_type)) {
            abort(404);
        }

        $application = Application::query()
            ->where('id_hash', $request->route('hash'))
            ->firstOrFail();

//        ini_set('max_execution_time', 45);
        $html = view('pdf.'. $doc_type, compact('application'))->render();
        $pdf = Pdf::loadHTML($html);
        return $pdf->stream("pdf-$doc_type-". date('Y-m-d H_i') .".pdf");
    }

}
