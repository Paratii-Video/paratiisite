<?php
    include './includes/data/globals.php';
    include './includes/utils/Mobile_Detect.php';

    $detect = new Mobile_Detect;
    $is_mobile = $detect->isMobile() || $detect->isTablet();
    $body_class = ($is_mobile) ? 'ismobile' : '';
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
        <meta name="theme-color" content="#0f1428">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,700">
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="icon" type="image/x-icon" href='images/favicon.ico'>
        <link rel="image_src" href="images/src_image.png" />
        <link rel="manifest" href="manifest.json"> 

    </head>
    <body class="<?php echo $body_class; ?>">
        <?php include './includes/components/svg.php'; ?>
        <?php include './includes/sections/intro.php'; ?>
        <?php include './includes/sections/header.php'; ?>
        <h2 class="around-copyright"><?php echo $GLOBALS['copyright']; ?></h2>
        <main class="around-main">
            <h1 class="visually-hidden"><?php echo $GLOBALS['main']['title']; ?></h1>
            <?php include './includes/sections/teasers.php'; ?>
            <?php include './includes/sections/about.php'; ?>
            <?php include './includes/sections/chapters.php'; ?>
            <?php include './includes/sections/interviews.php'; ?>
            <div class="split">
                <?php include './includes/sections/subscribe.php'; ?>
                <?php include './includes/sections/discover.php'; ?>
            </div>
        </main>
        <?php include './includes/sections/footer.php'; ?>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');</script>
        <script src="scripts/app.js"></script>
    </body>
</html>