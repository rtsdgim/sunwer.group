<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Organization">
    <head>
        <?php include_once '../php/init_translation.php'; ?>
        <?php include_once './shared/links.php'; ?>
        <?php include_once './shared/meta.php'; ?>
        <title><?= $lang['BLOG_PAGE']['TAB_TITLE'] . $lang['GLOBAL']['COMPANY_TITLE_FOR_TAB']; ?></title>
    </head>

    <body>
        <?php include_once '../php/analyticstracking.php'; ?>
        <?php include_once './shared/navbar.php'; ?>

        <div class="l-spacer"></div>

        <!-- title -->
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h2 class="bold"><?= $lang['BLOG_PAGE']['HEAD_TITLE']; ?></h2>
                    <p class="light"><?= $lang['BLOG_PAGE']['HEAD_TAGLINE']; ?></p>
                </div>
            </div>
        </div>

        <!-- news -->
        <div class="container">
            <div class="row">

                <?php foreach (array_reverse($news) as $n) { ?>
                    <div class="col s12 m6 l4">
                        <p class="bold font-22"><?= $n['TITLE'] ?></p>
                        <p class="bold"><?= $n['DATE'] ?></p>
                        <p class="light font-16"><?= $n['DESCRIPTION'] ?></p>
                        <?php if($n['LINK'] !== NULL) { ?>
                            <a href="<?= $n['LINK'] ?>" target="_blank"><?= $lang['ABOUT_PAGE']['DETAILS']; ?> ›</a>
                        <?php } ?>
                    </div>
                <?php } ?>

            </div>
        </div>

        <div class="l-spacer"></div>

        <?php include_once './shared/footer.php'; ?>
    </body>
</html>