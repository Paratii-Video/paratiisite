<?php $TEASERS = $GLOBALS['sections']['teasers']; ?>

<section id="teasers" class="teasers">
    <h2 class="visually-hidden"><?php echo $TEASERS['title']; ?></h2>
    <?php foreach ($TEASERS['items'] as $key => $value) : ?>
    <article class="teasers-article <?php echo $value['class']; ?>">
        <div class="teasers-article-entry">
            <h3 class="teasers-article-title "><?php echo $value['title']; ?></h3>
            <button class="teasers-article-button"><?php echo $value['button']; ?></button>
        </div>
        <div class="teasers-article-media"><?php echo $value['media']; ?></div>
    </article>
    <?php endforeach; ?>
    <button class="teasers-button" title="<?php echo $TEASERS['button']; ?>">
        <svg class="teasers-button-svg" viewBox="0 0 89.7 33"><path fill="#22225E" d="M44.5 31.3L1.8 6.6l2-3.5 40.7 23.6L85.3 3.1l2 3.5"/></svg>
    </button>
</section>