<?php

function toothwise_enqueue_styles(){
    wp_enqueue_style( 'toothwise-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'toothwise_enqueue_styles' );

function toothwise_contact_form_shortcode() {
    ob_start(); ?>
    
    <form method="post" action="" class="mt-4">
        <label for="name">Name</label><br>
        <input type="text" name="cf_name" required><br><br>

        <label for="email">Email</label><br>
        <input type="email" name="cf_email" required><br><br>

        <label for="message">Message</label><br>
        <textarea name="cf_message" required></textarea><br><br>

        <button type="submit" name="cf_submitted">Send</button>
    </form>

    <?php
    if (isset($_POST['cf_submitted'])) {
        $name = sanitize_text_field($_POST['cf_name']);
        $email = sanitize_email($_POST['cf_email']);
        $message = sanitize_textarea_field($_POST['cf_message']);

        $to = get_option('admin_email');
        $subject = "New message from $name";
        $headers = "From: $name <$email>";

        wp_mail($to, $subject, $message, $headers);
        echo '<p class="mt-4">Thanks for your message! We\'ll get back to you soon.</p>';
    }

    return ob_get_clean();
}
add_shortcode('contact_form', 'toothwise_contact_form_shortcode');
