<?php $DISCOVER = $GLOBALS['sections']['discover']; ?>

<aside class="discover">
    <h2 class="discover-title"><?php echo $DISCOVER['title']; ?></h2>
    <ul class="discover-list">
    <?php foreach ($DISCOVER['items'] as $key => $value) : ?>
        <li class="discover-item">
            <a class="discover-link" href="<?php echo $value['url']; ?>">
                <article class="discover-article" role="article" itemscope itemtype="http://schema.org/BlogPosting">
                    <time class="discover-time" itemprop="dateCreated" datetime="<?php echo $value['date']; ?>"><?php echo $value['date-label']; ?></time>
                    <h3 class="discover-item-title"><?php echo $value['title']; ?></h3>
                </article>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    <svg class="discover-svg hide-mobile"><use xlink:href="#discover"></svg>
    <svg class="discover-svg show-mobile"><use xlink:href="#discover-mobile"></svg>
</aside>

