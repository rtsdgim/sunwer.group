<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Organization">
    <head>
        <?php include_once '../php/init_translation.php'; ?>
        <?php include_once './shared/links.php'; ?>
        <?php include_once './shared/meta.php'; ?>
        <title><?= $lang['SEO_PAGE']['TAB_TITLE'] . $lang['GLOBAL']['COMPANY_TITLE_FOR_TAB']; ?></title>
    </head>

    <body>
        <?php include_once '../php/analyticstracking.php'; ?>
        <?php include_once './shared/navbar.php'; ?>


        <div class="container">
            <div class="l-spacer"></div>

            <div class="row">
                <div class="col s12 m12 l12">
                    <h2 class="light"><?= $lang['SEO_PAGE']['HEAD_TITLE']; ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l6">
                    <p class="light font-16"><?= $lang['SEO_PAGE']['HEAD_TAGLINE']; ?></p>
                    <div class="hide-on-small-and-down">
                        <div class="m-spacer"></div>
                        <img src="../content/images/icons/kolo/if_SEO_social_media-95_969253.png" alt="" width="56">
                        &nbsp;&nbsp;&nbsp;
                        <img src="../content/images/icons/kolo/if_Programming_Development_analysis_1743801.png" alt="" width="56">
                        &nbsp;&nbsp;&nbsp;
                        <img src="../content/images/icons/kolo/if_SEO_favorite_969249.png" alt="" width="56">
                        &nbsp;&nbsp;&nbsp;
                        <img src="../content/images/icons/kolo/if_SEO_international_969262.png" alt="" width="56">
                        &nbsp;&nbsp;&nbsp;
                        <img src="../content/images/icons/kolo/if_SEO_WEB_analytics_969254.png" alt="" width="56">
                        &nbsp;&nbsp;&nbsp;
                        <img src="../content/images/icons/kolo/if_seo_place_optimization_1009240.png" alt="" width="56">
                    </div>
                </div>
                <div class="col s12 m6 l6 center">
                    <img src="../content/images/design/bonvarg/pic (7).jpg" alt="">
                </div>
            </div>
            
            <div class="l-spacer"></div>
            <div class="s-spacer"></div>
        </div>

        <div class="row blue-grey darken-4 white-text">
            <div class="container center">
                <div class="l-spacer"></div>

                <div class="row">
                    <div class="col s12 m12 l12">
                        <i class="material-icons">thumb_up</i>
                        <p class="light font-18"><?= $lang['SEO_PAGE']['MUST_PART_OF_SEO']; ?></p>
                    </div>
                </div>

                <div class="l-spacer"></div>
            </div>
        </div>

        <div class="container">
            <div class="l-spacer"></div>

            <div class="row center">
                <div class="col s12 m12 l12">
                    <h2 class="light"><?= $lang['SEO_PAGE']['SEO_RESULT_QUESTION']; ?></h2>
                    <p class="light font-16"><?= $lang['SEO_PAGE']['SEO_RESULT']; ?></p>
                </div>
            </div>

            <div class="row" style="">
                <div class="col s12 m6 l6 center hide-on-small-and-down">
                    <img src="../content/images/design/adword-phone.png" alt="">
                </div>
                <div class="col s12 m6 l6">
                    <div class="col s12 m6 l6 center hide-on-med-and-up">
                        <img src="../content/images/design/adword-phone.png" alt="">
                    </div>
                    <div>
                        <p class="font-22"><?= $lang['SEO_PAGE']['SEO_RESULT_1']; ?></p>
                        <p class="light font-16"><?= $lang['SEO_PAGE']['SEO_RESULT_1_1']; ?></p>
                    </div>
                    <div>
                        <p class="font-22"><?= $lang['SEO_PAGE']['SEO_RESULT_2']; ?></p>
                        <p class="light font-16"><?= $lang['SEO_PAGE']['SEO_RESULT_2_1']; ?></p>
                    </div>
                    <div>
                        <p class="font-22"><?= $lang['SEO_PAGE']['SEO_RESULT_3']; ?></p>
                        <p class="light font-16"><?= $lang['SEO_PAGE']['SEO_RESULT_3_1']; ?></p>
                    </div>
                </div>
            </div>

            <div class="l-spacer"></div>
        </div>
           

        <?php include_once './shared/footer.php'; ?>
    </body>
</html>