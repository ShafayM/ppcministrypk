<?php
$page_slug = 'ministries';
$page_title = 'Ministries';
$page_description = 'Ministry projects of Philadelphia Pentecostal Church, including the Reach to Gentiles mission.';
include __DIR__ . '/includes/header.php';

$data = get_json('ministries');
$photos = get_images('ministries');
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow on-ink">Missions &amp; Projects</span>
    <h1>Ministry Projects</h1>
    <p class="lede"><?= h($data['intro'] ?? '') ?></p>
  </div>
</section>
<div class="stripe-divider thin"></div>

<section>
  <div class="container prose">
    <span class="tag-pill">Our Mission Arm</span>
    <h2><?= h($data['reach_title'] ?? 'Reach to Gentiles') ?></h2>
    <p><?= h($data['reach_body'] ?? '') ?></p>
  </div>
</section>

<section class="bg-parchment">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Projects in Pictures</span>
      <h2>Where the Work Is Happening</h2>
      <p><?= h($data['projects_note'] ?? '') ?></p>
    </div>
    <?php if (!empty($photos)): ?>
      <div class="gallery">
        <?php foreach ($photos as $file): ?>
          <figure><img src="<?= h(image_url('ministries', $file)) ?>" alt="Ministry project photo"></figure>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="empty-note">Photos from our ministry projects and outreach visits will appear here soon.</div>
    <?php endif; ?>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
