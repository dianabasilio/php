<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envia Datos</title>
</head>
<body>
    
    <form action="Prueba_recibe.php" method="GET">
<label>Device label:</label>
<input type="text" name="device_label"><br>

<label>Temperatura:</label>
<input type="text" name="Temperatura"><br>

<label>Humedad:</label>
<input type="text" name="Humedad"><br>


<input type="submit" name="Send Data"><br>

    </form>
</body>
</html>