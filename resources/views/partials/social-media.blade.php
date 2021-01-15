@php
    $facebook = get_field('facebook');
$twitter = get_field('twitter');
$instagram = get_field('instagram');
$github = get_field('github');
@endphp
    <a href="<?php echo $facebook; ?>" ><i class="fab fa-facebook-f"></i></a>
    <a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a>
    <a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a>
    <a href="<?php echo $github; ?>"><i class="fab fa-github-alt"></i></a>