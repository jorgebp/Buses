<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Coductores</title>
</head>
<body>
    <h1>Formulario de ingreso de conductores</h1>
    <form action="">
    <fieldset>
        <legend>Datos Conductor</legend>
        <label for="rutcond">Rut</label>
        <input type="text" id="rutcond" placeholder="11111111-1">
        <label for="nomcond">Nombre</label>
        <input type="text" id="nomcond" placeholder="Nombre">
        <br>
        <label for="apepcond">Apellido Paterno</label>
        <input type="text" name="" id="apepcond" placeholder="Apellido Paterno">
        <label for="apemcond">Apellido Materno</label>
        <input type="text" name="" id="apemcond" placeholder="Apellido Materno">
        <br>
        <label for="corcond">Correo</label>
        <input type="text" name="" id="corcond" placeholder="prueba@pedidobus.cl">
        <label for="foncond">Telefono</label>
        <input type="text" name="" id="foncond" placeholder="1111111111">
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