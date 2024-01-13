<?php /* Template Name: qlf-page */ 
?>
<?php
get_header();
?>

<div class="pt-1"></div>
<div class="qlfbannerImg" style="background-image: url(<?php the_field('qlf_banner_img') ?> );">
    <div class="alfabannerImg2div">
        <div class="alfabannerImg2">
            <div class="alfabannerText">
                <p class="homebanner_text1"><?php the_field('qlf_banner_text1') ?></p>
                <p class="homebanner_text2"><?php the_field('qlf_banner_text2') ?></p>
                <p class="alfabanner_text3 col-xl-5 col-lg-8 col-md-11 col-11"><?php the_field('qlf_banner_text3') ?></p>
                <p class="pb-xl-5 pb-md-1 mb-xl-4"></p>
                <div class="alfabanner_btn qlfbanner_btn">
                    <a href=""><div class="homebanner_text5 qlfbanner_text5"><?php the_field('qlf_banner_btn') ?></div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home_div5">
    <div class="row home_div5_div">
        <div class="col-lg-2 col-md-2 d-flex home_div5_img me-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home_51.png" alt="">
            <div class="home_div5_text">
                <div class="home_div5_text1"><?php the_field('qlf_div1_title1') ?></div>
                <div class="home_div5_text2"><?php the_field('qlf_div1_text1') ?></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex home_div5_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/ques.png" alt="">
            <div class="home_div5_text">
                <div class="home_div5_text1"><?php the_field('qlf_div1_title2') ?></div>
                <div class="home_div5_text2"><?php the_field('qlf_div1_text2') ?></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex home_div5_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home_53.png" alt="">
            <div class="home_div5_text">
                <div class="home_div5_text1"><?php the_field('qlf_div1_title3') ?></div>
                <div class="home_div5_text2"><?php the_field('qlf_div1_text3') ?></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex home_div5_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home_54.png" alt="">
            <div class="home_div5_text">
                <div class="home_div5_text1"><?php the_field('qlf_div1_title4') ?></div>
                <div class="home_div5_text2"><?php the_field('qlf_div1_text4') ?></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <div class="alfa_div2_img">
            <img src="<?php the_field('qlf_div2_img') ?>" alt="">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="ps-xl-5 ps-md-3 pt-xl-4 pt-lg-4 pt-md-3 pt-3 qlf_div1_22">
            <div class="alfa_div2_text1"><?php the_field('qlf_div2_title1') ?></div>
            <div class="alfa_div2_text2 pb-xl-5"><?php the_field('qlf_div2_title2') ?></div>
            <div class="pb-3"></div>
            <div class="alfa_div2_text3 pb-xl-4 pb-lg-3 pb-md-2 pb-2"><span class="alfa_div2_text31">Price: </span> <?php the_field('qlf_div2_text1') ?></div>
            <div class="alfa_div2_text3 pb-xl-4 pb-lg-3 pb-md-2 pb-2"><span class="alfa_div2_text31">Availability: </span><?php the_field('qlf_div2_text2') ?></div>
            <div class="alfa_div2_text5 col-lg-10 col-md-10 col-12"><span class="alfa_div2_text31">Description: </span> <br>
                <?php the_field('qlf_div2_text3') ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <div class="p-xl-5 pt-lg-4 pt-md-3 pt-3 ms-xl-5 ms-lg-5 ms-md-5 qlf_div1_22">
            <div class="alfa_div2_text1"><?php the_field('qlf_div3_title1') ?></div>
            <div class="alfa_div2_text2 pb-xl-5"><?php the_field('qlf_div3_title2') ?></div>
            <div class="pb-xl-3 pb-lg-3 pb-md-2 pb-2"></div>
            <div class="alfa_div2_text5 pb-xl-4 col-lg-11 col-md-11 col-12"><?php the_field('qlf_div3_text1') ?>
            </div>
            <div class="alfa_div2_text5 col-11 qlf_div3_2">
                <ul>
                <?php 
                    if(have_rows('qlf_div3_list')) :
                        while( have_rows('qlf_div3_list') ) : the_row();
                    ?>
                    <li><?php the_sub_field('list') ?></li>
                    <?php 
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="alfa_div3_img qlf_div3_img">
            <img class="" src="<?php the_field('qlf_div3_img') ?>" alt="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <div class="alfa_div2_img">
            <img src="<?php the_field('qlf_div4_img') ?>" alt="">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12 qlf_div1_22">
        <div class="p-xl-5 p-lg-4 p-md-3 p-3">
            <div class="alfa_div2_text1"><?php the_field('qlf_div4_title1') ?></div>
            <div class="alfa_div2_text2 pb-xl-5 pb-md-2 pb-2"><?php the_field('qlf_div4_title2') ?></div>
            <div class="alfa_div2_text3 pb-xl-5 pb-md-2 pb-2"><?php the_field('qlf_div4_text1') ?></div>
            <div class="qlf_div3_text5 pb-xl-5 pb-md-2 pb-2"><div class="qlf_div3_text51"><?php the_field('qlf_div4_text2_h') ?></div>
                <?php the_field('qlf_div4_text2') ?></div>
            <div class="qlf_div3_text5"><div class="qlf_div3_text51"><?php the_field('qlf_div4_text3_h') ?></div>
                <?php the_field('qlf_div4_text3') ?>
            </div>
        </div>
    </div>
</div>
<div class="pt-2"></div>
<div class="alfa_div4 pb-5">
    <div class="row pb-3">
        <div class="col-lg-5 col-md-5 col-12">
            <div class="d-flex ps-xl-5 ps-md-5 ps-4 ms-xl-5 pb-xl-5 pb-md-4 mb-3">
                <img class="qlf_div5_imgh" src="<?php echo get_template_directory_uri(); ?>/images/icons/alfapageH.png" alt="">
                <div class="alfa_div4_text1 pt-4 ps-xl-4 ps-lg-4 ps-md-3 ps-3"><?php the_field('qlf_div5_title1') ?><br>
                    <span class="alfa_div4_text2"><?php the_field('qlf_div5_title2') ?></span>
                </div>
            </div>
            <div class="alfa_div2_text3 ps-xl-5 ps-md-5 ms-xl-5 alfa_div4_text3">
                <span class="alfa_div2_text31">PLEASE NOTE:</span>
                <div class="pt-2">
                    <div><?php the_field('qlf_div5_text1') ?></div>
                    <div class="pt-xl-5 pt-md-4 pt-2"><?php the_field('qlf_div5_text2') ?></div>
                    <div class="pt-xl-5 pt-md-4 pt-2"><?php the_field('qlf_div5_text3') ?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-5 col-md-5 col-11">
            <div class="alfa_div4_2">
                <form>
                    <div class="row pb-4">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Your Name</label>
                                <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 pb-4">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn">SEND EMAIL</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="pt-3"></div>

<?php
get_footer();
?>