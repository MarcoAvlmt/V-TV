<?php include("Templates/header.php") ?>
<!-- ESTE ES EL INICIO DE LA APP -->
<div class="container"> <!-- Agregamos un contenedor para el contenido de la página -->
    <div class="MensajeBienvenida">Bienvenido a V+TV</div>
    <div class="clocks-container">
        <div class="clock">
            <div class="hour-hand"></div>
            <div class="minute-hand"></div>
            <div class="second-hand"></div>
            <div class="center-circle"></div>
        </div>
        <div class="digital-clock"></div> <!-- Reloj digital -->
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
        height: calc(50vh - 10px); /* Ajustamos la altura restando el alto del navbar */
        padding-top: 10px; /* Añadimos un poco de espacio desde la parte superior */
    }

    .MensajeBienvenida {
        font-size: 30px; /* Tamaño del texto de bienvenida */
        color: #333; /* Color del texto */
        padding-left: 20px; /* Espaciado desde la izquierda */
    }

    .clocks-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 20px; /* Añadimos margen derecho */
    }

    .clock {
        position: relative;
        width: 200px;
        height: 200px;
        border: 10px solid #333;
        border-radius: 50%;
        margin-bottom: 20px; /* Espacio debajo del reloj */
    }

    .hour-hand,
    .minute-hand,
    .second-hand {
        position: absolute;
        background-color: #333;
        transform-origin: center bottom;
    }

    .hour-hand {
        width: 4px;
        height: 50px;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-100%) rotate(0deg);
    }

    .minute-hand {
        width: 3px;
        height: 70px;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-100%) rotate(0deg);
    }

    .second-hand {
        width: 2px;
        height: 90px;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-100%) rotate(0deg);
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

    .digital-clock {
        font-size: 24px; /* Tamaño del texto del reloj digital */
        color: #333; /* Color del texto */
    }
</style>

<script>
    function setClock() {
        const hourHand = document.querySelector('.hour-hand');
        const minuteHand = document.querySelector('.minute-hand');
        const secondHand = document.querySelector('.second-hand');
        const digitalClock = document.querySelector('.digital-clock');

        const date = new Date();
        const hours = date.getHours();
        const minutes = date.getMinutes();
        const seconds = date.getSeconds();

        const hourDegrees = ((hours % 12) * 30) + (0.5 * minutes);
        const minuteDegrees = (minutes * 6) + (0.1 * seconds);
        const secondDegrees = seconds * 6;

        hourHand.style.transform = `translateX(-50%) translateY(-100%) rotate(${hourDegrees}deg)`;
        minuteHand.style.transform = `translateX(-50%) translateY(-100%) rotate(${minuteDegrees}deg)`;
        secondHand.style.transform = `translateX(-50%) translateY(-100%) rotate(${secondDegrees}deg)`;

        const formattedHours = hours < 10 ? `0${hours}` : hours;
        const formattedMinutes = minutes < 10 ? `0${minutes}` : minutes;
        const formattedSeconds = seconds < 10 ? `0${seconds}` : seconds;
        
        digitalClock.textContent = `${formattedHours}:${formattedMinutes}:${formattedSeconds}`;
    }
    
    setInterval(setClock, 1000);
    setClock();
</script>
