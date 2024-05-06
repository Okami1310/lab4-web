<?php
require_once 'function.php';

$articleId = $_GET['id'] ?? null;
if (null === $articleId) {
    http_response_code(400);
    exit();
}

$articleId = (int)$articleId;
$publication = getArticle($articleId);
if (null === $publication) {
    http_response_code(404);
    exit();
}


$pageTitle = "Кулінарні пригоди";
require 'head.php';
?>

<?php
$currentPage = 'index';
require 'header.php';
?>

<main>
    <?php require 'article.php';?>
</main>

<?php require 'footer.php'; ?>


