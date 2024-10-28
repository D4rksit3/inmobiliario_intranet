<?php
class Router {
    public static function route($url) {
        // Primer valor de la URL será el controlador
        $controllerName = ucfirst($url[0]) . 'Controller';
        
        // Segundo valor será el método (si está disponible)
        $action = isset($url[1]) ? $url[1] : 'index';

        // Parámetros adicionales en la URL
        $params = array_slice($url, 2);

        // Verificar si el archivo del controlador existe
        if (file_exists(__DIR__ . '/../controllers/' . $controllerName . '.php')) {
            require_once __DIR__ . '/../controllers/' . $controllerName . '.php';
            $controller = new $controllerName();

            // Verificar si el método existe en el controlador
            if (method_exists($controller, $action)) {
                // Llamar al método del controlador con parámetros
                call_user_func_array([$controller, $action], $params);
            } else {
                echo "Método {$action} no encontrado en el controlador {$controllerName}.";
            }
        } else {
            echo "Controlador {$controllerName} no encontrado.";
        }
    }
}
