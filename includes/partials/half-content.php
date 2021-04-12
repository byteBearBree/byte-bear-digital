<?php
$rows = get_field('half_content'); 

?>

<?php if($rows) : ?>
    <?php foreach($rows as $row) :?>
        <div class="col-lg-8">
            <?php echo $row['left_side_content']; ?>
        </div>
        <div class="col-lg-4">
            <?php if ($row['right_side_contnet']) : ;?>
                <?php echo $row['right_side_content'] ?>
                <?php else : ?>
                    <div class="circle-image text-center">
                        <img src="<?php echo $row['content-image']?>" width="300" alt="">
                    </div>
             <?php endif; ?>

        </div>
    <?php endforeach; ?>
<?php endif; ?>