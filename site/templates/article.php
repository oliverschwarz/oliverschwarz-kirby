<?php snippet('meta'); ?>

  <main class="content article">

    <header>
      <h1><?php echo $page->title()->html(); ?></h1>
    </header>

    <article>
      <?php echo $page->text()->kirbytext(); ?>
    </article>

    <footer>
      <p>Published by <em>Oliver</em> on <time datetime="<?php echo $page->date()->toDate('c') ?>" pubdate><?php echo $page->date()->toDate('j. F Y'); ?></time>. Go back to the <a href="<?php echo url('articles'); ?>">article list</a> or back <a href="<?php echo $site->url(); ?>">home</a>.</p>
    </footer>

  </main>

<?php snippet('footer'); ?>