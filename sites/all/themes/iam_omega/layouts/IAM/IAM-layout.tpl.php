
<div class="l-page-wrapper">
    <div class="l-page">
        <header class="l-header" role="banner">
            <div class="l-header-wrapper">
                <div class="l-branding">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                    <?php endif; ?>
                    <?php print render($page['branding']); ?>
                </div>

                <div class="l-header-first">
                    <?php print render($page['header_first']); ?>
                    <?php if ($site_name || $site_slogan): ?>
                        <?php if ($site_name): ?>
                            <h1 class="site-name">
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                            </h1>
                        <?php endif; ?>
                        <?php if ($site_slogan): ?>
                            <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="l-header-second">
                        <?php print render($page['header_second']); ?>
                    </div>
                </div>

            </div>

        </header>
        <div class="l-navigation">
            <?php print render($page['navigation']); ?>
        </div>

        <?php if($page['preface_first'] || $page['preface_second'] || $page['preface_third']) : ?>
            <div class="l-preface">
                <div class="l-preface-first">
                    <?php print render ($page['preface_first']); ?>
                </div>
                <div class="l-preface-second">
                    <?php print render ($page['preface_second']); ?>
                </div>
                <div class="l-preface-third">
                    <?php print render ($page['preface_third']); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="l-main">
            <div class="l-content" role="main">
                <?php print render($page['highlighted']); ?>
                <?php print $breadcrumb; ?>
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                    <h1><?php print $title; ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php print $messages; ?>
                <?php print render($tabs); ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
            </div>

            <div class="l-sidebar-first">
                <?php print render($page['sidebar_first']); ?>
            </div>
            <div class="l-sidebar-second">
                <?php print render($page['sidebar_second']); ?>
            </div>
        </div>

        <?php if($page['midsection']) : ?>
            <div class="l-midsection">
                <?php print render ($page['midsection']); ?>
            </div>
        <?php endif; ?>
        <?php if($page['postscript_first'] || $page['postscript_second'] || $page['postscript_third']) : ?>
            <div class="l-postscript-wrapper">
                <div class="l-postscript">
                    <div class="l-postscript-first">
                        <?php print render ($page['postscript_first']); ?>
                    </div>
                    <div class="l-postscript-second">
                        <?php print render ($page['postscript_second']); ?>
                    </div>
                    <div class="l-postscript-third">
                        <?php print render ($page['postscript_third']); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        <footer class="l-footer" role="contentinfo">
            <?php print render($page['footer']); ?>
        </footer>
    </div>
</div>

