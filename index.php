<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- link qui permet d'intégrer a mon HTML des icons font awesome qui est présent à partir de la version 4.0.0 de Bootstrap -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<title>Projet</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<!-- link qui permet d'intégrer a mon HTML des animations -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<!-- cela permet au "body" d'avoir accès au scrollpsy-->
<body data-spy="scroll" data-target=".navbar" data-offset="100">
	<header>
		<!-- Cette partie gère une barre de navigation -->
		<nav class="navbar navbar-expand-md navbar-custom navbar-dark fixed-top">
			<div class="container-fluid">
				<!-- effet de zoom sur ma photo -->
				<a class="navbar-brand" href="#">Saint Vincent BTS 1</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<!-- C'est une autre liste désordonnée qui permet de placer la catégorie "CONTACT" sur la droite, elle a été faite avec un "DROPDOWN"-->
					<ul class="nav navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Liens 1</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="#formulaire" class="dropdown-item">---</a>
								<div class="dropdown-divider"></div>
								<a href="#" data-toggle="modal" data-target="#modal1" class="dropdown-item">---</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Liens 2</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="#formulaire" class="dropdown-item">---</a>
								<div class="dropdown-divider"></div>
								<a href="#" data-toggle="modal" data-target="#modal1" class="dropdown-item">---</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Liens 3</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="#formulaire" class="dropdown-item">---</a>
								<div class="dropdown-divider"></div>
								<a href="#" data-toggle="modal" data-target="#modal1" class="dropdown-item">---</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Liens 4</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="#formulaire" class="dropdown-item">---</a>
								<div class="dropdown-divider"></div>
								<a href="#" data-toggle="modal" data-target="#modal1" class="dropdown-item">---</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<?php
									$connexion = "Livequestion/index.php";
								?>
							<a style="border-radius: 25px; background-color:#ED008C;" type="button" class="btn btn-primary" href="<?php echo $connexion ?>">
								Se connecter
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section id="premiereSection">
		<p class="texteIntroduction">Lorem ipsum<br>dolor sit<br>amet.</p>
		<p class="paragrapheDescription">Sed elit libero, accumsan et volutpat id, aliquam<br>
			tristique odio. Mauris sed lectus a justo malesuada<br>
			dapibus.Morbi eleifend tellus nisi, sed ullamcorper<br>
			mi tincidunt faucibus. Mauris justo tortor, tempor<br>
		ut odio in, dictum malesuada eros.</p>
		<button type="button" class="btn btn-info" data-target="#exampleModal">
			BOUTON CTA
		</button>
	</section>

	<section id="deuxiemeSection">
		<div class="icone">
			<img class="imageI1" src="Images/i1.png">
			<h2 class="minimaldesign2">Suits Your Style</h2>
			<div class="globaltextminimal">
				<p class="textminimal">Drogon sed ut perspiciatis unde omnis iste error<br>sit voluptatem accusantium doloremque<br>laudantium, totam aperiam, eaque Arya.</p>
			</div>
		</div>
		<div class="icone2">
			<img class="" src="Images/i2.png">
			<h2 class="minimaldesign2">Ut posuere molestie</h2>
			<div class="globaltextminimal">
				<p class="textminimal">Duis convallis convallis tellus imp interdum. Non<br>diam phasellus vestibulum lorem sed risus<br>ultricies Tyrion. Enim blandit volutpat.</p>
			</div>
		</div>
		<div class="icone3">
			<img class="" src="Images/i3.png">
			<h2 class="minimaldesign2">Vestibulum ut erat consectetur</h2>
			<div class="globaltextminimal">
				<p class="textminimal">Eunuch sed blandit libero volutpat sed cras.<br>Cersei quis imperdiet tincidunt unuch pulvinar<br>sapien. Habitasse platea Davos vestibulum.</p>
			</div>
		</div>	
		<div style="clear: both;">
		</div>
	</section>
	<section id ="troisiemeSectionEntiere">
		<div id="troisiemeSection">
			<h1 class="sousTitre">Aenean magna odio</h1>

			<p class="paragrapheSoustitre">Sed ut perspiciatis unde omnis iste natus error sit voluptatem<br>accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
			<div class="text-center">
				<button type="button" class="btn btn-light" data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
					Liens 1
				</button>
				<button type="button" href="#" class="btn btn-light" data-target="#carouselExampleIndicators" data-slide-to="1">
					Liens 2
				</button>
				<button type="button" class="btn btn-light" data-target="#carouselExampleIndicators" data-slide-to="2">
					Liens 3
				</button>
			</div>
		</div>
		<div id="troisiemeSection2">
			<br>
			<br>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div>
							<img class="imagePresentation" src="Images\step-2.jpg">
						</div>
						<div class="coteGauche">
							<p class="titreTextePresentation">Praesent vitae velit tristique <span class="oldAlo">old alo</span>
								<p class="textePresentation"><br>Ned ut perspiciatis unde omnis iste natus error sit<br>voluptatem accusantium doloremque laudantium,<br>totam rem aperiam, eaque ipsa.</p></p>
								<div id="interneSection">
									<img src="Images\persona3.jpg" class="imageUtilisateur">
									<p class="texteCoteImage">"Proin vel dolor dictum, congue tellus at, lobortis neque"</p>	
								</div>
							</div>
						</div>
					<div class="carousel-item">
						<div>
							<img class="imagePresentation2" src="Images\step-3.jpg">
						</div>
						<div class="coteDroit">
							<p class="titreTextePresentation">Duis et eros lorem.</p>
							<p class="textePresentation"><br>Ned ut perspiciatis unde omnis iste natus error sit<br>voluptatem accusantium doloremque laudantium,<br>totam rem aperiam, eaque ipsa.</p></p>
							<div id="interneSection2">
								<img src="Images\persona2.jpg" class="imageUtilisateur2">
								<p class="texteCoteImage2">"Aliquam gravida magna ut"</p>	
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div>
							<img class="imagePresentation" src="Images\step-4.png">
						</div>
						<div class="coteGauche">
							<p class="titreTextePresentation">Curabitur gravida metus at mi <span class="oldAlo">malesuada</span>
								<p class="textePresentation"><br>Ned ut perspiciatis unde omnis iste natus error sit<br>voluptatem accusantium doloremque laudantium,<br>totam rem aperiam, eaque ipsa.</p></p>
								<div id="interneSection">
									<img src="Images\persona1.jpg" class="imageUtilisateur">
									<p class="texteCoteImage">"malesuada."</p>	
								</div>
							</div>
						</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
				<div style="clear: both;">
				</section>
				<section id="quatriemeSection">
					<div class="Nulla">
						<img class="imageNulla" src="Images/iplay.png">
						<p class="texteNulla">"Nulla venenatis magna fringilla"</p>
					</div>
				</section>

				<section id="cinquiemeSection"><h1 class="Etiam">
				Etiam laot, alique sceleris.</h1>

				<p class="texteEtiam">Sed ut perspiciatis unde omnis iste natus error sit voluptatem<br>accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>

				<div style="margin-left: 6%; margin-top:5%;">
					<button class="boiteimage">
						<img class="imageboiteimage" src="Images/marque1.jpg">
						<p class="texteboiteimage">Kyan Boards</p> 
					</button>
					<button class="boiteimage" style="margin-left: 0.5%">
						<img class="imageboiteimage" src="Images/marque2.jpg">
						<p class="texteboiteimage">Atica</p> 
					</button>
					<button class="boiteimage" style="margin-left: 0.5%">
						<img class="imageboiteimage" src="Images/marque3.jpg">
						<p class="texteboiteimage">Treva</p> 
					</button>
					<button class="boiteimage" style="margin-left: 0.5%">
						<img class="imageboiteimage" src="Images/marque4.jpg">
						<p class="texteboiteimage">Kanba</p> 
					</button>
					<br>
					<br>
					<br>
					<button class="boiteimage" style="margin-left: 34.75%">
						<img class="imageboiteimage" src="Images/marque5.jpg">
						<p class="texteboiteimage">Tivit Forms</p> 
					</button>
					<button class="boiteimage" style="margin-left: 0.5%">
						<img class="imageboiteimage" src="Images/marque6.jpg">
						<p class="texteboiteimage">Aven</p> 
					</button>
					<button class="boiteimage" style="margin-left: 0.5%">
						<img class="imageboiteimage" src="Images/marque7.jpg">
						<p class="texteboiteimage">Utosia</p> 
					</button>
				</div>
			</section>

			<section id="sixiemeSection">
				<div class="faq_titre">
					<h2>FAQ</h2>

					<p>Sed ut perpicatis unde omnis iste natus error sit voluptatem<br>
					accusantium doloremque laudantium, total rem aperiam, eaque ipsa.</p>
				</div>
				<button class="collapsible"><b>Can I upgrade later on?</b></button>
				<div class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<button class="collapsible"><b>Can I port my data from another provider?</b></button>
				<div class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<button class="collapsible"><b>Are my food photos stored forever in the cloud?</b></button>
				<div class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<button class="collapsible"><b>Who foots the bill for that?</b></button>
				<div class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<button class="collapsible"><b>What's the real coat?</b></button>
				<div class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<button class="collapsible"><b>Can my company request a custom plan?</b></button>
				<div class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>

				<div class="lien_question">
					<p>Still have unanswered question?
						<a link href="http://www.lycee-stvincent.fr/" target="_BLANK" style="color:#ED008C;"><b>Get in touch</b></a></p>
					</div>
					</section>

					<section id="septiemeSection">=
						<div class="ligne">
						</div>
						<p style="color: white; float:left; margin-left: 14%; margin-top: 1.5%;">@2019 Page protected by reCAPTCHA and subject to Google's <span style="font-weight: bold;">Privacy Policy</span>and <span style="font-weight: bold;">Terms of Service</span></p>
						<img style="margin-top: 2px; margin-right: 14%; float:right; margin-top: 1.5%;" src="Images/links.jpg">
					</section>

					<!-- le footer qui permet d'y déposé les "script" utilisés dans mon portfolio -->
					<footer>
						<!-- script pour les animations AOS -->
						<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
						<!-- script pour les animations javascript -->
						<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
						<!-- script pour Bootstrap -->
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
						<script type="text/javascript" src="script.js"></script>
						<!-- c'est un autre script pour les animations AOS -->
						<script>
							AOS.init();
						</script>
					</footer>
				</body>
				</html>