<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchiveLandmark extends Controller
{
  use Partials\location;


  public function numericPostsNav()
  {

      if( is_singular() )
          return;

      global $wp_query;

      /** Stop execution if there's only 1 page */
      if( $wp_query->max_num_pages <= 1 )
          return;

      $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
      $max   = intval( $wp_query->max_num_pages );

      /** Add current page to the array */
      if ( $paged >= 1 )
          $links[] = $paged;

      /** Add the pages around the current page to the array */
      if ( $paged >= 3 ) {
          $links[] = $paged - 1;
          $links[] = $paged - 2;
      }

      if ( ( $paged + 2 ) <= $max ) {
          $links[] = $paged + 2;
          $links[] = $paged + 1;
      }

      $output = '<ul>' . "\n";

      /** Previous Post Link */
      if ( get_previous_posts_link() )
          $output .=  '<li>' . get_previous_posts_link() . '</li>';

      /** Link to first page, plus ellipses if necessary */
      if ( ! in_array( 1, $links ) ) {
          $class = 1 == $paged ? ' class="active"' : '';

          //printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
          $output .='<li ' . $class .'><a href="' . get_pagenum_link( 1 ) . '">1</a></li>';

          if ( ! in_array( 2, $links ) )
              $output .= '<li>…</li>';
      }

      /** Link to current page, plus 2 pages in either direction if necessary */
      sort( $links );
      foreach ( (array) $links as $link ) {
          $class = $paged == $link ? ' class="active"' : '';
          //printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
          $output .= '<li '. $class .'><a href="' . esc_url( get_pagenum_link( $link ) ) .'">'. $link .'</a></li>';
      }

      /** Link to last page, plus ellipses if necessary */
      if ( ! in_array( $max, $links ) ) {
          if ( ! in_array( $max - 1, $links ) )
              $output .= '<li>…</li>' . "\n";

          $class = $paged == $max ? ' class="active"' : '';
          //printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
          $output .= '<li '. $class .'><a href="' . esc_url( get_pagenum_link( $max )) .'">'. $max .'</a></li>';
      }

      /** Next Post Link */
      if ( get_next_posts_link() )
        //  printf( '<li>%s</li>' . "\n", get_next_posts_link() );
      $output .=  '<li>' . get_next_posts_link() . '</li>';
      $output .= '</ul>' . "\n";

      return $output;
  }
}
