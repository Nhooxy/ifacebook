<div id="notification">
    <?php if ($context->getNotification()) { ?>
        <div class="la-notification flow-text" role="alert">
            <?php echo $context->getNotification(); ?>
        </div>
    <?php } ?>
</div>
