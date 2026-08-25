<?php
$page_slug = 'home';
$page_title = 'Welcome Home';
$page_description = 'Philadelphia Pentecostal Church — a home for worship, discipleship, and mission in Nawabshah, Sindh since 1974.';
include __DIR__ . '/includes/header.php';

$home = get_json('home');
$hero_photos   = get_images('hero');
$pastor_photos = get_images('pastors');
?>

<section class="hero">
  <?php if (!empty($hero_photos)): ?>
    <div class="hero-photo" style="background-image:url('<?= h(image_url('hero', $hero_photos[0])) ?>')"></div>
  <?php endif; ?>
  <div class="hero-inner">
    <span class="eyebrow on-ink">Est. <?= h(SITE_SINCE) ?> &middot; <?= h(SITE_LOCATION) ?></span>
    <h1><?= h($home['hero_title'] ?? 'Welcome Home') ?></h1>
    <p class="lede"><?= h($home['hero_lede'] ?? '') ?></p>
    <div class="hero-ctas">
      <a href="local-church.php" class="btn btn-primary">Plan Your Visit</a>
      <a href="pastors.php" class="btn btn-outline-light">Our Story</a>
    </div>
    <div class="hero-meta">
      <span>Sun Worship &middot; <strong>11:00 AM</strong></span>
      <span>Sunday School &middot; <strong>9:30 AM</strong></span>
      <span><strong><?= h(SITE_PHONE) ?></strong></span>
    </div>
  </div>
</section>
<div class="stripe-divider"></div>

<section class="bg-parchment">
  <div class="container spotlight">
    <div class="spotlight-media">
      <?php if (!empty($pastor_photos)): ?>
        <img src="<?= h(image_url('pastors', $pastor_photos[0])) ?>" alt="<?= h(SITE_PASTOR) ?>">
      <?php else: ?>
        <div class="placeholder">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M12 2c.6 2.6-.9 4-2 5.4C8.6 9 8 10.4 8 12a4 4 0 0 0 8 0c0-1-.3-1.8-.8-2.6.9.7 1.8 2 1.8 3.9a5 5 0 0 1-10 0c0-3.4 2.4-5 3.8-6.7C11.6 5.4 12.2 3.8 12 2Z"/></svg>
        </div>
      <?php endif; ?>
    </div>
    <div>
      <span class="eyebrow">A Word From Our Pastor</span>
      <blockquote>&ldquo;<?= h($home['spotlight_quote'] ?? '') ?>&rdquo;</blockquote>
      <cite><?= h($home['spotlight_name'] ?? SITE_PASTOR) ?></cite>
      <a href="pastors.php" class="btn btn-outline-dark">Meet Our Pastors</a>
    </div>
  </div>
</section>

<section class="bg-ink">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow on-ink">Find Your Place Here</span>
      <h2><?= h($home['find_place_note'] ?? 'There is a place kept for you here.') ?></h2>
    </div>
    <div class="card-grid cols-4">
      <div class="card" style="background:var(--ink-2);border-color:var(--line-on-ink);">
        <div class="num">01</div>
        <h3 style="color:var(--parchment)">Sunday Worship</h3>
        <p style="color:rgba(247,241,227,.7)">Join us for worship and the Word every Sunday morning at 11:00 AM.</p>
        <a href="local-church.php" class="card-link" style="color:var(--gold-soft)">Service times</a>
      </div>
      <div class="card" style="background:var(--ink-2);border-color:var(--line-on-ink);">
        <div class="num">02</div>
        <h3 style="color:var(--parchment)">Sunday School</h3>
        <p style="color:rgba(247,241,227,.7)">Age-grouped Bible classes for children, starting at 9:30 AM each Sunday.</p>
        <a href="sunday-school.php" class="card-link" style="color:var(--gold-soft)">See classes</a>
      </div>
      <div class="card" style="background:var(--ink-2);border-color:var(--line-on-ink);">
        <div class="num">03</div>
        <h3 style="color:var(--parchment)">Prayer &amp; Bible Study</h3>
        <p style="color:rgba(247,241,227,.7)">Midweek prayer and Bible study gatherings open to the whole congregation.</p>
        <a href="local-church.php" class="card-link" style="color:var(--gold-soft)">Weekly rhythm</a>
      </div>
      <div class="card" style="background:var(--ink-2);border-color:var(--line-on-ink);">
        <div class="num">04</div>
        <h3 style="color:var(--parchment)">LikeChrist Welfare</h3>
        <p style="color:rgba(247,241,227,.7)">Practical help for families in need — food, medical care, and education support.</p>
        <a href="welfare.php" class="card-link" style="color:var(--gold-soft)">See the work</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Ministries</span>
      <h2>A place for you and your family</h2>
      <p>Six areas of church life, each carried by members of this congregation.</p>
    </div>
    <div class="card-grid cols-3">
      <?php
      $ministries_nav = [
          ['tag' => 'Leadership',  'title' => 'Pastors & Leadership',      'body' => 'Meet the pastors and elders who shepherd this church.',          'href' => 'pastors.php',       'section' => 'pastors'],
          ['tag' => 'Missions',    'title' => 'Ministry Projects',          'body' => 'Reach to Gentiles — carrying the Gospel to unreached communities.', 'href' => 'ministries.php',    'section' => 'ministries'],
          ['tag' => 'Community',   'title' => 'Local Church Life',          'body' => 'Weekly services, visitations, and everyday church life.',        'href' => 'local-church.php',  'section' => 'local-church'],
          ['tag' => 'Children',    'title' => 'Sunday School',              'body' => 'Bible classes grouped by age, every Sunday morning.',            'href' => 'sunday-school.php', 'section' => 'sunday-school'],
          ['tag' => 'Gatherings',  'title' => 'Conventions',                'body' => 'Extended times of worship and teaching with neighbouring churches.', 'href' => 'conventions.php', 'section' => 'conventions'],
          ['tag' => 'Compassion',  'title' => 'LikeChrist Welfare',         'body' => 'Food, medical, and education support for families in need.',    'href' => 'welfare.php',       'section' => 'welfare'],
      ];
      foreach ($ministries_nav as $m):
          $imgs = get_images($m['section']);
      ?>
      <a href="<?= h($m['href']) ?>" class="ministry-card">
        <?php if (!empty($imgs)): ?>
          <img src="<?= h(image_url($m['section'], $imgs[0])) ?>" alt="<?= h($m['title']) ?>">
        <?php else: ?>
          <div class="fallback-bg"></div>
        <?php endif; ?>
        <div class="ministry-card-body">
          <span class="tag"><?= h($m['tag']) ?></span>
          <h3><?= h($m['title']) ?></h3>
          <p><?= h($m['body']) ?></p>
          <span class="card-link">Learn more</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="bg-parchment">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Get Involved</span>
      <h2>See how God can use you here</h2>
    </div>
    <div class="card-grid cols-3">
      <div class="card">
        <div class="num">01</div>
        <h3>Volunteer</h3>
        <p>Serve on a team — worship, Sunday school, welfare, or hospitality — and put your gifts to work in the church.</p>
        <a href="local-church.php" class="card-link">Get in touch</a>
      </div>
      <div class="card">
        <div class="num">02</div>
        <h3>Give</h3>
        <p>Support the church's ministry and the LikeChrist Welfare programmes that carry mercy into our community.</p>
        <a href="welfare.php#give" class="card-link">Ways to give</a>
      </div>
      <div class="card">
        <div class="num">03</div>
        <h3>Request Prayer</h3>
        <p>Bring a need to the church family, whether personal, a local church need, or something for the wider community.</p>
        <a href="conventions.php#problems" class="card-link">Share a need</a>
      </div>
    </div>
  </div>
</section>

<section style="padding-top:0">
  <div class="container">
    <div class="cta-banner">
      <div class="cta-banner-text">
        <h3>Join us this Sunday</h3>
        <p>Sunday School at 9:30 AM &middot; Worship Service at 11:00 AM &middot; <?= h(SITE_LOCATION) ?></p>
      </div>
      <div class="cta-banner-actions">
        <a href="local-church.php" class="btn btn-primary">Plan Your Visit</a>
        <a href="mailto:<?= h(SITE_EMAIL) ?>" class="btn btn-outline-light">Email the Church</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
