<?php
namespace App\Libraries; 

use CodeIgniter\HTTP\RequestInterface; 
use App\Models\AlumnoModel;

class ApiService
{
    protected $request;
    protected $model;

    public function __construct(RequestInterface $request)
    {
        $this->model = model('AlumnoModel');
        $this->request = $request; 
    }

    public function getAlumnos($id = null)
    {
        return $this->model->getAlumno($id); 
    }
}
