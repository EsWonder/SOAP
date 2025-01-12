<?php
// Habilitar la visibilidad de errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // Configuración de opciones del cliente SOAP
    $options = [
        'trace' => 1,  // Habilitar trazas para depuración
        'cache_wsdl' => WSDL_CACHE_NONE,  // Evitar problemas con la caché
    ];

    // Crear el cliente SOAP
    $client = new SoapClient("http://localhost:8000/soap-server.php?wsdl", $options);

    // Llamar al método 'sayHello' del servicio SOAP
    $response = $client->sayHello("World");

    // Mostrar la respuesta del servidor
    echo "<h1>Respuesta del servidor:</h1>";
    echo "<p>$response</p>";
} catch (SoapFault $fault) {
    // Manejar errores de SOAP
    echo "<h1>Error:</h1>";
    echo "<p>{$fault->faultstring}</p>";
}
?>
