<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form name="calculadora" action="calcular.php" method="get">
        <h1>Bienvenido a la Calculadora</h1>
            <h2>Introduzca el primer numero</h2>
            <input name= "numero1" type="number">

            <select name="operacion">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="x">x</option>
                <option value="/">/</option>
            </select>
            <h2>Introduzca el segundo numero</h2>
            <input name= "numero2" type="number">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>