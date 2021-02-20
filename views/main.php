<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Organization">
    <head>
        <?php include_once '../php/init_translation.php'; ?>
        <?php include_once './shared/links.php'; ?>
        <?php include_once './shared/meta.php'; ?>
        <title><?= $lang['MAIN_PAGE']['TAB_TITLE'] . $lang['GLOBAL']['COMPANY_TITLE_FOR_TAB']; ?></title>
    </head>

    <body>
        <?php include_once '../php/analyticstracking.php'; ?>
        <?php include_once './shared/navbar.php'; ?>

        <main class="main-page-container">
            <div class="row bkg-content">
                <div class="col s12 m12 l6">
                    <div class="bkg-content-left">
                        <h1 class="bold"><?= $lang['MAIN_PAGE']['TITLE']; ?></h1>
                        <p class="light"><?= $lang['GLOBAL']['COMPANY_TITLE']; ?></p>
                        <br/>
                        <div>
                            <a href="./contacts.php" class="btn blue darken-1 z-depth-0">
                                <?= $lang['FOOTER']['CONTACT_US_SHORT']; ?>
                            </a>
                            <a href="#menu-hook" class="btn blue darken-1 z-depth-0">
                                <?= $lang['GLOBAL']['LEARN_MORE']; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6 hide-on-med-and-down">
                    <div class="bkg-content-right">
                        <div class="bkg-triangle-bottomleft"></div>
                        <div class="bkg-overlay"></div>
                        <video class="bkg-video" autoplay muted loop poster="../content/images/backgound-video/bkg-cover.jpeg">
                            <source src="../content/images/backgound-video/bkg-video.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            
            <div class="l-spacer" id="menu-hook"></div>

            <div class="menu">
                <a href="./about.php" class="menu-item">
                    <img src="../content/images/icons/kolo/if_SEO_international_969262.png" alt="">
                    <h5><?= $lang['NAVBAR']['ABOUT']; ?></h5>
                </a>
                <a href="./development.php" class="menu-item">
                    <img src="../content/images/icons/kolo/if_SEO_share_2524418.png" alt="">
                    <h5><?= $lang['NAVBAR']['DESIGN_AND_DEVELOPMENT']; ?></h5>
                </a>
                <a href="./school.php" class="menu-item">
                    <img src="../content/images/icons/kolo/if_SEO_favorite_969249.png" alt="">
                    <h5><?= $lang['NAVBAR']['SCHOOL']; ?></h5>
                </a>
                <a href="./blog.php" class="menu-item">
                    <img src="../content/images/icons/kolo/if_SEO_social_media-95_969253.png" alt="">
                    <h5><?= $lang['NAVBAR']['BLOG']; ?></h5>
                </a>
                <a href="./vacancy.php" class="menu-item">
                    <img src="../content/images/icons/kolo/if_SEO_usability_audit_search__969250.png" alt="">
                    <h5><?= $lang['NAVBAR']['VACANCY']; ?></h5>
                </a>
                <a href="./contacts.php" class="menu-item">
                    <img src="../content/images/icons/kolo/if_seo_emailer_1009242.png" alt="">
                    <h5><?= $lang['NAVBAR']['CONTACTS']; ?></h5>
                </a>
            </div>

            <div class="l-spacer"></div>
        </main>
        
        <?php include_once './shared/footer.php'; ?>
    </body>
</html>