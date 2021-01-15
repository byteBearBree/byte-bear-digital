@extends('layouts.app')
@section('content')
    @include('partials.page-header')
      <div class="row">
        <div class="col-lg-8">
          @include('partials.posts-listing')
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        </div>
    </div>
@endsection
