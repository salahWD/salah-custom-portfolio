<?php
$back = $project && $isPreview ? $projectPath : "/{$_lang}/portfolio";
$backLabel = $project && $isPreview ? 'Back to project' : 'Back to portfolio';
?>
<main id="project-content" class="project-page">
  <div class="container">
    <nav class="project-nav" aria-label="<?= __('Project navigation') ?>">
      <a class="project-link" href="<?= e($back) ?>">
        <i class="fas fa-arrow-left project-back" aria-hidden="true"></i>
        <?= __($backLabel) ?>
      </a>
      <?php if ($project) : ?>
        <a class="project-link" href="<?= e($alternatePath) ?>" lang="<?= $otherLang ?>" hreflang="<?= $otherLang ?>" dir="auto">
          <?= $otherLang === 'ar' ? 'العربية' : 'English' ?>
        </a>
      <?php endif; ?>
    </nav>

    <?php if (!$project) : ?>
      <h1 class="project-title"><?= __('Project not found') ?></h1>
    <?php else :
      $detail = $project[$_lang];
      $title = $detail['title'];
      $images = $project['images'];
      $fullImage = $project['full_image'] ?? $images[0];
      $caseStudy = $project['case_study'] ?? null;
      $liveUrl = $project['live_url'] ?? null;
      $githubUrl = $project['github_url'] ?? null;
    ?>
      <?php if ($isPreview) : ?>
        <header class="project-preview-heading">
          <h1 class="project-title"><?= e($title) ?></h1>
          <h2><?= __('Screenshot preview') ?></h2>
        </header>
        <div class="project-gallery">
          <?php foreach ($images as $index => $image) : ?>
            <a class="project-image" href="<?= e($index === 0 ? $fullImage : $image) ?>" aria-label="<?= e(__('Open full-size image') . ' – ' . sprintf(__('Screenshot %d of %s'), $index + 1, $title)) ?>">
              <img src="<?= e($image) ?>" alt="<?= e(sprintf(__('Screenshot %d of %s'), $index + 1, $title)) ?>" width="500" height="360">
            </a>
          <?php endforeach; ?>
        </div>
      <?php else : ?>
        <section class="project-hero" aria-labelledby="project-title">
          <div class="project-intro">
            <?php if ($caseStudy) : ?>
              <a class="project-link project-case-link" href="#case-study">
                <?= __('Case study') ?> <i class="fas fa-arrow-down" aria-hidden="true"></i>
              </a>
            <?php endif; ?>
            <h1 class="project-title" id="project-title"><?= e($title) ?></h1>

            <h2 class="project-label"><?= __('Project description') ?></h2>
            <p class="project-description"><?= e($detail['description']) ?></p>

            <div class="btns project-actions">
              <a class="btn" href="<?= e($liveUrl ?? $projectPath . '/preview') ?>"<?= $liveUrl ? ' target="_blank" rel="noopener noreferrer"' : '' ?>>
                <i class="fas fa-external-link-alt" aria-hidden="true"></i>
                <?= __('Live preview') ?>
                <?php if (!$liveUrl) : ?><span class="project-action-note"><?= __('Demo') ?></span><?php endif; ?>
              </a>
              <a class="btn" href="<?= e($githubUrl ?? 'https://github.com/octocat/Hello-World') ?>" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-github" aria-hidden="true"></i>
                <?= __('GitHub repository') ?>
                <?php if (!$githubUrl) : ?><span class="project-action-note"><?= __('Example') ?></span><?php endif; ?>
              </a>
            </div>
            <?php if (!$liveUrl) : ?>
              <p class="project-preview-note"><?= __('The demo preview uses project screenshots.') ?></p>
            <?php endif; ?>
          </div>

          <a class="project-image project-cover" href="<?= e($fullImage) ?>" aria-label="<?= e(__('Open full-size image') . ' – ' . sprintf(__('Screenshot %d of %s'), 1, $title)) ?>">
            <img src="<?= e($images[0]) ?>" alt="<?= e(sprintf(__('Screenshot %d of %s'), 1, $title)) ?>" width="500" height="360">
          </a>
        </section>

        <section class="project-band" aria-labelledby="tech-stack">
          <h2 id="tech-stack"><?= __('Tech stack') ?></h2>
          <ul class="project-stack" role="list">
            <?php foreach ($project['stack'] as $technology) : ?>
              <li dir="ltr"><?= e($technology) ?></li>
            <?php endforeach; ?>
          </ul>
        </section>

        <?php if (count($images) > 1) : ?>
          <section class="project-band" aria-labelledby="project-screenshots">
            <h2 id="project-screenshots"><?= __('More project screenshots') ?></h2>
            <div class="project-gallery">
              <?php foreach (array_slice($images, 1, null, true) as $index => $image) : ?>
                <a class="project-image" href="<?= e($index === 0 ? $fullImage : $image) ?>" aria-label="<?= e(__('Open full-size image') . ' – ' . sprintf(__('Screenshot %d of %s'), $index + 1, $title)) ?>">
                  <img src="<?= e($image) ?>" alt="<?= e(sprintf(__('Screenshot %d of %s'), $index + 1, $title)) ?>" width="500" height="360" loading="lazy">
                </a>
              <?php endforeach; ?>
            </div>
          </section>
        <?php endif; ?>

        <?php if ($caseStudy) :
          $story = $caseStudy[$_lang];
        ?>
          <section class="project-band project-case" id="case-study" aria-labelledby="case-study-title">
            <div class="project-section-heading">
              <h2 id="case-study-title"><?= __('Case study') ?></h2>
              <?php if ($caseStudy['is_sample']) : ?>
                <p class="project-label"><?= __('Sample case study') ?></p>
              <?php endif; ?>
            </div>

            <div class="project-story">
              <?php foreach ($story['sections'] as $heading => $text) : ?>
                <section>
                  <h3><?= __($heading) ?></h3>
                  <p><?= e($text) ?></p>
                </section>
              <?php endforeach; ?>
            </div>

            <section class="project-results" aria-labelledby="project-results">
              <h3 id="project-results"><?= __($caseStudy['is_sample'] ? 'Demo results' : 'Results') ?></h3>
              <dl>
                <?php foreach ($story['results'] as [$value, $label]) : ?>
                  <div>
                    <dt><?= e($label) ?></dt>
                    <dd><bdi><?= e($value) ?></bdi></dd>
                  </div>
                <?php endforeach; ?>
              </dl>
            </section>
          </section>
        <?php endif; ?>

        <section class="project-band project-review" aria-labelledby="client-review">
          <h2 id="client-review"><?= __('Client review') ?></h2>
          <figure>
            <blockquote><?= e($detail['review']) ?></blockquote>
            <?php if ($project['review_is_sample']) : ?>
              <figcaption><?= __('Sample client review') ?></figcaption>
            <?php endif; ?>
          </figure>
        </section>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</main>
