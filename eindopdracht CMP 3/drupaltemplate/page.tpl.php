<!-- Offcanvas -->
<div class="offcanvas">
    <!-- Offcanvas Header -->
    <section class="offcanvas__header">
        <h1>633|&lt;</h1>
        <a class="navigation-toggle offcanvas__navigation-toggle" href="#" title="Close the offcanvas" data-navtype="offcanvas-open">
            <span>Close</span>
        </a>

    </section>

    <!-- Offcanvas Navigation -->
    <nav class="offcanvas__navigation">

        <ul class="clearfix">

      <!--      <li><a class="navigation__item" href="#/" title="Back to the homepage"><span class="fa fa-home"></span>Portfolio</a></li>
            <li><a class="navigation__item" href="#/about" title="about"><span class="fa fa-user"></span>About</a></li>-->
        </ul>
    </nav><!-- End Offcanvas Navigation -->
</div><!-- End Offcanvas -->

<!-- Page: portfolio -->
<div class="page active" id="portfolio">
    <!-- Header Wrapper -->

    <div class="grid__wrapper header-wrapper">

        <div class="grid__container">

            <div class="grid__row">

                <div class="grid__column-bp1-12">

                    <header class="header">

                        <!-- Header Logo -->
                        <section class="header__logo">

                            <h1><a href="index.html" title="Back to the homepage"><span>Responsive Components</span></a></h1>

                            <h2>Responsive grid, navigation, images, ...</h2>

                        </section><!-- End Header Logo -->

                        <!-- Navigation Toggle
                        data-navtype="headernav-open" when responsive push down menu
                        data-navtype="offcanvas-open" when responsive offcanvas
                        -->
                        <a class="navigation-toggle header__navigation-toggle" href="#" data-navtype="offcanvas-open">
                            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'portfolio', 'class' => array('links', 'inline', 'clearfix')), )); ?>



                        </a><!-- End Navigation Toggle -->

                        <!-- Navigation -->
                        <nav class="header__navigation">

                            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'portfolio', 'class' => array('links', 'inline', 'clearfix')), )); ?>       <ul class="clearfix">

                        <!--        <li><a class="navigation__item" href="#/" title="Back to the homepage">Portfolio</a></li>
                                <li><a class="navigation__item" href="#/about" title="about">About</a></li>-->
                            </ul>
                        </nav><!-- End Navigation -->
                    </header>
                </div>
            </div>
        </div>
    </div><!-- End Header Wrapper -->
    <!-- portfolio -->
    <div class="grid__wrapper main-wrapper">
        <div class="grid__container">
            <div class="grid__row">
                <div class="grid__column-bp1-12">
                    <h1>Portfolio</h1>



                </div>
                <div class="grid__column-bp1-12">
                    <!-- Container for a list layout switcher -->
                    <section class="list-layout">
                   <!--     <a class="btn-fa btn-fa-tiles" href="#" data-listlayout="tiles" data-target="portfolio-list"><span>Tiles</span></a>
                        <a class="btn-fa btn-fa-list" href="#" data-listlayout="list" data-target="portfolio-list"><span>List</span></a>-->
                    </section><!-- End Container -->
                    <section class="portfolio-list"></section>

                </div>

                <?php if($page['content']): ?>
                    <?php print render($page['content']); ?>
                <?php endif; ?>

            </div>
        </div>
    </div><
</div>



<!-- Page: About -->
<div class="page" id="about">
    <!-- Header Wrapper -->
    <div class="grid__wrapper header-wrapper">
        <div class="grid__container">
            <div class="grid__row">
                <div class="grid__column-bp1-12">
                    <header class="header">
                        <!-- Header Logo -->
                        <section class="header__logo">


                        </section><!-- End Header Logo -->
                        <!-- Navigation Toggle
                        data-navtype="headernav-open" when responsive push down menu
                        data-navtype="offcanvas-open" when responsive offcanvas
                        -->
                        <a class="navigation-toggle header__navigation-toggle" href="#" data-navtype="offcanvas-open">

                        </a><!-- End Navigation Toggle -->
                        <!-- Navigation -->
                        <nav class="header__navigation">
                            <ul class="clearfix">
                        <!--        <li><a class="navigation__item" href="#/" title="Back to the homepage">Portfolio</a></li>
                                <li><a class="navigation__item" href="#/about" title="about">About</a></li>-->
                            </ul>
                        </nav><!-- End Navigation -->
                    </header>
                </div>
            </div>
        </div>
    </div><!-- End Header Wrapper -->

    <div class="grid__wrapper main-wrapper">
        <div class="grid__container">
            <div class="grid__row">
                <div class="grid__column-bp1-12">
                    <h1>About</h1>
                    Ik ben ...
                </div>
            </div>
        </div>
    </div>
</div><

<?php if($page['login']): ?>
    <?php print render($page['login']); ?>
<?php endif; ?>