<div class="article-divider"></div>

<section class="related-articles">
  <h2 class="related-title">Kolejne artykuły</h2>

  <div class="related-grid">
    <?php foreach ($ARTICLES as $a): ?>
      <?php if ($a['id'] === $currentArticle) continue; ?>

      <a class="related-card" href="<?= $a['url'] ?>">
        <img src="<?= $a['cover'] ?>" class="related-img" alt="<?= htmlspecialchars($a['title'], ENT_QUOTES) ?>">

        <div class="related-body">
          <div class="article-category">
            <img src="<?= $a['icon'] ?>" class="category-icon" alt="">
            <span><?= htmlspecialchars($a['category'], ENT_QUOTES) ?></span>
          </div>

          <h3 class="related-card-title"><?= htmlspecialchars($a['title'], ENT_QUOTES) ?></h3>
        </div>
      </a>

    <?php endforeach; ?>
  </div>
</section>