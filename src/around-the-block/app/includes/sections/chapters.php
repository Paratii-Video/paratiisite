<?php $CHAPTERS = $GLOBALS['sections']['chapters']; ?>

<section id="chapters" class="chapters">
    <div class="chapters-asset">
        <!-- <div id="cube-animation-2" class="chapters-svg hide-mobile"></div> -->
        <svg class="chapters-svg"><use xlink:href="#svg-chapters"></svg>
    </div>


    <h2 class="chapters-title"><?php echo $CHAPTERS['title']; ?></h2>
    <div class="chapters-items">
        <ul class="chapters-list">
            <?php foreach ($CHAPTERS['items'] as $key => $value) : ?>
                <li class="chapters-item item-<?php echo $key; ?>">
                    <a class="chapters-button <?php echo ($key % 2) ? ' blue' : ' green'; ?>" href="#" style="background-image: url(<?php echo $value['background']; ?>);">
                        <span class="chapters-button-label"><?php echo $value['label']; ?></span>
                        <div class="chapters-button-info" style="background-image: url(<?php echo $value['background-info']; ?>);">
                            <p class="chapters-button-info-text"><?php echo $CHAPTERS['alert']; ?></p>
                        </div>
                        <div class="chapters-button-entry">
                            <h3 class="chapters-button-title title-<?php echo $key ?>"><?php echo $value['title']; ?></h3>
                            <h4 class="chapters-button-text"><?php echo $value['text']; ?></h4>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>