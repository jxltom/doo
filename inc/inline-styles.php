<?php
/**
 * custom stylesheet
 *
 * @package doo
 */

function doo_inline_styles() {

  $inline_styles = '';

  $theme_color = esc_attr( get_theme_mod( 'theme_color' ) );
  if ($theme_color) {
    $theme_color = '#'.$theme_color;
    $inline_styles .= '
blockquote {
  border-left: 4px solid '.$theme_color.';
} 
a {
  color: '.$theme_color.';
}
a:hover,
a:focus,
a:active {
  color: '.$theme_color.';
}
.site-header{
  border-top: 3px solid '.$theme_color.';
}
.site-title a:hover,
.site-title a:focus,
.site-title a:active{
  color:'.$theme_color.';
}
.main-navigation .menu >li >a:hover,
.main-navigation .menu >li >a:focus{
  color:'.$theme_color.';
}
.main-navigation .menu >li ul li a:hover,
.main-navigation .menu >li ul li a:focus{
  color:'.$theme_color.';
}
.menu-toggle{
  color:'.$theme_color.';
}
.responsive-nav >li a:hover,
.responsive-nav >li a:focus{
  color: '.$theme_color.';
}
.about-author-name a:hover{
  color: '.$theme_color.';
}
.entry-title a:hover,
.entry-title a:focus{
  color:'.$theme_color.';
}  
.sticky .entry-title,
.sticky .entry-title a{
  color:'.$theme_color.';
}
.widget a:hover,
.widget a:focus{
  color:'.$theme_color.';
}
.widget_tag_cloud a:hover {
  background-color: '.$theme_color.';
}
.comment-form .logged-in-as a:hover,
.comment-form .logged-in-as a:focus{
  color:'.$theme_color.';
}
.pagination .nav-links a:hover,
.pagination .nav-links a:focus{
  background:'.$theme_color.';
}
.pagination .nav-links .current{
  background:'.$theme_color.';
}
.site-info a:hover,
.site-info a:focus{
  color:'.$theme_color.';
}
    ';
  }

  $blog_images_hover_effects = get_theme_mod('blog_images_hover_effects', 0);
  if ($blog_images_hover_effects&&!is_singular()) {
    $inline_styles .= '
.post-media img{
  display: block;
  max-width: 100%;
  width: auto;
  height: auto;
  margin: 0 auto;

  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}
.post-media:hover img {
  -webkit-transform: scale(1.04);
  -moz-transform: scale(1.04);
  -ms-transform: scale(1.04);
  -o-transform: scale(1.04);
  transform: scale(1.04);
}
    ';
  }

  wp_add_inline_style('doo-style', $inline_styles);

}
add_action('wp_enqueue_scripts', 'doo_inline_styles');
