<?php snippet('meta'); ?>

  <header class="home">
    <img src="home/oliver-c.jpg" alt="Oliver auf der NightlyBuild 2016">
  </header>

  <main class="content">

    <h1><?php echo $page->title()->html() ?></h1>

    <article class="home">
      <?php echo $page->text()->kirbytext(); ?>
    </article>

    <section class="article-list">
      <h2 class="section-headline">Latest articles</h2>
      <ul>
<?php $articles = page('articles')->children()->listed()->flip()->limit(3); foreach ($articles as $article): ?>
        <li>
          <h3><a href="<?php echo $article->url(); ?>"><?php echo $article->title()->html(); ?></a></h3>
          <p><?php echo $article->text()->excerpt(150) ?> &rarr; <a href="<?php echo $article->url(); ?>">read on!</a></p>
        </li>
<?php endforeach; ?>
      </ul>
      <p class="cta"><a href="<?php echo page('articles')->url(); ?>">See all articles</a>... &rarr;</p>
    </section>

  </main>

<?php snippet('footer'); ?>