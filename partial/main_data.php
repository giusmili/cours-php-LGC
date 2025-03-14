<main>
    <div class="collection" role="region" aria-labelledby="screen-movie">

    <?php foreach(data as $data) : ?>
            <figure id="screen-movie">
                <?= '<img src="'.$data["cover"].'" alt="'.$data["title"].'" loading="lazy">' ?>
                <figcaption>
                    <h2><?= $data["title"] ?></h2>
                    <ul>
                        <li>Date : <?= $data["date"] ?></li>
                        <li>Réal : <?= $data["real"] ?></li>
                        <li>Genre : <?= $data["genre"] ?></li>
                        <li>Sortie DVD : <?= $data["sortie"] ?></li>
                    </ul>
                    <a href="'<?= $data['url'] ?>'" class="button">Consulter la page</a>
                </figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
</main>



