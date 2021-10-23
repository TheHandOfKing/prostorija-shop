{{--
  Template Name:  Login Page
--}}
@extends('layouts.app')

@if (!is_user_logged_in())
  @section('content')
    <div class="login-page">
      <div class="left-content">
        <div class="container text-left">
          <div class="col-lg-9 col-xs-12 m-auto">
            <h2>Welcome back!<br/>Sign in to your account.</h2>
            @php echo do_shortcode('[wc_login_form_bbloomer]'); @endphp
          </div>
        </div>
      </div>
      <div class="right-content">

      </div>
    </div>
  @endsection
@else 
  @php 
    $site_url = get_site_url();
    header("Location: $site_url"); 
  @endphp
@endif