<?php $CHAPTERS = $GLOBALS['sections']['chapters']; ?>

<section class="chapters">
    <div class="chapters-asset"><svg class="chapters-svg"><use xlink:href="#chapters"></svg></div>
    <h2 class="chapters-title"><?php echo $CHAPTERS['title']; ?></h2>
    <div class="chapters-items">
        <ul class="chapters-list">
            <?php foreach ($CHAPTERS['items'] as $key => $value) : ?>
                <li class="chapters-item">
                    <a class="chapters-link" href="#" style="background-image: url(<?php echo $value['background']; ?>);"><?php echo $value['title']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>