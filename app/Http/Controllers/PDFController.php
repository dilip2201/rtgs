<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
	public function download()
	{

		define("DOMPDF_UNICODE_ENABLED", true);
		$data = array();
		$pdf = PDF::setPaper('a4', 'portrait')->loadView('page', $data);
		return $pdf->stream('icic.pdf');
	}
    
}
