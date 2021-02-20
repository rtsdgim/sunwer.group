<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Organization">
    <head>
        <?php include_once '../php/init_translation.php'; ?>
        <?php include_once './shared/links.php'; ?>
        <?php include_once './shared/meta.php'; ?>
        <title><?= $lang['CONTACTS_PAGE']['TAB_TITLE'] . $lang['GLOBAL']['COMPANY_TITLE_FOR_TAB']; ?></title>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>

    <body>
        <?php include_once '../php/analyticstracking.php'; ?>
        <?php include_once './shared/navbar.php'; ?>
        
        <div class="container">
            <div class="l-spacer"></div>

            <div class="row">
                <div class="col s12 m12 l12">
                    <h2 class="bold center"><?= $lang['CONTACTS_PAGE']['HEAD_TITLE']; ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l6 center">
                    <img src="../content/images/design/contacts1.jpg" height="350">
                </div>
                <div class="col s12 m6 l5 offset-l1">
                    <p class="light font-16"><?= $lang['CONTACTS_PAGE']['HEAD_TAGLINE']; ?></p>
                    
                    <div>
                        <p class="font-22 bold"><?= $lang['CONTACTS_PAGE']['TELEPHONE']; ?>:</p>
                        <h5 class="font-16"><a href="tel:<?= $lang['GLOBAL']['PHONE']; ?>"><?= $lang['GLOBAL']['PHONE']; ?></a></h5>
                    </div>
                    <div>
                        <p class="font-22 bold"><?= $lang['CONTACTS_PAGE']['FOR_CLIENTS']; ?>:</p>
                        <h5 class="font-16"><a href="mailto:<?= $lang['GLOBAL']['EMAIL_INFO']; ?>"><?= $lang['GLOBAL']['EMAIL_INFO']; ?></a></h5>
                    </div>
                    <div>
                        <p class="font-22 bold"><?= $lang['CONTACTS_PAGE']['FOR_CANDIDATES']; ?>:</p>
                        <h5 class="font-16">
                            <a href="<?= $lang['GLOBAL']['HH']; ?>" target="_blank">hh.kz</a> / 
                            <a href="mailto:<?= $lang['GLOBAL']['EMAIL_HR']; ?>"><?= $lang['GLOBAL']['EMAIL_HR']; ?></a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="l-spacer"></div>

            <div class="row">
                <div class="col s12 m12 l12">
                    <h2 class="bold"><?= $lang['CONTACTS_PAGE']['WRITE_US']; ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l5">
                    <p class="light font-16"><?= $lang['CONTACTS_PAGE']['WRITE_US_TAGLINE']; ?></p>
                    <div class="s-spacer"></div>
                    <div class="g-recaptcha" data-sitekey="6Lf4spYUAAAAAFJH8fN4yzdZ__gBE7CRIDgCr8wV"></div>
                    <div class="s-spacer"></div>
                    <p id="err_msg" class="red-text"></p>
                    <div class="s-spacer"></div>
                    <a class="btn z-depth-0 custom-green-btn" href="javascript:" id="send_msg_btn">
                        <?= $lang['CONTACTS_PAGE']['SEND']; ?>
                    </a>
                </div>

                <div class="col s12 m6 l6 offset-l1">
                    <div class="input-field">
                        <input id="message-name" type="text">
                        <label for="message-name"><?= $lang['CONTACTS_PAGE']['MESSAGE_NAME']; ?></label>
                    </div>
                    <div class="input-field">
                        <input id="message-phone" type="text">
                        <label for="message-phone"><?= $lang['CONTACTS_PAGE']['MESSAGE_PHONE']; ?></label>
                    </div>
                    <div class="input-field">
                        <input id="message-company" type="text">
                        <label for="message-company"><?= $lang['CONTACTS_PAGE']['MESSAGE_COMPANY']; ?></label>
                    </div>
                    <div class="input-field">
                        <input id="message-email" type="email">
                        <label for="message-email"><?= $lang['CONTACTS_PAGE']['MESSAGE_EMAIL']; ?></label>
                    </div>
                    <div class="input-field">
                        <textarea id="message-text" class="materialize-textarea"></textarea>
                        <label for="message-text"><?= $lang['CONTACTS_PAGE']['MESSAGE_TEXT']; ?></label>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="m-spacer"></div>

            <div class="row">
                <div class="col s12 m12 l12 center">
                    <p class="bold font-22"><?= $lang['CONTACTS_PAGE']['SHARE']; ?></p>
                    <div class="sharethis-inline-share-buttons"></div>
                </div>
            </div>

            <div class="l-spacer"></div>
        </div>


        <?php include_once './shared/footer.php'; ?>


        <script>
            $(function () {
                var form_inputs = $('#message-name, #message-phone, #message-email, #message-text, #message-company');
                var form_err = $("#err_msg");
                var send_msg_btn = $("#send_msg_btn");

                // get translations
                var _FILL_FORM_REQUIERED_MESSAGE_ = '<?= $lang["CONTACTS_PAGE"]["FILL_FORM_REQUIERED"]; ?>';
                var _WRONG_EMAIL_MESSAGE_ = '<?= $lang["CONTACTS_PAGE"]["WRONG_EMAIL"]; ?>';
                var _APPROVE_RECAPTCHA_MESSAGE_ = '<?= $lang["CONTACTS_PAGE"]["APPROVE_RECAPTCHA"]; ?>';
                var _SUCCESS_SENT_MESSAGE_ = '<?= $lang["CONTACTS_PAGE"]["SUCCESS_SENT"]; ?>';
                var _ERROR_SENT_MESSAGE_ = '<?= $lang["CONTACTS_PAGE"]["ERROR_SENT"]; ?>';
                var _SEND_MESSAGE_ = '<?= $lang["CONTACTS_PAGE"]["SEND"]; ?>';
                var _PLEASE_WAIT_MESSAGE_ = '<?= $lang["CONTACTS_PAGE"]["PLEASE_WAIT"]; ?>';

                $("#send_msg_btn").click(function () {
                    var name = $("#message-name");
                    var phone = $("#message-phone");
                    var email = $("#message-email");
                    var company = $("#message-company");
                    var text = $("#message-text");
                    var recaptcha_response = $("#g-recaptcha-response").val();

                    var result = validate_mail(name, phone, email, company, text, recaptcha_response);
                    if (result !== undefined) {
                        send_mail(name, phone, email, company, text, recaptcha_response);
                    }
                });

                function validate_mail(name, phone, email, company, text, recaptcha_response) {
                    var errmsgcnt = 0;
                    var err_css = {"background-color": "#FCE5E5", "border-color": "red"};

                    if (name.val().trim().length === 0) {
                        name.css(err_css);
                        errmsgcnt++;
                    }
                    if (phone.val().trim().length === 0) {
                        phone.css(err_css);
                        errmsgcnt++;
                    }
                    if (email.val().trim().length === 0) {
                        email.css(err_css);
                        errmsgcnt++;
                    }
                    if (company.val().trim().length === 0) {
                        company.css(err_css);
                        errmsgcnt++;
                    }
                    if (text.val().trim().length === 0) {
                        text.css(err_css);
                        errmsgcnt++;
                    }

                    if (errmsgcnt > 0) {
                        show_message(_FILL_FORM_REQUIERED_MESSAGE_);
                    } else if (!isEmail(email.val())) {
                        show_message(_WRONG_EMAIL_MESSAGE_);
                    } else if (recaptcha_response.length === 0) {
                        show_message(_APPROVE_RECAPTCHA_MESSAGE_);
                    } else {
                        return 1;
                    }
                }

                function send_mail(name, phone, email, company, text, recaptcha_response) {
                    $.ajax({
                        type: "POST",
                        url: "../php/sendmail.php",
                        data: {
                            name: name.val(),
                            phone: phone.val(),
                            email: email.val(),
                            company: company.val(),
                            message: text.val(),
                            captchaResponse: recaptcha_response
                        },
                        beforeSend: function (xhr) {
                            disable_form();
                        },
                        success: function (data) {
                            if (data == 1) {
                                disable_form();
                                show_message(_SUCCESS_SENT_MESSAGE_);
                                send_msg_btn.hide();
                            } else if (data == 2) {
                                enable_form();
                                show_message(_ERROR_SENT_MESSAGE_);
                            }
                        },
                        error: function (xhr, status, error) {
                            enable_form();
                            var err = error;
                            show_message(err);
                        }
                    });
                }

                function disable_form() {
                    form_inputs.prop('disabled', true);
                    send_msg_btn.prop('disabled', true);
                    send_msg_btn.html(_PLEASE_WAIT_MESSAGE_);
                }
                function enable_form() {
                    form_inputs.prop('disabled', false);
                    send_msg_btn.prop('disabled', false);
                    send_msg_btn.html(_SEND_MESSAGE_);
                }
                function show_message(msg) {
                    form_err.html(msg).show();
                }
                form_inputs.focus(function () {
                    $(this).css({"background-color": "#FFFFFF", "border-color": "#AEAEAE"});
                });
                form_inputs.keypress(function () {
                    form_err.hide();
                });
                function isEmail(email) {
                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    return regex.test(email);
                }
            });
        </script>
    </body>
</html>