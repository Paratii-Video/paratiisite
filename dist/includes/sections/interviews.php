<?php $INTERVIEWS = $GLOBALS['sections']['interviews']; ?>

<section id="interviews" class="interviews">
    <h2 class="interviews-title"><?php echo $INTERVIEWS['title']; ?></h2>
    <ul class="interviews-nav">
        <?php foreach($INTERVIEWS['items'] as $key => $value): ?>
        <li class="interviews-nav-item <?php echo $value['class']; ?>">
            <a href="#<?php echo $value['href']; ?>" class="interviews-nav-link">
                <div class="interviews-nav-thumb"><img class="interviews-nav-image" src="<?php echo $value['image']; ?>" /></div>
                <div class="interviews-nav-entry">
                    <p class="interviews-nav-title"><?php echo $value['title']; ?></p>
                    <p class="interviews-nav-text"><?php echo $value['about']; ?></p>
                    <p class="interviews-nav-button"><?php echo $value['button'] ?></p>
                </div>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    <div class="interviews-modal">
        <?php foreach($INTERVIEWS['items'] as $key => $value): ?>
            <article class="interviews-article" id="<?php echo $value['href']; ?>" itemscope itemtype="http://schema.org/Person">
                <div class="interviews-article-wrapper">                
                    <div class="interviews-article-thumb" itemscope itemtype="http://schema.org/ImageObject">
                        <meta itemprop="name" content="<?php echo $value['title']; ?>">
                        <meta itemprop="description" content="Around the Block - <?php echo $value['title']; ?>">
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
                        <h3 class="interviews-article-title" itemprop="name"><?php echo $value['break']; ?></h3>
                        <ul class="interviews-article-social">
                            <?php foreach($value['social'] as $key2 => $value2) : ?>
                            <li class="interviews-article-social-item">
                                <a class="interviews-article-social-link" href="<?php echo $value2['url']; ?>" itemprop="url">
                                    <?php if($value2['class'] == 'twitter'): ?>
                                        <svg class="interviews-article-social-svg" viewBox="0 0 105 105">
                                          <path d="M52.5 2.5c-27.6 0-50 22.9-50 51.2 0 22.6 14.4 41.9 34.3 48.7 2.5.5 3.4-1.1 3.4-2.5 0-1.3-.1-4.5-.1-8.8-14 3.1-16.8-6.8-16.8-6.8-2.3-6-5.5-7.5-5.5-7.5-4.6-3.2.4-3.1.4-3.1 5 .4 7.6 5.3 7.6 5.3 4.5 7.8 11.7 5.6 14.6 4.3.5-3.3 1.7-5.6 3.2-6.8-11.2-1.5-22.8-5.8-22.8-25.4 0-5.7 2-10.1 5.1-13.8-.6-1.4-2.2-6.4.5-13.6 0 0 4.2-1.4 13.7 5.3 4-1.2 8.2-1.8 12.5-1.8s8.5.7 12.4 1.8c9.5-6.6 13.7-5.3 13.7-5.3 2.8 7 1 12.3.6 13.6 3.2 3.6 5.1 8.1 5.1 13.8 0 19.7-11.7 24.1-22.8 25.3 1.8 1.6 3.4 4.7 3.4 9.5 0 6.8-.1 12.4-.1 14 0 1.4 1 2.9 3.4 2.5 19.8-6.8 34.2-26.1 34.2-48.6 0-28.3-22.5-51.3-50-51.3z" fill="#00EFC6"/>
                                        </svg>
                                    <?php else: ?>
                                        <svg class="interviews-article-social-svg" viewBox="0 0 105 105">
                                          <path d="M52.5 2.5c-27.6 0-50 22.4-50 50s22.4 50 50 50 50-22.4 50-50-22.4-50-50-50zm29.3 41.1v1.8c0 18.1-13.7 39-39 39-7.7 0-15-2.3-21-6.2 1 .1 2.2.2 3.2.2 6.4 0 12.3-2.2 17-5.8-6-.1-11-4.1-12.8-9.5.9.2 1.7.3 2.6.3 1.2 0 2.5-.2 3.6-.5-6.3-1.2-11-6.8-11-13.4v-.2c1.8 1 4 1.6 6.2 1.7-3.6-2.5-6.1-6.7-6.1-11.4 0-2.5.7-4.9 1.8-6.9 7 8.3 17.1 13.7 28.4 14.3-.2-1-.4-2-.4-3.1 0-7.5 6.1-13.7 13.7-13.7 3.9 0 7.5 1.6 10 4.3 3.1-.6 6-1.7 8.7-3.3-1 3.1-3.1 5.9-6 7.5 2.8-.3 5.4-1 7.8-2.2-1.6 2.9-4 5.2-6.7 7.1z" fill="#00EFC6"/>
                                        </svg>

                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                        <p class="interviews-article-subtitle" itemprop="jobTitle"><?php echo $value['about']; ?></p>
                        <p class="interviews-article-text"><?php echo $value['description']; ?></p>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
        <button class="interviews-button-back" title="<?php echo $INTERVIEWS['button-back']; ?>">
            <svg class="interviews-button-back-svg"  viewBox="0 0 81 86.6">
                <path fill="none" stroke="#00EFC6" stroke-width="6" stroke-miterlimit="10" d="M20 22.5l41 41M20 63.5l41-41" />
            </svg>
        </button>

    </div>
</section>