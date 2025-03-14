# App ciné application en PHP 🚀
![cover](./image/king-kong.jpg)

## Les langages :
* front
    - html, css et js
* back
    - php, sql

> Ce projet php est dédié au cinéma classique

### Exemple de code
```php
    include_once __DIR__ ."/partial/header.inc.php"

    # partie inclusion

    <ul>
        <li>Date <?= affiche['date'] ?></li>
        <li>Réal <?= affiche['réal'] ?></li>
        <li>Genre <?= affiche['genre'] ?></li>
        <li>Sortie <?= affiche['sortie'] ?></li>
        <li>
         <a href="<?= affiche['url'] ?>" class="button">Retour à la boutique</a>
        </li>
                
    </ul>

```
