<?php
error_reporting(E_ERROR | E_PARSE);

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número ingresado
  echo  $numeroReal = $_POST["cuatroNumeros"];
    
    // Dividir el número en sus dígitos
    $numeroDividido = str_split($numeroReal);

    // Realizar el cifrado para cada dígito
    $numero1 = ($numeroDividido[0] + 7) % 10;
    $numero2 = ($numeroDividido[1] + 7) % 10;
    $numero3 = ($numeroDividido[2] + 7) % 10;
    $numero4 = ($numeroDividido[3] + 7) % 10;

    // Formar el nuevo número cifrado
    $nuevoNumero = [$numero3, $numero4, $numero1, $numero2];
    $numeroCifrado = implode($nuevoNumero);

    // Mostrar el resultado dinámicamente en un <h1>
    echo $numeroCifrado;

    // Terminar el script para evitar más salida
    exit();
}
?>

<!-- Código HTML del formulario para cifrar dígitos -->
<div class="container">
    <h1>Cifrador de dígitos</h1>
    <h3>Ingrese los 4 dígitos </h3>

    <form id="cifradorForm">
        <input type="text" id="cuatroNumeros" name="cuatroNumeros">
        <button type="button" onclick="postData()">Enviar</button>
    </form>

    <div id="resultadoCifrado">
        <h1>hola</h1>
    </div>
</div>

<script>
    function postData() {
        var numero = document.getElementById("cuatroNumeros").value;
        var data = new FormData();
        data.append('cuatroNumeros', numero);

        fetch('cifrador_digito.php', {
                method: 'POST',
                body: data
            })
            .then(response => response.text())
            .then(result => {
                // Crear un nuevo elemento <h1> para mostrar el resultado
                var nuevoH1 = document.createElement("h1");
                nuevoH1.textContent = "El número cifrado es: " + result;

                // Obtener el div donde se mostrará el resultado y agregar el nuevo <h1>
                var resultadoDiv = document.getElementById("resultadoCifrado");
                resultadoDiv.innerHTML = ""; // Limpiar el contenido previo
                resultadoDiv.appendChild(nuevoH1);
                console.log(result)
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>
