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
            <label for="name">Nombre</label>
            <input type="text" id="name">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido">
            <br>
            <label for="email">Correo</label>
            <input type="email" id="email">
            <label for="tipopasaje">Tipo Pasajero</label>
            <select name="tipopasaje" id="tipopasaje">
                    <option value="">Seleccione</option>
                    <option value="">
                        <?php 
                            //Codigo de PHP para mostrar la lista de tipo pasajero.
                        ?>
                    </option>
                </select>
            <fieldset>
                <legend>Datos Viaje</legend>
                <label for="numasie">Asiento</label>
                <input type="number" name="" id="numasie">
                <label for="salida">Origen</label>
                <select name="selectorigen" id="selectorigen">
                    <option value="">Seleccione</option>
                    <option value="">
                        <?php 
                            //Codigo de PHP para mostrar la lista de ciudades de origen.
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
                <label for="timeviaj">Hora salida</label>
                <input type="time" name="" id="timeviaj">
            </fieldset>
                <fieldset>
                    <legend>Datos Contacto</legend>
                    <label for="contname">Nombre</label>
                    <input type="text" id="contname">
                    <label for="contnum">Numero Contacto</label>
                    <input type="text" id="contnum">
                </fieldset>
                <br>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar">
        </fieldset>
    </form>
</body>
</html>