<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Organization">
    <head>
        <?php include_once '../php/init_translation.php'; ?>
        <?php include_once './shared/links.php'; ?>
        <?php include_once './shared/meta.php'; ?>
        <title>Sunwer - Solution for your ideas</title>
    </head>

    <body>
        <?php include_once '../php/analyticstracking.php'; ?>

        <style>
            html {
                height:100%;
                width:100%;
                background: #F7F9FA;
                background: -webkit-linear-gradient(135deg, #D2D2D2, #ffffff 35%);
                background: linear-gradient(135deg, #D2D2D2, #ffffff 35%);
            }
            .welcome{
                margin-top:15%;
            }

            @media screen and (max-width:602px) {
                .welcome{
                    margin-top:30%;
                }
            }

            /* override logo */
            .logo {
                width:250px;
                padding-bottom: 50px;
            }

            .logo .dots {
                font-size: 30px;
                margin-top: 6px;
            }
            .logo .name {
                color: #37474f;
                font-size: 50px;
            }

            .logo .slogan {
                color: #37474f;
                font-size: 20px;
                margin-top: -12px;
            }

            a{
                color: #37474f;
                text-decoration: underline;
                font-size: 16px;
                font-weight: 500;
                padding: 10px 11px;
            }

            a:hover{
                color: #0F9D58;
            }
        </style>

        <div class="center welcome">
            <div class="logo" style="margin: 0 auto;">
                <div class="dots">
                    <div class="dot-1 animated bounceInLeft">&#9679;</div>
                    <div class="dot-2 animated fadeInLeft">&#9679;</div>
                </div>
                <div class="name"><?= $lang['GLOBAL']['COMPANY_NAME']; ?></div>
                <div class="slogan"><?= $lang['GLOBAL']['COMPANY_SLOGAN']; ?></div>
            </div>

            <a href="main.php?lang=ru">РУС</a>
            <a href="main.php?lang=en">ENG</a>
            <a href="main.php?lang=kk">ҚАЗ</a>
        </div>

        <div class="center" style="position:absolute;bottom:18px;width:100px;right:25%;left:50%;margin-left:-50px;font-size:14px;">
            <span><?= $lang['FOOTER']['COPYRIGHT']; ?></span>
        </div>
    </body>
</html>
