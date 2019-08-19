@extends('layouts.app')

@section('content')
      
@include('partials.page-header')
<div class='container'>
<div class="content">
  <main class="main py-8 xxl:w-3/4 xxl:py-12 xxl:mx-auto">      
      @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page')
      @endwhile
  </main>
</div>  
</div>    
@endsection
