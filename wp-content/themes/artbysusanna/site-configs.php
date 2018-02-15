<div class="wrap">
    <h1>Site Configurations</h1>
    <form method="post" action="options.php">
        <?php wp_nonce_field('update-options') ?>
        <p>
            <strong>Contact Email:</strong>
            <br />
            <input type="email" name="contact_email" value="<?php echo get_option('contact_email'); ?>" />
        </p>
        <p>
            <input type="submit" name="Submit" value="Update Options" />
        </p>
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="contact_email" />
    </form>
</div>
