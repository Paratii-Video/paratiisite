<?php $TEASERS = $GLOBALS['sections']['teasers']; ?>

<section id="teasers" class="teasers">
    <h2 class="visually-hidden"><?php echo $TEASERS['title']; ?></h2>
    <div class="teasers-wrapper">    
        <div class="teasers-entry">
            <h3 class="teasers-text"><?php echo $TEASERS['text']; ?></h3>
            <button class="teasers-button-next"><?php echo $TEASERS['button-video']; ?></button>
        </div>
        <div class="teasers-medias">
            <?php foreach ($TEASERS['items'] as $key => $value) : ?>
                <div class="teasers-medias-item <?php echo $value['class']; ?>" itemscope="" itemtype="http://schema.org/VideoObject">
                    <video class="teasers-video" poster="<?php echo $value['poster']; ?>" preload="metadata">
                        <?php foreach($value['media'] as $key2 => $value2): ?>
                            <source src="<?php echo $value2['src']; ?>" type="<?php echo $value2['type']; ?>">
                        <?php endforeach; ?>
                    </video>
                    <meta itemprop='name' content='Teaser: <?php echo $GLOBALS['title']; ?>'/>
                    <meta itemprop='description' content='<?php echo $GLOBALS['description']; ?>'/>
                    <meta itemprop="contentUrl" content="<?php echo $value2['src']; ?>">
                    <meta itemprop="thumbnailUrl" content="<?php echo $value['poster']; ?>">
                    <div itemprop="publisher" itemscope="" itemtype="http://schema.org/Organization">
                        <meta itemprop="name" content="Paratii">
                        <meta itemprop="alternateName" content="Paratii - Around The Block">
                        <meta itemprop="url" content="http://paratii.video/">
                    </div>
                </div>
            <?php endforeach; ?>   
        </div>
        <button class="teasers-button-scroll" title="<?php echo $TEASERS['button-scroll']; ?>">
            <svg class="teasers-button-scroll-svg" viewBox="0 0 89.7 33"><path fill="#22225E" d="M44.5 31.3L1.8 6.6l2-3.5 40.7 23.6L85.3 3.1l2 3.5"/></svg>
        </button>
    </div>
</section>