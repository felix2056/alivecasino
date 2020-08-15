<div id="hideonmobile" class="contain-header tpl-container block-size-visible-b subheader-enabled">
    <div id="header" class="block-size-visible-b" ng-include="::'templates/mainheader.html'|fixPath" ng-if="$location.path() !='/popup/'">
        <div class="block-size-visible-b alivecasino.io    headerVersion_2 " ng-controller="mainHeaderCtrl" ng-init="mainHeaderInit()">
            <div class-on-scroll="show-fix,show-normal" not-change="" class="conteiner new0" ng-class="{'show-game': casinoGameOpened}" id="main-header-container">

                <ng-include class="float-width" src="::'templates/header/version_' + conf.header.version + '/main.html'|fixPath">

                    <div ng-controller="mainHeaderVersion2Controller" class="guide header-wrapper" ng-if="!conf.integrationMode &amp;&amp; $location.path().indexOf('/widget/') === -1">
                        <div class="header-container-b">

                            <ul class="responsive-header-contain-j">
                                <li class="responsive-header-item-j">
                                    <div class="logo-nav-wrapper">
                                        <a ng-href="#/" ng-click="closeSlider();" href="#/">
                                            <img src="/assets/images/_logo.png" style="height: 54px;max-width: 500px !important;width: auto !important;">

                                            <img ng-src="_logo2.png?v=46e7ec2569f39bd0d06a0422899f72102daee828" ng-style="{'width' : conf.logo.widthFix ? (conf.logo.widthFix + 'px') : '', 'height' : conf.logo.heightFix ? (conf.logo.heightFix + 'px') : ''}" src="_logo2.png?v=46e7ec2569f39bd0d06a0422899f72102daee828"></a></div>
                                </li>
                                <li class="responsive-header-item-j auto-width">
                                    <div class="header-top-row">
                                        <ul class="responsive-header-contain-j">

                                            <li ng-if="!$root.conf.header.hideTopMenu" class="responsive-header-item-j header-icon-menu"><label for="header-collapse" class="menu-visible-icon-b" trans="">Menu</label></li>

                                            <li class="responsive-header-item-j very-top-menu-wrapper-j auto-width">

                                                <div class="original" ng-include="::'templates/header/version_2/veryTopMenu.html'|fixPath">

                                                    <div class="simple-nav-j" ng-if="$root.conf.headerNavigation.nearLogo.length > 0">
                                                        <p></p>
                                                        <ul sub-menu-creator="veryTopMenu">


                                                            <li ng-repeat="item in $root.conf.headerNavigation.nearLogo track by $index" ng-click="$root.gaSend('send', 'event', 'top menu', item.label, {'label': item.label, 'navigate': item.href || item.help || item.sliderAuthorized});goToTop();$event.stopPropagation();">
                                                                <a ng-if="item.href || (item.broadcast &amp;&amp; !env.authorized)" target="_self" ng-href="#/promos/" ng-click="$root.topMenuDropDown=false;closeSlider();broadcast(item.broadcast)" href="#/promos/">Promotions</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>

                                                <div class="duplicate" ng-include="::'templates/header/version_2/veryTopMenu.html'|fixPath">

                                                    <div class="simple-nav-j" ng-if="$root.conf.headerNavigation.nearLogo.length > 0">
                                                        <p></p>
                                                        <ul sub-menu-creator="veryTopMenu">


                                                            <li ng-repeat="item in $root.conf.headerNavigation.nearLogo track by $index" ng-click="$root.gaSend('send', 'event', 'top menu', item.label, {'label': item.label, 'navigate': item.href || item.help || item.sliderAuthorized});goToTop();$event.stopPropagation();">
                                                                <a ng-if="item.href || (item.broadcast &amp;&amp; !env.authorized)" target="_self" ng-href="#/promos/" ng-click="$root.topMenuDropDown=false;closeSlider();broadcast(item.broadcast)" ng-bind="item.label|translate" ng-class="item.staticClass" href="#/promos/">Promotions</a>



                                                            </li>



                                                            <li ng-repeat="item in $root.conf.headerNavigation.nearLogo track by $index" ng-click="$root.gaSend('send', 'event', 'top menu', item.label, {'label': item.label, 'navigate': item.href || item.help || item.sliderAuthorized});goToTop();$event.stopPropagation();">



                                                            </li>


                                                        </ul>
                                                    </div>

                                                </div>
                                            </li>


                                            <li class="responsive-header-item-j ng-hide" ng-show="env.authorized &amp;&amp; conf.header.messageIcon.showInTopRow" ng-if="conf.header.messageIcon.enabled">
                                                <div class="separator-contain-nav" prevent-fast-click="" ng-click="toggleSliderTab('messages')">
                                                    <div class="settings-icon-contain messages-icon-b"><i class="favorite-count-view ng-hide" ng-bind="profile.unread_count" ng-show="profile.unread_count"></i></div>
                                                </div>
                                            </li>


                                            <li class="responsive-header-item-j" ng-show="!env.authorized">
                                                <div class="signin-reg-buttons-b" id="signin-reg-buttons">
                                                    <ul ng-hide="conf.header.disableRegistrationAndLogin">

                                                        <li ng-if="conf.registration.enableSignIn"><button ng-class="{'active-s': env.sliderContent === 'login'}" ng-click="signin()" trans="">Sign in</button></li>


                                                        <li ng-if="conf.registration.enable"><button ng-click="register()" trans="">Register</button>

                                                            <ng-include src="::'templates/header/dynamicmessage.html'|fixPath">
                                                                <div class="dinamic-message">
                                                                    <div class="right-b"></div>
                                                                    <div class="centr-text-b">Join us now!<div class="bottom-arrow"></div>
                                                                    </div>
                                                                    <div class="left-b"></div>
                                                                </div>
                                                            </ng-include>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="responsive-header-item-j header-notifications-section">

                                                <ng-include class="settings-include-contain" src="::'templates/header/version_2/whatsNewNotifications.html'|fixPath">
                                                    <div ng-controller="whatsNewNotificationsCtrl">

                                                    </div>
                                                </ng-include>
                                            </li>
                                            <li class="responsive-header-item-j ng-hide" ng-show="env.authorized">

                                                <ng-include class="settings-include-contain" src="::'templates/header/version_2/profileMenu.html'|fixPath">
                                                    <div class="separator-contain-nav user-nav-view-b " id="user-settings">
                                                        <div class="settings-icon-contain balance-box" ng-class="{'user-verified': profile.is_verified}" ng-click="toggleProfileMenu($event)" ng-mouseover="toggleProfileMenu($event, true)" ng-mouseleave="toggleProfileMenu($event, false)" hide-on-click="" state-flag-var="headerVersion2Icons.profileToggled"><b class="mybets-icon-box-b user-icon-view"></b> <i></i> <span class="count-info-box-b ng-hide" ng-bind="profile.unread_count" ng-show="profile.unread_count"></span></div>
                                                        <div class="nav-open-view-contain" ng-mouseover="toggleProfileMenu($event, true)" ng-mouseleave="toggleProfileMenu($event, false)">
                                                            <ul>
                                                                <li>
                                                                    <div class="user-info-box-b">
                                                                        <h3 ng-hide="conf.profileMenuHeaderFullName"></h3>
                                                                        <h4 ng-show="!env.hideUsername"></h4>
                                                                        <h5><span trans="">ID</span>: <span></span></h5>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="drop-nav-new-b">
                                                                        <div class="drop-items-contain-b icon-view-box">
                                                                            <ul>
                                                                                <li ng-click="toggleSliderTab('settings'); headerVersion2Icons.profileToggled = false; $event.stopPropagation()" prevent-fast-click="1.5" ng-class="{'active': env.sliderContent === 'settings'}"><i class="my-profile-icon-b"></i> <span trans="">My Profile</span></li>

                                                                                <li ng-if="conf.header.messageIcon.enabled" ng-show="!conf.header.messageIcon.showInTopRow" ng-class="{'active': env.sliderContent === 'messages'}" prevent-fast-click="1.5" ng-click="toggleSliderTab('messages'); headerVersion2Icons.profileToggled = false; $event.stopPropagation()"><i class="messages-icon-b"></i> <span trans="">Messages</span> <b ng-bind="profile.unread_count" ng-show="profile.unread_count" class="ng-hide"></b></li>

                                                                                <li ng-show="conf.enableBonuses" ng-click="toggleSliderTab('bonuses'); headerVersion2Icons.profileToggled = false; $event.stopPropagation()" prevent-fast-click="1.5" ng-class="{'active': env.sliderContent === 'bonuses'}" class="ng-hide"><i class="bonuses-icon-b"></i> <span trans="">Bonuses</span>
                                                                                    <b ng-if="calculatedConfigs.sportEnabled" ng-show="!env.hideBalance &amp;&amp; profile.bonus_balance" class="ng-hide"> </b>

                                                                                </li>
                                                                                <li ng-show="conf.promotionalBonuses.enable &amp;&amp; (!conf.hideBonusSectionIfNoBonus || (conf.hideBonusSectionIfNoBonus &amp;&amp; $root.allBonusesCount.sportsbook + $root.allBonusesCount.casino > 0))" ng-click="toggleSliderTab('promotionalBonuses'); headerVersion2Icons.profileToggled = false; $event.stopPropagation()" prevent-fast-click="1.5" ng-class="{'active': env.sliderContent === 'promotionalBonuses'}"><i class="bonuses-icon-b"></i> <span trans="">Promotional bonuses</span></li>
                                                                                <li ng-hide="env.hideLogOut" ng-click="logOut(); headerVersion2Icons.profileToggled = false; $event.stopPropagation()"><i class="logout-icon-b"></i> <span trans="">Log Out</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ng-include>
                                            </li>
                                            <li class="responsive-header-item-j ng-hide" ng-show="env.authorized">

                                                <ng-include class="settings-include-contain" src="::'templates/header/version_2/balance.html'|fixPath">
                                                    <div class="separator-contain-nav ">
                                                        <div class="settings-icon-contain balance-box" no-animate="" ng-class="{'bonus': profile.bonus_balance !== undefined &amp;&amp; profile.calculatedBonus !== 0}" ng-click="headerVersion2Icons.balanceIsToggled = !headerVersion2Icons.balanceIsToggled; $event.stopPropagation()" id="wallet" hide-on-click="" state-flag-var="headerVersion2Icons.balanceIsToggled"><b class="mybets-icon-box-b cms-jcon-Wallet ng-hide" ng-show="env.hideBalance"></b>
                                                            <ul ng-show="!env.hideBalance">
                                                                <li><span ng-show="$root.profile.casino_balance === null || !$root.currentPage.isInCasino" class="balance-view-off"> </span>
                                                                    <span></span></li>

                                                            </ul><i></i>
                                                        </div>
                                                        <div class="nav-open-view-contain">
                                                            <ul>
                                                                <li>
                                                                    <div class="drop-nav-new-b">
                                                                        <div class="drop-items-contain-b icon-view-box">
                                                                            <div class="switcher-t-view-b">
                                                                                <p trans="">Hide Balance</p>
                                                                                <div class="switcher-box-b" ng-click="setHideBalance(!env.hideBalance); $event.stopPropagation()" ng-class="{'on': env.hideBalance}">
                                                                                    <div class="sw-circle-b"></div>
                                                                                </div>
                                                                            </div>

                                                                            <ul>
                                                                                <li ng-click="selectBalanceMenuItem($event, 'cashier')" ng-show="(casinoEnabled || calculatedConfigs.pokerEnabled) &amp;&amp; conf.transferEnabled" ng-class="{'active': env.sliderContent === 'cashier'}" prevent-fast-click="1.5" class="ng-hide"><i class="cashier-icon-b"></i> <span trans="">Transfer</span></li>
                                                                                <li ng-click="selectBalanceMenuItem($event, 'myWallets')" ng-show="$root.conf.myWalletsEnabled" ng-class="{'active': env.sliderContent === 'myWallets'}" prevent-fast-click="1.5" class="ng-hide"><i class="cashier-icon-b"></i> <span trans="">My Wallets</span></li>
                                                                                <li ng-click="selectBalanceMenuItem($event, 'balanceHistory');$event.stopPropagation();" ng-class="{'active': env.sliderContent === 'balanceHistory'}" prevent-fast-click="1.5"><i class="history-icon-b"></i> <span>History</span></li>
                                                                                <li ng-click="selectBalanceMenuItem($event, 'casinoBalanceHistory')" ng-class="{'active': env.sliderContent === 'casinoBalanceHistory'}" ng-hide="conf.enableMixedView || !conf.enableCasinoBalanceHistory" prevent-fast-click="1.5" class="ng-hide"><i class="history-icon-b"></i> <span>History (casino)</span></li>
                                                                                <li ng-click="selectBalanceMenuItem($event, 'renew')" ng-class="{'active': env.sliderContent === 'renew'}" ng-hide="!conf.enableFreeRenew" prevent-fast-click="1.5" class="ng-hide"><i class="cms-jcon-Renew"></i> <span trans="">Renew</span></li>
                                                                                <li ng-click="selectBalanceMenuItem($event, 'deposit');$event.stopPropagation();" ng-class="{'active': env.sliderContent === 'deposit'}" ng-hide="conf.disableDepositPage" prevent-fast-click="1.5"><i class="deposit-icon-b"></i> <span trans="">Deposit</span></li>
                                                                                <li ng-click="selectBalanceMenuItem($event, 'withdraw');$event.stopPropagation();" ng-class="{'active': env.sliderContent === 'withdraw'}" ng-hide="conf.disableWithdrawPage" prevent-fast-click="1.5"><i class="withdraw-icon-b"></i> <span trans="">Withdraw</span></li>
                                                                                <li ng-click="selectBalanceMenuItem($event, 'buddytransfer')" ng-class="{'active': env.sliderContent === 'buddytransfer'}" ng-show="conf.buddyTransfer.enabled &amp;&amp; !conf.enableMixedView" prevent-fast-click="1.5" class="ng-hide"><i class="buddyTransfer-icon-b"></i> <span trans="">Buddy transfer</span></li>
                                                                                <li ng-click="selectBalanceMenuItem($event, 'loyaltyPoints')" ng-class="{'active': env.sliderContent === 'loyaltyPoints'}" ng-show="conf.enableLoyaltyPoints" prevent-fast-click="1.5" class="ng-hide"><i class="deposit-icon-b"></i> <span trans="">Loyalty Points</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ng-include>
                                            </li>
                                            <li class="responsive-header-item-j ng-hide" ng-show="env.authorized &amp;&amp; (conf.betHistoryEnabled &amp;&amp; $root.calculatedConfigs.sportEnabled)">
                                                <div class="separator-contain-nav" ng-click="myBetsToggle()" prevent-fast-click="" id="myBets">
                                                    <div class="settings-icon-contain my-bets-b"><b class="mybets-icon-box-b"></b> <span ng-hide="headerVersion2Icons.hideLablesIsToggled" trans="">My bets</span></div>
                                                </div>
                                            </li>


                                            <li class="responsive-header-item-j">
                                                <div class="separator-contain-nav">
                                                    <i class="settings-icon-contain favorite-icon-b fa fa-star" title="Favorites" trans="attr-only">
                                                    </i>
                                                </div>
                                            </li>

                                            <li class="responsive-header-item-j">
                                                <div id="faq-header" class="separator-contain-nav dont-collaped-b " hide-on-click="" state-flag-var="headerVersion2Icons.helpIsToggled" ng-click="headerIconClick();" ng-mouseover="headerIconClick(true);" ng-mouseleave="headerIconClick(false);">
                                                    <i class="settings-icon-contain help-icon-b fa fa-question-circle"></i>
                                                    <div class="nav-open-view-contain">
                                                        <ul>
                                                            <li>
                                                                <div class="drop-nav-new-b">
                                                                    <p><span trans="">Choose Help</span></p>
                                                                    <div class="drop-items-contain-b icon-view-box">
                                                                        <ul>

                                                                            <li ng-click="openFaq();$event.stopPropagation()" ng-if="conf.header.haveFaq &amp;&amp; conf.header.haveFaq==true"><i class="icon-faq-new-b"></i> <span trans="">FAQ</span></li>




                                                                            <li ng-show="!!isLiveAgent &amp;&amp; !conf.liveChat.disableFromHeader &amp;&amp; !conf.liveChat[env.lang].notLiveAgentIsLang" ng-click="startLiveAgent()" class="ng-hide"><i class="icon-livechat-new-b"></i> <span trans="">Live Chat</span></li>
                                                                            <li title="Live Agent" trans="attr-only" class="help-b ng-hide" ng-show="!!conf.liveChat.zopimInHeader" onclick="showZopimChat('tr');"><i class="icon-faq-new-b"></i> <span trans="">Need Help? Live Chat Support - 24/7" </span></li>






                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="responsive-header-item-j" ng-hide="conf.header.hideClock">
                                                <div class="separator-contain-nav no-timezone-v " hide-on-click="" state-flag-var="headerVersion2Icons.timezoneIsToggled">
                                                    <div class="settings-icon-contain clock-set-b" ng-click="headerVersion2Icons.timezoneIsToggled = !headerVersion2Icons.timezoneIsToggled" ng-class="{'format-12h': $root.env.timeFormat === $root.env.longTimeFormats.HALF}"><span class="time-view-w-bc"><b class="clock-time-v-bc" ng-bind="$root.env.clock">20:01:22</b>
                                                        </span></div>

                                                </div>
                                            </li>
                                            <li class="responsive-header-item-j" ng-show="(conf.availableLanguages|count) > 1">
                                                <div class="separator-contain-nav " hide-on-click="" state-flag-var="headerVersion2Icons.languageIsToggled">
                                                    <div id="clicknavlang" class="settings-icon-contain leng-b selected-eng">
                                                        <span>ES</span> 
                                                        <i class="fa fa-arrow-down"></i>
                                                    </div>
                                                    <div id="navlang" class="nav-open-view-contain">
                                                        <ul>
                                                            <li>
                                                                <div id="navlang" class="drop-nav-new-b">
                                                                    <p>
                                                                        <span>Change language</span>
                                                                    </p>
                                                                    <div class="drop-items-contain-b">
                                                                        <ul>
                                                                            <li id="naveng" class="eng"><span>English</span></li>
                                                                            <li id="navspa" class="spa active"><span>Español</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="responsive-header-item-j" ng-if="(conf.header.enableSettings.authorized &amp;&amp; env.authorized) || (conf.header.enableSettings.notAuthorized &amp;&amp; !env.authorized)">
                                                <ng-include class="settings-include-contain" src="::'templates/header/version_' + conf.header.version + '/settings.html'|fixPath" hide-on-click="" state-flag-var="headerVersion2Icons.settingsIsToggled">
                                                    <div id="default-settings" class="separator-contain-nav ">
                                                        <i class="settings-icon-contain settings-b fa fa-cog" ng-click="headerVersion2Icons.settingsIsToggled = !headerVersion2Icons.settingsIsToggled"></i>
                                                        <div class="nav-open-view-contain">
                                                            <ul>
                                                                <li ng-show="env.authorized &amp;&amp; conf.enableSettingHideLabels" class="ng-hide">
                                                                    <div class="switcher-t-view-b" ng-click="headerVersion2Icons.hideLablesIsToggled = !headerVersion2Icons.hideLablesIsToggled">
                                                                        <p trans="">Hide labels</p>
                                                                        <div class="switcher-box-b ">
                                                                            <div class="sw-circle-b"></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="drop-nav-new-b ">
                                                                        <p ng-click="headerVersion2Icons.oddsInIsToggled = !headerVersion2Icons.oddsInIsToggled"><span trans="">Odds </span> <i class="arrow-closed-open-b"></i></p>
                                                                        <div class="drop-items-contain-b">
                                                                            <ul>

                                                                                <li ng-repeat="oddFormat in ::conf.oddFormats track by oddFormat.name" ng-click="broadcast('setOddsFormat', oddFormat.format)" ng-class="{'active': env.oddFormat === oddFormat.format}" class="active">Decimal</li>

                                                                                <li ng-repeat="oddFormat in ::conf.oddFormats track by oddFormat.name" ng-click="broadcast('setOddsFormat', oddFormat.format)" ng-class="{'active': env.oddFormat === oddFormat.format}">Fractional</li>

                                                                                <li ng-repeat="oddFormat in ::conf.oddFormats track by oddFormat.name" ng-click="broadcast('setOddsFormat', oddFormat.format)" ng-class="{'active': env.oddFormat === oddFormat.format}">American</li>

                                                                                <li ng-repeat="oddFormat in ::conf.oddFormats track by oddFormat.name" ng-click="broadcast('setOddsFormat', oddFormat.format)" ng-class="{'active': env.oddFormat === oddFormat.format}">HongKong</li>

                                                                                <li ng-repeat="oddFormat in ::conf.oddFormats track by oddFormat.name" ng-click="broadcast('setOddsFormat', oddFormat.format)" ng-class="{'active': env.oddFormat === oddFormat.format}">Malay</li>

                                                                                <li ng-repeat="oddFormat in ::conf.oddFormats track by oddFormat.name" ng-click="broadcast('setOddsFormat', oddFormat.format)" ng-class="{'active': env.oddFormat === oddFormat.format}">Indo</li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li ng-show="$root.currentPage.isInSports">
                                                                    <div class="switcher-t-view-b" ng-click="setSound(env.sound); env.sound > 0 ? env.sound = 0 : env.sound = 0.75">
                                                                        <p trans="">Events sounds</p>
                                                                        <div class="switcher-box-b on">
                                                                            <div class="sw-circle-b"></div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li ng-show="conf.allowTimeFormatChange">
                                                                    <div class="drop-nav-new-b ">
                                                                        <p ng-click="headerVersion2Icons.timeFormatIsToggled = !headerVersion2Icons.timeFormatIsToggled"><span trans="">Time format</span> <i class="arrow-closed-open-b"></i></p>
                                                                        <div class="drop-items-contain-b time-format">
                                                                            <ul>
                                                                                <li ng-click="setTimeFormat(env.longTimeFormats.HALF)" ng-class="{'active': env.timeFormat === env.longTimeFormats.HALF}" trans="">12 H</li>
                                                                                <li ng-click="setTimeFormat(env.longTimeFormats.FULL)" ng-class="{'active': env.timeFormat === env.longTimeFormats.FULL}" trans="" class="active">24 H</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li ng-show="conf.enableSportsbookLayoutSwitcher">
                                                                    <div class="drop-nav-new-b ">
                                                                        <p ng-click="headerVersion2Icons.layoutSwitcherIsToggled = !headerVersion2Icons.layoutSwitcherIsToggled"><span trans="">Sportsbook layout:</span> <i class="arrow-closed-open-b"></i></p>
                                                                        <div class="drop-items-contain-b">
                                                                            <ul>

                                                                                <li ng-repeat="(key, value) in sportsbookAvailableViews track by $index" ng-click="switchSportsbookLayout(key)" ng-class="{'active': conf.sportsLayout === key}" ng-bind="key|capitalise|translate">Modern</li>

                                                                                <li ng-repeat="(key, value) in sportsbookAvailableViews track by $index" ng-click="switchSportsbookLayout(key)" ng-class="{'active': conf.sportsLayout === key}" ng-bind="key|capitalise|translate" class="active">Classic</li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ng-include>
                                            </li>

                                        </ul>
                                        <div class="feedback-button ng-hide" ng-show="!!conf.liveChat.zopimInFooter" onclick="showZopimChat('br');">
                                            <p trans="">Live Chat</p>
                                        </div>
                                        <div class="feedback-button ng-hide" ng-show="!!conf.liveChat.popupInFooter" onclick="startLiveChat()">
                                            <p trans="">Live Chat</p>
                                        </div>
                                        <div class="feedback-button ng-hide" ng-show="!!conf.liveChat.liveAgentInFooter &amp;&amp; (conf.liveChat[env.lang]=== undefined || conf.liveChat[env.lang].liveAgentInFooter)" onclick="startLiveAgent()">
                                            <p>Live Chat</p>
                                        </div>
                                    </div>
                                </li>
                            </ul><input type="checkbox" id="header-collapse">
                            <div class="header-small-view-hide" ng-class="{'vertical-nav-closed': $root.conf.customNavMenu &amp;&amp; !$root.leftMenuOpen}" ng-init="$root.conf.customNavMenu &amp;&amp; ($root.leftMenuOpen = true)"><i class="vertical-nav-arrow ng-hide" ng-show="$root.conf.customNavMenu" ng-click="$root.leftMenuOpen = !$root.leftMenuOpen;"></i>
                                <ul class="responsive-header-mainMenu-j">
                                    <li class="header-left-small-b-j ng-hide" ng-controller="cmsPagesCtrl" ng-init="loadBanners(getSlug('bannerSlugs.headerSmallBanner'));" ng-show="bannerObjects[getSlug('bannerSlugs.headerSmallBanner')] &amp;&amp; bannerObjects[getSlug('bannerSlugs.headerSmallBanner')][$root.env.authorized]">

                                    </li>
                                    <li ng-style="{'padding' : conf.logo.padding || ('0 ' + (conf.logo.height ? '0' : conf.logo.paddingMenu || logoWidth)  + 'px')}" style="padding: 0px;">


                                        <ng-include ng-if="!conf.header.hideTopMenu" class="include-menu-header-b" src="::'templates/header/version_2/topMenu.html'|fixPath">
                                            <div class="header-bottom-row">
                                                <div class="header-nav-contain" ng-show="!conf.rfid.loginWIthRFID || conf.rfid.loginWIthRFID &amp;&amp; env.authorized">
                                                    <ul ng-class="{'menu-dropdown': $root.topMenuDropDown, 'menu-dropdown-show': subMenuItemCount > 0}" sub-menu-creator="main">
                                                        <div class="top-menu-more" title="More" ng-click="$root.topMenuDropDown=!$root.topMenuDropDown;" hide-on-click="" state-flag-var="$root.topMenuDropDown" trans="attr-only">More</div>



                                                        <li ng-repeat="item in topMenu track by item.name" ng-if="item.showCondition &amp;&amp; !item.hidden" ng-class="{'active': item.classObject.active,
                          '': true,
                          'new-info-item': item.subDisplayName || item.specialCase === 'gamesSpecialText',
                          'new-info-item-sup': item.supDisplayName,
                          'nav-live': $root.conf.customNavMenu
                          }" class="active">

                                                            <div ng-if="!item.popup &amp;&amp; !item.broadcast" class="top-menu-sub-a-t"><a ng-href="#/sport/?type=1" ng-click="item.click()" data-content="new" ng-show="!item.specialCase &amp;&amp; !item.subDisplayName &amp;&amp; !item.supDisplayName" target="_self" route-reload="" reload="false" href="#/sport/?type=1"><span ng-bind="item.displayName">Live</span> </a>


                                                            </div>


                                                        </li>



                                                        <li ng-repeat="item in topMenu track by item.name" ng-if="item.showCondition &amp;&amp; !item.hidden" ng-class="{'active': item.classObject.active,
                          '': true,
                          'new-info-item': item.subDisplayName || item.specialCase === 'gamesSpecialText',
                          'new-info-item-sup': item.supDisplayName,
                          'nav-sport': $root.conf.customNavMenu
                          }" class="">

                                                            <div ng-if="!item.popup &amp;&amp; !item.broadcast" class="top-menu-sub-a-t"><a ng-href="#/sport/?type=0" ng-click="item.click()" data-content="new" ng-show="!item.specialCase &amp;&amp; !item.subDisplayName &amp;&amp; !item.supDisplayName" target="_self" route-reload="" reload="false" href="#/sport/?type=0"><span ng-bind="item.displayName">Sports</span> </a>


                                                            </div>


                                                        </li>



                                                        <li ng-repeat="item in topMenu track by item.name" ng-if="item.showCondition &amp;&amp; !item.hidden" ng-class="{'active': item.classObject.active,
                          '': true,
                          'new-info-item': item.subDisplayName || item.specialCase === 'gamesSpecialText',
                          'new-info-item-sup': item.supDisplayName,
                          'nav-casino': $root.conf.customNavMenu
                          }">

                                                            <div ng-if="!item.popup &amp;&amp; !item.broadcast" class="top-menu-sub-a-t"><a ng-href="#/casino/" ng-click="item.click()" data-content="new" ng-show="!item.specialCase &amp;&amp; !item.subDisplayName &amp;&amp; !item.supDisplayName" target="_self" route-reload="" reload="false" href="#/casino/"><span ng-bind="item.displayName">casino</span> </a>


                                                            </div>


                                                        </li>



                                                        <li ng-repeat="item in topMenu track by item.name" ng-if="item.showCondition &amp;&amp; !item.hidden" ng-class="{'active': item.classObject.active,
                          '': true,
                          'new-info-item': item.subDisplayName || item.specialCase === 'gamesSpecialText',
                          'new-info-item-sup': item.supDisplayName,
                          'nav-livedealer': $root.conf.customNavMenu
                          }">

                                                            <div ng-if="!item.popup &amp;&amp; !item.broadcast" class="top-menu-sub-a-t"><a ng-href="#/livedealer/" ng-click="item.click()" data-content="new" ng-show="!item.specialCase &amp;&amp; !item.subDisplayName &amp;&amp; !item.supDisplayName" target="_self" route-reload="" reload="false" href="#/livedealer/"><span ng-bind="item.displayName">Live casino</span> </a>


                                                            </div>


                                                        </li>



                                                        <li ng-repeat="item in topMenu track by item.name" ng-if="item.showCondition &amp;&amp; !item.hidden" ng-class="{'active': item.classObject.active,
                          '1-top-nav': true,
                          'new-info-item': item.subDisplayName || item.specialCase === 'gamesSpecialText',
                          'new-info-item-sup': item.supDisplayName,
                          'nav-virtual-sports': $root.conf.customNavMenu
                          }" class="1-top-nav">

                                                            <div ng-if="!item.popup &amp;&amp; !item.broadcast" class="top-menu-sub-a-t"><a ng-href="#/virtualsports/" ng-click="item.click()" data-content="new" ng-show="!item.specialCase &amp;&amp; !item.subDisplayName &amp;&amp; !item.supDisplayName" target="_self" route-reload="" reload="false" href="#/virtualsports/"><span ng-bind="item.displayName">Virtual sports</span> </a>


                                                            </div>


                                                        </li>



                                                        <li ng-repeat="item in topMenu track by item.name" ng-if="item.showCondition &amp;&amp; !item.hidden" ng-class="{'active': item.classObject.active,
                          '1-top-nav': true,
                          'new-info-item': item.subDisplayName || item.specialCase === 'gamesSpecialText',
                          'new-info-item-sup': item.supDisplayName,
                          'nav-poker': $root.conf.customNavMenu
                          }" class="1-top-nav">

                                                            <div ng-if="!item.popup &amp;&amp; !item.broadcast" class="top-menu-sub-a-t"><a ng-href="#/poker/" ng-click="item.click()" data-content="new" ng-show="!item.specialCase &amp;&amp; !item.subDisplayName &amp;&amp; !item.supDisplayName" target="_self" route-reload="" reload="false" href="#/poker/"><span ng-bind="item.displayName">Poker</span> </a>


                                                            </div>


                                                        </li>



                                                        <li ng-repeat="item in topMenu track by item.name" ng-if="item.showCondition &amp;&amp; !item.hidden" ng-class="{'active': item.classObject.active,
                          '': true,
                          'new-info-item': item.subDisplayName || item.specialCase === 'gamesSpecialText',
                          'new-info-item-sup': item.supDisplayName,
                          'nav-promotions': $root.conf.customNavMenu
                          }">

                                                            <div ng-if="!item.popup &amp;&amp; !item.broadcast" class="top-menu-sub-a-t"><a ng-href="#/promos/" ng-click="item.click()" data-content="new" ng-show="!item.specialCase &amp;&amp; !item.subDisplayName &amp;&amp; !item.supDisplayName" target="_self" route-reload="" reload="false" href="#/promos/"><span ng-bind="item.displayName">Promotions</span> </a>


                                                            </div>


                                                        </li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </ng-include>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <ng-include class="float-width" ng-show="$root.currentPage.hasSubHeader &amp;&amp; $root.currentPage.isInSports &amp;&amp; !$root.conf.hideSubHeaderByPath[$location.path()]" no-animate="" src="::'templates/sport/toptab.html'|fixPath">
                        <div class="subtop-header-menu-j">
                            <ul ng-class="{'toptab-pre-match': !$root.env.live}" class="">


                                <li ng-if="(menu.enabledConfig === undefined || calculatedConfigs[menu.enabledConfig]) &amp;&amp; (!menu.exceptViews ||( menu.exceptViews.indexOf($root.conf.sportsLayout) === -1 &amp;&amp;  ($root.conf.sportsLayout !== 'classic' ||  menu.exceptViews.indexOf('euro2016') === -1) ) ) &amp;&amp; !menu.hidden" ng-repeat="menu in $root.conf.subHeaderItems track by menu.alias" ng-class="{'active': $location.path() === '/' + menu.alias + '/' || $location.path() === '/' + menu.alias}" class="active">
                                    <a data-badge="" ng-if="!menu.url" ng-href="https://www.alivecasino.io/#/sport/?type=1#" href="https://www.alivecasino.io/#/sport/?type=1#">Event View</a>


                                </li>



                                <li ng-if="(menu.enabledConfig === undefined || calculatedConfigs[menu.enabledConfig]) &amp;&amp; (!menu.exceptViews ||( menu.exceptViews.indexOf($root.conf.sportsLayout) === -1 &amp;&amp;  ($root.conf.sportsLayout !== 'classic' ||  menu.exceptViews.indexOf('euro2016') === -1) ) ) &amp;&amp; !menu.hidden" ng-repeat="menu in $root.conf.subHeaderItems track by menu.alias" ng-class="{'active': $location.path() === '/' + menu.alias + '/' || $location.path() === '/' + menu.alias}">
                                    <a data-badge="" ng-if="!menu.url" ng-href="#/dashboard" href="#/dashboard">Dashboard</a>


                                </li>





                                <li ng-if="(menu.enabledConfig === undefined || calculatedConfigs[menu.enabledConfig]) &amp;&amp; (!menu.exceptViews ||( menu.exceptViews.indexOf($root.conf.sportsLayout) === -1 &amp;&amp;  ($root.conf.sportsLayout !== 'classic' ||  menu.exceptViews.indexOf('euro2016') === -1) ) ) &amp;&amp; !menu.hidden" ng-repeat="menu in $root.conf.subHeaderItems track by menu.alias" ng-class="{'active': $location.path() === '/' + menu.alias + '/' || $location.path() === '/' + menu.alias}">
                                    <a data-badge="" ng-if="!menu.url" ng-href="#/multiview" href="#/multiview">Live MultiView</a>


                                </li>



                                <li ng-if="(menu.enabledConfig === undefined || calculatedConfigs[menu.enabledConfig]) &amp;&amp; (!menu.exceptViews ||( menu.exceptViews.indexOf($root.conf.sportsLayout) === -1 &amp;&amp;  ($root.conf.sportsLayout !== 'classic' ||  menu.exceptViews.indexOf('euro2016') === -1) ) ) &amp;&amp; !menu.hidden" ng-repeat="menu in $root.conf.subHeaderItems track by menu.alias" ng-class="{'active': $location.path() === '/' + menu.alias + '/' || $location.path() === '/' + menu.alias}">
                                    <a data-badge="" ng-if="!menu.url" ng-href="#/livecalendar" href="#/livecalendar">Live Calendar</a>


                                </li>



                                <li ng-if="(menu.enabledConfig === undefined || calculatedConfigs[menu.enabledConfig]) &amp;&amp; (!menu.exceptViews ||( menu.exceptViews.indexOf($root.conf.sportsLayout) === -1 &amp;&amp;  ($root.conf.sportsLayout !== 'classic' ||  menu.exceptViews.indexOf('euro2016') === -1) ) ) &amp;&amp; !menu.hidden" ng-repeat="menu in $root.conf.subHeaderItems track by menu.alias" ng-class="{'active': $location.path() === '/' + menu.alias + '/' || $location.path() === '/' + menu.alias}">
                                    <a data-badge="" ng-if="!menu.url" ng-href="#/results" href="#/results">Results</a>


                                </li>




                            </ul>
                        </div>

                    </ng-include>



                </ng-include>
            </div>
            <div class="block-slider block-slider--t ng-hide" no-animate="" class-on-scroll="slider-scroll" id="block-slider-container" ng-class="{'popup': env.sliderAsPopup[env.sliderContent]}" hide-on-click="true" state-flag-var="env.showSlider" broadcast-on-close="slider.close" except="header" ng-show="env.showSlider &amp;&amp;
            (!conf.enableMixedView || ['recentBetsCashout', 'recentBets', 'betHistory', 'casinoBetHistory','shukaBetHistory',
                    'settings','deposit', 'withdraw', 'balanceHistory', 'casinoBalanceHistory', 'cashier', 'myWallets', 'loyaltyPoints', 'tickets', 'casinoCashBackCashOut', 'buddytransfer','profits', 'depositRequest'].indexOf(env.sliderContent) === -1)
            &amp;&amp; (!conf.enableBonuses || env.sliderContent !== 'bonuses') &amp;&amp; env.sliderContent !== 'promotionalBonuses' ">
                <div ng-click="closeSlider()" class="close-slider-button-j"></div>


                <div ng-include="::'templates/slider/recentbets.html'|fixPath">

                </div>

                <div ng-include="::'templates/slider/bethistory.html'|fixPath">

                </div>

                <div ng-include="::'templates/slider/casinobethistory.html'|fixPath">

                </div>

                <div ng-include="::'templates/slider/shukabethistory.html'|fixPath">

                </div>

                <div ng-include="::'templates/slider/help.html'|fixPath">

                </div>


                <div class="block-sign-in-form" ng-include="::'templates/slider/signinform.html'|fixPath">
                    <div ng-controller="loginCtrl">





                    </div>


                </div>

                <div class="block-sign-in-form" ng-include="::'templates/slider/custom_content.html'|fixPath">

                </div>

                <div class="block-sign-in-form" ng-include="::'templates/slider/invite.html'|fixPath"></div>

                <div class="block-sign-in-form" ng-include="::'templates/slider/warning.html'|fixPath">

                </div>



                <div class="block-sign-in-form" ng-include="::'templates/slider/settings.html'|fixPath">

                </div>

                <div class="block-sign-in-form" ng-include="::'templates/slider/messages.html'|fixPath">

                </div>
                <div class="closed-arrow-b"><a ng-click="broadcast('slider.close')" trans="">close</a></div>
            </div>



            <div ng-show="recaptcha.key" ng-controller="recaptchaCtrl" ng-include="::'templates/popup/recaptcha.html'|fixPath" class="ng-hide">

            </div>



        </div>
    </div>




    <ng-include src="::'templates/dialogs/renewreminder.html'|fixPath">

        <div class="popup-bg-contain" ng-class="{'active': $root.renewReminder}" ng-controller="headerCtrl" ng-if="conf.remindToRenewBalance.enabled &amp;&amp; $location.path() !='/popup/'">
            <div class="deposit-alert-contain">
                <div class="icon-delete"><a ng-click="$root.renewReminder=false">Close</a></div>
                <div class="text-deposit-alert">
                    <p><span><b trans="">Your balance is low</b></span><span ng-show="conf.remindToRenewBalance.page === 'renew'" trans="" class="ng-hide">Renew to get more.</span> <button class="message-box-ok-btn ng-hide" ng-click="renewReminder = null; env.showSlider = true; env.sliderContent = conf.remindToRenewBalance.page; $event.stopPropagation();" ng-show="conf.remindToRenewBalance.page === 'renew'">Renew</button> <button class="message-box-ok-btn" ng-click="renewReminder = null; env.showSlider = true; env.sliderContent = conf.remindToRenewBalance.page; $event.stopPropagation();" ng-show="conf.remindToRenewBalance.page === 'deposit'">Deposit</button></p>
                </div>
            </div>
        </div>

    </ng-include>

    <div ng-controller="headerCtrl" ng-if="$location.path() !='/popup/'" ng-init="headerInit();">
        <div class="popup-bg-contain" ng-class="{'active': $root.globalPopup}">
            <div class="deposit-alert-contain">
                <div class="icon-delete"><a ng-click="$root.globalPopup=null">Close</a></div>
                <div class="text-deposit-alert">
                    <div class="popup-status-icon info" ng-class="$root.globalPopupType||'info'"></div>
                    <p><span ng-bind-html="$root.globalPopup | html" trans=""></span> <button class="message-box-ok-btn" ng-click="$root.globalPopup=null" trans="">OK</button></p>
                </div>
            </div>
        </div>
        <div class="popup-bg-contain" ng-class="{'active': yesNoDialog}">
            <div class="deposit-alert-contain">
                <div class="text-deposit-alert free">
                    <div class="popup-status-icon info" ng-class="yesNoDialogType||'info'"></div>
                    <p><span ng-bind="yesNoDialog"></span> <button class="message-box-ok-btn" ng-click="answer('yes')" trans="">Yes</button> <button class="message-box-ok-btn" ng-click="answer('no')" trans="">No</button></p>
                </div>
            </div>
        </div>

        <ng-include src="::'templates/dialogs/youtubevideo.html'|fixPath">

        </ng-include>
    </div>


    <ng-include src="::'templates/dialogs/survey.html'|fixPath">

    </ng-include>

    <ng-include src="::'templates/dialogs/rfidlogin.html'|fixPath">

    </ng-include>

    <div class="popup-bg-contain" ng-class="{'active': blockingPopup}">
        <div class="deposit-alert-contain">
            <div class="text-deposit-alert">
                <div class="popup-status-icon info" ng-class="blockingPopupType||'info'"></div>
                <p><span ng-bind="blockingPopup"></span></p>
            </div>
        </div>
    </div>



    <ng-include src="::'templates/dialogs/counteroffer.html'|fixPath">
        <div ng-controller="superBetCtrl">
            <div class="popup-bg-contain" ng-class="{'active': showCounterOfferPopup}">
                <div class="popup-classic counter-offer">
                    <div class="closed-btn" ng-click="declineCounterOffer();"></div>
                    <h3 trans="">SuperBet Counter Offer</h3>
                    <div class="popup-content">
                        <div class="evt-details">
                            <p></p>
                        </div>
                        <table>
                            <tbody>
                                <tr>
                                    <th trans="">Bet Details</th>
                                    <th trans="">Offer Details</th>
                                </tr>
                                <tr>
                                    <td ng-class="{'old-odd': (originalSuperBet.k != counterOffer.events.event.coeficient)}"><span trans="">Odds:</span> </td>
                                    <td><span trans="">Odds:</span> </td>
                                </tr>
                                <tr>
                                    <td ng-class="{'old-odd': (originalSuperBet.amount != counterOffer.amount)}"><span trans="">Amount:</span> </td>
                                    <td><span trans="">Amount:</span> </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="remaining-time"><span trans="">Remaining time:</span>NaN NaN</div>
                        <div class="popup-buttons"><button ng-click="approveCounterOffer();" trans="">Accept</button> <button ng-click="declineCounterOffer();" trans="" class="btn-default">Decline</button></div>
                    </div>
                </div>
            </div>
        </div>
    </ng-include>

    <ng-include src="::'templates/dialogs/skype_authorization_request.html'|fixPath">

    </ng-include>
</div>

<div id="hideondesktop" class="header-wrapper-m" style="background: #060738">
    <div class="header-separator-m">
        <div class="logo-wrapper-m">
            <a href="/">
                <img src="/assets/images/AliveCasinoLight2.png" style="max-width: 200px;">
            </a>
        </div>
        <div class="sw-contain-b-reg-in ">
            <a href="https://alivecasino.io" class="right-top-nav-new-h">Join</a>
            
            <div class="login-parent-div">
                <div class="closed-nav-icon"></div>
                <a href="https://alivecasino.io" class="right-top-nav-new-h" style="color: aliceblue;">Login</a>
            </div>
        </div>
    </div>
</div>