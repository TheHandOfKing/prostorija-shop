{{--
  Template Name:  Shop Categories Page
--}}

@extends('layouts.app')

@section('content')

<section class="shop-wrapper">
  <h1 class="shop-title"><span>SHOP</span></h1>
  <div class="content">
    <div class="category-holder">
      <a href="{{get_site_url()}}/product-category/polo" class="cat-name">
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

      <a href="{{get_site_url()}}/product-category/headwear" class="cat-name">
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

      <a href="{{get_site_url()}}/product-category/shirts" class="cat-name">
        <div class="cat-image shirts">
          <img class="default" src="@asset('images/shop/category-default.svg')" alt="Category">
        </div>
        <div class="category-text">
          <span>SHIRTS</span>
          <img class="left" src="@asset('images/shop/cat-name-left.png')" alt="Tape">
          <img class="right" src="@asset('images/shop/cat-name-right.png')" alt="Tape">
        </div>
      </a>

      <a href="{{get_site_url()}}/product-category/hoodie" class="cat-name">
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

      <a href="{{get_site_url()}}/product-category/lmtd" class="cat-name">
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

      <a href="{{get_site_url()}}/product-category/merch" class="cat-name">
        <div class="cat-image merch">
          <img class="default" src="@asset('images/shop/category-default.svg')" alt="Category">
          <img class="active" src="@asset('images/shop/category-merch.svg')" alt="LMTD">
        </div>
        <div class="category-text">
          <span>MERCH</span>
          <img class="left" src="@asset('images/shop/cat-name-left.png')" alt="Tape">
          <img class="right" src="@asset('images/shop/cat-name-right.png')" alt="Tape">
        </div>
      </a>

      <a href="{{get_site_url()}}/product-category/accessories" class="cat-name">
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
</section>

@endsection
