<?php

namespace Kms142\Classes;

if (!class_exists('ABCF7_Captcha')) :
	class ABCF7_Captcha
	{
		function __construct()
		{
			add_action('init', array($this, 'ABCF7_check_captcha_active'));
		}

		public function ABCF7_check_captcha_active()
		{
			$wpcf7 = get_option('wpcf7');

			if (isset($wpcf7['recaptcha']) && !empty($wpcf7['recaptcha'])) {

				$sitekey = $this->ABCF7_get_sitekey($wpcf7['recaptcha']);
				$secret = $this->ABCF7_get_secret($sitekey, $wpcf7['recaptcha']);

				if (!empty($sitekey) && !empty($secret)) {
					define('SITEKEY', $sitekey);
					add_action('wp_print_scripts', array($this, 'ABCF7_remove_google_captcha_js'));
					add_action('wp_footer', array($this, 'ABCF7_footer_script'), 100);
				}
			}
		}

		public function ABCF7_get_sitekey($sitekeys)
		{
			if (
				empty($sitekeys)
				or !is_array($sitekeys)
			) {
				return false;
			}
			$sitekeys = array_keys($sitekeys);
			return $sitekeys[0];
		}

		public function ABCF7_get_secret($sitekey, $sitekeys)
		{
			if (isset($sitekeys[$sitekey])) {
				return $sitekeys[$sitekey];
			} else {
				return false;
			}
		}

		public function ABCF7_remove_google_captcha_js()
		{
			wp_dequeue_script('google-recaptcha');
			wp_dequeue_script('wpcf7-recaptcha');
		}

		public function ABCF7_footer_script()
		{
?>
			<script>
				var fired = false;
				setTimeout(function() {
					if (fired === false) {

						var abcf7head = document.getElementsByTagName('head')[0];
						var script = document.createElement('script');
						script.type = 'text/javascript';
						script.src = 'https://www.google.com/recaptcha/api.js?render=<?php echo SITEKEY; ?>&ver=3.0';
						abcf7head.appendChild(script);


						var wpcf7_recaptcha = {
							"sitekey": "<?php echo SITEKEY; ?>",
							"actions": {
								"homepage": "homepage",
								"contactform": "contactform"
							}
						};

						setTimeout(function() {
							wpcf7_recaptcha.execute = function(action) {
								grecaptcha.execute(
									wpcf7_recaptcha.sitekey, {
										action: action
									}
								).then(function(token) {
									var event = new CustomEvent('wpcf7grecaptchaexecuted', {
										detail: {
											action: action,
											token: token,
										},
									});

									document.dispatchEvent(event);
								});
							};

							wpcf7_recaptcha.execute_on_homepage = function() {
								wpcf7_recaptcha.execute(wpcf7_recaptcha.actions['homepage']);
							};

							wpcf7_recaptcha.execute_on_contactform = function() {
								wpcf7_recaptcha.execute(wpcf7_recaptcha.actions['contactform']);
							};

							grecaptcha.ready(
								wpcf7_recaptcha.execute_on_homepage
							);

							document.addEventListener('change',
								wpcf7_recaptcha.execute_on_contactform
							);

							document.addEventListener('wpcf7submit',
								wpcf7_recaptcha.execute_on_homepage
							);


							document.addEventListener('wpcf7grecaptchaexecuted', function(event) {
								var fields = document.querySelectorAll(
									"form.wpcf7-form input[name='_wpcf7_recaptcha_response']"
								);

								for (var i = 0; i < fields.length; i++) {
									var field = fields[i];
									field.setAttribute('value', event.detail.token);
								}
							});

						}, 4000);

						fired = true;
					}
				}, 1000)
			</script>
<?php }
	}
endif;

$abcf7 = new ABCF7_captcha();
