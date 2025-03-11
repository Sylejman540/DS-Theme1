<head>
    <meta charset="UTF-8" <?php bloginfo('charset')?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <!-- Header -->

    <header>

        <!-- First Section -->
        <section class="top-bar">
            <div class="logo">
                LOGO
            </div>

            <div class="searchbox">
                SEARCH
            </div>
        </section>

        <!-- Second Section -->
        <section class="menu-area">
            <nav class="main-menu">
               <?php  wp_nav_menu_array(
                  array('theme_location' => 'wp_devs_main_menu', 'depth' => 2)); ?>
            </nav>
        </section>

    </header>