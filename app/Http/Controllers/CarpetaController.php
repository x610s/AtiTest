<?php

namespace App\Http\Controllers;

use App\Models\ActualizacionTributaria;
use App\Models\Carpeta;
use App\Models\EstadoFinanciero;
use App\Models\subcarpetas;


class CarpetaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $subcarpetas = subcarpetas::with('estadoFinanciero','actualizacionTributaria')->get();
        return view('pages.carpetas',compact('subcarpetas'));
    }

    public function show($id)
    {
        //
    }

    public function showAt($id)
    {
        $at = ActualizacionTributaria::findOrFail($id);
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('streams.at',compact('at'));
        return $pdf->stream();
    }


    public function showEf($id)
    {
    return $ef= EstadoFinanciero::findOrFail($id);
  /*  $ef = ActualizacionTributaria::findOrFail($id);
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('pdf.ef',compact('ef'));
    return $pdf->stream();
 */
    }



}
