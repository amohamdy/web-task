<?php get_header(); ?>
<!----------------------------------------------------------------Start-Main-Posts------------------------------------------->
<div class="row">
    <?php
    $counter = 0;
    while (have_posts()) {
        the_post();

        if ($counter == 0) {
            ?>

            <div class="col-6">
                <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/530x400.png">
                <span class="badge badge-danger "><?php the_category(' ') ?></span>
                <div class="annots post-title-1"><?php the_title() ?></div>
            </div>

        <?php } else { ?>

            <?php if ($counter == 1) {
                echo '<div class="col-2 p-0">';
            } ?>
            <div class="row ml-0 mr-0">
                <div class="col-12 pl-0 pr-0 mb-1">
                    <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/185x196.png">
                    <!---<img src="https://via.placeholder.com/185x196">-->
                    <span class="badge min-box"><?php the_category(' ') ?></span>
                    <h3 class="annots post-title mb-0  d-none d-xl-block">
                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    </h3>
                </div>
            </div>
            <?php if ($counter == 2) {
                echo '</div>';
            } ?>
            <?php
        }
        $counter++;
    }
    ?>

    <div class="col-4">
        <!--<img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/340x400.png">-->
        <img class="img-fluid" src="https://via.placeholder.com/340x396">
        <div class="annots"></div>
    </div>

<!--</div>-->
</div>
<!----------------------------------------------------------------End-Main-Posts------------------------------------------->
<!----------------------------------------------------------------Start-News-Section------------------------------------------->
<hr>
<div class="container egypt-news">
    <div class="row">
        <h3 class="text-danger"> Egypt News</h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <?php
                        $posts_args = array('posts_per_page' => 4, 'cat' => 5);
                        $query = new WP_Query($posts_args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post()
                                ?>
                                <div class="col-3">
                                    <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/270x200.png"
                                         alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                        <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="carousel-item ">
                    <div class="row">
                        <?php
                        $posts_args = array('posts_per_page' => 4, 'cat' => 5, 'offset' => 4);
                        $query = new WP_Query($posts_args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post()
                                ?>
                                <div class="col-3">
                                    <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/270x200.png"
                                         alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                        <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-----<div class="col-3">
                                <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/270x200.png" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/270x200.png" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/270x200.png" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/270x200.png" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>--->

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
<!----------------------------------------------------------------End-News-Section------------------------------------------->
<!----------------------------------------------------------------Start-Feature-Section------------------------------------------->
<div class="container features">
    <div class="row">
        <div class="col-8">
            <hr>
            <h3 class="text-danger">Features</h3>
            <div class="row">
                <div class="col-6">
                    <a href="https://placeholder.com"><img class=" img-fluid"
                                                           src="<?php bloginfo('template_url') ?>/img/350x300.png"></a>
                </div>
                <div class="col-6">
                    <a href="https://placeholder.com"><img class="img-fluid"
                                                           src="<?php bloginfo('template_url') ?>/img/350x300.png"></a>
                </div>
            </div>
        </div>
        <!---------------Top-5-Stories---------------------------->
        <div class="col-4">
            <hr>
            <h3 class="text-danger">TOP 5 STORIES</h3>
            <a href="https://placeholder.com"><img src="<?php bloginfo('template_url') ?>/img/350x300.png>"></a>
        </div>
    </div><!---end of row-->
</div><!--end of container-->


</div>
<!----------------------------------------------------------------End-News-Section------------------------------------------->

<?php get_footer(); ?>
