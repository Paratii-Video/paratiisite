<?php $SUBSCRIBE = $GLOBALS['sections']['subscribe']; ?>
<section id="subscribe" class="subscribe">
    <h2 class="visually-hidden"><?php echo $SUBSCRIBE['title']; ?></h2>
    <span class="subscribe-loader"></span>
    
    <form class="subscribe-form-01" action="//video.us15.list-manage.com/subscribe/post?u=3363d6d446b55bfeec00cb430&id=d12f33be57" method="post" name="mc-embedded-subscribe-form" target="_blank">
        <input type="hidden" name="u" value="3363d6d446b55bfeec00cb430">
        <input type="hidden" name="id" value="7ae49d70ce">
        <!-- <input type="email" value="" name="EMAIL" class="email-field.active" id="email-field" placeholder="insert your email"> -->
        <p class="subscribe-form-01-text">
            <span class="title"><?php echo $SUBSCRIBE['form-01-title']; ?></span><span class="text"><?php echo $SUBSCRIBE['form-01-text']; ?></span>
        </p>
        <label class="subscribe-label green">
            <span class="subscribe-label-text"><?php echo $SUBSCRIBE['form-01-label']; ?></span>
            <input class="subscribe-input" type="email" name="EMAIL" data-alert="<?php echo $SUBSCRIBE['alert-email']; ?>" />
        </label>
        <button class="button-submit"><?php echo $SUBSCRIBE['form-01-button']; ?></button>
    </form>
    
    <form class="subscribe-form-02" action="//video.us15.list-manage.com/subscribe/post?u=3363d6d446b55bfeec00cb430&id=d12f33be57" method="post" name="mc-embedded-subscribe-form" target="_blank">
        <input type="hidden" name="u" value="3363d6d446b55bfeec00cb430">
        <input type="hidden" name="id" value="7ae49d70ce">
        <p class="subscribe-form-02-text"><?php echo $SUBSCRIBE['form-02-title']; ?></p>
        <label class="subscribe-label">
            <span class="subscribe-label-text"><?php echo $SUBSCRIBE['form-02-label-01']; ?></span>
            <input class="subscribe-input who" type="text" id="MERGE1" name="MERGE1" data-alert="<?php echo $SUBSCRIBE['alert-who']; ?>" />
        </label>

        <label class="subscribe-label">
            <span class="subscribe-label-text"><?php echo $SUBSCRIBE['form-02-label-02']; ?></span>
            <input class="subscribe-input why" type="email" name="EMAIL" id="email-field" data-alert="<?php echo $SUBSCRIBE['alert-why']; ?>" />
        </label>
        <button class="button-submit"><?php echo $SUBSCRIBE['form-02-button']; ?></button>
    </form>
</section>