<?php include("Templates/header.php") ?>
<!-- ESTE ES EL INICIO DE LA APP -->
<div class="container"> <!-- Agregamos un contenedor para el contenido de la página -->
    <div class="welcome-message">Bienvenido</div>
    <div class="clock">
        <div class="hour-hand"></div>
        <div class="minute-hand"></div>
        <div class="second-hand"></div>
        <div class="center-circle"></div>
    </div>
</div>
<?php include("templates/footer.php") ?>

<style>
    /* Estilos CSS */
    body {
        margin: 0;
        background-color: #f0f0f0;
    }

    .container {
        display: flex;
        justify-content: space-between; /* Alineamos los elementos a los extremos */
        align-items: center; /* Centramos los elementos verticalmente */
        height: calc(10vh - 10px); /* Ajustamos la altura restando el alto del navbar */
        padding-top: 10px; /* Añadimos un poco de espacio desde la parte superior */
    }

    .welcome-message {
        font-size: 24px; /* Tamaño del texto de bienvenida */
        color: #333; /* Color del texto */
        padding-left: 20px; /* Espaciado desde la izquierda */
    }

    .clock {
        position: relative;
        width: 200px;
        height: 200px;
        border: 10px solid #333;
        border-radius: 50%;
        margin-right: 20px; /* Añadimos margen derecho */
    }

    .hour-hand,
    .minute-hand,
    .second-hand {
        position: absolute;
        background-color: #333;
        transform-origin: center bottom; /* Cambiamos el origen de la transformación */
    }

    .hour-hand {
        width: 4px;
        height: 50px;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-100%) rotate(0deg); /* Ajustamos la posición */
    }

    .minute-hand {
        width: 3px;
        height: 70px;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-100%) rotate(0deg); /* Ajustamos la posición */
    }

    .second-hand {
        width: 2px;
        height: 90px;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-100%) rotate(0deg); /* Ajustamos la posición */
    }

    .center-circle {
        position: absolute;
        width: 12px;
        height: 12px;
        background-color: #333;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<script>
    // Script JavaScript
    function setClock() {
        const hourHand = document.querySelector('.hour-hand');
        const minuteHand = document.querySelector('.minute-hand');
        const secondHand = document.querySelector('.second-hand');

        const date = new Date();
        const hours = date.getHours() % 12; // Convertir a formato de 12 horas
        const minutes = date.getMinutes();
        const seconds = date.getSeconds();

        const hourDegrees = (hours * 30) + (0.5 * minutes); // 30 degrees per hour, 0.5 degrees per minute
        const minuteDegrees = (minutes * 6) + (0.1 * seconds); // 6 degrees per minute, 0.1 degrees per second
        const secondDegrees = seconds * 6; // 6 degrees per second

        hourHand.style.transform = `translateX(-50%) translateY(-100%) rotate(${hourDegrees}deg)`; // Ajustamos la transformación
        minuteHand.style.transform = `translateX(-50%) translateY(-100%) rotate(${minuteDegrees}deg)`; // Ajustamos la transformación
        secondHand.style.transform = `translateX(-50%) translateY(-100%) rotate(${secondDegrees}deg)`; // Ajustamos la transformación
    }
    setInterval(setClock, 1000); // Actualizar cada segundo
    setClock(); // Llamar inmediatamente para establecer la hora correcta al cargar
</script>
