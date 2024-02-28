<h1>Numeros PRIMOOOOOOS >:V</h1>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  Ingrese su numero: <input type="number" name="numero">
  <input type="submit">
</form>
<?php
function esPrimo($num) {
    if ($num == 1) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) return false;
    $ceil = ceil(sqrt($num));
    for($i = 3; $i <= $ceil; $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }
    return true;
}

function primosQueEmpiezanPorUno($n) {
    $contador = 0;
    for($i = 1; $i <= $n; $i++) {
        if (esPrimo($i) && substr((string)$i, 0, 1) == '1') {
            $contador++;
        }
    }
    return $contador;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    if (filter_var($numero, FILTER_VALIDATE_INT, array("options" => array("min_range"=>1, "max_range"=>2000000)))) {
        $resultado = primosQueEmpiezanPorUno($numero);
        echo "<script>alert('Hay " . $resultado . " números primos que empiezan por 1 y son menores o iguales a " . $numero . "');</script>";
    } else {
        echo "<script>alert('Por favor, ingresa un número entero entre 1 y 2000000.');</script>";
    }
}
?>
