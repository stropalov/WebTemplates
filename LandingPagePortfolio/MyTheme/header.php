<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Landing Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/tomato.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
<?php wp_head(); ?>
</head>

<body>
	<div class="loader">
		<div class="loader_inner"></div>
	</div>

	<header class="main_head main_color_bg parallax-window" data-parallax="scroll" data-image-src="img/bg.jpg" data-z-index="1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="logo_container">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 197.21155 197.21638" version="1.1" id="svg2">
							<path id="path3338" d="m 85.639184,196.34986 c -8.98123,-1.10864 -26.37065,-6.72944 -34,-10.98986 C 5.3202742,159.49442 -12.920616,103.30115 9.6507445,56.009515 35.258674,2.3556684 103.14827,-16.573789 152.80625,16.093889 c 9.38469,6.173749 22.09904,18.888095 28.27279,28.272782 24.99997,38.002345 20.5737,88.354329 -10.7064,121.792849 -11.28666,12.06547 -24.35624,20.32658 -40.73346,25.74709 -15.42819,5.10639 -28.18874,6.39499 -43.999996,4.44325 z m 38.999996,-11.29283 c 15.41119,-5.00098 25.17271,-10.7626 36.3615,-21.46194 11.70973,-11.19749 18.92933,-22.87913 24.14107,-39.06134 2.17289,-6.7467 2.84123,-11.07839 3.2401,-21 0.69381,-17.257746 0.53639,-17.635282 -4.13864,-9.925231 -14.18515,23.394141 -35.33853,44.351601 -55.10403,54.593711 -13.43669,6.96263 -20.99782,8.83672 -35.499996,8.79897 -13.86683,-0.0361 -20.46689,-1.69669 -29.96055,-7.53821 l -4.95062,-3.04614 -9.55314,3.57807 c -5.25423,1.96794 -11.79922,4.09652 -14.54442,4.73019 -2.7452,0.63367 -4.99127,1.45101 -4.99127,1.81632 0,1.15794 13.31395,13.48867 18,16.67071 16.64977,11.30596 31.44785,15.43875 53.499996,14.94144 13.09158,-0.29524 16.08144,-0.68921 23.5,-3.09655 z m -15.06389,-40.11066 c 24.5486,-5.9367 53.58095,-31.17002 71.03294,-61.73794 l 5.10375,-8.939432 -1.67558,-5.117626 C 179.80634,56.231758 171.74636,43.74801 161.00068,33.472398 149.77427,22.737083 138.02714,15.903199 123.10324,11.425586 113.07832,8.4178144 91.918094,7.6951014 80.549574,9.9721954 c -9.02888,1.8084666 -20.57318,6.3638476 -29.72893,11.7310296 -7.32612,4.294636 -24.71735,21.68586 -29.01198,29.01198 -10.1557,17.324373 -13.6655198,31.384748 -12.9128295,51.728935 0.55535,15.01039 2.1565895,21.68909 8.4727695,35.3396 3.22555,6.97107 3.86775,7.75 6.38955,7.75 3.17959,0 17.452,-3.221 23.19236,-5.23405 l 3.81134,-1.33658 -3.16228,-3.96468 c -9.74195,-12.21388 -14.69959,-32.39019 -12.08115,-49.167051 4.49452,-28.797162 26.36933,-55.777779 51.44164,-63.448647 10.25576,-3.137749 22.140686,-2.373203 31.013976,1.9951 20.82199,10.250635 25.47632,36.131513 11.11579,61.810536 -9.52176,17.026522 -32.857026,39.632002 -52.200646,50.568142 -2.8875,1.63248 -5.25,3.31405 -5.25,3.73683 0,0.80005 5.95989,3.23154 12,4.89571 5.51806,1.52033 18.753026,1.29443 25.936106,-0.44268 z M 68.417704,131.63644 c 24.85553,-12.58662 49.568806,-37.101981 57.354776,-56.895433 1.80033,-4.576813 2.25706,-7.787016 2.30585,-16.207261 0.0532,-9.179719 -0.24448,-11.115491 -2.36739,-15.394909 -2.93145,-5.909281 -7.65775,-10.810081 -13.34832,-13.841145 -3.47734,-1.852196 -5.81707,-2.250871 -13.244467,-2.256775 -8.155809,-0.0065 -9.651259,0.303093 -15.592069,3.227744 -11.4838,5.653457 -20.43389,15.358172 -27.91171,30.265085 -10.8455,21.620318 -12.44987,42.106384 -4.58144,58.500004 2.86279,5.96452 9.76074,15.5 11.21269,15.5 0.24782,0 3.02526,-1.30379 6.17208,-2.89731 z" />
						</svg>
					</div>
					<button class="toggle_menu">
						<span class="sandwich">
							<span class="sw-topper"></span>
						<span class="sw-bottom"></span>
						<span class="sw-footer"></span>
						</span>
					</button>
					<nav class="top_menu">
						<ul>
							<li><a href="#about">Обо мне</a>
							</li>
							<li><a href="#resume">Резюме</a>
							</li>
							<li><a href="#portfolio">Портфолио</a>
							</li>
							<li><a href="#contacts">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="top_wrapper">
			<div class="top_descr">
				<div class="top_center">
					<div class="top_text">
						<h1>John Doe</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
					</div>
				</div>
			</div>
		</div>
	</header>