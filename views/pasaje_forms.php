<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formula Pasajes</title>
</head>
<body>
    <h1>Formulario de ingreso de pasajes</h1>
    <form action="">
        <fieldset>
            <legend>Datos Pasajero</legend>
            <label for="rut">Rut</label>
            <input type="text" id="rut">
            <br>
            <label for="name">Nombre Pasajero</label>
            <input type="text" id="name">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido">
            <br>
            <label for="age">Edad</label>
            <input type="number" id="age">
            <label for="email">Correo</label>
            <input type="email" id="email">
            <br>
            <fieldset>
                <legend>Datos Viaje</legend>
                <label for="salida">Salida</label>
                <select name="selectsalida" id="selectsalida">
                    <option value="">Seleccione</option>
                    <option value="">
                        <?php 
                            //Codigo de PHP para mostrar la lista de ciudades de salida.
                        ?>
                    </option>
                </select>
                <label for="destino">Destino</label>
                <select name="selectdestino" id="selectdestino">
                    <option value="">Seleccione</option>
                    <option value="">
                        <?php 
                            //Codigo de PHP para mostrar la lista de ciudades de destino.
                        ?>
                    </option>
                </select>
                <br>
            </fieldset>
        </fieldset>
    </form>
</body>
</html>