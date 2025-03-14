<!--head-->
<?php
    include_once __DIR__ ."/partial/header.inc.php";
    include_once __DIR__ ."/model/data.php";
?>
<!--head-->
<body>
    <header>
        <h1>Les fossiles du cinéma <?= phpVersion() ?></h1>
    </header>
    <!--main-->
    <?php
        include_once __DIR__ ."/partial/main_data.php"
    ?>
    <!--main-->
    <!--footer-->
    <?php
        include_once __DIR__ ."/partial/footer.inc.php"
    ?>
    <!--footer-->

    <script src="./js/app.js"></script>
  
    
</body>
</html>