<?php

namespace App\Controllers;

use App\Models\LoteModel;
use CodeIgniter\Controller;

class LoteController extends Controller
{
    public function index()
    {
        // Muestra la vista del formulario
        return view('registroLot');
    }
    
    public function guardarLote()
    {
        // Validaciones
        $rules = [
            'lote' => 'required|numeric',
            'fecha' => 'required|valid_date',
            'cantidad' => 'required|numeric',
            'peso_inicial' => 'required|numeric'
        ];
        
        if (!$this->validate($rules)) {
            // Retornar a la vista del formulario con errores
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        // Obtener datos 
        $data = [
            'numero_lote' => $this->request->getPost('lote'),
            'fecha_ingreso' => $this->request->getPost('fecha'),
            'cantidad_pollos' => $this->request->getPost('cantidad'),
            'peso_promedio' => $this->request->getPost('peso_inicial'),
        ];
        
        // Guardar el lote
        $loteModel = new LoteModel();
        $loteModel->insert($data);
        
        return redirect()->to('/registroLot')->with('success', 'Lote guardado correctamente');
    }
    public function registroLot() {
        return view('registroLot');
    }


    public function visualizacionLotes() {
    
        $loteModel = new LoteModel();
        $data['lotes'] = $loteModel->findAll();

        $data['view_content'] = view('visualizacionLote', $data);
        $data['current_view'] = 'visualizacionLote'; // ← Agrega esta línea
        return view('visualizacionLote');

        }
}