<?php
$page_slug = 'welfare';
$page_title = 'LikeChrist Welfare';
$page_description = 'LikeChrist Welfare Organization — the compassion arm of Philadelphia Pentecostal Church, Nawabshah.';
include __DIR__ . '/includes/header.php';

$data = get_json('welfare');
$photos = get_images('welfare');
$programs = $data['programs'] ?? [];
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow on-ink">Compassion in Action</span>
    <h1>LikeChrist Welfare Organization</h1>
    <p class="lede"><?= h($data['intro'] ?? '') ?></p>
  </div>
</section>
<div class="stripe-divider thin"></div>

<section>
  <div class="container prose">
    <span class="tag-pill">Our Mission</span>
    <h2>Why We Do This</h2>
    <p><?= h($data['mission'] ?? '') ?></p>
  </div>
</section>

<section class="bg-parchment">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Our Programmes</span>
      <h2>Where the Help Goes</h2>
    </div>
    <div class="card-grid cols-4">
      <?php foreach ($programs as $i => $p): ?>
        <div class="card">
          <div class="num"><?= sprintf('%02d', $i + 1) ?></div>
          <h3><?= h($p['name']) ?></h3>
          <p><?= h($p['detail']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">In Pictures</span>
      <h2>The Work in Photos</h2>
    </div>
    <?php if (!empty($photos)): ?>
      <div class="gallery">
        <?php foreach ($photos as $file): ?>
          <figure><img src="<?= h(image_url('welfare', $file)) ?>" alt="LikeChrist Welfare programme photo"></figure>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="empty-note">Photos from LikeChrist Welfare programmes will appear here soon.</div>
    <?php endif; ?>
  </div>
</section>

<section id="give" class="bg-ink">
  <div class="container">
    <div class="cta-banner" style="background:var(--ink-2)">
      <div class="cta-banner-text">
        <h3>Give to LikeChrist Welfare</h3>
        <p><?= h($data['give_note'] ?? '') ?></p>
      </div>
      <div class="cta-banner-actions">
        <a href="mailto:<?= h(SITE_EMAIL) ?>" class="btn btn-gold">Contact to Give</a>
        <a href="tel:<?= h(str_replace(' ', '', SITE_PHONE)) ?>" class="btn btn-outline-light">Call the Church</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
