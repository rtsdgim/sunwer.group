<div class="navbar-fixed">
    <nav class="z-depth-1 white" role="navigation">
        <div class="nav-wrapper" style="overflow:hidden;">
            <a href="#" data-activates="nav-mobile" class="button-collapse">
                <i class="material-icons black-text">menu</i>
            </a>    
            <div style="display:flex;">
                <ul>
                    <li>
                        <a href="./main.php" class="item-l">
                            <div class="logo">
                                <div class="dots">
                                    <div class="dot-1 animated bounceInLeft">&#9679;</div>
                                    <div class="dot-2 animated fadeInLeft">&#9679;</div>
                                </div>
                                <div class="name"><?= $lang['GLOBAL']['COMPANY_NAME']; ?></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="fill-remaining-space"></div>
                <ul class="hide-on-med-and-down">
                    <li><a href="./about.php" class="item-c"><?= $lang['NAVBAR']['ABOUT']; ?></a></li>
                    <li><a href="./development.php" class="item-c"><?= $lang['NAVBAR']['SERVICES']; ?></a></li>
                    <li><a href="https://alpha.sunwer.group/" class="item-c" target="_blank"><?= $lang['NAVBAR']['SCHOOL']; ?></a></li>
                    <li><a href="./blog.php" class="item-c"><?= $lang['NAVBAR']['BLOG']; ?></a></li>
                    <li><a href="./vacancy.php" class="item-c"><?= $lang['NAVBAR']['VACANCY']; ?></a></li>
                </ul>
                <div class="fill-remaining-space"></div>
                <ul class="hide-on-small-and-down">
                    <li>
                        <a class="btn white-text z-depth-0 item-r custom-green-btn" href="./contacts.php">
                            <?= $lang['NAVBAR']['CONTACTS']; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<ul id="nav-mobile" class="side-nav">
    <div style="padding:32px;">
    <div class="logo">
        <div class="dots">
            <div class="dot-1">&#9679;</div>
            <div class="dot-2">&#9679;</div>
        </div>
        <div class="name"><?= $lang['GLOBAL']['COMPANY_NAME']; ?></div>
        <div class="slogan"><?= $lang['GLOBAL']['COMPANY_SLOGAN']; ?></div>
    </div>
    </div>
    <li><a href="./main.php"><?= $lang['NAVBAR']['MAIN']; ?></a></li>
    <li><a href="./about.php"><?= $lang['NAVBAR']['ABOUT']; ?></a></li>
    <li><a href="./development.php"><?= $lang['NAVBAR']['SERVICES']; ?></a></li>
    <li><a href="https://alpha.sunwer.group/" target="_blank"><?= $lang['NAVBAR']['SCHOOL']; ?></a></li>
    <li><a href="./blog.php"><?= $lang['NAVBAR']['BLOG']; ?></a></li>
    <li><a href="./vacancy.php"><?= $lang['NAVBAR']['VACANCY']; ?></a></li>
    <li><a href="./contacts.php"><?= $lang['NAVBAR']['CONTACTS']; ?></a></li>
</ul>

<script>
    $(function () {
        $('.button-collapse').sideNav();

        /**
            Hide Header on scroll down
         */
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('nav').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 200);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add translateY.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('nav').css({transform: "translateY(-77px)"});
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('nav').css({transform: "translateY(0)"});
                }
            }
            
            lastScrollTop = st;
        }
    });
</script>