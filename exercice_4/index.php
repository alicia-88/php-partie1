<?php
$string = 'alicia';
$int = 75;
$float = 5.3;
$bool = true;
var_dump($float, $int);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&family=Roboto&display=swap" rel="stylesheet">
    <script src="./public/assets/js/main.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Php Exercice 1</title>
</head>

<body>
    <header>
        <img src="./public/assets/img/php_logo.svg" alt="logo du langage php">
        <div>
            <h1>Exercice 1</h1>
        </div>

    </header>
    <main>
        <div id="question">
            <h2><span>Question</span><span id="chevron"><i class="fa-solid fa-chevron-down"></i></span></h2>
            <p>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
                Les afficher.</p>
        </div>
        <hr>
        <div id="answer" class="displayNone">
            <h2><span>Réponse</span></h2>
            <div>
                <p><?= $string; ?></p>
                <p><?= $int ?></p>
                <p><?= $float ?></p>
                <p><?= $bool ?></p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy;<?php echo date("Y") ?> &#x25CF; La Manu &#x25CF; Alicia-88</p>
    </footer>
</body>

</html>