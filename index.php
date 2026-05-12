<?php
/* WebFusion Digital S.L. - Página principal */

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>WebFusion Digital S.L.</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background: #1e3a8a;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        .box {
            background: white;
            padding: 20px;
            margin: auto;
            width: 60%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        footer {
            margin-top: 40px;
            padding: 10px;
            text-align: center;
            background: #333;
            color: white;
        }
    </style>
</head>

<body>

<header>
    <h1>WebFusion Digital S.L.</h1>
    <p>Despliegue automatizado con Vagrant + Docker + GitHub</p>
</header>

<main>
    <div class="box">
        <h2>Bienvenido</h2>
        <p>Esta es la página principal del sistema desplegado automáticamente.</p>
        <p>El contenido se actualiza desde GitHub con <strong>vagrant provision</strong>.</p>
    </div>
</main>

<footer>
    © 2026 WebFusion Digital S.L.
</footer>

</body>
</html>
