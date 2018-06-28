<?php
/**
 * The template for displaying the footer
 *
 * @package doo
 */
?>

  <footer id="colophon" class="site-footer">
    <div class="site-info clearfix">
        <?php
        $show_social = get_theme_mod('footer_show_social', 0);
        $show_menu = get_theme_mod('footer_show_menu', 0);

        $social_url = array();
        $social_list = array('twitter', 'facebook', 'google-plus', 'pinterest', 'vk', 'flickr', 'instagram', '500px', 'youtube', 'vimeo', 'soundcloud', 'dribbble', 'behance', 'github', 'rss');
        foreach ($social_list as $social_list_value) {
          $social_url[$social_list_value] = get_theme_mod('social_'.$social_list_value);
        }
        $social_url_empty = true;
        foreach ($social_url as $social_url_key => $social_url_value) {
          if ($social_url_value) {
            $social_url_empty = false;
            break;
          }
        }

        if (($show_social && !$social_url_empty) || ($show_menu && has_nav_menu('menu-2'))){
          echo '<div class="site-info-nav hidden-sm hidden-xs">';
          if ($show_social && !$social_url_empty) {
            echo '<div class="site-info-social">';
            foreach ($social_url as $social_url_key => $social_url_value) {
              if ($social_url_value) {
                echo '<a href="'.esc_url($social_url_value).'" target="_blank"><i class="fa fa-'.esc_attr($social_url_key).'"></i></a>';
              }
            }
            echo '</div>';
          }
          if ($show_menu && has_nav_menu('menu-2')) {
            echo '<div class="site-info-menu">';
            wp_nav_menu(array(
              'theme_location' => 'menu-2',
              'container' => 'nav',
              'menu_class' => 'footer-menu list-unstyled clearfix'
            ));
            echo '</div>';
          }
          echo '</div>';
        }
        ?>

        <div class="site-info-copyright <?php if (($show_social && !$social_url_empty) || ($show_menu && has_nav_menu('menu-2'))){?>have-site-info-nav<?php }?>">
          "Copyright © 2018-<?php echo date("Y"); ?> jxltom"
        </div>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->

<?php
$show_back_to_top = get_theme_mod('general_show_totop_btn', 1);
if ($show_back_to_top) { 
?>
  <div id="back_top"><i class="fa fa-angle-up"></i></div>
<?php
}
?>

</div><!-- #page -->
</div>
<?php wp_footer(); ?>

</body>
</html>
