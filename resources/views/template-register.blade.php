{{--
  Template Name:  Register Page
--}}
@extends('layouts.app')

@if (!is_user_logged_in())
  @section('content')
    <div class="register-page">
      <div class="content-left">
        <div class="container d-flex align-items-center justify-content-center">
          <div class="register-holder">
            <h2>Create your very own account</h2>
            <h2>Register</h2>
              @php echo do_shortcode('[wc_reg_form_bbloomer]'); @endphp
          </div>
        </div>
      </div>
      <div class="content-right">

      </div>
    </div>
  @endsection
@else 
  @php 
    $site_url =  get_site_url();
    header("Location: $site_url"); 
  @endphp
@endif