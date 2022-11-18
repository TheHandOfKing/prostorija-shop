@extends('layouts.app')

@section('content')
<div class="holder-404">
  <img src="@asset('images/404/404.svg')" alt="404">
  <p>
    Sorry, we were unable to find that page
  </p>
  <p>
    Go Back
  </p>
  <a href="{{get_site_url()}}">
    Home
  </a>
</div>
<div class="logo-prostorija">
  <img src="@asset('images/404/logo.svg')" alt="Prostorija">
</div>
@endsection
