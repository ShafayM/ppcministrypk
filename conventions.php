<?php
$page_slug = 'conventions';
$page_title = 'Conventions';
$page_description = 'Church conventions and local church needs at Philadelphia Pentecostal Church, Nawabshah.';
include __DIR__ . '/includes/header.php';

$data = get_json('conventions');
$photos = get_images('conventions');
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow on-ink">Gatherings</span>
    <h1>Conventions</h1>
    <p class="lede"><?= h($data['intro'] ?? '') ?></p>
  </div>
</section>
<div class="stripe-divider thin"></div>

<section>
  <div class="container prose">
    <span class="tag-pill">Church Calendar</span>
    <h2>Upcoming &amp; Past Conventions</h2>
    <p><?= h($data['conventions_note'] ?? '') ?></p>
  </div>
</section>

<section class="bg-parchment">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">In Pictures</span>
      <h2>Convention Moments</h2>
    </div>
    <?php if (!empty($photos)): ?>
      <div class="gallery">
        <?php foreach ($photos as $file): ?>
          <figure><img src="<?= h(image_url('conventions', $file)) ?>" alt="Convention photo"></figure>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="empty-note">Photos from our conventions will appear here soon.</div>
    <?php endif; ?>
  </div>
</section>

<section id="problems">
  <div class="container">
    <div class="cta-banner">
      <div class="cta-banner-text">
        <h3><?= h($data['problems_title'] ?? 'Local Church Needs') ?></h3>
        <p><?= h($data['problems_note'] ?? '') ?></p>
        <p style="margin-top:14px;font-size:14px;color:rgba(247,241,227,.6)"><?= h($data['prayer_note'] ?? '') ?></p>
      </div>
      <div class="cta-banner-actions">
        <a href="mailto:<?= h(SITE_EMAIL) ?>" class="btn btn-primary">Contact the Church</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
