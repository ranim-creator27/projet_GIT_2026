<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    $articles=["imprimante","stylet","enceintes","Tablette"];
    /*if (isset($articles))
        echo "<h1>Liste des articles</h1>";
    else echo "aucun articles à afficher";*/
    echo isset($articles)? "<h1>Liste des articles</h1>":"aucun articles à afficher";
    ?>
    <ul>
        <?php
    foreach ($articles as $value) {
        ?>
        <li><?= $value ?> </li>
    <?php    
    }
    ?>
    </ul>
</body>
</html>