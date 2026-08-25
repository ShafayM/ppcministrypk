<?php
$page_slug = 'sunday-school';
$page_title = 'Sunday School';
$page_description = 'Sunday School ministry of Philadelphia Pentecostal Church, Nawabshah.';
include __DIR__ . '/includes/header.php';

$data = get_json('sunday-school');
$photos = get_images('sunday-school');
$classes = $data['classes'] ?? [];
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow on-ink">Children &amp; Youth</span>
    <h1>Sunday School</h1>
    <p class="lede"><?= h($data['intro'] ?? '') ?></p>
  </div>
</section>
<div class="stripe-divider thin"></div>

<section>
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Our Classes</span>
      <h2>Grouped by Age</h2>
      <p><?= h($data['schedule_note'] ?? '') ?></p>
    </div>
    <div class="card-grid cols-3">
      <?php foreach ($classes as $i => $c): ?>
        <div class="card">
          <div class="num"><?= sprintf('%02d', $i + 1) ?></div>
          <h3><?= h($c['name']) ?></h3>
          <p class="tag-pill" style="margin-bottom:10px"><?= h($c['ages']) ?></p>
          <p><?= h($c['focus']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="bg-parchment">
  <div class="container prose">
    <span class="eyebrow">Our Teachers</span>
    <h2>Who Teaches Our Children</h2>
    <p><?= h($data['teachers_note'] ?? '') ?></p>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">In Pictures</span>
      <h2>Sunday School Life</h2>
    </div>
    <?php if (!empty($photos)): ?>
      <div class="gallery">
        <?php foreach ($photos as $file): ?>
          <figure><img src="<?= h(image_url('sunday-school', $file)) ?>" alt="Sunday School photo"></figure>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="empty-note">Photos from our Sunday School classes will appear here soon.</div>
    <?php endif; ?>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
