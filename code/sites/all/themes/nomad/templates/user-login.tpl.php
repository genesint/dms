<p><?php print render($intro_text); ?></p>
<div class="nomad-user-login-form-wrapper">
    <?php
    $output = render($variables['form']['name']);
    $output .= render($variables['form']['pass']);
    $output .= drupal_render_children($variables['form']);
    print $output;
    ?>
</div>