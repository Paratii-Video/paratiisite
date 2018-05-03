<header class="main-header">
    <button class="main-header-button">
    <svg class="main-header-button-svg" viewBox="0 0 68 102">
        <path class="path1" d="M0 37.5232l63.3912-36.6 3.9 6.7548-63.3912 36.6z"></path>
        <path class="path2" d="M0 65.422l63.3912-36.6 3.9 6.7548-63.3912 36.6z"></path>
        <path class="path3" d="M0 93.3205l63.3912-36.6 3.9 6.7548-63.3912 36.6z"></path>
    </svg>
    </button>
    <h1 class="main-header-title"><?php echo $GLOBALS['title']; ?></h1>
    <div class="main-nav">
        <span class="main-nav-bg"></span>
        <div class="main-nav-wrapper">
            <button class="main-nav-button">
                <svg class="main-nav-button-svg"  viewBox="0 0 81 86.6">
                    <path fill="none" stroke="#00EFC6" stroke-width="6" stroke-miterlimit="10" d="M20 22.5l41 41M20 63.5l41-41" />
                </svg>
            </button>
            <ul class="main-nav-list">
                <?php foreach ($GLOBALS['main-nav']['items'] as $key => $value) : ?>
                    <li class="main-nav-item"><a class="main-nav-link" href="<?php echo $value['href']; ?>"><?php echo $value['title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</header>