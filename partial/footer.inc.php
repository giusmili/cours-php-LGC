<footer>
        <p>
                &copy; - MIT - <time datetime="<?php 
                        print $date->format("Y-d-m")  # print, echo, <?= {{}}
                ?>">
                    <?php print $date->format("Y") ?></time>
                <?= $serve ?>
        </p>
    </footer> 