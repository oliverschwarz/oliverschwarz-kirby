<?php snippet('meta'); ?>

  <header>
    <h1><?php echo $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
  </header>

  <main class="article-list">

<?php foreach($page->children()->listed()->flip() as $article): ?>

    <article>
      <h2><a href="<?php echo $article->url(); ?>"><?= $article->title()->html() ?></a></h2>
      <p>
        <?php echo $article->text()->excerpt(200) ?> &rarr; <a href="<?php echo $article->url(); ?>">read on!</a>
      </p>
    </article>

<?php endforeach ?>

  </main>

<?php snippet('footer'); ?>