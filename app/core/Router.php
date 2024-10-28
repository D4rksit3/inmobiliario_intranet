<?php
class Router {
    public static function route($url) {
        // Verifica si es una ruta de archivo estático en la carpeta "public"
        if (file_exists(__DIR__ . '/../public/' . implode('/', $url))) {
            // Devuelve el archivo como respuesta
            header('Content-Type: ' . mime_content_type(__DIR__ . '/../public/' . implode('/', $url)));
            readfile(__DIR__ . '/../public/' . implode('/', $url));
            return;
        }

        // Resto del código del enrutador para controladores y métodos
        if (empty($url) || $url[0] === '') {
            $controllerName = 'HomeController';
            $action = 'index';
        } else {
            $controllerName = ucfirst($url[0]) . 'Controller';
            $action = isset($url[1]) ? $url[1] : 'index';
        }

    //    echo "Controlador: $controllerName, Método: $action<br>"; // Depuración

        // Verificar si el archivo del controlador existe
        if (file_exists(__DIR__ . '/../controllers/' . $controllerName . '.php')) {
//            echo "Cargando controlador: {$controllerName}.php<br>"; // Depuración
            require_once __DIR__ . '/../controllers/' . $controllerName . '.php';
            $controller = new $controllerName();

            // Verificar si el método existe en el controlador
            if (method_exists($controller, $action)) {
  //              echo "Llamando al método: {$action} en {$controllerName}<br>"; // Depuración
                call_user_func_array([$controller, $action], array_slice($url, 2));
            } else {
                echo "Método {$action} no encontrado en el controlador {$controllerName}.";
            }
        } else {
            echo "Controlador {$controllerName} no encontrado.";
        }
    }
}

