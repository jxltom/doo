<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package doo
 */

get_header(); ?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <section class="error-404 not-found">
        <header class="page-header">
          <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'doo' ); ?></h1>
        </header><!-- .page-header -->
      </section><!-- .error-404 -->

    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- #content -->
  
<?php
get_footer();
