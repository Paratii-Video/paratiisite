<?php $FOOTER = $GLOBALS['footer']; ?>

<aside class="aroundtheblock-footer">
    <h2 class="visually-hidden"><?php echo $FOOTER['title']; ?></h2>
    <ul class="aroundtheblock-footer-list">
        <?php foreach ($FOOTER['items'] as $key => $value) : ?>
            <li class="aroundtheblock-footer-item">
                <a class="aroundtheblock-footer-link" href="<?php echo $value['href']; ?>" target="_blank">
                    <svg class="aroundtheblock-footer-svg"><use xlink:href="<?php echo $value['icon'] ?>"></svg>
                    <span class="visually-hidden"><?php echo $value['title']; ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>