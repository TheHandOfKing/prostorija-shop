<?php
// Posts Controller

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class Posts extends Controller {

  public static  function getAllPosts() {
    $catquery = new WP_Query(array(
        // 'category_name' => 'Immigration News',
         'post_type'        => 'post'
        // 'post_type'      => 'post',
        // Which page to display
        // 'paged'          => 1
    )); 

    $posts = $catquery->posts;
    foreach ($posts as $post) {
      $post->photo = get_the_post_thumbnail_url($post->ID); // == null ? "@asset('images/home/before-form.png')" : get_the_post_thumbnail_url($post->ID);
      $post->link = get_permalink($post->ID);
    } 
    return $posts;
  }
  
  // Get Posts by page
  public static  function getPostsByPage($postsPerPage , $page) {
    $catquery = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => $postsPerPage,
        // Which page to display
        'paged'          => $page
    )); 

    $posts = $catquery->posts;
    foreach ($posts as $post) {
      $post->photo = get_the_post_thumbnail_url($post->ID); // == null ? "@asset('images/home/before-form.png')" : get_the_post_thumbnail_url($post->ID);
      $post->link = get_permalink($post->ID);
    } 
    return $posts;
  }

  // Pagination
  public static function pagination($postsPerPage) {
    // Get only published posts
    $totalPostsCounted = wp_count_posts()->publish;
    return intval(ceil($totalPostsCounted/$postsPerPage));
  }

  public static function tagPagination($postsPerPage, $tagId)
  {
    // $catquery = new WP_Query(array(
    //   'posts_per_page' => $postsPerPage,
    //   // Which page to display
    //   'tag_id' => $tagId
    // ));

    // $posts = $catquery->count;

    $tag = get_tag($tagId);
    $posts = $tag->count;

    return intval(ceil($posts / $postsPerPage));
  }

  // Shorten Post title if its too long
  public static function getExcerptForPostTitle($title, $limit) {
    $excerpt = $title;
    // $excerpt = preg_replace(" ([*])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $exploded = explode(" " , $excerpt);
    $str = "";
    for ($i = 0; $i <= count($exploded); $i++) {
      if(strlen($str) < $limit) {
        $str = $str . " " . $exploded[$i];
      } else {
        $str = $str . ' ...';
        break;
      }
    }
    
    return $str;
  }
  
  // Shorten Post content (description) if its too long
  public static  function getExcerptForPostContent($content, $length) {
    $excerpt = $content;
    // $excerpt = preg_replace(" ([*])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $exploded = explode(" " , $excerpt);
    $str = "";
    for ($i = 0; $i <= count($exploded); $i++) {
      if(strlen($str) < $length) {
        $str = $str . " " . $exploded[$i];
      } else {
        $str = $str . ' ...';
        break;
      }
    }
    
    return $str;
  }

  // Check page number
  public static  function getCurrentPage($pageNumber, $totalPages) {
    $is404 = null;
    $currentPage = null;
    
    if (is_null($pageNumber)) {
      $is404 = false;
      $currentPage = 1;
    } else {
      $isNumber = intval($pageNumber);
      if ($isNumber !== null && ($pageNumber > $totalPages || $pageNumber < 1)) {
        $is404 = true;
      // Set current page to 1 if its the /blog (root) page
      } else {
        $is404 = false;
        $currentPage = $pageNumber;
      }
    }

    $response = (object) [
      'currentPage' => intval($currentPage),
      'is404' => $is404
    ];
    return $response;
  }
  
  // TODO: Add support for Blog settings in Customizer (post content and title excerpt lengths)
  // and other DEFAULT WordPress settings that are available

  /*
  *
  * Category stuff
  *
  */

  // Get Posts by page
  public static  function getPostsByCategoryId($postsPerPage, $currentPage, $categoryId) {
    $catquery = new WP_Query(array(
        //'category_name' => 'Immigration News',
        'post_type'      => 'post',
        'posts_per_page' => $postsPerPage,
        // Which page to display
        'paged'          => $currentPage,
        'cat' => $categoryId
    )); 

    $posts = $catquery->posts;
    foreach ($posts as $post) {
      $post->photo = get_the_post_thumbnail_url($post->ID); // == null ? "@asset('images/home/before-form.png')" : get_the_post_thumbnail_url($post->ID);
      $post->link = get_permalink($post->ID);
    } 
    return $posts;
  }

  // Pagination for Post categories
  public static  function categoriesPagination($postCounted, $postsPerPage) {
    // Get only published posts
    return intval(ceil($postCounted/$postsPerPage));
	}
	
	public static  function getPostsByCategoryName($numberOfPosts, $catName) {
    $catquery = new WP_Query(array(
        //'category_name' => 'Immigration News',
        'post_type'      => 'post',
        'posts_per_page' => $numberOfPosts,
        'category_name' => $catName
    )); 

    $posts = $catquery->posts;
    foreach ($posts as $post) {
      $post->photo = get_the_post_thumbnail_url($post->ID); // == null ? "@asset('images/home/before-form.png')" : get_the_post_thumbnail_url($post->ID);
      $post->link = get_permalink($post->ID);
    } 
    return $posts;
  }

  public static  function getCustomPost() {
    $catquery = new WP_Query(array(
        'post_type'      => 'gallery',
    )); 

    $posts = $catquery->posts;
    return $posts;
  }

  public static  function getPostsByTag($postsPerPage, $currentPage, $tagId) {
    $catquery = new WP_Query(array(
      'post_type'      => 'post',
      'posts_per_page' => $postsPerPage,
      // Which page to display
      'paged'          => $currentPage,
      'tag_id' => $tagId
    ));

    $posts = $catquery->posts;
    return $posts;
  }
  
} // END - Controller


?>
