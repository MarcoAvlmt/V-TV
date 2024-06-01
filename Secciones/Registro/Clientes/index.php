<?php include("../../../Templates/header.php") ?>
</br>
</br>
<div class="container-fluid">
    <div class="row">
        <!-- Contenedor para la tabla DATOS -->
        <div class="col-9">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre y apellidos</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Corte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Juan Pérez</td>
                            <td>juan.perez@example.com</td>
                            <td>9531454698</td>
                            <td>03/02/24</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>María Gómez</td>
                            <td>maria.gomez@example.com</td>
                            <td>9536685698</td>
                            <td>03/02/24</td>
                        </tr>
                        <!-- Más filas según sea necesario -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Contenedor para el recordatorio -->
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Fechas Proximas</h5>
                    <div id="calendar">
                        <!-- Aquí podrías insertar un calendario interactivo utilizando una librería de JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php include("../../../Templates/footer.php") ?>