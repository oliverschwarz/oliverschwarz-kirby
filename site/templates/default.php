<?php snippet('meta'); ?>

  <header class="content">
    <h1><?php echo $page->title()->html() ?></h1>
  </header>

  <main class="content">
    <article>
      <?php echo $page->text()->kirbytext(); ?>
    </article>
  </main>

<?php snippet('footer'); ?>