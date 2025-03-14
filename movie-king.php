<!--head-->
<?php
    include_once __DIR__ ."/partial/header.inc.php";
    include_once __DIR__ ."/controller/tableau-cover.php"
?>
<!--head-->
<body>
    <header>
        <h1>Les fossiles du cinéma <?= phpVersion() ?></h1>
    </header>
    <main class="grid-single-page">
        <figure>
            <img src="<?= affiche['photo'] ?>" alt="<?= affiche['titre'] ?>">
            <figcaption>
            <h2><?= affiche['titre'] ?></h2>
            <ul>
                <li>Date <?= affiche['date'] ?></li>
                <li>Réal <?= affiche['réal'] ?></li>
                <li>Genre <?= affiche['genre'] ?></li>
                <li>Sortie <?= affiche['sortie'] ?></li>
                <li>
                <a href="<?= affiche['url'] ?>" class="button">Retour à la boutique</a>
                </li>
                
            </ul>
        </figcaption>


        </figure>
    </main>

<?php
    include_once __DIR__ ."/partial/footer.inc.php"
?>