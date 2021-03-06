<?php Response::setMetaDescription(__('description.news')) ?>

<main class="news ancillary">
  <section class="hero hero--news" style="background-image: url(/img/bangalore.jpg); background-position: center 15%;">
    <div class="inner-wrap inner-wrap--center-hero">
      <h1>{{news.desk}}</h1>
      <h2>{{news.musings}}</h2>
    </div>
  </section>

  <section>
    <div class="inner-wrap">
      <div class="notice notice-info spacer1">For more regular updates, see <a href="https://open.lbry.com/@lbry">the official @lbry channel</a> on LBRY itself.</div>
      <ul class="news-items bulletless">
        <?php foreach ($posts as $post): ?>
        <li class="news-item">
          <h3>
            <a href="<?php echo $post->getRelativeUrl() ?>" class="link-primary">
              <?php echo $post->getTitle() ?>
            </a>
          </h3>

          <small class="meta" title="<?php echo $post->getDate()->format('F jS, Y') ?>">
            <?php echo $post->getDate()->format('M j, Y') ?> &middot;
            <?php echo $post->getAuthorName() ?>
          </small>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </section>
</main>
