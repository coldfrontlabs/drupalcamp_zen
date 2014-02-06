<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>

<?php if ($content): ?>
  <footer id="footer" class="<?php print $classes; ?>">
    <div class="wrapper">
      <?php print $content; ?>
      <p class="colophon"><?php print t('&copy; ') . date(Y); ?><a href="http://drupalcampottawa.ca"> DrupalCamp Ottawa</a></p>
    </div> <!-- footer wrapper ends -->
  </footer> <!-- footer ends-->
<?php endif; ?>
