<?php snippet('meta'); ?>

  <header>
    <h1><?php echo $page->title()->html() ?></h1>
  </header>

  <main>
    <article class="content">
      <?php echo $page->text()->kirbytext(); ?>
    </article>
  </main>

<?php snippet('footer'); ?>