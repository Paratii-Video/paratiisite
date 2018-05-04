<?php $INTERVIEWS = $GLOBALS['sections']['interviews']; ?>

<section id="interviews" class="interviews">
    <h2 class="interviews-title"><?php echo $INTERVIEWS['title']; ?></h2>
    <ul class="interviews-nav">
        <?php foreach($INTERVIEWS['items'] as $key => $value): ?>
        <li class="interviews-nav-item <?php echo $value['class']; ?>">
            <a href="#<?php echo $value['href']; ?>" class="interviews-nav-link" data-title="<?php echo $value['title']; ?>">
                <div class="interviews-nav-thumb"><img class="interviews-nav-image" src="<?php echo $value['image']; ?>" /></div>
                <div class="interviews-nav-entry">
                    <p class="interviews-nav-title"><?php echo $value['nav-title']; ?></p>
                    <p class="interviews-nav-text"><?php echo $value['about']; ?></p>
                    <p class="interviews-nav-button"><?php echo $value['button'] ?></p>
                </div>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    <div class="interviews-modal">
        <?php foreach($INTERVIEWS['items'] as $key => $value): ?>
            <article class="interviews-article" id="<?php echo $value['href']; ?>" itemprop="actor" itemscope itemtype="http://schema.org/Person">
                <div class="interviews-article-wrapper">                
                    <div class="interviews-article-thumb" itemscope itemtype="http://schema.org/ImageObject">
                        <meta itemprop="name" content="<?php // echo $value['title']; ?>">
                        <meta itemprop="description" content="Around the Block - <?php // echo $value['title']; ?>">
                        <meta itemprop="author" content="Paratii">
                        <meta itemprop="datePublished" content="2017-08-20T21:00-00:00">
                        <meta itemprop="fileFormat" content="image/jpg">
                        <meta itemprop="width" content="705">
                        <meta itemprop="height" content="793">
                        <meta itemprop="url" content="<?php echo $value['image']; ?>">
                        <div itemprop="publisher" itemscope="" itemtype="http://schema.org/Organization">
                            <meta itemprop="name" content="Paratii">
                            <meta itemprop="alternateName" content="Paratii - Around The Block">
                            <meta itemprop="url" content="http://paratii.video/">
                        </div>
                        <img class="interviews-article-image" src="<?php echo $value['image']; ?>" itemprop="image" />
                        <img class="interviews-article-gif" src="<?php echo $value['gif']; ?>" />
                    </div>
                    <div class="interviews-article-entry">
                        <h3 class="visually-hidden" itemprop="name"><?php echo $value['nav-title']; ?></h3>
                        <div class="interviews-article-header">
                          <?php foreach ($value['header'] as $key2 => $value2) : ?>
                            <p class="interviews-article-title"><?php echo $value2['title']; ?></p>
                            <ul class="interviews-article-social">
                                <?php foreach($value2['social'] as $key3 => $value3) : ?>
                                    <li class="interviews-article-social-item">
                                        <a class="interviews-article-social-link" href="<?php echo $value3['url']; ?>" itemprop="url" target="_blank"><?php echo $value3['label']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                          <?php endforeach; ?>
                        </div>
                        <h4 class="interviews-article-subtitle" itemprop="jobTitle"><?php echo $value['about']; ?></h4>
                        <p class="interviews-article-text"><?php echo $value['description']; ?></p>
                    </div>

                    <button class="interviews-button-back" title="<?php echo $INTERVIEWS['button-back']; ?>">
                        <svg class="interviews-button-back-svg"  viewBox="0 0 81 86.6">
                            <path fill="none" stroke="#00EFC6" stroke-width="6" stroke-miterlimit="10" d="M20 22.5l41 41M20 63.5l41-41" />
                        </svg>
                    </button>
                </div>
            </article>
        <?php endforeach; ?>

    </div>
</section>