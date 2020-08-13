<div class="footer-group">
    <div class="footer-cell">


        <div class="contain-footer-block" id="footerContainer" ng-hide="!footerMovable &amp;&amp; casinoGameOpened > 0" ng-class="{'active': footerOpen &amp;&amp; !env.sliderContent, 'footer-fixed': footerMovable}" ng-include="::'templates/footer.html'|fixPath" ng-if="$location.path() !='/popup/'">

            <div class="float-left width-100" ng-if="!conf.integrationMode &amp;&amp; !conf.footer.disable &amp;&amp; $location.path() !='/popup/' &amp;&amp; $location.path().indexOf('/widget/') === -1">
                <div class="guide" ng-controller="footerCtrl">
                    <div class="footer-j">

                        <div class="footer-section left" ng-include="::'templates/footer/helppages.html'|fixPath">

                            <div class="footer-nav-b" ng-controller="cmsPagesCtrl" ng-init="loadHelpPages();" ng-if="!conf.footer.disable">

                                <ul ng-repeat="topLevelPage in navigation">

                                    <li class="top-level-page" ng-if="topLevelPage.children.length"><a>ABOUT</a></li>



                                    <li ng-repeat="childPage in topLevelPage.children">
                                        <a ng-show="childPage.custom_fields.link[0] == null" ng-if="!childPage.custom_fields.authorized[0] || (env.authorized &amp;&amp; childPage.custom_fields.authorized[0])" ng-click="scrollToTop(); openHelpPage(childPage.id, 'footer', topLevelPage, childPage); $event.stopPropagation()">General Terms and Conditions</a>
                                        <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] != 1" ng-click="$root.ignorePathValidation = true" target="_self" class="ng-hide">General Terms and Conditions</a> 
                                        <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] == 1" ng-click="broadcast('window.openPopup', {url:childPage.custom_fields.link[0], title: '', params: 'toolbar=no,scrollbars=no,resizable=no,width=900,height=700'}); $event.stopPropagation()" class="ng-hide">General Terms and Conditions</a>
                                    </li>

                                    <li ng-repeat="childPage in topLevelPage.children">
                                        <a ng-show="childPage.custom_fields.link[0] == null" ng-if="!childPage.custom_fields.authorized[0] || (env.authorized &amp;&amp; childPage.custom_fields.authorized[0])" ng-click="scrollToTop(); openHelpPage(childPage.id, 'footer', topLevelPage, childPage); $event.stopPropagation()">Responsible Gaming</a>
                                        <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] != 1" ng-click="$root.ignorePathValidation = true" target="_self" class="ng-hide">Responsible Gaming</a> <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] == 1" ng-click="broadcast('window.openPopup', {url:childPage.custom_fields.link[0], title: '', params: 'toolbar=no,scrollbars=no,resizable=no,width=900,height=700'}); $event.stopPropagation()" class="ng-hide">Responsible Gaming</a></li>

                                    <li ng-repeat="childPage in topLevelPage.children">
                                        <a ng-show="childPage.custom_fields.link[0] == null" ng-if="!childPage.custom_fields.authorized[0] || (env.authorized &amp;&amp; childPage.custom_fields.authorized[0])" ng-click="scrollToTop(); openHelpPage(childPage.id, 'footer', topLevelPage, childPage); $event.stopPropagation()">Privacy Policy</a>
                                        <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] != 1" ng-click="$root.ignorePathValidation = true" target="_self" class="ng-hide">Privacy Policy</a> <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] == 1" ng-click="broadcast('window.openPopup', {url:childPage.custom_fields.link[0], title: '', params: 'toolbar=no,scrollbars=no,resizable=no,width=900,height=700'}); $event.stopPropagation()" class="ng-hide">Privacy Policy</a></li>

                                    <li ng-repeat="childPage in topLevelPage.children">
                                        <a ng-show="childPage.custom_fields.link[0] == null" ng-if="!childPage.custom_fields.authorized[0] || (env.authorized &amp;&amp; childPage.custom_fields.authorized[0])" ng-click="scrollToTop(); openHelpPage(childPage.id, 'footer', topLevelPage, childPage); $event.stopPropagation()">About Project and Team</a>
                                        <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] != 1" ng-click="$root.ignorePathValidation = true" target="_blank" class="ng-hide">About Project and Team</a> <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] == 1" ng-click="broadcast('window.openPopup', {url:childPage.custom_fields.link[0], title: '', params: 'toolbar=no,scrollbars=no,resizable=no,width=900,height=700'}); $event.stopPropagation()" class="ng-hide">About Project and Team</a></li>

                                </ul>

                                <ul ng-repeat="topLevelPage in navigation">

                                    <li class="top-level-page" ng-if="topLevelPage.children.length"><a>HELP</a></li>



                                    <li ng-repeat="childPage in topLevelPage.children">
                                        <a ng-show="childPage.custom_fields.link[0] == null" ng-if="!childPage.custom_fields.authorized[0] || (env.authorized &amp;&amp; childPage.custom_fields.authorized[0])" ng-click="scrollToTop(); openHelpPage(childPage.id, 'footer', topLevelPage, childPage); $event.stopPropagation()">Sport Betting</a>
                                        <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] != 1" ng-click="$root.ignorePathValidation = true" target="_self" class="ng-hide">Sport Betting</a> <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] == 1" ng-click="broadcast('window.openPopup', {url:childPage.custom_fields.link[0], title: '', params: 'toolbar=no,scrollbars=no,resizable=no,width=900,height=700'}); $event.stopPropagation()" class="ng-hide">Sport Betting</a></li>

                                    <li ng-repeat="childPage in topLevelPage.children">
                                        <a ng-show="childPage.custom_fields.link[0] == null" ng-if="!childPage.custom_fields.authorized[0] || (env.authorized &amp;&amp; childPage.custom_fields.authorized[0])" ng-click="scrollToTop(); openHelpPage(childPage.id, 'footer', topLevelPage, childPage); $event.stopPropagation()">FAQs</a>
                                        <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] != 1" ng-click="$root.ignorePathValidation = true" target="_self" class="ng-hide">FAQs</a> <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] == 1" ng-click="broadcast('window.openPopup', {url:childPage.custom_fields.link[0], title: '', params: 'toolbar=no,scrollbars=no,resizable=no,width=900,height=700'}); $event.stopPropagation()" class="ng-hide">FAQs</a></li>

                                    <li ng-repeat="childPage in topLevelPage.children">
                                        <a ng-show="childPage.custom_fields.link[0] == null" ng-if="!childPage.custom_fields.authorized[0] || (env.authorized &amp;&amp; childPage.custom_fields.authorized[0])" ng-click="scrollToTop(); openHelpPage(childPage.id, 'footer', topLevelPage, childPage); $event.stopPropagation()">Casino</a>
                                        <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] != 1" ng-click="$root.ignorePathValidation = true" target="_self" class="ng-hide">Casino</a> <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] == 1" ng-click="broadcast('window.openPopup', {url:childPage.custom_fields.link[0], title: '', params: 'toolbar=no,scrollbars=no,resizable=no,width=900,height=700'}); $event.stopPropagation()" class="ng-hide">Casino</a></li>

                                    <li ng-repeat="childPage in topLevelPage.children">
                                        <a ng-show="childPage.custom_fields.link[0] == null" ng-if="!childPage.custom_fields.authorized[0] || (env.authorized &amp;&amp; childPage.custom_fields.authorized[0])" ng-click="scrollToTop(); openHelpPage(childPage.id, 'footer', topLevelPage, childPage); $event.stopPropagation()">Poker</a>
                                        <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] != 1" ng-click="$root.ignorePathValidation = true" target="_self" class="ng-hide">Poker</a> <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] == 1" ng-click="broadcast('window.openPopup', {url:childPage.custom_fields.link[0], title: '', params: 'toolbar=no,scrollbars=no,resizable=no,width=900,height=700'}); $event.stopPropagation()" class="ng-hide">Poker</a></li>

                                </ul>

                                <ul ng-repeat="topLevelPage in navigation">

                                    <li class="top-level-page" ng-if="topLevelPage.children.length"><a>REGULATIONS</a></li>



                                    <li ng-repeat="childPage in topLevelPage.children">
                                        <a ng-show="childPage.custom_fields.link[0] == null" ng-if="!childPage.custom_fields.authorized[0] || (env.authorized &amp;&amp; childPage.custom_fields.authorized[0])" ng-click="scrollToTop(); openHelpPage(childPage.id, 'footer', topLevelPage, childPage); $event.stopPropagation()">Support</a>
                                        <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] != 1" ng-click="$root.ignorePathValidation = true" target="_self" class="ng-hide">Support</a> <a ng-show="childPage.custom_fields.link[0] != null &amp;&amp; childPage.custom_fields.new_popup[0] == 1" ng-click="broadcast('window.openPopup', {url:childPage.custom_fields.link[0], title: '', params: 'toolbar=no,scrollbars=no,resizable=no,width=900,height=700'}); $event.stopPropagation()" class="ng-hide">Support</a></li>

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
                                    <a target="_blank" class="ng-hide odnoklassniki"></a>
                                    <a target="_blank" class="ng-hide pinterest"></a>
                                    <a target="_blank" class="ng-hide line"></a>
                                    <a target="_blank" class="ng-hide qq"></a>
                                    <a target="_blank" class="ng-hide wechat"></a>
                                    <a target="_blank" class="ng-hide linkedIn"></a>

                                </div>

                            
                                <div class="copyright-j">
                                    <div>© <span>2014 - </span>2020 <a href="#/">alivecasino.io</a> 
                                    <a href="#/" class="ng-hide"></a></div>
                                </div>

                            
                                <div class="old-version-link-j"><a href="?lang=eng" class="ng-hide">Mobile version</a></div>
                           
                            <div class="back-block-j">
                                <div class="age-restriction-j ng-hide" ng-show="conf.footer.ageRestriction">false+</div>
                                <button>Feedback</button>

                                <button ng-if="conf.footer.enableToTopButton" class="" ng-click="scrollToTop(true)" class-on-scroll=",back-to-top-hide" trans="">back to top</button>

                            </div>

                        </div>
                    </div>

                    <div class="extended-license-footer">
                        <!--<div class="gamble-logos-j ng-hide">
                            <div>
                                <div>
                                    <span>
                                        <a target="_blank" href="http://android.betcoapps.com/sportsbook/sportsbook-alive.apk">
                                            <img src="https://cmsbetconstruct.com/content/images/cbbf3fea9e2ce630dae8458b86d18924_989_media.png" width="" height="52px">
                                        </a>
                                    </span>
                                </div>

                                <div>
                                    <span>
                                        <a target="_blank" href="http://android.betcoapps.com/casino/casino-alive.apk">
                                            <img src="https://cmsbetconstruct.com/content/images/f489b2169c7486f6381256389e2ecec6_989_media.png" width="" height="52px">
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>-->
                        <ul>
                            <li class="gamble-logos-j">
                                <ul>
                                    <li>
                                        <span>
                                            <a target="_blank" href="http://android.betcoapps.com/sportsbook/sportsbook-alive.apk">
                                                <img src="https://cmsbetconstruct.com/content/images/cbbf3fea9e2ce630dae8458b86d18924_989_media.png" width="" height="52px">
                                            </a>
                                        </span>
                                    </li>

                                    <li>
                                        <span>
                                            <a target="_blank" href="http://android.betcoapps.com/casino/casino-alive.apk">
                                                <img src="https://cmsbetconstruct.com/content/images/f489b2169c7486f6381256389e2ecec6_989_media.png" width="" height="52px">
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

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="B2BinPay default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="B2BinPay paymentIcon ng-hide"></span> <img ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/1283.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/1283.png?2020-08-06 16:33:31"></li>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="CoinGate default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="CoinGate paymentIcon ng-hide"></span> <img ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/987.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/987.png?2020-08-06 16:33:31"></li>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="astropay default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="astropay paymentIcon ng-hide"></span> <img ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/5.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/5.png?2020-08-06 16:33:31"></li>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="AstroPayDirect default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="AstroPayDirect paymentIcon ng-hide"></span> <img ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/58.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/58.png?2020-08-06 16:33:31"></li>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="ToditoCashNew default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="ToditoCashNew paymentIcon ng-hide"></span> <img ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/2901.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/2901.png?2020-08-06 16:33:31"></li>

                                    <li ng-repeat="payment in paymentSystemNames track by $index" class="AstroPayMobile default-cursor" ng-click="openDepositWithPayment($event, payment.name)" ng-class="{'default-cursor': !conf.footerPaymentsClickable}"><span ng-hide="payment.image" class="AstroPayMobile paymentIcon ng-hide"></span> <img ng-src="https://cmsbetconstruct.com/content/images/payments/custom/989/401.png?2020-08-06 16:33:31" class="paymentImage" ng-show="payment.image" src="https://cmsbetconstruct.com/content/images/payments/custom/989/401.png?2020-08-06 16:33:31"></li>

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


<script src="/assets/jQuery/jquery-3.2.1.min.js"></script>
<script src="/assets/js/publicAssets.js"></script>
<script src="/assets/js/public.js"></script>


<link rel="stylesheet" href="/assets/frontend-addon/spring-builder-public/assets/vendor.css?v=1596804054">
<link rel="stylesheet" href="/assets/frontend-addon/spring-builder-public/assets/spring-builder-public.css?v=1596804054">
<link rel="stylesheet" href="/assets/frontend-addon/spring-builder-public/assets/spring-builder-public.css?v=1596804054">
<script src="/assets/frontend-addon/spring-builder-public/assets/vendor.js?v=1596804054"></script>
<script src="/assets/frontend-addon/spring-builder-public/assets/spring-builder-public.js?v=1596804054"></script>
<script src="/assets/js/lottie.min.js"></script>

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