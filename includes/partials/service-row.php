<?php

$services = get_field('services', 'options');
?>

<div class="container services-section">
    <div class="row text-center">
        <?php foreach($services as $service) {
            echo '         <a class="service col-md-3" href=" ' . $service['service_link'] . ' " class="col-lg-3 service-icon-link">
            <div class="service-icon">
            <i class=" ' .
                $service['icon'] .
            ' "></i>
            <p class="service-name">' . $service['service_title'] .
        '</div></a>';
        };?>
    </div>
</div>