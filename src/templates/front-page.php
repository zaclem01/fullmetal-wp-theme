<?php get_header(); ?>

<div class="home_hero">
    <div id="home_hero_column1" class="home_hero_column">
        <!-- <img src="<?php echo get_theme_mod( 'front_hero1', $theme_defaults['front_hero'] ) ?>" /> -->
        <div class="u-vertCenter hero_column_overlay">
            <h1><?php echo get_theme_mod( 'front_hero_overlay_title1', $theme_defaults['front_overlay_title'] ) ?></h1>
            <p><?php echo get_theme_mod( 'front_hero_overlay_desc1', $theme_defaults['front_overlay_desc'] ) ?></p>
        </div>
    </div>
    <div id="home_hero_column2" class="home_hero_column">
        <!-- <img src="<?php echo get_theme_mod( 'front_hero2', $theme_defaults['front_hero'] ) ?>"> -->
        <div class="u-vertCenter hero_column_overlay">
            <h1><?php echo get_theme_mod( 'front_hero_overlay_title2', $theme_defaults['front_overlay_title'] ) ?></h1>
            <p><?php echo get_theme_mod( 'front_hero_overlay_desc2', $theme_defaults['front_overlay_desc'] ) ?></p>
        </div>
    </div>
    <div id="home_hero_column3" class="home_hero_column">
        <!-- <img src="<?php echo get_theme_mod( 'front_hero3', $theme_defaults['front_hero'] ) ?>"> -->
        <div class="u-vertCenter hero_column_overlay">
            <h1><?php echo get_theme_mod( 'front_hero_overlay_title3', $theme_defaults['front_overlay_title'] ) ?></h1>
            <p><?php echo get_theme_mod( 'front_hero_overlay_desc3', $theme_defaults['front_overlay_desc'] ) ?></p>
        </div>
    </div>
</div>
<section class="home_blurbs">
    <div class="home_blurbs_section">
        <i class="fa fa-camera"></i>
        <hr />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Something about the type of photos that you take and the services that you offer?</p>
    </div>
    <div class="home_blurbs_section">
        <i class="fa fa-pencil"></i>
        <hr />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Something about editing and the formats you offer?</p>
    </div>
    <div class="home_blurbs_section">
        <i class="fa fa-credit-card-alt"></i>
        <hr />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Highlight how affordable but quality your services are?</p>
    </div>
</section>
<section class="home_intro">
    <div class="home_intro_about">
        <h1>Some intro</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.
        </p>
    </div>
    <iframe class="home_intro_video" width="560" height="315"
            src="<?php echo get_theme_mod( 'front_video', $theme_defaults['front_video'] ) ?>?showinfo=0&modestbranding=1&theme=light&rel=0"
            frameborder="0" allowfullscreen></iframe>
</section>
<h1 class="home_testimonialsHeader">Testimonials</h1>
<section class="home_testimonials">
    <div class="home_testimonials_section">
        <i class="fa fa-quote-right"></i>
        <hr />
        <p class="testimonials_section_quote"><?php echo get_theme_mod( 'front_testimonial_quote1', $theme_defaults['front_testimonial_quote'] ) ?></p>
        <p class="testimonials_section_author"><?php echo get_theme_mod( 'front_testimonial_name1', $theme_defaults['front_testimonial_name'] ) ?></p>
        <p class="testimonials_section_location"><?php echo get_theme_mod( 'front_testimonial_location1', $theme_defaults['front_testimonial_location'] ) ?></p>
    </div>
    <div class="home_testimonials_section">
        <i class="fa fa-quote-right"></i>
        <hr />
        <p class="testimonials_section_quote"><?php echo get_theme_mod( 'front_testimonial_quote2', $theme_defaults['front_testimonial_quote'] ) ?></p>
        <p class="testimonials_section_author"><?php echo get_theme_mod( 'front_testimonial_name2', $theme_defaults['front_testimonial_name'] ) ?></p>
        <p class="testimonials_section_location"><?php echo get_theme_mod( 'front_testimonial_location2', $theme_defaults['front_testimonial_location'] ) ?></p>
    </div>
    <div class="home_testimonials_section">
        <i class="fa fa-quote-right"></i>
        <hr />
        <p class="testimonials_section_quote"><?php echo get_theme_mod( 'front_testimonial_quote3', $theme_defaults['front_testimonial_quote'] ) ?></p>
        <p class="testimonials_section_author"><?php echo get_theme_mod( 'front_testimonial_name3', $theme_defaults['front_testimonial_name'] ) ?></p>
        <p class="testimonials_section_location"><?php echo get_theme_mod( 'front_testimonial_location3', $theme_defaults['front_testimonial_location'] ) ?></p>
    </div>
    <div class="home_testimonials_section">
        <i class="fa fa-quote-right"></i>
        <hr />
        <p class="testimonials_section_quote"><?php echo get_theme_mod( 'front_testimonial_quote4', $theme_defaults['front_testimonial_quote'] ) ?></p>
        <p class="testimonials_section_author"><?php echo get_theme_mod( 'front_testimonial_name4', $theme_defaults['front_testimonial_name'] ) ?></p>
        <p class="testimonials_section_location"><?php echo get_theme_mod( 'front_testimonial_location4', $theme_defaults['front_testimonial_location'] ) ?></p>
    </div>
</section>
<section class="home_contact">
    <iframe class="home_contact_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3137.365785406093!2d-85.80553938428245!3d38.1549376796921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88691180d8d8d21d%3A0xc4d64da7a8a1a9d3!2s2555+Pennacook+Rd%2C+Louisville%2C+KY+40214!5e0!3m2!1sen!2sus!4v1475530046428" frameborder:"0" allowfullscreen></iframe>
    <div class="home_contact_form">
        <h1>Contact Us!</h1>
        <input class="contact_form_name" type="text" placeholder="Name">
        <input class="contact_form_email" type="text" placeholder="Email">
        <textarea class="contact_form_message" placeholder="Enter your message here"></textarea>
        <button class="contact_form_submit" type="submit">Submit</button>
        <h2>Or by phone:</h2>
        <a class="contact_form_phone" href="tel:5555555555">(555) 555-5555</a>
    </div>
</section>

<?php get_footer(); ?>