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
      <?php //print $content; ?>
      <ul>
        <li class="fb"><a href="https://www.facebook.com/DrupalCampOttawa" target="_blank">Facebook</a></li>
        <li class="twitter"><a href="https://twitter.com/DrupalCampOTT" target="_blank">Twitter</a></li>
      </ul>
      <p class="colophon"><?php print t('Copyright &copy; 2013 '); ?><a href="http://drupalcampottawa.ca">Drupal Camp Ottawa</a></p>
    </div> <!-- footer wrapper ends -->
  </footer> <!-- footer ends-->
<?php endif; ?>
