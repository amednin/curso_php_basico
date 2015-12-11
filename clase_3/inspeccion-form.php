<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Inspeccion Vehicular</title>
</head>
<body>
<form action="guardar.php" method="post">
    Placa:  <input type="text" name="placa" /><br />
    Ruat: <input type="text" name="ruat" /><br />
    Estado: <select name="estado">
                <option value="Bueno">Bueno</option>
                <option value="Regular">Bueno</option>
                <option value="Malo">Bueno</option>
            </select>
    <input type="submit" name="submit" value="Guardar" />
</form>
</body>
</html>