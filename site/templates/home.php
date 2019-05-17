<?php snippet('meta'); ?>

  <header class="home">
    <img src="home/oliver-c.jpg" alt="Oliver auf der NightlyBuild 2016">
  </header>

  <main class="content">

    <h1><?php echo $page->title()->html() ?></h1>

    <article>
      <?php echo $page->text()->kirbytext(); ?>
      <p class="cta"><a href="/about-me">Read more about me</a>... &rarr;</p>
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

    <section class="talk-list">
      <h2 class="section-headline">Talks</h2>
      <p>Every now and then I am talking on events and conferences. Here's a list of where I have been.</p> 
      <ul>
        <li>November 23rd, 2018 - <a href="https://www.leanix.net/ea-connect-days-2018">EA Connect Days 2018</a> - <a href="https://www.youtube.com/watch?v=nQVLzvExziE">Enterprise Architecture and Digital Transformation</a></li>
        <li>November 29th, 2017 - <a href="http://inside-business.org/konferenzen-2/">EAM - Richtungsgeber f&uuml;r die digitale Transformation</a> - Think Tank Moderation</li>
        <li>October 6th, 2016 - <a href="http://berlin2016.leanix.net/">EA Connect Day 2016</a> - <a href="https://youtu.be/VwUnMdoiv-g">From an engineering to software development company</a></li>
        <li>September 2nd, 2016 - <a href="https://www.nightlybuild.io/">NightlyBuild 2016</a> - <a href="https://youtu.be/lpebjyFdyI4">Making things simple is ... complex</a></li>
        <li>November 23rd, 2016 - <a href="http://www.cloudexpoeurope.de/">Cloud Expo Europe</a> - Digital Transformation in non-IT companies</li>
      </ul>
      <p><a href="/talk-with-me">Would you like me to talk?</a></p>
    </section>

    <section class="elsewhere">
      <h2 class="section-headline">Elsewhere</h2>
      <p>You can find me on <a href="https://www.linkedin.com/in/-oschwarz/">LinkedIn</a> and contact me via <a href="https://twitter.com/oliverschwarz">Twitter</a>. If you want to run with me join me on <a href="https://www.strava.com/athletes/2824811">Strava</a>. I keep my bookmarks at <a href="https://pinboard.in/u:oliverschwarz">Pinboard</a> and my code stuff on <a href="https://github.com/oliverschwarz">Github</a>. You can read what I read (mainly at breakfast time) at <a href="https://getpocket.com/@oschwarz">Pocket</a>.</p>
    </article>

  </main>

<?php snippet('footer'); ?>