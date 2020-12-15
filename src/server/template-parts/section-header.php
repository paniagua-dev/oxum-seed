<section
    class="section section-header"
    style="background-image: url(<?php echo the_post_thumbnail_url('full'); ?>)"
    uk-parallax="bgy: 40"
>
    <div class="section-header-container container">
        <div class="row flex-column justify-content-center align-content-center">
            <div class="card col-6 text-center">
                <div class="card-body">
                    <h2 class="card-title">
						<?php echo get_bloginfo(); ?>
                    </h2>
                    <p class="card-text">
						<?php echo get_bloginfo('description'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
