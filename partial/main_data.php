<main>
    <div class="collection" role="region" aria-labelledby="screen-movie">

    <?php foreach(data as $data) : ?>
            <figure id="screen-movie">
                <?= '<img src="'.$data["cover"].'" alt="'.$data["title"].'" loading="lazy">' ?>
                <figcaption>
                    <h2><?= $data["title"] ?></h2>
                    <ul>
                        <li><strong>Date</strong> : <?= $data["date"] ?></li>
                        <li><strong>Réal</strong> : <?= $data["real"] ?></li>
                        <li><strong>Genre</strong> : <?= $data["genre"] ?></li>
                        <li><strong>Sortie DVD</strong> : <?= $data["sortie"] ?></li>
                    </ul>
                    <a href="'<?= $data['url'] ?>'" class="button">Consulter la page</a>
                </figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
</main>



