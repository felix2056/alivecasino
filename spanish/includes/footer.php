<div id="hideonmobile" class="footer-group">
    <div class="footer-cell">
        <div class="contain-footer-block" id="footerContainer" ng-hide="!footerMovable &amp;&amp; casinoGameOpened > 0" ng-class="{'active': footerOpen &amp;&amp; !env.sliderContent, 'footer-fixed': footerMovable}" ng-include="::'templates/footer.html'|fixPath" ng-if="$location.path() !='/popup/'">

            <div class="float-left width-100" ng-if="!conf.integrationMode &amp;&amp; !conf.footer.disable &amp;&amp; $location.path() !='/popup/' &amp;&amp; $location.path().indexOf('/widget/') === -1">
                <div class="guide" ng-controller="footerCtrl">
                    <div class="footer-j">

                        <div class="footer-section left" ng-include="::'templates/footer/helppages.html'|fixPath">

                            <div class="footer-nav-b" ng-controller="cmsPagesCtrl" ng-init="loadHelpPages();" ng-if="!conf.footer.disable">

                                <ul ng-repeat="topLevelPage in navigation">

                                    <li class="top-level-page"><a>ABOUT</a></li>

                                    <li>
                                        <a href="/spanish/terms-and-conditions.php">General Terms and Conditions</a>
                                    </li>

                                    <li>
                                        <a href="/spanish/responsible-gaming.php">Responsible Gaming</a>
                                    </li>

                                    <li>
                                        <a href="/spanish/privacy-policy.php">Privacy Policy</a>
                                    </li>

                                    <li>
                                        <a href="/spanish/about.php">About Project and Team</a>
                                    </li>
                                </ul>

                                <ul ng-repeat="topLevelPage in navigation">

                                    <li class="top-level-page"><a>HELP</a></li>

                                    <li>
                                        <a href="/spanish/sport-betting.php" target="_self">Sport Betting</a>
                                    </li>

                                    <li>
                                        <a href="/spanish/faq.php" target="_self">FAQs</a>

                                    <li>
                                        <a href="/spanish/casino.php" target="_self">Casino</a>
                                    </li>

                                    <li>
                                        <a href="/spanish/poker.php" target="_self">Poker</a>
                                    </li>
                                </ul>

                                <ul>

                                    <li class="top-level-page"><a>REGULATIONS</a></li>
                                    
                                    <li>
                                        <a href="/spanish/rng-certificate.php" target="_self">RNG Certificate</a>
                                    </li>

                                    <li>
                                        <a href="/spanish/support.php" target="_self">Support</a>
                                    </li>

                                    <li>
                                        <a href="/spanish/contact.php" target="_self">Contact</a>
                                    </li>

                                </ul>

                            </div>

                        </div>
                        <div class="footer-section right">


                            <div class="ref-social-icons-j">
                                <a target="_self" href="https://www.instagram.com/alivecasino/" class="instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a target="_self" href="https://twitter.com/alivecasino" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a target="_self" href="https://www.facebook.com/alivecasino/" class="facebook">
                                    <i class="fa fa-facebook-official"></i>
                                </a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCm99L7kLelfnNAN58hUgmGg/" class="youtube">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                                <a target="_blank" title="+44 7520640061" href="https://t.me/alivecasino" class="telegram">
                                    <i class="fa fa-telegram"></i>
                                </a>
                            </div>


                            <div class="copyright-j">
                                <div>© <span>2014 - </span>2020 <a href="#/">alivecasino.io</a>
                                    <a href="#/" class="ng-hide"></a></div>
                            </div>


                            <div class="old-version-link-j"><a href="?lang=eng" class="ng-hide">Mobile version</a></div>

                            <div class="back-block-j">
                                <div class="age-restriction-j ng-hide" ng-show="conf.footer.ageRestriction">false+</div>
                                <button>Feedback</button>

                                <button ng-if="conf.footer.enableToTopButton" class="" onclick="topFunction()" class-on-scroll=",back-to-top-hide" trans="">back to top</button>

                            </div>

                        </div>
                    </div>

                    <div class="extended-license-footer">
                        <div class="gamble-logos-j ng-hide">
                            <div>
                                <div>
                                    <span>
                                        <a target="_blank" href="http://android.betcoapps.com/sportsbook/sportsbook-alive.apk">
                                            <img style="width:auto;" src="https://cmsbetconstruct.com/content/images/cbbf3fea9e2ce630dae8458b86d18924_989_media.png" width="" height="52px">
                                        </a>
                                    </span>
                                </div>

                                <div>
                                    <span>
                                        <a target="_blank" href="http://android.betcoapps.com/casino/casino-alive.apk">
                                            <img style="width:auto;" src="https://cmsbetconstruct.com/content/images/f489b2169c7486f6381256389e2ecec6_989_media.png" width="" height="52px">
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li class="gamble-logos-j">
                                <ul>
                                    <li>
                                        <span>
                                            <a target="_blank" href="http://android.betcoapps.com/sportsbook/sportsbook-alive.apk">
                                                <img style="width:auto;" src="https://cmsbetconstruct.com/content/images/cbbf3fea9e2ce630dae8458b86d18924_989_media.png" width="" height="52px">
                                            </a>
                                        </span>
                                    </li>

                                    <li>
                                        <span>
                                            <a target="_blank" href="http://android.betcoapps.com/casino/casino-alive.apk">
                                                <img style="width:auto;" src="https://cmsbetconstruct.com/content/images/f489b2169c7486f6381256389e2ecec6_989_media.png" width="" height="52px">
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>


                <ng-include src="::'templates/footer/paymentmethods.html'|fixPath">
                    <div class="paymen-icons-list" ng-controller="footerCtrl" ng-show="(paymentSystemNames.length &amp;&amp; conf.footer.showPaymentSystems || conf.footer.imageInsteadPayments) &amp;&amp; $location.path() !='/popup/'">
                        <div class="guide">
                            <div class="footer-custom-sprite ng-hide" ng-show="conf.footer.imageInsteadPayments"><img></div>
                            <div class="payment-content-block" ng-hide="conf.footer.imageInsteadPayments">
                                <ul>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="B2BinPay default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="B2BinPay paymentIcon ng-hide"></span> <img style="width:auto;" ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/1283.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/1283.png?2020-08-06 16:33:31"></li>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="CoinGate default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="CoinGate paymentIcon ng-hide"></span> <img style="width:auto;" ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/987.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/987.png?2020-08-06 16:33:31"></li>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="astropay default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="astropay paymentIcon ng-hide"></span> <img style="width:auto;" ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/5.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/5.png?2020-08-06 16:33:31"></li>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="AstroPayDirect default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="AstroPayDirect paymentIcon ng-hide"></span> <img style="width:auto;" ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/58.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/58.png?2020-08-06 16:33:31"></li>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="ToditoCashNew default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="ToditoCashNew paymentIcon ng-hide"></span> <img style="width:auto;" ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/2901.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/2901.png?2020-08-06 16:33:31"></li>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="AstroPayMobile default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="AstroPayMobile paymentIcon ng-hide"></span> <img style="width:auto;" ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/401.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/401.png?2020-08-06 16:33:31"></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </ng-include>

                <ng-include src="::'templates/footer/chatwidget.html'|fixPath">



                </ng-include>
            </div>

        </div>

        <div class="footer-button theme- ng-hide" ng-click="footerOpen=!footerOpen" ng-class="{'footer-button-open': footerOpen}" ng-hide="conf.footer.disable || !footerMovable || env.sliderContent"></div>
    </div>
</div>

<div id="hideondesktop" class="footer-m-parent">
    <div class="back-to-top-container" onclick="topFunction()">
        <div class="back-to-top-button">Back to top</div>
    </div>
    <div class="logo-wrapper-m">
        <a href="/">
            <img style="width:auto;" src="/assets/images/AliveCasinoLight2.png" style="max-width: 200px;">
        </a>
    </div>
    <div class="import-view-container">
        <div class="language-container-m">
            <ul>
                <li>
                    <p>Language</p>
                </li>
                <li>
                    <div class="select-contain-m"><img style="width:auto;" alt="Flag of United Kingdom" class="flag-view-m" src="https://cmsbetconstruct.com/content/mobile/countriesFlags/unitedkingdom.png"><select>
                            <option value="eng">English</option>
                            <option value="por">Português</option>
                        </select></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="import-view-container">
        <div class="language-container-m">
            <ul>
                <li>
                    <p>Odds Format</p>
                </li>
                <li>
                    <div class="select-contain-m"><select>
                            <option value="decimal">decimal</option>
                            <option value="fractional">fractional</option>
                            <option value="american">american</option>
                            <option value="hongkong">hongkong</option>
                            <option value="malay">malay</option>
                            <option value="indo">indo</option>
                        </select></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="info-menu-contain-m">
        <ul class="info-menu-contain-inline">
            <li>
                <a href="/spanish/terms-and-conditions.php">General Terms and Conditions</a>
                <a href="/spanish/responsible-gaming.php">Responsible Gaming</a>
                <a href="/spanish/privacy-policy">Privacy Policy</a>
                <a href="/spanish/terms-and-conditions.php">Support</a>
                <a href="/spanish/sport-betting.php">Sport Betting</a>
                <a href="/spanish/faq.php">FAQs</a>
                <a href="/spanish/casino.php">Casino</a>
                <a href="/spanish/poker.php">Poker</a>
                <a href="/spanish/terms-and-conditions.php">REGULATIONS</a>
            </li>
            <li class="app-link"></li>
        </ul>
    </div>
    <div>
        <div id="livechat"></div>
    </div>
</div>


<script src="/assets/jQuery/jquery-3.2.1.min.js"></script>
<script src="/assets/js/publicAssets.js"></script>
<script src="/assets/js/public.js"></script>


<link rel="stylesheet" href="/assets/frontend-addon/spring-builder-public/assets/vendor.css?v=1596804054">
<link rel="stylesheet" href="/assets/frontend-addon/spring-builder-public/assets/spring-builder-public.css?v=1596804054">
<link rel="stylesheet" href="/assets/frontend-addon/spring-builder-public/assets/spring-builder-public.css?v=1596804054">
<script src="/assets/frontend-addon/spring-builder-public/assets/vendor.js?v=1596804054"></script>
<script src="/assets/frontend-addon/spring-builder-public/assets/spring-builder-public.js?v=1596804054"></script>
<script src="/assets/js/lottie.min.js"></script>

<script>
    function topFunction() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    }
</script>
<style>
    .account-container .body .account-info[data-section="messages"] .new-message-link {
        display: none !important;
    }

    .account-container .body .tab-item.section-tab[data-tab="sent-messages"],
    .account-container .body .account-info[data-section="messages"] .new-message-link,
    .account-container [data-tab="sent-messages"],
    .account-container [data-tab="new-message"] {
        display: none !important;
    }

    .styled-dropdown.my-bets select option[value="10"] {
        display: none !important;
    }

    .ct-page-intro-info-container .countdown-container {
        display: none;
    }
</style>