<?php
    include './data/data.php';

    // include './includes/utils/Mobile_Detect.php';
    // $detect = new Mobile_Detect;
    // $is_mobile = $detect->isMobile() || $detect->isTablet();
    // $body_class = ($is_mobile) ? 'ismobile' : '';
?>

<!doctype html>
<html class="no-js" lang="<?php echo $GLOBALS['lang']; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,user-scalable=no">
        <title><?php echo $GLOBALS['title']; ?></title>
        
        <meta name="description" content="<?php echo $GLOBALS['description']; ?>">
        <meta property="og:title" content="<?php echo $GLOBALS['title']; ?>" />
        <meta property="og:description" content="<?php echo $GLOBALS['description']; ?>" />
        <meta property="og:type" content="site" />
        <meta property="og:image" content="<?php echo $GLOBALS['image_src']; ?>" />
        <meta property="og:site_name" content="<?php echo $GLOBALS['title']; ?>" />
        <meta property="og:url" content="<?php echo $GLOBALS['url']; ?>" />
        <meta name="theme-color" content="#0f1428">
        
        <link rel="stylesheet" href="https://use.typekit.net/gis5uub.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,700">
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="icon" type="image/x-icon" href="<?php echo $GLOBALS['favicon']; ?>">
        <link rel="image_src" href="<?php echo $GLOBALS['image_src']; ?>" />
        <link rel="manifest" href="manifest.json"> 
        
        <script src="scripts/mobile-detect.min.js"></script>
        <script>
            var md = new MobileDetect(window.navigator.userAgent);
            var ismobile = (md.mobile() || md.tablet());
            var bodyclass = (ismobile) ? 'ismobile ' + md.os() : '';
            bodyclass += ' has-banner';
        </script>
    </head>
    <body class="">
        <script>document.body.className = bodyclass;</script>
        <?php
            include './includes/components/svg.php';
            include './includes/sections/intro.php';
            include './includes/sections/header.php';
            include './includes/sections/banner-top.php';
        ?>
        <h2 class="around-copyright"><?php echo $GLOBALS['copyright']; ?></h2>
        <main class="around-main" itemscope itemtype="http://schema.org/Movie" data-logo="<?php echo $GLOBALS['logo']; ?>">
            <meta itemprop="name" content="<?php echo $GLOBALS['title']; ?>"/>
            <meta itemprop="dateCreated" content="<?php echo $GLOBALS['dateCreated']; ?>"/>
            <meta itemprop="image" content="<?php echo $GLOBALS['logo']; ?>"/>
            <div itemprop="director" itemscope="" itemtype="http://schema.org/Person">
                <meta itemprop="name" content="Paratii">
                <meta itemprop="url" content="http://paratii.video/">
            </div>

            <div itemprop="creator" itemscope="" itemtype="http://schema.org/Organization">
                <meta itemprop="name" content="Paratii">
                <meta itemprop="alternateName" content="Paratii - Around The Block">
                <meta itemprop="url" content="http://paratii.video/">
                <meta itemprop="logo" content="<?php echo $GLOBALS['logo']; ?>">
            </div>

            <h1 class="visually-hidden"><?php echo $GLOBALS['main']['title']; ?></h1>
            <?php
                include './includes/sections/teasers.php';
                include './includes/sections/about.php';
                include './includes/sections/chapters.php';
                include './includes/sections/interviews.php';
            ?>
            <div class="split">
                <?php
                    include './includes/sections/subscribe.php';
                    include './includes/sections/discover.php';
                ?>
            </div>
        </main>
        <?php include './includes/sections/footer.php'; ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', '<?php echo $GLOBALS['GA']; ?>', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="scripts/app.js"></script>
    </body>
</html>