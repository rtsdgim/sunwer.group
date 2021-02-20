<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Organization">
    <head>
        <?php include_once '../php/init_translation.php'; ?>
        <?php include_once './shared/links.php'; ?>
        <?php include_once './shared/meta.php'; ?>
        <title><?= $lang['VACANCY_PAGE']['TAB_TITLE'] . $lang['GLOBAL']['COMPANY_TITLE_FOR_TAB']; ?></title>
    </head>

    <body>
        <?php include_once '../php/analyticstracking.php'; ?>
        <?php include_once './shared/navbar.php'; ?>


        <div class="container">
            <div class="l-spacer"></div>

            <div class="row">
                <div class="col s12 m12 l12">
                    <h2 class="bold"><?= $lang['VACANCY_PAGE']['HEAD_TITLE']; ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l5">
                    <p class="light font-16"><?= $lang['VACANCY_PAGE']['HEAD_TAGLINE']; ?></p>
                    <p class="light font-16"><?= $lang['VACANCY_PAGE']['ABOUT_TEAM']; ?></p>
                    <br/>
                    <a href="#details-hook" class="btn blue-grey darken-4 z-depth-0">
                        <?= $lang['GLOBAL']['LEARN_MORE']; ?>
                    </a>
                    <div class="s-spacer"></div>
                    <a href="<?= $lang['GLOBAL']['HH']; ?>" target="_blank" class="btn blue-grey darken-4 z-depth-0">
                        <?= $lang['VACANCY_PAGE']['OPEN_VACANCIES']; ?>
                    </a>
                </div>
                <div class="col s12 m6 l6 offset-l1 center">
                    <img src="../content/images/design/vacancy1.jpg" alt="" height="320">
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
                        <p class="light font-18"><?= $lang['VACANCY_PAGE']['JOIN_TO_TEAM']; ?></p>
                    </div>
                </div>

                <div class="l-spacer"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="l-spacer" id="details-hook"></div>

            <div class="row">
                <div class="col s12 m12 l12">
                    <h2 class="bold"><?= $lang['VACANCY_PAGE']['OPEN_VACANCIES']; ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l6">
                    <p class="font-22 bold"><?= $lang['VACANCY_PAGE']['RESPOND']; ?></p>
                    <p class="light font-16"><?= $lang['VACANCY_PAGE']['RESPOND_TEXT']; ?></p>
                    <a href="<?= $lang['GLOBAL']['HH']; ?>" target="_blank" class="btn red darken-4 z-depth-0"><?= $lang['VACANCY_PAGE']['GO_TO_HH']; ?></a>
                </div>
                <div class="col s12 m6 l6">
                    <p class="font-22 bold"><?= $lang['VACANCY_PAGE']['SEND_OWN_CV']; ?></p>
                    <p>
                        <span class="light font-16"><?= $lang['VACANCY_PAGE']['OWN_CV']; ?></span>
                        <a href="mailto:<?= $lang['GLOBAL']['EMAIL_HR']; ?>"><?= $lang['GLOBAL']['EMAIL_HR']; ?></a>
                    </p>
                    <a href="mailto:<?= $lang['GLOBAL']['EMAIL_HR']; ?>" class="btn blue-grey darken-4 z-depth-0"><?= $lang['VACANCY_PAGE']['SEND_OWN_CV']; ?></a>
                </div>
            </div>
            
            <div class="l-spacer"></div>
        </div>


        <?php include_once './shared/footer.php'; ?>
    </body>
</html>