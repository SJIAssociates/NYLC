@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <section class='sub_pages full-section bg-blue-grey'>
    <div class='container'>
      <div class='flex flex-wrap'>

  @if (!have_posts())
    <div class="alert alert-warning text-3xl text-center mx-auto w-full lg:w-2/3">

      {{ __('Sorry, but the page you were trying to view does not exist. Please check that the page URL is spelled correctly.', 'sage') }}
    </div>


  @endif
    </div>
    <div class='text-center my-10'>
      <a href="/" class='btn mx-auto my-5 mr-5'>Go Home</a>
      <a href="/" class='btn mx-auto my-5'>Contact Us</a>
    </div>
  </div>
</section>
@endsection
