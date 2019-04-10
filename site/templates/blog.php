<?php snippet('meta'); ?>

  <header class="content">
    <h1><?php echo $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
  </header>

  <main class="content page-article-list">

<?php foreach($page->children()->listed()->flip() as $article): ?>

    <article>
      <h2><a href="<?php echo $article->url(); ?>"><?php echo $article->title()->html(); ?></a></h2>
      <p>
        <time datetime="<?php echo $article->date()->toDate('c'); ?>" pubdate><?php echo $article->date()->toDate('j. M y'); ?></time>
        <?php echo $article->text()->excerpt(100) ?> &rarr; <a href="<?php echo $article->url(); ?>">read on!</a>
      </p>
    </article>

<?php endforeach ?>

  </main>

<?php snippet('footer'); ?>