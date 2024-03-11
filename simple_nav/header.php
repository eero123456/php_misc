<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>
        <?= $title ?? "Otsikko"; ?>
    </title>
</head>

<body>

    <header>Sivusto X</header>


    <?php

    function getLinkClass(string $page): string
    {       
        if (str_ends_with($_SERVER['SCRIPT_NAME'],$page)) {
            return 'class="active"';
        }
        return '';
    }


    ?>

    <nav>
        <label class="menu-toggle" for="menu-btn"><i class="fa-solid fa-bars fa-2x"></i></label>
        <input class="menu-toggle" type="checkbox" id="menu-btn" />

        <ul id="nav-menu">
            <li><a href="index.php" <?= getLinkClass("index.php"); ?>>Etusivu</a></li>
            <li><a href="info.php" <?= getLinkClass("info.php"); ?>>Tietoa meistä</a></li>
            <li><a href="yhteydenotto.php" <?= getLinkClass("yhteydenotto.php"); ?>>Yhteydenotto</a></li>
            <li><a href="blog.php" <?= getLinkClass("blog.php"); ?>>Blogi</a></li>
        </ul>

    </nav>
