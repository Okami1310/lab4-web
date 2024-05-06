<?php
function getPublications(): array {
    $pdo = getDbConnection();
    $statement = $pdo ->query('SELECT * FROM articles ', PDO::FETCH_ASSOC);
    $articles = $statement ->fetchAll();
    foreach ($articles as $article){
        $article['id'] =(int) $article['id'];
    }
    unset($article);

    return $articles;
}

function getArticle(int $articleId): ?array {
    $pdo = getDbConnection();
    $statement = $pdo ->query("SELECT * FROM articles WHERE id={$articleId}", PDO::FETCH_ASSOC);
    if(false === $statement){
        echo 'Помилка';
        http_response_code(500);
        exit();
    }
    $article = $statement ->fetch();
    if(false === $article){
        return null;
    }
    return $article;
}

function getDbConnection(): PDO {
    $username = 'okami';
    $password = '0977179863';
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=blogg;charset=utf8', $username, $password);
    } catch(PDOException $e) {
        echo $e->getMessage();
        http_response_code(500);
        exit();
    }
    return $pdo;
}
?>
