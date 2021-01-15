@php
    $author = get_field('author_image', 'option');
    $master = get_field('master_username', 'option');
    $bio = get_field('bio', 'option');
@endphp
<div class="container text-center">
    <div class="sidebar-about">
        <h3 class="sidebar-title">About Me</h3>
        <div class="author-image">
            <img src="<?php echo $author; ?>" alt="" width="100%" class="author-img">
        </div>
        <h4 class="author-name">{{ $master }}</h4>
        <p class="author-bio">{{ $bio }}</p>
    </div>

    <div class="subscribe">
        <h3 class="sidebar-title">Subscribe & Follow</h3>
        <nav class="social-media-bar">
            @include('partials.social-media')
        </nav>
    </div>
    @php(dynamic_sidebar('sidebar-primary'))
</div>