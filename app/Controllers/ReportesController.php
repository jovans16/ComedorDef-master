<?php

namespace App\Controllers;
use App\Models\ReportesModel;

class ReportesController extends BaseController
{
    public function Reportes()
    {
        $modelo = new ReportesModel();
        $datos['Reportes'] = $modelo->obtenerReportes();
        return view('Reportes', $datos);
    }
    
}


