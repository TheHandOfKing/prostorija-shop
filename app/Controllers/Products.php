<?php
// Posts Controller

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class Products extends Controller {
  //As said, if there is a best selling item, add it, if not, then add items in no particular order
  public function getBestSellingProducts() {

    $args = array(
      'post_type' => 'product',
      'meta_key' => 'total_sales',
      'orderby' => 'meta_value_num',
      'posts_per_page' => 9
    );

    $loop = new WP_Query( $args );
    $products = $loop->posts;

    $response = array();
    foreach($products as $product) {
      $link = get_site_url().'/product'.'/'.$product->post_name.'/';
      array_push($response, (object) array(
        'title' => $product->post_title,
        'image' => get_the_post_thumbnail_url($product->post->ID, 'post-thumbnail'),
        'link' =>  $link,
        'alt' => $product->post_name
      ));
    }

    return $response;
  }

  public function getProducts() {
      $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'product_cat'    => 'hoodies'
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
        echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
    endwhile;

    wp_reset_query();
  }

  // Shorten Product title if its too long
  public function getExcerptForProductTitle($title) {
    $excerpt = $title;
    // $excerpt = preg_replace(" ([*])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $exploded = explode(" " , $excerpt);
    $str = "";
    for ($i = 0; $i <= count($exploded); $i++) {
      if(strlen($str) < 40) {
        $str = $str . " " . $exploded[$i];
      } else {
        $str = $str . ' ...';
        break;
      }
    }

    return $str;
  }
}