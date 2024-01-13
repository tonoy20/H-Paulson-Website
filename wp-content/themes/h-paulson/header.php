<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H-Paulson Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- bootstrap 5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- open sans font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@700&family=Ropa+Sans&display=swap" rel="stylesheet">
    <!-- lato light font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- ralway font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Montserrat font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar-expand-lg">
        <div class="ps-xl-5 ps-md-2 nav_div1">
            <div class="d-flex">
                <a href="<?php echo get_home_url(); ?>"><img class="nav_div1_img" src="<?php the_field('header_logo', 'option'); ?>" alt=""></a>
                <p class="pt-3 ps-2"><span class="nav_head1"><?php the_field('header_title1', 'option'); ?></span> <br>
                    <span class="nav_head2"><?php the_field('header_title2', 'option'); ?></span>
                </p>

                <div class="nav_div2">
                    <div class="nav_div_img d-flex">
                        <div class="nav_r_img"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/phoneH.png" alt=""></div> <span class="nav_Phone"><?php the_field('header_phone', 'option'); ?></span>
                    </div>
                    <div class="nav_list">
                        <?php wp_nav_menu(array('theme-location' => 'header-menu', 'menu_class' => 'd-flex nav_ul', 'menu_id' => 'customAclassInWp_nav_menu')); ?>
                    </div>
                </div>

                <div class="nav_icon">
                    <i onclick="navfunction()" class="bi bi-border-width"></i>
                </div>
            </div>
        </div>
    </nav>


    <div class="nav_ic_back" id="nav_ic_back">
        <div class="nav_m_list">
            <?php wp_nav_menu(array('theme-location' => 'header-menu', 'menu_class' => 'nav_ul', 'menu_id' => 'customAclassInWp_nav_menu')); ?>
        </div>
    </div>

    <script>
        var i = 0;
        function navfunction() {
            if (i === 0) {
                document.getElementById('nav_ic_back').style.cssText = 'margin-top: 16px; margin-bottom:15px;',
                    i = 1;
            } else if (i === 1) {
                document.getElementById('nav_ic_back').style.cssText = 'margin-top: -310px;',
                    i = 0;
            }
        }
    </script>