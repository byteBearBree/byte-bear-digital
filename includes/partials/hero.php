<!-- <div class="container my-5">
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1">Border hero with cropped image and shadows</h1>
      <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
        popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive
        prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
      </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 position-relative overflow-hidden shadow-lg">
      <div class="position-lg-absolute top-0 left-0 overflow-hidden">
        <img class="d-block rounded-lg-3" src="wp-content/themes/byte-bear-digital/assets/images/medium.jpg" alt=""
          width="720">
      </div>
    </div>
  </div>
</div> -->

<?php 
  $hero_type = get_field('hero_type');
  $tagline = get_field('hero_tagline');
  $tagline = get_field('hero_tagline');
  $hero_content = get_field('hero_content');
  $image  = get_field('hero_image');
?>
<div class="hero container my-5 <?php echo $hero_type; ?>">
  <!-- Hero Image-->
  <?php if($hero_type === 'hero-image') :?>
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1"><?php echo $tagline; ?></h1>
      <p class="lead"><?php echo $hero_content; ?></p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
      </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 position-relative overflow-hidden shadow-lg">
      <div class="position-lg-absolute top-0 left-0 overflow-hidden">
        <img class="d-block rounded-lg-3" src="<?php echo $image; ?>" alt=""
          width="720">
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- Full text hero-->
    <?php if ($hero_type === 'hero-full-text') :?>
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center">
    <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
      <h1 class="hero-full display-4 lh-1"><?php echo $tagline; ?></h1>
      <?php if($hero_content) :?>
        <p class="lead"><?php echo $hero_content; ?></p>
      <?php endif; ?>
    </div>
    
    </div>
    <?php endif; ?>
</div>