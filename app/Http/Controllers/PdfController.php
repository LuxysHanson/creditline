<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function index(Request $request)
    {
        $type = $request->get('type');
//        ini_set('max_execution_time', 45);
        $html = view('pdf.'. $type)->render();
        $pdf = Pdf::loadHTML($html);
        return $pdf->stream("pdf-$type-". date('Y-m-d H_i') .".pdf");
    }

}
