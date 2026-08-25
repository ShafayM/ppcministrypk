<?php
$page_slug = 'local-church';
$page_title = 'Local Church';
$page_description = 'Weekly services and local church life at Philadelphia Pentecostal Church, Nawabshah.';
include __DIR__ . '/includes/header.php';

$data = get_json('local-church');
$photos = get_images('local-church');
$schedule = $data['schedule'] ?? [];
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow on-ink">This Week</span>
    <h1>Local Church Life</h1>
    <p class="lede"><?= h($data['intro'] ?? '') ?></p>
  </div>
</section>
<div class="stripe-divider thin"></div>

<section id="schedule">
  <div class="container two-col">
    <div>
      <span class="eyebrow">Weekly Schedule</span>
      <h2>Join Us</h2>
      <ul class="schedule-list">
        <?php foreach ($schedule as $s): ?>
          <li>
            <span class="day"><?= h($s['day']) ?></span>
            <span class="what"><?= h($s['what']) ?></span>
            <span class="time"><?= h($s['time']) ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="prose">
      <span class="eyebrow">Beyond Sunday</span>
      <h2>Everyday Church Life</h2>
      <p><?= h($data['life_note'] ?? '') ?></p>
      <p><strong><?= h(SITE_LOCATION) ?></strong> &middot; <a href="tel:<?= h(str_replace(' ', '', SITE_PHONE)) ?>" style="color:var(--ember)"><?= h(SITE_PHONE) ?></a></p>
    </div>
  </div>
</section>

<section class="bg-parchment">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">In Pictures</span>
      <h2>Recent Church Life</h2>
    </div>
    <?php if (!empty($photos)): ?>
      <div class="gallery">
        <?php foreach ($photos as $file): ?>
          <figure><img src="<?= h(image_url('local-church', $file)) ?>" alt="Local church life photo"></figure>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="empty-note">Photos from recent services and church gatherings will appear here soon.</div>
    <?php endif; ?>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
