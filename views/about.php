<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Organization">
    <head>
        <?php include_once '../php/init_translation.php'; ?>
        <?php include_once './shared/links.php'; ?>
        <?php include_once './shared/meta.php'; ?>
        <title><?= $lang['ABOUT_PAGE']['TAB_TITLE'] . $lang['GLOBAL']['COMPANY_TITLE_FOR_TAB']; ?></title>
    </head>

    <body>
        <?php include_once '../php/analyticstracking.php'; ?>
        <?php include_once './shared/navbar.php'; ?>


        <div class="container">
            <div class="l-spacer"></div>

            <div class="row">
                <div class="col s12 m12 l12">
                    <h2 class="bold"><?= $lang['ABOUT_PAGE']['HEAD_TITLE']; ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l6">
                    <p class="light font-16"><?= $lang['ABOUT_PAGE']['ABOUT']; ?></p>
                    <br>
                    <ul>
                        <li><h5 class="light font-16">› <?= $lang['ABOUT_PAGE']['RULE_1']; ?></h5></li> 
                        <li><h5 class="light font-16">› <?= $lang['ABOUT_PAGE']['RULE_2']; ?></h5></li> 
                        <li><h5 class="light font-16">› <?= $lang['ABOUT_PAGE']['RULE_3']; ?></h5></li> 
                    </ul>
                    <br>
                    <p class="light font-16"><?= $lang['ABOUT_PAGE']['RULES']; ?></p>
                </div>
                <div class="col s12 m6 l6 center">
                    <img src="../content/images/design/about1.jpg" height="500">
                </div>
            </div>
            
            <div class="l-spacer"></div>
        </div>

        <div class="row blue-grey darken-4 white-text">
            <div class="container center">
                <div class="l-spacer"></div>

                <div class="row">
                    <div class="col s12 m12 l12">
                        <i class="material-icons">thumb_up</i>
                        <p class="light font-18"><?= $lang['ABOUT_PAGE']['COMPANY_SUCCESS']; ?></p>
                    </div>
                </div>

                <div class="l-spacer"></div>
            </div>
        </div>

        <div class="container">
            <div class="l-spacer"></div>

            <div class="row">
                <div class="col s12 m10 l10 offset-m1 offset-l1">
                    <div class="row">
                        <div class="col s12 m6 l6 center">
                            <img src="../content/images/design/bisht_development.png">
                        </div>
                        <div class="col s12 m6 l6">
                            <p class="font-22 bold"><?= $lang['ABOUT_PAGE']['DESIGN']; ?></p>
                            <p class="light font-16"><?= $lang['ABOUT_PAGE']['DESIGN_TEXT']; ?></p>
                            <a href="./development.php"><?= $lang['ABOUT_PAGE']['DETAILS']; ?> ›</a>
                        </div>
                    </div>

                    <hr><br>

                    <div class="row">
                        <div class="col s12 m6 l6">
                            <p class="font-22 bold"><?= $lang['ABOUT_PAGE']['DEVELOPMENT']; ?></p>
                            <p class="light font-16"><?= $lang['ABOUT_PAGE']['DEVELOPMENT_TEXT']; ?></p>
                            <a href="./development.php"><?= $lang['ABOUT_PAGE']['DETAILS']; ?> ›</a>
                        </div>
                        <div class="col s12 m6 l6 center hide-on-small-and-down">
                            <img src="../content/images/design/bisht_notebook.png">
                        </div>
                    </div>

                    <hr><br>

                    <div class="row">
                        <div class="col s12 m6 l6 center hide-on-small-and-down">
                            <img src="../content/images/design/bisht_community.png">
                        </div>
                        <div class="col s12 m6 l6">
                            <p class="font-22 bold"><?= $lang['ABOUT_PAGE']['CONTACTS']; ?></p>
                            <p class="light font-16"><?= $lang['ABOUT_PAGE']['CONTACTS_TEXT']; ?></p>
                            <a href="./contacts.php"><?= $lang['ABOUT_PAGE']['DETAILS']; ?> ›</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="l-spacer"></div>
        </div>


        <?php include_once './shared/footer.php'; ?>
    </body>
</html>