
<?php
    // Carga las variables de entorno desde el archivo .ini
    $env = parse_ini_file('C:/sites/.env.ini');

    // Preparación de variables de entorno para la conexión a la base de datos
    $db_host = $env['DB_HOST'];
    $db_name = $env['DB_NAME'];
    $db_password = $env['DB_PASSWORD'];
    $db_user = $env['DB_USER'];

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die('Error de Conexión (' . $conn->connect_errno . ') '
                . $conn->connect_error);
    } else {
        echo 'Conexión correcta a ' . $conn->host_info . "\n";
    }
?>