<?php /* Template Name: home-page */
?>

<?php
get_header();
?>


<header class="slider">
    <div class="bannerImg" style="background-image: url(<?php the_field('banner_image') ?> );">
        <div class="homebanner_text">
            <p class="homebanner_text1"><?php the_field('banner_text1') ?></p>
            <p class="homebanner_text2"><?php the_field('banner_text2') ?></p>
            <p class="homebanner_text3 col-xl-6 col-md-8 col-8"><?php the_field('banner_text3') ?></p>
            <p class="homebanner_text4"><?php the_field('banner_text4') ?></p>
            <div class="homebanner_btn">
                <a href="">
                    <div class="homebanner_text5"><?php the_field('banner_btn') ?></div>
                </a>
            </div>
        </div>
    </div>
    <div class="bannerImg" style="background-image: url(<?php the_field('banner_image') ?> );">
        <div class="homebanner_text">
            <p class="homebanner_text1"><?php the_field('banner_text1') ?></p>
            <p class="homebanner_text2"><?php the_field('banner_text2') ?></p>
            <p class="homebanner_text3 col-xl-6 col-md-8 col-8"><?php the_field('banner_text3') ?></p>
            <p class="homebanner_text4"><?php the_field('banner_text4') ?></p>
            <div class="homebanner_btn">
                <a href="">
                    <div class="homebanner_text5"><?php the_field('banner_btn') ?></div>
                </a>
            </div>
        </div>
    </div>
</header>

<div class="pt-2 pb-1 ps-2 pe-2 pe-2">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-10 col-md-10 col-11 pt-xl-5 pt-md-4 home_div2_text">
                <div class="home_div2_text1"><?php the_field('home_div2_title1') ?></div>
                <div class="home_div2_text2 pb-3"><?php the_field('home_div2_title2') ?></div>
                <div class="home_div2_text3 col-lg-11"><?php the_field('home_div2_text3') ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 home_div2_div22">
                    <div class="home_div2_img1" style="background-image: url(<?php the_field('home_div2_img1') ?> );">
                        <div class="home_div2_img1_text">
                            <div class="home_div2_img1_text1"><?php the_field('home_div2_img1_title1') ?></div>
                            <div class="home_div2_img1_text2 pb-1"><?php the_field('home_div2_img1_text1') ?></div>
                            <div class="home_div2_img1_text2"><?php the_field('home_div2_img1_text2') ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 home_div2_img2_div">
                    <div class="home_div2_img2" style="background-image: url(<?php the_field('home_div2_img2') ?> );">
                        <div class="home_div2_img1_text">
                            <div class="home_div2_img1_text1"><?php the_field('home_div2_img2_title1') ?></div>
                            <div class="home_div2_img1_text2 pb-1"><?php the_field('home_div2_img1_text1') ?></div>
                            <div class="home_div2_img1_text2"><?php the_field('home_div2_img1_text2') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="px-md-3">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 home_div3_div11">
                    <div class="home_div3_img1" style="background-image: url(<?php the_field('home_div3_img1') ?> );">
                        <div class="home_div2_img1_text11">
                            <div class="home_div2_img1_text1"><?php the_field('home_div3_img1_title1') ?></div>
                            <div class="home_div2_img1_text2 pb-1"><?php the_field('home_div2_img1_text1') ?></div>
                            <div class="home_div2_img1_text2"><?php the_field('home_div2_img1_text2') ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 home_div2_img2_div home_div3_div22">
                    <div class="home_div3_img2 Rectangle_5" style="background-image: url(<?php the_field('home_div3_img2') ?> );">
                        <div class="home_div2_img1_text">
                            <div class="home_div2_img1_text1"><?php the_field('home_div3_img2_title1') ?></div>
                            <div class="home_div2_img1_text2 pb-1"><?php the_field('home_div2_img1_text1') ?></div>
                            <div class="home_div2_img1_text2"><?php the_field('home_div2_img1_text2') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 home_div3_div33">
            <div class="home_div3_img3 Rectangle_2" style="background-image: url(<?php the_field('home_div3_img3') ?> );">
                <div class="home_div3_img3_text">
                    <div class="home_div3_img3_text1"><?php the_field('home_div3_img3_title1') ?></div>
                    <div class="home_div3_img3_text2"><?php the_field('home_div3_img3_title2') ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center pt-xl-5 pt-md-4 pb-xl-5 pb-md-4">
    <p class="home_div4_text1">OUR CUSTOMERS <span class="home_div4_text12">ARE SAYING:</span></p>
</div>
<div class="slider2">
    <div class="home_div4_text">
        <p class="home_div4_text22">“</p>
        <div class="home_div4_text_2">
            <p class="home_div4_text2">We'll put a great review from Kathy here... words, consectetur,<br>
                from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered m Ipsum passage, and going through the cites of the word in classical literature, discoveredm Ipsum passage, and going through the cites of the word in classical literature, discovered</p>
            <div class="pt-xl-5 pt-md-4">
                <div class="slider2Img"><img src="<?php echo get_template_directory_uri(); ?>/images/home_41.png" alt=""></div>
                <div class="home_div4_text3">Marty Brown</div>
            </div>
        </div>
    </div>
    <div class="home_div4_text">
        <p class="home_div4_text22">“</p>
        <div class="home_div4_text_2">
            <p class="home_div4_text2">We'll put a great review from Kathy here... words, consectetur,<br>
                from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered m Ipsum passage, and going through the cites of the word in classical literature, discoveredm Ipsum passage, and going through the cites of the word in classical literature, discovered</p>
            <div class="pt-xl-5 pt-md-4">
                <div class="slider2Img"><img src="<?php echo get_template_directory_uri(); ?>/images/home_41.png" alt=""></div>
                <div class="home_div4_text3">Marty Brown</div>
            </div>
        </div>
    </div>
</div>

<div class="home_div5">
    <div class="row home_div5_div">
        <div class="col-lg-2 col-md-2 col-12 d-flex home_div5_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home_51.png" alt="">
            <div class="home_div5_text">
                <div class="home_div5_text1"><?php the_field('home_div5_title1') ?></div>
                <div class="home_div5_text2"><?php the_field('home_div5_text1') ?></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12 d-flex home_div5_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home_52.png" alt="">
            <div class="home_div5_text">
                <div class="home_div5_text1"><?php the_field('home_div5_title2') ?></div>
                <div class="home_div5_text2"><?php the_field('home_div5_text2') ?></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12 d-flex home_div5_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home_53.png" alt="">
            <div class="home_div5_text">
                <div class="home_div5_text1"><?php the_field('home_div5_title3') ?></div>
                <div class="home_div5_text2"><?php the_field('home_div5_text3') ?></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12 d-flex home_div5_img me-md-2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home_54.png" alt="">
            <div class="home_div5_text">
                <div class="home_div5_text1"><?php the_field('home_div5_title4') ?></div>
                <div class="home_div5_text2"><?php the_field('home_div5_text4') ?></div>
            </div>
        </div>
    </div>
</div>

<div class="px-3">
    <div class="bg-light">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="d-flex home_div6_div1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_6H.png" alt="">
                    <div class="home_div6_text1 p-3"><?php the_field('home_div6_h') ?></span>
                    </div>
                </div>
                <div class="home_div6_div1 home_div6_div11">
                    <div>
                        <div class="home_div6_text2 pt-xl-5 pt-md-4"><?php the_field('home_div6_title1') ?></div>
                        <div class="home_div6_text3 pb-4"><?php the_field('home_div6_title2') ?></div>
                        <div class="home_div6_text4 pb-xl-5 pb-4"><?php the_field('home_div6_text1') ?></div>
                        <div class="pb-4">
                            <a href="">
                                <div class="Rounded_Rectangle_6">
                                    <div class="Rounded_Rectangle_6_text"><?php the_field('home_div6_btn') ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pt-4 home_div6_div2">
                    <img src="<?php the_field('home_div6_img') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-xl-5 py-md-4">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 home_div7_div1">
            <img src="<?php the_field('home_div7_img') ?>" alt="" >
        </div>
        <div class="col-lg-6 col-md-6 col-12 home_div7_text">
            <div class="home_div7_text1 pt-xl-4"><?php the_field('home_div7_title1') ?></div>
            <div class="home_div7_text2"><?php the_field('home_div7_title2') ?></div>
            <div class="home_div7_text3 pt-xl-5 pt-md-4 col-10">
                <div>
                    <?php the_field('home_div7_text1') ?>
                </div>
                <div class="pt-4">
                    <?php the_field('home_div7_text2') ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
?>