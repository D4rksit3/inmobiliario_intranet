<?php
require_once __DIR__ . '/../app/core/Router.php';

// Captura la URL y elimina el prefijo "/public" si está presente
$url = isset($_GET['url']) ? str_replace('/public', '', $_GET['url']) : '';
$url = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));

// Filtra cualquier entrada vacía en el array
$url = array_values(array_filter($url));

// Depuración para verificar el contenido de $url
//print_r($url);
//exit;

// Pasa la URL procesada al enrutador
Router::route($url);
