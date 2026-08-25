<?php
$page_slug = 'pastors';
$page_title = 'Pastors';
$page_description = 'Meet the pastors and leadership of Philadelphia Pentecostal Church, Nawabshah.';
include __DIR__ . '/includes/header.php';

$data = get_json('pastors');
$photos = get_images('pastors');
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow on-ink">Leadership</span>
    <h1>Pastors &amp; Leadership</h1>
    <p class="lede"><?= h($data['intro'] ?? '') ?></p>
  </div>
</section>
<div class="stripe-divider thin"></div>

<section>
  <div class="container two-col">
    <div class="prose">
      <span class="tag-pill">Senior Pastor</span>
      <h2><?= h($data['senior_pastor_name'] ?? SITE_PASTOR) ?></h2>
      <p><?= h($data['senior_pastor_bio'] ?? '') ?></p>
    </div>
    <div class="prose">
      <span class="tag-pill">Leadership Team</span>
      <h2>Elders &amp; Deacons</h2>
      <p><?= h($data['leadership_note'] ?? '') ?></p>
    </div>
  </div>
</section>

<section class="bg-parchment">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">In Pictures</span>
      <h2>Our Pastors &amp; Leadership Team</h2>
    </div>
    <?php if (!empty($photos)): ?>
      <div class="gallery">
        <?php foreach ($photos as $file): ?>
          <figure><img src="<?= h(image_url('pastors', $file)) ?>" alt="Pastors and leadership of <?= h(SITE_NAME) ?>"></figure>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="empty-note">Photos of our pastors and leadership team will appear here soon.</div>
    <?php endif; ?>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
