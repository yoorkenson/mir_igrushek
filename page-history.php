<?php
/*
template Name: Наша история
*/
?>

<?php
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title">Наша история</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_title'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_descr'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story_img'); ?>" alt="мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story_img_2'); ?>" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_title_2'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_descr_2'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_title_3'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_descr_3'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story_img_3'); ?>" alt="мир детства">
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>