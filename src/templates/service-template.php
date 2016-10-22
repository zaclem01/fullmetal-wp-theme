<?php 
    /*
     * Template Name: Service Template
     * Description: Page template without sidebar
     */
?>

<?php get_header(); ?>

<div class="service_hero">
    <div class="service_hero_overlay">
        <h1 class="overlay_title u-vertCenter"><?php echo CFS()->get( 'service_name' ) ?></h1>
    </div>
    <div class="u-heroSkin service_hero_img" style="background-image: url(<?php echo CFS()->get( 'hero_image' ) ?>)"></div>
</div>
<section class="service_desc">
    <div class="service_desc_content">
        <h2 class="desc_content_title"><?php echo CFS()->get( 'service_description_header' ) ?></h2>
        <p class="desc_content_about"><?php echo CFS()->get( 'service_description_content' ) ?></p>
        <script id="setmore_script" type="text/javascript" src="https://my.setmore.com/js/iframe/setmore_iframe.js"></script>
        <a class="u-btnSkin desc_content_scheduleBtn" id="Setmore_button_iframe", href="https://my.setmore.com/bookingpage/991c5eed-9e11-4704-9a9b-3b5305b09cb1">Schedule your session</a>
    </div>
    <iframe class="service_desc_gallery" width="560" height="315"
        src="<?php echo CFS()->get( 'youtube_embed' ) ?>?showinfo=0&modestbranding=1&theme=light&rel=0"
        frameborder="0" allowfullscreen></iframe>

</section>
<section class="service_prices">
    <div class="service_prices_package">
        <h2 class="prices_package_title"><?php echo CFS()->get( 'service_1_name' ) ?></h2>
        <ul class="prices_package_list">
            <li><?php echo CFS()->get( 'service_1_price' ) ?></li>
            <?php 
                $fields = CFS()->get( 'service_1_items' ); 
                foreach($fields as $field) {
                    echo '<li>'.$field["service_1_item"].'</li>';
                }
            ?>
        </ul>
    </div>
    <div class="service_prices_package">
        <h2 class="prices_package_title"><?php echo CFS()->get( 'service_2_name' ) ?></h2>
        <ul class="prices_package_list">
            <li><?php echo CFS()->get( 'service_2_price' ) ?></li>
            <?php 
                $fields = CFS()->get( 'service_2_items' ); 
                foreach($fields as $field) {
                    echo '<li>'.$field["service_2_item"].'</li>';
                }
            ?>
        </ul>
    </div>
    <div class="service_prices_package">
        <h2 class="prices_package_title"><?php echo CFS()->get( 'service_3_name' ) ?></h2>
        <ul class="prices_package_list">
            <li><?php echo CFS()->get( 'service_3_price' ) ?></li>
            <?php 
                $fields = CFS()->get( 'service_3_items' ); 
                foreach($fields as $field) {
                    echo '<li>'.$field["service_3_item"].'</li>';
                }
            ?>
        </ul>
    </div>
</section>

<?php get_footer(); ?>