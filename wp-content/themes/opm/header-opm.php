<!DOCTYPE html>
<html>
<head lang="en">
    <!-- ==============================================
    === Title and Meta Tags
    =============================================== -->
    <meta charset="utf-8">
    <title><?php bloginfo('name')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- =============================================
    CSS
    =============================================== -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900"/>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<!-- =============================================
TopBar
=============================================== -->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="logo">OnePageMadness</h1>
            </div>
            <div class="col-md-8">
                <!--<ul class="pull-right list-inline">
                    <li class="active">
                        Home
                    </li>
                    <li>
                        About
                    </li>
                    <li>
                        Services
                    </li>
                    <li>
                        Team
                    </li>
                    <li>
                        Experience
                    </li>
                    <li>
                        Testimonials
                    </li>
                    <li>
                        Portfolio
                    </li>
                    <li>
                        Blog
                    </li>
                    <li>
                        Contact
                    </li>
                </ul>-->

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'pull-right list-inline'
                ))?>
            </div>
        </div>
    </div>
</div>

<!-- =============================================
Banner
=============================================== -->
<div class="banner">
    <div class="wrap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bannerhead">
                    <h1>Welcome To The One Page Madness</h1>
                    <a href="#" class="bh-button">Know More</a>
                    <a href="#" class="bh-button">Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>