<?php
namespace App\Controllers\Partials;

trait CategoryLoops
{
  public function newsLoop()
  {
    $category = get_field('category');

    $news_posts = get_posts([
      'post_type' => 'post',
      'category_name' => $category->name,
      'posts_per_page' => 3
    ]);

   return array_map(function ($post) {
         return [
             'content'   => get_the_excerpt( $post->ID ),
             'time'      => get_the_time('F d, Y', $post->ID),
             'permalink' => get_permalink( $post->ID ),
             'title'     => get_the_title( $post->ID ),
             'thumbnail' => get_the_post_thumbnail_url($post->ID) ?: \App\asset_path('images/profile-placeholder.jpg'),
         ];
     }, $news_posts);
  }

  public function newsLoopContinued()
  {
    $category = get_field('category');

    $news_loop_continue = get_posts([
      'post_type' => 'post',
      'category_name' => $category->name,
      'posts_per_page' => 4,
      'offset'         => 3,
    ]);

   return array_map(function ($post) {

        return [
            'content'   => get_the_excerpt( $post->ID ),
            'time'      => get_the_time('F d, Y', $post->ID),
            'permalink' => get_permalink( $post->ID ),
            'title'     => get_the_title( $post->ID ),
            'thumbnail' => get_the_post_thumbnail_url($post->ID) ?: \App\asset_path('images/profile-placeholder.jpg'),
        ];
    }, $news_loop_continue);

  }

  public function categoryTitle()
  {
    $category = get_field('category');

    return (object) array(
          'name' => $category->name,
          'link' => $category->slug,
    );
  }
}
