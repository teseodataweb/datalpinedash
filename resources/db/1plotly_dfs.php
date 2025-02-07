<?php
//require_once 'conexion.php';
// Crear una instancia de la clase de conexión
require_once 'conexion.php';
$conexion = Conexion::getInstancia();
$dbh = $conexion->getDbh();

// Directorio donde se guardarán los archivos JSON
$directorio_json = 'datos_json/';
// Verificar si el directorio existe, si no, crearlo
if (!is_dir($directorio_json)) {
    mkdir($directorio_json, 0755, true);
}

// Obtener los nombres de las tablas en la base de datos "datalpine"
$consulta = "SHOW TABLES FROM datalpine";
$resultado = $dbh->query($consulta);
$tablas = $resultado->fetchAll(PDO::FETCH_COLUMN);

// Cargar cada tabla en un archivo JSON separado
foreach ($tablas as $tabla) {
    $consulta = "SELECT * FROM $tabla";
    $resultado = $dbh->query($consulta);
    $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);
    
    // Convertir los datos a formato JSON
    $json_datos = json_encode($datos);
    
    // Guardar los datos en un archivo separado (para cada tabla) en la carpeta
    $archivo_json = $directorio_json . "datos_$tabla.json";
    file_put_contents($archivo_json, $json_datos);
    
    echo "Los datos de la tabla $tabla se han guardado en el archivo $archivo_json\n";
}
?>
