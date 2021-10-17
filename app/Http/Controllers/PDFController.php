<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Carbon\Carbon;
use PDF;

class PDFController extends Controller
{

    public function index(Request $result)
    {
        $newDate = Carbon::createFromFormat('Y-m-d', $result->input('date'))->format('d F Y');
        $now = Carbon::now();
        $data = [
            'nama' => $result->input('nama'),
            'alamat' => $result->input('alamat'),
            'kota' => $result->input('kota'),
            'jabatan' => $result->input('jabatan'),
            'tanggal' => $newDate,
            'opening' => $result->input('opening'),
            'main' => $result->input('main'),
            'closing' => $result->input('closing')
        ];

        $pdf = PDF::loadView('letter', $data);
        return $pdf->download('surat-' . $now . '.pdf');
    }
}
