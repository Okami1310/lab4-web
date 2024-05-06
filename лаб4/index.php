<?php
    require_once 'function.php';
    //require_once 'init.php';
    $pageTitle = "Кулінарні пригоди";
    $currentPage = 'index';
    $publications = getPublications();
    //$baza = baza();
?>

<?php require 'head.php';?>

<?php require 'header.php';?>

<main >
    <h2>Останні публікації</h2>
    <?php foreach ($publications as $publication): ?>
        <?php require 'article.php';?>
    <?php endforeach; ?>
</main>

<?php require 'footer.php';?>