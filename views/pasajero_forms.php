<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Pasajero</title>
</head>
<body>
    <h1>Formulario de ingreso de pasajeros.</h1>
    <form action="">
        <fieldset>
            <legend>Datos Pasajaro</legend>
            <label for="rut">Rut</label>
            <input type="text" name="rut" id="rut" placeholder="11111111-1">
            <label for="namepasa">Nombres</label>
            <input type="text" name="namepasa" id="namepasa">
            <br>
            <label for="apeppasa">Apellido Paterno</label>
            <input type="text" name="apeppasa" id="apeppasa">
            <label for="apempasa">Apellido Materno</label>
            <input type="text" name="apempasa" id="apempasa">
            <br>
            <label for="corpasa">Correo</label>
            <input type="email" name="corpasa" id="corpasa" placeholder="example@example.cl">
            <label for="fonpasa">Telefono</label>
            <input type="text" name="fonpasa" id="fonpasa">
            <br>
            <label for="nacicond">Nacionalidad</label>
            <select name="selectname" id="nacicond">
                <option value="">Seleccione su Nacionalidad</option>
                <option value="">
                <?php 
                    //Codigo de PHP para mostrar la lista de regiones.
                ?>
                </option>
            </select>
            <fieldset>
                <legend>Dirección</legend>
                <label for="dircond">Dirección</label>
            <input type="text" name="" id="dircond" placeholder="Dirección">
            <br>
            <label for="regcond">Región</label>
            <select name="selectname" id="regcond">
                <option value="">Seleccione su region</option>
                <option value="">
                    <?php 
                        //Codigo de PHP para mostrar la lista de regiones.
                    ?>
                </option>
            </select>
            <label for="comcond">Comuna</label>
            <select name="selectname" id="comcond">
                <option value="">Seleccione su comuna</option>
                <option value="">
                    <?php 
                        //Codigo de PHP para mostrar la lista de ciudad.
                    ?>
                </option>
            </select>
            </fieldset>
        </fieldset>
    </form>
</body>
</html>