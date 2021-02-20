<footer class="page-footer">
    <div class="footer-header">
        <div class="row">
            <div class="col s12 m3 l2">
                <div class="logo">
                    <div class="dots">
                        <div class="dot-1">&#9679;</div>
                        <div class="dot-2">&#9679;</div>
                    </div>
                    <div class="name"><?= $lang['GLOBAL']['COMPANY_NAME']; ?></div>
                    <div class="slogan"><?= $lang['GLOBAL']['COMPANY_SLOGAN']; ?></div>
                </div>
            </div>
            <div class="col s12 m3 l2">
                <span class="bold"><?= $lang['FOOTER']['SOCIAL_NETWORK']; ?></span>
                <ul>
                    <li><a href="<?= $lang['GLOBAL']['INSTAGRAM']; ?>" target="_blank">Instagram</a></li>
                    <li><a href="<?= $lang['GLOBAL']['LINKEDIN']; ?>" target="_blank">LinkedIn</a></li>
                    <li><a href="<?= $lang['GLOBAL']['FACEBOOK']; ?>" target="_blank">Facebook</a></li>
                </ul>
            </div>
            <div class="col s12 m6 l8">
                <span class="bold"><?= $lang['FOOTER']['CONTACT_US']; ?></span>
                <div clas="row">
                    <div class="col s12 l3">
                        <ul>
                            <li>
                                <span><?= $lang['FOOTER']['PHONE']; ?></span>
                            </li>
                            <li>
                                <a href="tel:<?= $lang['GLOBAL']['PHONE']; ?>"><?= $lang['GLOBAL']['PHONE']; ?></a>
                            </li>
                            <li>
                                <br/>
                            <li>
                                <span><?= $lang['FOOTER']['FOR_CLIENTS']; ?></span>
                            </li>
                            <li>
                                <a href="mailto:<?= $lang['GLOBAL']['EMAIL_INFO']; ?>"><?= $lang['GLOBAL']['EMAIL_INFO']; ?></a>
                            </li>
                            <li>
                                <br/>
                            </li>
                            <li>
                                <span><?= $lang['FOOTER']['FOR_CANDIDATES']; ?></span>
                            </li>
                            <li>
                                <a href="<?= $lang['GLOBAL']['HH']; ?>" target="_blank">hh.kz</a> / 
                                <a href="mailto:<?= $lang['GLOBAL']['EMAIL_HR']; ?>"><?= $lang['GLOBAL']['EMAIL_HR']; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="footer-copyright">
        <div style="width:100%;">
            <div class="left">
                <span class="copyright left">
                    <?= $lang['FOOTER']['COPYRIGHT']; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
                
                <!-- Dropdown Trigger -->
                <a href="#" class="language-dropdown-button valign-wrapper" data-activates='language-dropdown'>
                    <i class="material-icons">language</i>&nbsp;
                    <span id="change-lang"><?= $lang['FOOTER']['CURRENT_LANG']; ?></span>
                </a>

                <!-- Dropdown Structure -->
                <ul id='language-dropdown' class='dropdown-content language-dropdown-content'>
                    <li><a href="main.php?lang=ru">РУС</a></li>
                    <li><a href="main.php?lang=en">ENG</a></li>
                    <li><a href="main.php?lang=kk">ҚАЗ</a></li>
                </ul>
            </div>
            
            <div class="right map hide-on-med-and-down">
                <a href="./main.php"><?= $lang['NAVBAR']['MAIN']; ?></a>
                <a href="./about.php"><?= $lang['NAVBAR']['ABOUT']; ?></a>
                <a href="./development.php"><?= $lang['NAVBAR']['SERVICES']; ?></a>
                <a href="https://alpha.sunwer.group/" target="_blank"><?= $lang['NAVBAR']['SCHOOL']; ?></a>
                <a href="./blog.php"><?= $lang['NAVBAR']['BLOG']; ?></a>
                <a href="./vacancy.php"><?= $lang['NAVBAR']['VACANCY']; ?></a>
                <a href="./contacts.php"><?= $lang['NAVBAR']['CONTACTS']; ?></a>
            </div>
        </div>
    </div>
</footer>

<script>
    $(function () {
        // get translations
        var _CURRENT_LANG_ = '<?= $lang["FOOTER"]["CURRENT_LANG"]; ?>';
        var _CHANGE_LANG_ = '<?= $lang["FOOTER"]["CHANGE_LANG"]; ?>';
    });

    $('.language-dropdown-button').dropdown({
        constrainWidth: false,
        hover: true,
        alignment: 'left',
        stopPropagation: false
    }
  );
</script>