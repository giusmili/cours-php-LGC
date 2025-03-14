<main>
    <div class="collection" role="region" aria-labelledby="screen-movie">
    <?php foreach(data as $movie):?>
            <figure id="screen-movie">
                <?= '<img src="'$movie['cover']'" alt="image film kingkong" loading="lazy">' ?>
                <figcaption>
                    <h2><?= $movie['title'] ?></h2>
                    <ul>
                        <li>Date : <?= $movie['date'] ?></li>
                        <li>Réal : <?= $movie['real'] ?></li>
                        <li>Genre : <?= $movie['genre'] ?></li>
                        <li>Sortie DVD : <?= $movie['sortie'] ?></li>
                    </ul>
                    <a href="'<?= $movie['url'] ?>'" class="button">Consulter la page</a>
                </figcaption>
            </figure>
        <?php endforeach;?>
    </div>
</main>
<?php


    <ul>
        <li>
            <h2><?= $article['title'] ?></h2>
        </li>
        <li>
            <p><?= $article['content'] ?></p>
        </li>
        <li>
            <a href="<?= $article['url'] ?>" target="blank">
                <?= $article['link'] ?> &raquo;
            </a>
             
        </li>
    </ul>
