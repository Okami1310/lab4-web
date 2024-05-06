<article class="site-article">
    <header>
        <h3><a class="clr" href="post.php?id=<?= $publication['id']; ?>"><?= $publication['title']; ?></a></h3>
        <img src="<?= $publication['image']; ?>" alt="<?= $publication['title']; ?>" class="img" width="300" height="200">
    </header>
    <div><?= $publication['content']; ?></div>
    <footer>
        <p>Дата публікації: <?= $publication['created']; ?></p>
        <p>Автор: <?= $publication['author']; ?></p>
    </footer>
</article>
