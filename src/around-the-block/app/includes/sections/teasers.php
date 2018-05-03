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
            
            <button class="teasers-button-next"><?php echo $TEASERS['button-video']; ?></button>
        </div>
        <div class="teasers-medias">
            <div class="medias-controls"></div>
            <div class="teasers-medias-wrapper">
                <?php
                    foreach ($TEASERS['items'] as $key => $value) :
                    $gotiframe = isset($value['iframe']);
                ?>
                    <div class="teasers-medias-item <?php echo $value['class']; ?> <?php if ($gotiframe) echo 'iframe';  ?>" itemprop="trailer" itemscope itemtype="http://schema.org/VideoObject">

                        <?php if ($gotiframe) echo $value['iframe'];  ?>

                        <video class="teasers-video" poster="<?php echo $value['poster']; ?>" preload="auto">
                            <?php foreach($value['media'] as $key2 => $value2): ?>
                                <source src="<?php echo $value2['src']; ?>" type="<?php echo $value2['type']; ?>">
                            <?php endforeach; ?>
                        </video>
                        <meta itemprop='name' content='<?php echo $value['name']; ?>'/>
                        <meta itemprop='description' content='<?php echo $value['description']; ?>'/>
                        <meta itemprop="contentUrl" content="<?php echo $value2['src']; ?>">
                        <meta itemprop="thumbnailUrl" content="<?php echo $value['poster']; ?>">
                        <meta itemprop="uploadDate" content="08/31/2017">
                        <div itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
                            <meta itemprop="name" content="Paratii">
                            <meta itemprop="url" content="http://paratii.video/">
                            <div  itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                <meta itemprop="url" content="http://paratii.video/imagens/cropped-logo_colorido_horizontal.png">
                                <meta itemprop="width" content="1349">
                                <meta itemprop="height" content="550">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>   
            </div>
        </div>
        <button class="teasers-button-scroll" title="<?php echo $TEASERS['button-scroll']; ?>">
            <svg class="teasers-button-scroll-svg" viewBox="0 0 89.7 33"><path fill="#22225E" d="M44.5 31.3L1.8 6.6l2-3.5 40.7 23.6L85.3 3.1l2 3.5"/></svg>
        </button>
    </div>
</section>