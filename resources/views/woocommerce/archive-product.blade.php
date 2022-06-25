{{--
  Template Name:  Shop Page
--}}
@extends('layouts.app')
@section('content')
{{-- <div class="sidebar">
  @php
  do_action( 'woocommerce_sidebar' );
  @endphp
</div> --}}
<section class="shop-wrapper">
  @php
  /**
  * The Template for displaying product archives, including the main shop page which is a post type archive
  *
  * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
  *
  * HOWEVER, on occasion WooCommerce will need to update template files and you
  * (the theme developer) will need to copy the new files to your theme to
  * maintain compatibility. We try to do this as little as possible, but it does
  * happen. When this occurs the version of the template file will be bumped and
  * the readme will list any important changes.
  *
  * @see https://docs.woocommerce.com/document/template-structure/
  * @package WooCommerce\Templates
  * @version 3.4.0
  */

  defined( 'ABSPATH' ) || exit;
  /**
  * Hook: woocommerce_before_main_content.
  *
  * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
  * @hooked woocommerce_breadcrumb - 20
  * @hooked WC_Structured_Data::generate_website_data() - 30
  */

  @endphp
  @if( woocommerce_product_loop() )
  <h1 class="shop-title"><span>SHOP</span></h1>
  <div class="content">
    <div class="category-holder">
      <a href="" class="cat-name">
        <div class="cat-image polo">
          <img class="default" src="@asset('images/shop/category-default.svg')" alt="Category">
          <img class="active" src="@asset('images/shop/category-polo.svg')" alt="Hoodie">
        </div>
        <div class="category-text">
          <span>POLO</span>
          <img class="left" src="@asset('images/shop/cat-name-left.png')" alt="Tape">
          <img class="right" src="@asset('images/shop/cat-name-right.png')" alt="Tape">
        </div>
      </a>

      <a href="" class="cat-name">
        <div class="cat-image headwear">
          <img class="default" src="@asset('images/shop/category-default.svg')" alt="Category">
          <img class="active" src="@asset('images/shop/category-headwear.svg')" alt="Hoodie">
        </div>
        <div class="category-text">
          <span>HEADWEAR</span>
          <img class="left" src="@asset('images/shop/cat-name-left.png')" alt="Tape">
          <img class="right" src="@asset('images/shop/cat-name-right.png')" alt="Tape">
        </div>
      </a>

      <a href="" class="cat-name">
        <div class="cat-image shirts">
          <img class="default" src="@asset('images/shop/category-default.svg')" alt="Category">
        </div>
        <div class="category-text">
          <span>SHIRTS</span>
          <img class="left" src="@asset('images/shop/cat-name-left.png')" alt="Tape">
          <img class="right" src="@asset('images/shop/cat-name-right.png')" alt="Tape">
        </div>
      </a>

      <a href="" class="cat-name">
        <div class="cat-image hoodie">
          <img class="default" src="@asset('images/shop/category-default.svg')" alt="Category">
          <img class="active" src="@asset('images/shop/category-hoodie.svg')" alt="Hoodie">
        </div>
        <div class="category-text">
          <span>HOODIE</span>
          <img class="left" src="@asset('images/shop/cat-name-left.png')" alt="Tape">
          <img class="right" src="@asset('images/shop/cat-name-right.png')" alt="Tape">
        </div>
      </a>

      <a href="" class="cat-name">
        <div class="cat-image lmtd">
          <img class="default" src="@asset('images/shop/category-default.svg')" alt="Category">
          <img class="active" src="@asset('images/shop/category-lmtd.svg')" alt="LMTD">
        </div>
        <div class="category-text">
          <span>LMTD</span>
          <img class="left" src="@asset('images/shop/cat-name-left.png')" alt="Tape">
          <img class="right" src="@asset('images/shop/cat-name-right.png')" alt="Tape">
        </div>
      </a>

      <a href="" class="cat-name">
        <div class="cat-image merch">
          <img class="default" src="@asset('images/shop/category-default.svg')" alt="Category">
          <img class="active" src="@asset('images/shop/category-merch.svg')" alt="LMTD">
        </div>
        <div class="category-text">
          <span>LMTD</span>
          <img class="left" src="@asset('images/shop/cat-name-left.png')" alt="Tape">
          <img class="right" src="@asset('images/shop/cat-name-right.png')" alt="Tape">
        </div>
      </a>

      <a href="" class="cat-name">
        <div class="cat-image accs">
          <img class="default" src="@asset('images/shop/category-accessories.svg')" alt="Category">
          <img class="active" src="@asset('images/shop/category-accessories-broken.svg')" alt="ACCESSORIES">
        </div>
        <div class="category-text">
          <span>ACCESSORIES</span>
          <img class="left" src="@asset('images/shop/cat-name-left.png')" alt="Tape">
          <img class="right" src="@asset('images/shop/cat-name-right.png')" alt="Tape">
        </div>
      </a>
    </div>
  </div>
  {{-- @php
    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked woocommerce_output_all_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    do_action( 'woocommerce_before_shop_loop' );
  
    woocommerce_product_loop_start();
    @endphp
  
    @if ( wc_get_loop_prop( 'total' ) )
      @php
      while ( have_posts() ) {
        the_post();
  
        /**
         * Hook: woocommerce_shop_loop.
         */
        do_action( 'woocommerce_shop_loop' );
  
        wc_get_template_part( 'content', 'product' );
      }
      @endphp
    @endif
    @php
    woocommerce_product_loop_end();
  
    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action( 'woocommerce_after_shop_loop' );
    @endphp --}}
  @else
  @php
  /**
  * Hook: woocommerce_no_products_found.
  *
  * @hooked wc_no_products_found - 10
  */
  do_action( 'woocommerce_no_products_found' );
  @endphp
  @endif
  @php
  /**
  * Hook: woocommerce_after_main_content.
  *
  * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
  */
  do_action( 'woocommerce_after_main_content' );

  /**
  * Hook: woocommerce_sidebar.
  *
  * @hooked woocommerce_get_sidebar - 10
  */
  @endphp
</section>
@endsection
