<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Interativo</title>
    <link rel="stylesheet" href="../assets/css/styles.css"> <!-- Adicione seu CSS aqui -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .container {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Mapa Interativo</h1>
        <img src="../assets/imagens/mapa-removebg.png" usemap="#image-map" alt="Mapa Interativo">
        <map name="image-map">
            <area target="" alt="Área 1" title="Área 1" href="../public/secaoModulo.php?id=1" coords="85,1,170,15" shape="rect">
            <area target="" alt="Área 2" title="Área 2" href="../public/secaoModulo.php?id=2" coords="85,31,169,19" shape="rect">
            <area target="" alt="Área 3" title="Área 3" href="../public/secaoModulo.php?id=3" coords="84,48,168,34" shape="rect">
            <area target="" alt="Área 4" title="Área 4" href="../public/secaoModulo.php?id=4" coords="85,66,169,48" shape="rect">
            <area target="" alt="Área 5" title="Área 5" href="../public/secaoModulo.php?id=5" coords="85,80,170,62" shape="rect">
            <area target="" alt="Área 6" title="Área 6" href="../public/secaoModulo.php?id=6" coords="86,96,170,82" shape="rect">
            <area target="" alt="Área 7" title="Área 7" href="../public/secaoModulo.php?id=7" coords="86,113,170,96" shape="rect">
            <area target="" alt="Área 8" title="Área 8" href="../public/secaoModulo.php?id=8" coords="84,126,169,112" shape="rect">
            <area target="" alt="Área 9" title="Área 9" href="../public/secaoModulo.php?id=9" coords="86,142,169,128" shape="rect">
        </map>
    </div>
</body>

</html>
