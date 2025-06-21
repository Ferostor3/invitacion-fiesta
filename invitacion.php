<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Invitación Exclusiva</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700italic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400" rel="stylesheet">
</head>

<body>
    <div id="logo">
        <h1><i>BLACKOUT NIGHT</i></h1>
    </div>

    <section class="stark-login">
        <div class="invitacion-container">
            <div class="invitacion-content" style="opacity: 0; animation: fade-in 1s ease-in forwards 2s;">
                <h2>INVITACIÓN EXCLUSIVA</h2>
                <p>Hola <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>,</p>
                <p>Estás cordialmente invitad@ a mi fiesta de cumpleaños y la peda masiva.</p>

                <div class="fecha">
                    SÁBADO 30 DE AGOSTO<br>
                    07:00 PM
                </div>

                <p>Lugar: <a href="https://maps.app.goo.gl/mjeUUM9dFTwJCTZc7" target="_blank"
                        style="color: #00fffc; text-decoration: underline;">
                        Ubicación de casa
                    </a><br>
                    Dirección: Calle Tulipan mz: 8, lt: 12, 53696</p>

                <div class="codigo-vestimenta">
                    <p>Código de vestimenta:</p>
                    <p>Color negro</p>
                </div>

                <p>Confirmar asistencia al:<br>
                    +52 55 2199 7737</p>

                <p class="nota-especial">¡No faltes! Será una noche inolvidable</p>

                <p class="nota-especial">Recuerda traer bebida para que dure más la fiesta</p>

                <a href="logout.php" class="btn-logout">Cerrar Sesión</a>
            </div>
        </div>

        <div class="hexagons">
            <span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span>
            <span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span>
            <br>
            <span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span>
            <span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span>
            <br>
            <span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span>
            <span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span>
            <br>
            <span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span>
            <span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span>
            <br>
            <span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span>
            <span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span><span>&#x2B22;</span>
        </div>
    </section>

    <div id="circle1">
        <div id="inner-cirlce1">
            <h2></h2>
        </div>
    </div>
</body>

</html>