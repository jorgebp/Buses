<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Buses</title>
</head>
<body>
    <h1>Formulario de ingreso de buses</h1>
    <form action="">
        <fieldset>
            <legend>Datos Buses</legend>
            <label for="name">Nombre Empresa</label>
            <select name="selectname" id="selectname">
                <option value="">Seleccione su empresa</option>
                <option value="">
                    <?php 
                        //Codigo de PHP para mostrar la lista de empresas de bueses.
                    ?>
                </option>
            </select>
            <label for="asientos">Cantidad de asientos</label>
            <input type="number" id="asiento" placeholder="45" readonly>
            <label for="patente">Patente</label>
            <input type="text" value="" placeholder="AA*BB-11">
            <fieldset>
            <legend>Dimensiones Buses</legend>
            <label for="largo">Largo</label>
            <input type="text" id="largo" placeholder="0mts">
            <label for="ancho">Ancho</label>
            <input type="text" id="ancho" placeholder="0mts">
            <label for="alto">Alto</label>
            <input type="text" id="alto" placeholder="0mts">
        </fieldset>
        <fieldset>
            <legend>Estado de Buses</legend>
            <label for="estado">En Garage <input type="radio" name="estado"></label>
            <label for="estado">En Circulación <input type="radio" name="estado"></label>
            <label for="estado">Debaja <input type="radio" name="estado"></label>
        </fieldset>
        <fieldset>
            <legend>Revisión técnica</legend>
            <label for="ulrevision">Ultima revisión técnica</label>
            <input type="date" name="ulrevision">
            <label for="comen">Comentario</label>
            <textarea name="ulcomen" id="ulcomen" cols="30" rows="10"></textarea>
            <br>
            <label for="prorevision">Próxima revisión técnica</label>
            <input type="date" name="prorevision">
            <label for="comen">Comentario</label>
            <textarea name="procomen" id="procomen" cols="30" rows="10"></textarea>
        </fieldset>
        <br>
        <input type="submit" value="Enviar">
        <input type="button" value="Limpiar">
        </fieldset>
    </form>
</body>
</html>