<?php $SUBSCRIBE = $GLOBALS['sections']['subscribe']; ?>
<section id="subscribe" class="subscribe">
    <h2 class="visually-hidden"><?php echo $SUBSCRIBE['title']; ?></h2>
    <span class="subscribe-loader"></span>
    
    <form class="subscribe-form-01" action="includes/send" enctype="text/plain">
        <p class="subscribe-form-01-text">
            <span class="title"><?php echo $SUBSCRIBE['form-01-title']; ?></span><span class="text"><?php echo $SUBSCRIBE['form-01-text']; ?></span>
        </p>
        <label class="subscribe-label green">
            <span class="subscribe-label-text"><?php echo $SUBSCRIBE['form-01-label']; ?></span>
            <input class="subscribe-input" type="text" name="subscribe_email" data-alert="<?php echo $SUBSCRIBE['alert-email']; ?>" />
        </label>
        <button class="button-submit"><?php echo $SUBSCRIBE['form-01-button']; ?></button>
    </form>
    
    <form class="subscribe-form-02" action="includes/send" enctype="text/plain">
        <p class="subscribe-form-02-text"><?php echo $SUBSCRIBE['form-02-title']; ?></p>
        <label class="subscribe-label">
            <span class="subscribe-label-text"><?php echo $SUBSCRIBE['form-02-label-01']; ?></span>
            <input class="subscribe-input who" type="text" name="subscribe_who" data-alert="<?php echo $SUBSCRIBE['alert-who']; ?>" />
        </label>

        <label class="subscribe-label">
            <span class="subscribe-label-text"><?php echo $SUBSCRIBE['form-02-label-02']; ?></span>
            <input class="subscribe-input why" type="text" name="subscribe_why" data-alert="<?php echo $SUBSCRIBE['alert-why']; ?>" />
        </label>
        <button class="button-submit"><?php echo $SUBSCRIBE['form-02-button']; ?></button>
    </form>
</section>