<?php
    global $language;
    $current_lang = $language->language;
?>

<!-- Off Canvas Menu -->
<aside class="right-off-canvas-menu">
    <?php print render($page['offcanvas']); ?>
</aside>
<a class="exit-off-canvas"></a>

<!--.page -->
<div role="document" class="page">

    <!--.l-header -->
    <header role="banner" class="l-header">

        <?php if (!empty($page['header'])): ?>

        <!--.l-header-region -->
        <section class="l-header-region">
            <!-- <div class="rows"> -->

            <div class="row logo-wrapper">

                <div class="logo columns small-10 medium-8 large-8">
                    <?php if ($linked_logo): print $linked_logo; endif; ?>
                </div>

                <div class="tbguiden-logo columns medium-3 large-2 large-push-2 hide-for-small">
                    <?php if($current_lang == 'sv'): ?>
                        <a href="http://safetyguide-ramirent.com/sv" target="_blank"><img src="/sites/all/themes/tryggarebyggare/images/RamiSkolan_RGB_tb_3.png"></a>
                    <?php else: ?>
                        <a href="http://safetyguide-ramirent.com/en" target="_blank"><img src="/sites/all/themes/tryggarebyggare/images/RamiSkolan_RGB_tb_3.png"></a>
                    <?php endif; ?>
                </div>

                <nav class="tab-bar small-2 medium-1 columns hide-for-large-up">
                    <a class="right-off-canvas-toggle menu-icon" href="#" ><span></span></a>
                </nav>

            </div>

            <nav class="columns sticky large-12 main-nav hide-for-medium-down">
                <?php print render($page['header']); ?>
            </nav>


            <!-- </div> -->
        </section>
        <!--/.l-header-region -->
        <?php endif; ?>

    </header>
    <!--/.l-header -->

    <?php if (!empty($page['frontpage_gallery'])): ?>
    <!--.l-featured -->
    <section class="l-frontpage-gallery row">

        <?php print render($page['frontpage_gallery']); ?>

    </section>
    <!--/.l-featured -->
    <?php endif; ?>


    <?php if (!empty($page['featured'])): ?>
    <!--.l-featured -->
    <section class="l-featured row">
        <div class="columns">
            <?php print render($page['featured']); ?>
        </div>
    </section>
    <!--/.l-featured -->
    <?php endif; ?>

    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
        <div class="columns">
            <?php if ($messages): print $messages; endif; ?>
        </div>
    </section>
    <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
        <div class="columns">
            <?php print render($page['help']); ?>
        </div>
    </section>
    <!--/.l-help -->
    <?php endif; ?>

    <?php $sokvag = url($_GET['q']);?>

    <!--.l-main -->

    <?php if ((url($_GET['q']) == "/sv/main") || (url($_GET['q']) == "/en/main")) : ?>
    <?php $main_grid_bredd = "row medium-centered"; ?>       
    <?php else: ?>
    <?php $main_grid_bredd = "medium-12"; ?>  
    <?php endif; ?>

    <main role="main" class="l-main">
        <!-- .l-main region -->

        <?php if ($title): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title columns small-12 <?php print $main_grid_bredd; ?>"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
        <?php endif; ?>

        <div class="<?php print $main_grid_bredd; ?> main columns">
            <?php if (!empty($page['highlighted'])): ?>
            <div class="highlight panel callout">
                <?php print render($page['highlighted']); ?>
            </div>
            <?php endif; ?>

            <a id="main-content"></a>

            <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
            <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
            <?php endif; ?>

            <?php if ($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>

            <?php print render($page['content']); ?>
            <?php if (!empty($page['content_bottom'])): ?>
            <div class="content-bottom">
                <?php print render($page['content_bottom']); ?>
            </div>
            <?php endif; ?>

        </div>

        <!--/.l-main region -->


    </main>
    <!--/.l-main -->

    <?php if (!empty($page['triptych_first']) || !empty($page['triptych_second']) || !empty($page['mozaik'])): ?>
    <!--.triptych-->
    <section class="row l-triptych mobile-banner show-for-small-down">
        <div class="content-mozaik-small">
            <?php print render($page['mozaik_small']); ?>
        </div>
    </section>
    <section class="row l-triptych desktop-banner hide-for-small-down">
        <div class="content-mozaik-medium-up">
            <?php print render($page['mozaik_medium_up']); ?>
        </div>
    </section>
    <section class="row l-triptych mozaik-triptych">
        <div class="content-mozaik">
            <?php print render($page['mozaik']); ?>
        </div>
    </section>
    <section class="row l-triptych desktop-banner hide-for-small-down">
        <div class="triptych-first">
            <?php print render($page['triptych_first']); ?>
        </div>
    </section>  
    <section class="row l-triptych mobile-banner show-for-small-down">  
        <div class="triptych-second">
            <?php print render($page['triptych_second']); ?>
        </div>
    </section>
    <!--/.triptych -->
    <?php endif; ?>

    <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>

    <!--.footer-columns -->
    <div class="footer-wrapper">

        <section class="l-footer-columns row">
            <?php if (!empty($page['footer_firstcolumn'])): ?>
            <div class="footer-first medium-6 columns">
                <?php print render($page['footer_firstcolumn']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_secondcolumn'])): ?>
            <div class="footer-second medium-6 columns">
                <?php print render($page['footer_secondcolumn']); ?>
            </div>
            <?php endif; ?>

        </section>

        <section class="l-footer-columns-bottom row">
            <?php if (!empty($page['footer_firstcolumn_bottom'])): ?>
            <div class="footer-first medium-6 columns">
                <?php print render($page['footer_firstcolumn_bottom']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_secondcolumn_bottom'])): ?>
            <div class="footer-second medium-6 columns">
                <?php print render($page['footer_secondcolumn_bottom']); ?>
            </div>
            <?php endif; ?>

        </section>

        <!--.l-footer -->
        <div class="footer-wrapper-bottom">
            <footer class="l-footer row" role="contentinfo">
                <?php if (!empty($page['footer'])): ?>
                <div class="footer columns">
                    <?php print render($page['footer']); ?>
                </div>
                <?php endif; ?>
            </footer>
        </div>
        <!--/.l-footer -->

    </div>
    <!--/.footer-columns-->
    <?php endif; ?>



    <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

