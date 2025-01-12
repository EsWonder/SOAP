<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Función del servicio
function sayHello($name) {
    return "Hello, " . $name . "!";
}

// Configuración del servidor SOAP
$server = new SoapServer("soap.wsdl"); // Ruta al archivo WSDL
$server->addFunction("sayHello"); // Agregamos la función al servidor
$server->handle(); // Procesa las solicitudes
?>
