<footer>
    <div class="bg-light footer_div1 d-flex">
        <div class="d-flex ps-md-5 col-10">
            <img class="footer_div1_img" src="<?php the_field('footer_h_logo', 'option'); ?>" alt="">
            <p class="pt-5 ps-2 nav_head"><span class="nav_head1"><?php the_field('footer_title1', 'option'); ?></span> <br>
                <span class="nav_head2"><?php the_field('footer_title2', 'option'); ?></span>
            </p>
        </div>
        <div class="footer_div2 col">
            <i class="bi bi-twitter"></i>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebookic.png" alt="">
            <i class="bi bi-linkedin"></i>
        </div>
    </div>
    <div class="row px-md-5 pt-4 bg-light pb-4">
        <div class="col footer_img_1">
            <img class="footer_div2_2" src="<?php echo get_template_directory_uri(); ?>/images/icons/footerLoca.png" alt="">
            <p class="footer_text1 col-lg-6"><?php the_field('footer_address', 'option'); ?></p>
        </div>
        <div class="col footer_div22">
            <div class="row">
                <div class="col-1"><img src="<?php echo get_template_directory_uri(); ?>/images/line_copy.png" alt=""></div>
                <div class="col footer_img_1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/footerPhone.png" alt="">
                    <p class="footer_text2">Call now for support:<br><span class="footer_text22"><?php the_field('footer_phone', 'option'); ?></span></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-1"><img src="<?php echo get_template_directory_uri(); ?>/images/line_copy.png" alt=""></div>
                <div class="col">
                    <p class="footer_text3">&copy; <?php the_field('footer_copyright', 'option'); ?><br>
                        All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $('.slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        dots: true,
        arrows: false,
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.slider2').slick({
            // Customize your settings as needed
            infinite: true,
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
        });
    });
</script>

<script>
    $("#customAclassInWp_nav_menu li a").addClass("nav-link");
</script>

<?php wp_footer(); ?>
</body>

</html>