<?php snippet('meta'); ?>

  <main>

    <h1><?php echo $page->title()->html() ?></h1>

    <section class="highlight">
      <p><?= $page->intro() ?></p>
    </section>

    <section class="slogan">
      <p><strong><?= $page->slogan() ?></strong></p>
    </section>

    <section class="description">
      <?= $page->text()->kirbytext() ?>
    </section>

    <section class="article-list">
      <h2>Latest articles</h2>
      <ul>
<?php $articles = page('articles')->children()->listed()->flip()->limit(3); foreach ($articles as $article): ?>
        <li>
          <h3><a href="<?php echo $article->url(); ?>"><?php echo $article->title()->html(); ?></a></h3>
          <p><?php echo $article->text()->excerpt(150) ?> &rarr; <a href="<?php echo $article->url(); ?>">read on!</a></p>
        </li>
<?php endforeach; ?>
      </ul>
    </section>

  </main>

<?php snippet('footer'); ?>