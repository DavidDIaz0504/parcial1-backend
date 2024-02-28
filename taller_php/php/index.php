<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cifrador_estilos.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/8.15.0/jquery.min.js"></script>
    <title>Ejemplos de Programación</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("/Images/background.jpg");
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .navbar {
            background-color: #111316;
            margin-bottom: 20px;
        }

        .navbar .nav-link {
            color: #ffffff;
        }

        .navbar .nav-link:hover {
            color: #ffffff;
        }

        .navbar .active {
            color: #ffffff !important;
        }

        .content-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" onclick="loadContent('')">Menú Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="loadContent('cifrar_digitos')">Cifrando Dígitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="loadContent('primos_inician_1')">Primos que inician</a>
                    </li>
                    <!-- Agrega más elementos del menú aquí -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container content-container" id="dynamicContent">
        <!-- Contenido dinámico se cargará aquí -->
    </div>

    <!-- Bootstrap JavaScript y Popper.js (necesarios para los componentes de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-mTm3Yv3cY5Fjsq6f3nT4zDJD5IcC3VUNq6V56yYAHdFubYlwTt8z4h7fsyXlFUz0" crossorigin="anonymous"></script>

    <!-- Tu script JavaScript para cargar contenido -->
    <script>
        function loadContent(seccion) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("dynamicContent").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "load_content.php?seccion=" + seccion, true);
            xhttp.send();
        }
    </script>
</body>

</html>
