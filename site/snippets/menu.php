<!-- page navigation -->
<nav>
  <ul class="content">
    <li><a href="<?php echo $site->url(); ?>">Home</a></li>
<?php foreach ($site->children()->listed() as $item): ?>
    <li><?php echo $item->title()->link(); ?></li>
<?php endforeach; ?>
    <li><a href="https://webbkoll.dataskydd.net/en/results?url=https%3A%2F%2Foliverschwarz.info%2F">Data privacy check</a></li>
  </ul>
</nav>