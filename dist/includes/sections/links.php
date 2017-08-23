<?php $LINKS = $GLOBALS['aside']; ?>

<aside class="aroundtheblock-aside">
    <h2 class="visually-hidden"><?php echo $LINKS['title']; ?></h2>
    <ul class="aroundtheblock-aside-list">
        <?php foreach ($LINKS['items'] as $key => $value) : ?>
            <li class="aroundtheblock-aside-item">
                <a class="aroundtheblock-aside-link" href="<?php echo $value['href']; ?>">
                    <svg class="aroundtheblock-aside-svg"><use xlink:href="<?php echo $value['icon'] ?>"></svg>
                    <span class="visually-hidden"><?php echo $value['title']; ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>