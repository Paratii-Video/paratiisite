<?php $DISCOVER = $GLOBALS['sections']['discover']; ?>

<aside id="discover" class="discover">
    <h2 class="discover-title"><?php echo $DISCOVER['title']; ?></h2>
    <div class="discover-entry"></div>
<!--     <div id="cube-animation-3" class="discover-svg hide-mobile"></div>
    <div id="cube-animation-5" class="discover-svg show-mobile"></div> -->
    <svg class="discover-svg hide-mobile"><use xlink:href="#svg-discover"></svg>
    <svg class="discover-svg show-mobile"><use xlink:href="#svg-discover-mobile"></svg>
</aside>

