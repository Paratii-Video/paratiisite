<section id="about" class="about">
    <h2 class="visually-hidden"><?php echo $GLOBALS['sections']['about']['title']; ?></h2>
    <div class="about-content">
        <div class="about-entry" itemprop="description">
            <?php echo $GLOBALS['sections']['about']['content']; ?>
        </div>
        <div class="about-asset">
            <!-- <div id="cube-animation-1" class="about-svg hide-mobile"></div> -->
            <svg class="about-svg hide-mobile"><use xlink:href="#svg-about"></svg>
            <svg class="about-svg show-mobile"><use xlink:href="#svg-discover-mobile"></svg>
        </div>
    </div>
</section>

