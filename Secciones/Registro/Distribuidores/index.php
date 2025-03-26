<div class="container-fluid">
<?php include("../../../Templates/header.php") ?>
    <br>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .clock {
            width: 200px;
            height: 200px;
            border: 5px solid black;
            border-radius: 50%;
            position: relative;
            background: white;
        }

        .center {
            width: 10px;
            height: 10px;
            background: black;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
        }

        .hand {
            width: 50%;
            height: 4px;
            background: black;
            position: absolute;
            top: 50%;
            transform-origin: 100%;
            transform: translateY(-50%) rotate(0deg);
            transition: transform 0.5s ease-in-out;
        }

        .hour-hand {
            width: 35%;
            height: 6px;
        }

        .numbers {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .number {
            position: absolute;
            width: 20px;
            height: 20px;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
            color: black;
        }

        /* Posición de los números del reloj siguiendo los ángulos indicados */
        .number:nth-child(1) { /* 3 */
            top: 50%;
            left: 95%;
            transform: translate(-50%, -50%);
        }

        .number:nth-child(2) { /* 2 */
            top: 18%;
            left: 82%;
            transform: translate(-50%, -50%);
        }

        .number:nth-child(3) { /* 1 */
            top: 5%;
            left: 50%;
            transform: translateX(-50%);
        }

        .number:nth-child(4) { /* 12 */
            top: 18%;
            left: 18%;
            transform: translate(-50%, -50%);
        }

        .number:nth-child(5) { /* 11 */
            top: 50%;
            left: 5%;
            transform: translate(-50%, -50%);
        }

        .number:nth-child(6) { /* 10 */
            top: 82%;
            left: 18%;
            transform: translate(-50%, -50%);
        }

        .number:nth-child(7) { /* 9 */
            top: 95%;
            left: 50%;
            transform: translateX(-50%);
        }

        .number:nth-child(8) { /* 8 */
            top: 82%;
            left: 82%;
            transform: translate(-50%, -50%);
        }

        .number:nth-child(9) { /* 7 */
            top: 50%;
            left: 95%;
            transform: translate(-50%, -50%);
        }

        .number:nth-child(10) { /* 6 */
            top: 95%;
            left: 50%;
            transform: translateX(-50%);
        }

        .number:nth-child(11) { /* 5 */
            top: 82%;
            left: 82%;
            transform: translate(-50%, -50%);
        }

        .number:nth-child(12) { /* 4 */
            top: 82%;
            left: 18%;
            transform: translate(-50%, -50%);
        }

    </style>

    <div class="clock">
        <div class="center"></div>
        <div class="hand hour-hand" id="hourHand"></div>
        <div class="hand minute-hand" id="minuteHand"></div>
        <div class="numbers">
            <div class="number">3</div>
            <div class="number">2</div>
            <div class="number">1</div>
            <div class="number">12</div>
            <div class="number">11</div>
            <div class="number">10</div>
            <div class="number">9</div>
            <div class="number">8</div>
            <div class="number">7</div>
            <div class="number">6</div>
            <div class="number">5</div>
            <div class="number">4</div>
        </div>
    </div>

    <br>
    <form action="" method="post">
        <label for="hour">Hora (0-23): </label>
        <input type="number" id="hour" name="hour" min="0" max="23" required>
        <label for="minute">Minuto (0-59): </label>
        <input type="number" id="minute" name="minute" min="0" max="59" required>
        <button type="submit">Actualizar Hora</button>
    </form>

    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hour = intval($_POST["hour"]);
        $minute = intval($_POST["minute"]);

        // Calcular el ángulo para las manecillas
        $hour_angle = ($hour % 12) * 30 + ($minute / 2); // Cada hora es 30 grados, y cada minuto añade 0.5 grados
        $minute_angle = $minute * 6; // Cada minuto es 6 grados

        echo "
    <script>
        document.getElementById('hourHand').style.transform = 'translateY(-50%) rotate($hour_angle" . "deg)';
        document.getElementById('minuteHand').style.transform = 'translateY(-50%) rotate($minute_angle" . "deg)';
    </script>
    ";
    }
    ?>

</div>
</body>

</html>
<?php include("../../../Templates/footer.php") ?>
