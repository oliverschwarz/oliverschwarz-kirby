<!doctype html>
<html lang="de">
<head>

  <meta charset="utf-8">
  <title><?= $site->title()->html() ?></title>
  <meta name="viewport" content="width=device-width,minimum-scale=1.0">
  <meta name="referrer" content="no-referrer">
  <link rel="canonical" href="https://oliverschwarz.info">
  <?= css('assets/css/layout.css') ?>

  <link href="https://www.linkedin.com/in/-oschwarz/" rel="me">
  <link href="http://xing.to/oschwarz" rel="me">
  <link href="https://twitter.com/oliverschwarz" rel="me">
  <link href="https://github.com/oliverschwarz" rel="me">

<?php if ($page->isHomePage()): ?>

  <meta name="twitter:card" value="summary">
  <meta property="og:title" content="Oliver Schwarz, developer, agile professional and software architect">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://oliverschwarz.info">
  <meta property="og:image" content="https://oliverschwarz.info/home/oliver-c.jpg">
  <meta property="og:description" content="Oliver is a developer, musician, runner and family man living in the Cologne area in Germany. Join me on Twitter or Strava or see me talking on some events.">

<?php else: ?>

  <meta name="twitter:card" value="summary">
  <meta property="og:title" content="<?= $page->title()->html() ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?= $page->url() ?>">
<?php if ($image = $page->images()->first()): ?>
  <meta property="og:image" content="<?= $image->url() ?>">
<?php else: ?>
  <meta property="og:image" content="https://oliverschwarz.info/home/oliver-c.jpg">
<?php endif; ?>
  <meta property="og:description" content="<?= $page->excerpt()->html() ?>">  

<?php endif; ?>

  <link rel="alternate" type="application/rss+xml" title="Latest articles" href="<?php echo site()->url(); ?>/feed/">

</head>
<body class="<?= $page->template() ?>">