<?php include_once('includes/header.php'); ?>

<body ng-controller="RootController" ng-init="init()" ng-class="{'top50':showNotification, 'overflowHidden' : openMenu, 'overflowHidden' : openMsg}" class="ng-scope" style="visibility: visible;" data-gr-c-s-loaded="true">
    <div class="preLoader ng-hide" ng-hide="loaded"></div>
    <div id="toggleAutForm">
        <div class="loginFormContainer scrollClass">
            <div class="Pop-up ng-isolate-scope" loading="loadinFormLogin">
                <div class="base">
                    <div>
                        <div class="headerText">
                            <div class="partnerNameDiv">
                                <p class="partnerName ng-binding">Alivecasino</p>
                            </div>
                            <!-- ngIf: !isCustomLanding -->
                        </div>
                        <div>
                            <p class="affiliates">Affiliates</p>
                        </div>
                    </div>
                    <div>
                        <div class="welcomeDiv">
                            <p class="welcome">Welcome!</p>
                        </div>
                        <div class="welcomeDiv">
                            <p class="subtext">Grow your business with us.</p>

                        </div>
                    </div>

                    <div class="registerButtonDiv">
                        <!-- ngIf: currentSec !== 'login' && currentSec !== '' && currentSec !== 'termsAndConditions' --><a class="registerButton ng-scope" href="/#login" ng-if="currentSec !== 'login' &amp;&amp; currentSec !== '' &amp;&amp; currentSec !== 'termsAndConditions'">
                            <p class="registerButtonText">Sign In</p>
                        </a><!-- end ngIf: currentSec !== 'login' && currentSec !== '' && currentSec !== 'termsAndConditions' -->
                        <!-- ngIf: currentSec === 'login' || currentSec === 'termsAndConditions' || currentSec === '' -->
                    </div>
                    <div class="footer">
                        <p class="footerText">Easy Way to Manage Your Work Process</p>
                        <div class="iconDiv">
                            <div class="Ellipse1 Elipse">
                                <i class="icon-icon"></i>
                                <p>Link-Creator</p>
                            </div>
                            <div class="Ellipse2 Elipse">
                                <i class="icon-share-2"></i>
                                <p>Social-Share</p>
                            </div>
                            <div class="Ellipse3 Elipse">
                                <i class="icon-html5"></i>
                                <p>Banner-Builder</p>
                            </div>
                            <div class="Ellipse4 Elipse">
                                <i class="icon-icon-1"></i>
                                <p>Media</p>
                            </div>
                            <div class="Ellipse5 Elipse">
                                <i class="icon-icon-2"></i>
                                <p>XML-Feed</p>
                            </div>
                            <div class="Ellipse6 Elipse">
                                <i class="icon-icon-3"></i>
                                <p>JSON-Feed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ngIf: !currentSec || currentSec == 'login' -->
                <!-- ngIf: currentSec == 'register' -->
                <div class="baseRight ng-scope" ng-if="currentSec == 'register'" ng-controller="RegistrationController">
                    <div class="baseRightInformation ng-isolate-scope" ng-init="getSkinCurrencies();" loading="contentLoading">
                        <div class="subInformationDiv">
                            <div>
                                <div class="baseRightHeader">
                                    <div class="headerText">
                                        <p class="signInAndRegister">Registration</p>
                                    </div>
                                    <div class="headerText">
                                        <p class="signInAndRegisterText">Join our big team now.</p>
                                    </div>
                                </div>
                                <div class="signInAndRegisterForm">
                                    <form name="registerForm" v-validate-form="user" class="ng-pristine ng-invalid ng-invalid-required" novalidate="">
                                        <div class="signInAndRegisterInput">
                                            <div class="iconAndInputDiv">
                                                <i class="icon-user"></i>
                                                <input class="inputFields ng-pristine ng-untouched ng-invalid ng-invalid-required" type="text" name="name" placeholder="First Name" v-validate-for="name" v-validate-classes="inputFields:inputFieldsError" ng-model="user.name" required="">
                                                <!-- ngIf: !smallSizeMob -->
                                                <!-- ngIf: registerForm.name.$dirty -->
                                                <!-- end ngIf: !smallSizeMob -->
                                                <!-- ngIf: smallSizeMob -->
                                            </div>
                                        </div>
                                        <div class="signInAndRegisterInput">
                                            <div class="iconAndInputDiv">
                                                <i class="icon-email"></i>
                                                <input class="inputFields ng-pristine ng-untouched ng-invalid ng-invalid-required" type="text" name="email" placeholder="Email" ng-model="user.email" v-validate-for="email" v-validate-classes="inputFields:inputFieldsError" v-validate-custom="checkEmailUniqueness" required="">
                                                <!-- ngIf: !smallSizeMob -->
                                                <!-- ngIf: registerForm.email.$dirty -->
                                                <!-- end ngIf: !smallSizeMob -->
                                                <!-- ngIf: smallSizeMob -->
                                            </div>
                                        </div>
                                        <div class="signInAndRegisterInput">
                                            <div class="iconAndInputDiv">
                                                <i class="icon-lock"></i>
                                                <input class="viewPassword inputFields mobile ng-pristine ng-untouched ng-invalid ng-invalid-required" type="password" placeholder="Password" name="passwordLogin" ng-model="user.password" ng-change="checkConfirmPassword(user.password, user.confirmPassword)" v-validate-for="passwordLogin" v-validate-classes="inputFields:inputFieldsError" required="">
                                                <!-- ngIf: !smallSizeMob -->
                                                <!-- ngIf: registerForm.passwordLogin.$dirty -->
                                                <!-- end ngIf: !smallSizeMob -->
                                                <!-- ngIf: smallSizeMob -->
                                            </div>
                                        </div>
                                        <div class="signInAndRegisterInput">
                                            <div class="iconAndInputDiv">
                                                <i class="icon-lock"></i>
                                                <input class="viewPassword inputFields mobile ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-class="!isConfirm ? 'inputErrorBorder' : ''" type="password" placeholder="Confirm password" name="confirmPasswordLogin" ng-model="user.confirmPassword" ng-change="checkConfirmPassword(user.password, user.confirmPassword)" v-validate-for="confirmPasswordLogin" required="">
                                                <!-- ngIf: !smallSizeMob -->
                                                <!-- ngIf: registerForm.confirmPasswordLogin.$dirty -->
                                                <!-- end ngIf: !smallSizeMob -->
                                                <!-- ngIf: smallSizeMob -->
                                            </div>
                                        </div>
                                        <div class="selectAndTitle marginTop5 signInAndRegisterInput">
                                            <div class="customSelect medium lightTransparent fullWidth">
                                                <div class="iconAndInputDiv">
                                                    <i class="icon-currency"></i>
                                                    <select chosen="" ng-class="smallSizeMob ? 'light medium' : ''" class="mainFilterSelect ng-pristine ng-untouched ng-valid localytics-chosen" disable-search="true" ng-model="user.mainCurrency" ng-options="key as key   for (key, val) in skinCurrency" style="display: none;">
                                                        <option value="" selected="selected" style="display: none" class="">Select Currency</option>
                                                        <option value="string:AED" label="AED">AED</option>
                                                        <option value="string:EUR" label="EUR">EUR</option>
                                                        <option value="string:GBP" label="GBP">GBP</option>
                                                        <option value="string:USD" label="USD">USD</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 360px;" title=""><a class="chosen-single" tabindex="-1"><span>Select Currency</span>
                                                            <div><b></b></div>
                                                        </a>
                                                        <div class="chosen-drop">
                                                            <div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div>
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acceptInput">
                                            <label class="chackContainer">
                                                <input type="checkbox" name="termsAndCond" class="custom ng-pristine ng-untouched ng-invalid ng-invalid-required" id="termCondMain" ng-model="user.termsAndCond" required="">
                                                <span class="checkmark"></span>
                                                <a href="#/termsAndConditions">I accept the Terms and Conditions</a>
                                            </label>
                                        </div>

                                        <div class="signInAndSendButton">
                                            <button class="button medium ng-scope disabledBut" ng-disabled="registerForm.$invalid || !isConfirm" ng-click="register()" disabled="disabled">Register </button>
                                        </div>
                                        <div class="registerAndSingInButtonMobile">
                                            <a href="/#login">Sign In</a>
                                        </div>
                                        <div ng-show="hideForm" ng-bind="notificationText" class="ng-binding ng-hide"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ngIf: !isCustomLanding -->
                        <div ng-show="loading" class="loadingStyle ng-scope ng-hide">
                            <div class="loader">
                                <div class="loader-inner ball-pulse-sync">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end ngIf: currentSec == 'register' -->
                <!-- ngIf: currentSec == 'forgotPassword' -->
                <!-- ngIf: currentSec == 'resendEmail' -->
                <!-- ngIf: currentSec == 'resendPassword' -->
                <!-- ngIf: currentSec == 'termsAndConditions' -->
                <!-- ngIf: currentSec && currentSec !== 'login' && currentSec !== 'register' && currentSec !== 'forgotPassword' && currentSec !== 'resendPassword' && currentSec !== 'termsAndConditions' && currentSec !== 'resendEmail' -->
                <div ng-show="loading" class="loadingStyle ng-scope ng-hide">
                    <div class="loader">
                        <div class="loader-inner ball-pulse-sync">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div id="appendNotification" class="demo-section k-content" style=" overflow: visible; position: fixed; top: 20px; z-index: 10002; right: 20px; background-color: transparent !important;"></div>

</body>
</html>