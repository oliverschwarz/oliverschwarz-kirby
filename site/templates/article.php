<?php snippet('meta'); ?>

  <article class="single">

    <header>
      <h1><?php echo $page->title()->html(); ?></h1>
      <aside>
        Published
<?php if ($author = $page->author()->toUser()): ?>
        by <?= $author->name() ?>
<?php endif; ?>
        on <time datetime="<?= $page->date()->toDate('c') ?>" pubdate>
          <?= $page->date()->toDate('j. F Y'); ?>
        </time>
      </aside>

    </header>

    <main>
      <?php echo $page->text()->kirbytext(); ?>
    </main>

    <footer>
      <p>Published by <em>Oliver</em> on <time datetime="<?php echo $page->date()->toDate('c') ?>" pubdate><?php echo $page->date()->toDate('j. F Y'); ?></time>. Go back to the <a href="<?php echo url('articles'); ?>">article list</a> or back <a href="<?php echo $site->url(); ?>">home</a>.</p>
    </footer>

  </article>

<?php snippet('footer'); ?>