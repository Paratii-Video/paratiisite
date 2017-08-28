<div class="intro show">
    <?php if ($is_mobile): ?>
        <img class="intro-media intro-image" src="<?php echo $GLOBALS['logo']; ?>">
    <?php else: ?>
        <video class="intro-media intro-video" preload="auto">
            <source src="videos/logo.webm" type="video/webm">
            <source src="videos/logo.mp4" type="video/mp4">
        </video>
    <?php endif; ?>
</div>