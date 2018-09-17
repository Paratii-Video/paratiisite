<?php $TEASERS = $GLOBALS['sections']['teasers']; ?>

<section id="teasers" class="teasers">
    <h2 class="visually-hidden"><?php echo $TEASERS['title']; ?></h2>
    <div class="teasers-wrapper">    
        <div class="teasers-entry">
            <h3 class="visually-hidden"><?php echo $TEASERS['text']; ?></h3>
            <div class="teasers-text">
                <span class="teasers-text-before"><?php echo $TEASERS['typewrite']['phrase-before']; ?></span>
                <?php
                    $typewrite = '[ ';

                    foreach ($TEASERS['typewrite']['items'] as $key => $value) {
                        $typewrite .= '"' . $value['type'] . '"';

                        if (($key + 1) < count($TEASERS['typewrite']['items'])) {
                             $typewrite .= ', ';
                        }
                    }

                    $typewrite .= ' ]';

                ?>
                <span class="teasers-text-typewrite" data-period="<?php echo $TEASERS['typewrite']['period']; ?>" data-type='<?php echo $typewrite; ?>'>
                    <span class="wrap"></span>
                </span>
                <span class="teasers-text-after"><?php echo $TEASERS['typewrite']['phrase-after']; ?></span>
            </div>
            <?php if(count($TEASERS['items']) > 1): ?>
                <button class="teasers-button-next"><?php echo $TEASERS['button-video']; ?></button>
            <?php endif; ?>
        </div>
        <div class="teasers-medias">
            <div class="teasers-medias-wrapper">
                <div class="teasers-medias-item"">
                    <?php
                        $teasersVideos = '';
                        foreach ($TEASERS['items'] as $key => $value) :
                            if ($key != 0) {
                                $teasersVideos .= ';';
                            }
                            $teasersVideos .= $value['src'];
                        endforeach;
                    ?>
                    <iframe id="teasers-iframe" class="teasers-iframe" data-videos="<?php echo $teasersVideos; ?>" src="<?php echo $TEASERS['items'][0]['src']; ?>" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true"></iframe>
                </div>                
            </div>
        </div>
        <button class="teasers-button-scroll" title="<?php echo $TEASERS['button-scroll']; ?>">
            <svg class="teasers-button-scroll-svg" viewBox="0 0 89.7 33"><path fill="#22225E" d="M44.5 31.3L1.8 6.6l2-3.5 40.7 23.6L85.3 3.1l2 3.5"/></svg>
        </button>
    </div>
</section>