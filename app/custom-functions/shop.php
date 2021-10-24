<?php
//Just lists all the categories we made, great if you want to put them on the site
function list_categories() {
  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;       
        echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';

        $args2 = array(
            'taxonomy'     => $taxonomy,
            'child_of'     => 0,
            'parent'       => $category_id,
            'orderby'      => $orderby,
            'show_count'   => $show_count,
            'pad_counts'   => $pad_counts,
            'hierarchical' => $hierarchical,
            'title_li'     => $title,
            'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args2 );
        if($sub_cats) {
            foreach($sub_cats as $sub_category) {
                echo  $sub_category->name ;
            }   
        }
    }       
}
}

//This function changes the text for woocommerce add to cart button (at some places add item btn)
function woo_custom_product_add_to_cart_text() {
  return __( 'Add To Cart', 'woocommerce' );
  }
  add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );


//Removes the ugly on sale! button, both of the functions, visit woocommerce documentation for more info
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

// always display rating stars
function filter_woocommerce_product_get_rating_html( $rating_html, $rating, $count ) { 
  $rating_html  = '<div class="star-rating">';
  $rating_html .= wc_get_star_rating_html( $rating, $count );
  $rating_html .= '</div>';

  return $rating_html; 
};  
add_filter( 'woocommerce_product_get_rating_html', 'filter_woocommerce_product_get_rating_html', 10, 3 ); 

//Woocommerce short code ovveride for shop item title

// // Shorten Product title if its too long
// function getExcerptForProductTitle($title) {
//   $excerpt = $title;
//   // $excerpt = preg_replace(" ([*])",'',$excerpt);
//   $excerpt = strip_shortcodes($excerpt);
//   $excerpt = strip_tags($excerpt);
//   $exploded = explode(" " , $excerpt);
//   $str = "";
//   for ($i = 0; $i <= count($exploded); $i++) {
//     if(strlen($str) < 40) {
//       $str = $str . " " . $exploded[$i];
//     } else {
//       $str = $str . ' ...';
//       break;
//     }
//   }

//   return $str;
// }

remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );
add_action('woocommerce_shop_loop_item_title', 'changeProductTitle', 10 );
function changeProductTitle() {
  $originalTitle = get_the_title();
  $title = Products::getExcerptForProductTitle($originalTitle);
    echo '<h2 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . $title . '</h2>';
}