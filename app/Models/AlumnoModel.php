<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Alumno'; 
    protected $primaryKey       = 'idPersona'; 
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = []; 

    // Dates
    protected $useTimestamps = false; // Puedes habilitar los timestamps si es necesario
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        // Define reglas de validación si es necesario
    ];
    protected $validationMessages   = [
        // Define mensajes de validación si es necesario
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

        //Obtener un alumno por ID
        public function getAlumno($id = null)
        {
            return $id ? $this->find($id) : $this->findAll();
        }
   
       //Insertar un nuevo alumno
       public function insertarAlumno($data)
       {
           return $this->insert($data);
       }
}
