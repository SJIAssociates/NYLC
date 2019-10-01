{{--
  Template Name: Explore Template
--}}

@extends('layouts.app')

@section('content')

  @include('partials.page-header')
  <section class='full-section'>
    @while(have_posts()) @php the_post() @endphp
      <div class='container relative'>
          @include('partials.content-page')
      </div>
    @endwhile
  </section>
  <div class="relative map-container">

  </div>
  <style>
   .wpgmza-modern-marker-listing-list-item-container{
     padding: 0;
   }
   /* .wpgmza-close-container{
     display: none;
   } */
   #wpgmza_map_2 .gm-style {
     left: 20% !important;
   }
  #wpgmza_map_2  .wpgmaps_mlist_row {
    min-height: 200px;
    padding-top: 35px;
    display: flex;
    flex-direction: column;
    align-items: start;
    border-bottom: 1px solid #E2E9ED;
  }
  #wpgmza_map_2 .wpgmza-popout-panel {
    height: calc(100% - 57px);
    left: -50%;
  }
  #wpgmza_map_2 .wpgmza-popout-panel.wpgmza-open {
     top: 80px;
     left: 0;
     width: 50%;
  }
  #wpgmza_marker_list_2 {
    width: 50%;
  }
  #wpgmza_marker_list_2 .wpgmza-close-container {
    display: none;
  }
  .wpgmza-modern-marker-listing-marker-view {
    width: 50%;
  }
  #wpgmza_marker_list_2 .wpgmza-modern-marker-listing-marker-view.wpgmza-open {
    top: 80px;
  }
  .wpgmza-reset-custom-fields {
    float: right;
    padding: 15px 30px;
    color: white;
    background: #778391;
  }
  #wpgmza_map_2  .wpgmza-modern-marker-listing [data-name="address"]{
    font-size: 1em;
    font-style: normal;
  }
  .wpgmza-filter-widgets{
      position: absolute;
      z-index: 100;
      width: calc(50% - 16px);
      display: block;
      padding: 15px 30px !important;
      border-bottom: 1px solid #E2E9ED;
      border-top: 1px solid #E2E9ED;
      background: white;
      margin-bottom: 0px !important;
  }
  .wpgmza_map {
    z-index: 90;
    float: none !important;
    position: relative;
  }
  .wpgmza-filter-widgets select{
    border-radius: 0px;
    border: 1px solid black;
    min-width: 150px;
    background: white;
    margin-right: 10px;
  }
  #wpgmza_map_2 .wpgmza_marker_title {
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 5px;
    width: 65%;
  }
  #wpgmza_map_2 .wpgmza-marker-listing-pic {
    background: #CCC;
    width: 30%;
    border: none;
    border-radius: 0px;
    height: 150px;
    position: absolute;
    right: 25px;
  }
  </style>

@endsection
