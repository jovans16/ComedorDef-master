<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class AuthController extends Controller {
    
    protected $session;

    public function __construct() {
        $this->session = \Config\Services::session();
    }
    
    public function register() {
        return view('register');
    }

    public function create() {
        $model = new UsuarioModel();
        
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'correo' => $this->request->getPost('correo'),
            'contraseña' => password_hash($this->request->getPost('contraseña'), PASSWORD_DEFAULT),
        ];

        if ($model->save($data)) {
            return redirect()->to('/login')->with('success', 'Usuario registrado con éxito');
        } else {
            return redirect()->to('/register')->with('fail', 'Error al registrar el usuario');
        }
    }

    public function login() {
        return view('login');
    }

    public function authenticate() {
        $model = new UsuarioModel();
        $correo = $this->request->getPost('correo');
        $contraseña = $this->request->getPost('contraseña');
        
        $usuario = $model->where('correo', $correo)->first();

        if (!$usuario) {
            return redirect()->to('/login')->with('fail', 'El usuario no está registrado');
        }

        if (password_verify($contraseña, $usuario['contraseña'])) {
            $sessionData = [
                'usuario_id' => $usuario['id'],
                'usuario_nombre' => $usuario['nombre'],
                'logged_in' => TRUE
            ];
            $this->session->set($sessionData);
            return redirect()->to('/PagPrincipal');
        } else {
            return redirect()->to('/login')->with('fail', 'Contraseña incorrecta');
        }
    }
    
    public function logout() {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Sesión cerrada con éxito');
    }

    public function PagPrincipal() {
        return view('PagPrincipal');
    }

    public function Reportes() {
        return view('Reportes');
    }
    
    public function ayuda() {
        return view('ayuda');
    }

    public function Manual() {
        return view('manual');
    }
}