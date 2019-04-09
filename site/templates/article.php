<?php snippet('meta'); ?>

    <header class="content">
      <h1><?php echo $page->title()->html() ?></h1>
    </header>

    <main class="content article">
      <article>
        <?php echo $page->text()->kirbytext(); ?>
      </article>

      <footer>
        <p class="article-info">Published on <time datetime="<?= $page->date()->toDate('c') ?>" pubdate><?php echo $page->date()->toDate('j. F Y'); ?></time>. Go <a href="<?php echo url('articles'); ?>">back to the article list</a>.</p>
      </footer>
    </main>

  </main>

<?php snippet('footer'); ?>