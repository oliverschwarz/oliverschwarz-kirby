<?php snippet('meta'); ?>

  <header>
    <h1><?php echo $page->title()->html() ?></h1>
    <figure>
      <img src="home/oliver-c.jpg" alt="Oliver auf der NightlyBuild 2016">
      <figcaption>&copy; Photo taken by/with thanks to <a href="https://marcthiele.com/">Marc Thiele</a> - <a href="https://creativecommons.org/licenses/by-nc-sa/2.0/">CC BY-NC-SA 2.0</a></figcaption>
    </figure>
  </header>

  <main>
    <article class="content">
      <?php echo $page->text()->kirbytext(); ?>
    </article>
  </main>

<?php snippet('footer'); ?>