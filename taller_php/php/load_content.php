<?php
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
    switch ($seccion) {
        case 'cifrar_digitos':
            include 'cifrador_digito.php'; // Carga el contenido para cifrar dígitos
            break;
        case 'primos_inician_1':
            include 'primos_inician_1.php'; // Carga el contenido para Primos que inician en 1
            break;
        default:
            echo "<h1>Hecho por:</h1> <br> Juan Sebastian Sanchez Nova <br> David Esteban Diaz Arguello "; // Carga el contenido principal
            break;
    }
} else {
    echo "Error :/"; // Carga el contenido principal
}
?>
