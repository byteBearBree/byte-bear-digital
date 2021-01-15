@extends('layouts.page')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')
  <div class="row">
    <div class="col-lg-8">
      <h1>@php the_title(); @endphp </h1>
      @php
      the_content();
    @endphp
    </div>
    <div class="col-lg-4">
      <aside class="sidebar">
        @include('partials.sidebar')
      </aside>
    </div>
  </div>
  @endwhile
@endsection
