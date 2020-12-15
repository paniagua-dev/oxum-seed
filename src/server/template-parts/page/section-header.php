<section
    class="section section-header for-page"
    uk-parallax="bgy: 40"
    style="background-image: url(<?php echo the_post_thumbnail_url('full'); ?>)"
>
    <div class="section-header-container container">
        <div class="row flex-column justify-content-center align-content-center">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
						<?php echo the_title(); ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
