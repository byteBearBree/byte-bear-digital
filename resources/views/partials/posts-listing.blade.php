@php
  $blog_posts = collect(get_posts([
    'post_type' => 'post',
    'posts_per_page' => 10,
]))->map(function ($post) {
    return (object) [
        'categories' => get_the_category($post),
        'title'      => get_the_title($post),
        'url'        => get_permalink($post),
        'date'       => get_the_date('M d, Y', $post),
        'excerpt'    => substr_replace(get_the_excerpt($post), "", -16),
        'image'      => get_the_post_thumbnail_url($post)
    ];
});

@endphp
{{-- Blogposts Loop --}}
@foreach ($blog_posts as $key=>$post)
  @if ($key < 6)
    <div class="post-listing--wrapper">
      <div class="blog-item">
        @if($post->image)
          <a href="{{ $post->url }}">
            <div class="blog-item__image" style="background-image: url({{ $post->image }})" title="{{ $post->title }}"></div>
          </a>
        @else
          <a href="{{ $post->url }}">
            <div class="blog-item--image" style="background-color: #eee" title="{{ $post->title }}"></div>
          </a>
        @endif

        <h4 class="blog-item--title"><a href="{{ $post->url }}">{{ $post->title }}</a></h4>
        <p class="blog-item__meta">
          {{ $post->date }} /
          @foreach ($post->categories as $category)
            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
              {{ $category->name.' ' }}
            </a>
          @endforeach
        </p>
        <div class="blog-item__excerpt">
          @php echo $post->excerpt @endphp
        </div>
      </div>
    </div>
  @endif
@endforeach