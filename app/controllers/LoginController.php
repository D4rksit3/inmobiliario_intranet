<?php

class LoginController {
    
    public function login() {
        // Cargar la vista de login
        require_once __DIR__ . '/../views/intranet/login.php';
    }

    public function authenticate() {
        session_start();

        // Credenciales simuladas
        $correct_username = "admin";
        $correct_password = "1234";

        // Obtener los datos del formulario
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verificar las credenciales
        if ($username === $correct_username && $password === $correct_password) {
            $_SESSION['authenticated'] = true;
            // Redirigir al dashboard
            header('Location: /public/intranet/dashboard');
        } else {
            echo "Usuario o contraseña incorrectos. <a href='/public/intranet/login'>Intentar de nuevo</a>";
        }
    }

    public function logout() {
        // Cerrar sesión
        session_start();
        session_destroy();
        // Redirigir al login después de cerrar sesión
        header('Location: /public/intranet/login');
    }
}
