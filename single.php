<?php
/**
 * The template for displaying all single posts
 *
 * @package doo
 */

get_header(); ?>

<div id="content" class="site-content">

<?php
$blog_layout = get_theme_mod('blog_layout', 'right_sidebar');

if ($blog_layout == 'right_sidebar') {
?>
      <div class="row">
        <div class="col-md-8 sidebar-right">
<?php
}
if ($blog_layout == 'left_sidebar') {
?>
      <div class="row">
        <div class="col-md-8 col-md-push-4 sidebar-left">
<?php
}
?>

          <div id="primary" class="content-area">
            <main id="main" class="site-main">

            <?php
            while ( have_posts() ) : the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php if (has_post_thumbnail()) {?> 
                <div class="post-media">
                  <?php the_post_thumbnail();?>
                </div>
              <?php }?>

              <div class="post-content">
                <?php doo_entry_header(); ?>

                <div class="entry-content clearfix">
                  <?php
                  the_content();

                  wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'doo' ),
                    'after'  => '</div>',
                  ) );
                  ?>
                </div><!-- .entry-content -->
                  
                <?php doo_entry_footer(); ?>
              </div>
            </article><!-- #post-<?php the_ID(); ?> -->

            <?php
              $show_about_author = get_theme_mod('single_show_about_author', 0);
              if (!post_password_required() && $show_about_author) {
                doo_about_the_author();
              }

              $show_post_nav = get_theme_mod('single_show_post_nav', 1);
              if ($show_post_nav) {
                doo_post_navigation();
              }

              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;

            endwhile; // End of the loop.
            ?>

            </main><!-- #main -->
          </div><!-- #primary -->

<?php
if ($blog_layout == 'right_sidebar') {
?>
        </div>
        <div class="col-md-4 sidebar-right">
          <?php get_sidebar();?>
        </div>
      </div>
<?php
}
if ($blog_layout == 'left_sidebar') {
?>
        </div>
        <div class="col-md-4 col-md-pull-8 sidebar-left">
          <?php get_sidebar();?>
        </div>
      </div>
<?php
}
?>

</div><!-- #content -->

<?php
get_footer();
