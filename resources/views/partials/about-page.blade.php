<?php 
$tech_stacks = get_field('tech_stack');
$author = get_field('author_image', 'option');
?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $author; ?>" alt="" width="100%" class="author-img">
            </div>
            <div class="col-md-6 about-stack">
                <h1>Bryanna</h1>
                <p class="nickname">aka ByteBearBree</p>
                <p class="position">Front-End Developer & UI Designer</p>
                <div class="about-icons row justify-content-center">
                    <?php 
                    foreach($tech_stacks as $tech_stack): ?> 
                    <div class="col-3 stack-icon">
                        <a href="<?php echo $tech_stack['tech_link']?>" class="stack-link"><i class="<?php echo $tech_stack['icon']; ?>"></i></a>
                    </div>
                
                <?php endforeach ?>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="about-content">
                @php the_content() @endphp
            </div>
        </div>
    </div>
</div>
