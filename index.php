<?php
	$pages = ['home', 'about-us', 'car-shop', 'cart', 'check-out', 'contact'];
	$page = isset($_GET['p']) ? stripcslashes(htmlspecialchars($_GET['p'])) : 'home';

	ob_start();
		if(in_array($page, $pages)) {
			require 'App/Pages/Front/'.$page.'.php';
			$content = ob_get_contents();
		}else {
			require 'App/Pages/Front/home.php';
			$content = ob_get_contents();
		}
	ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Flexy Auto / <?= ucfirst($page); ?></title>
        <meta content="" name="description" />
        <meta content="BMW, Honda, Jeep, GMC, Ford, Coupe, Convertible, 4-Door, SUV, Truck/Pickup Truc, 100% Brand New, Used Car, Delivery, Delivery, automobile, aaa automobile, automobile glass, automobile shop" name="keywords" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="telephone=no" name="format-detection" />
        <meta name="HandheldFriendly" content="true" />
        <link rel="stylesheet" href="Dist/css/master.css" />
        <link rel="icon" type="image/x-icon" href="logo.png" />
        <!--[if lt IE 9 ]>
            <script src="js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
        <![endif]-->
    </head>

    <body>
        <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span>
        </div>

            <?php require 'App/Pages/Inc/header.php' ?>
            <?= $content; ?>
    		<?php require 'App/Pages/Inc/footer.php' ?>
		</div>

        <script src="Dist/libs/jquery-1.12.4.min.js"></script>
        <script src="Dist/libs/jquery-migrate-1.2.1.js"></script>
        <script src="Dist/libs/bootstrap/bootstrap.min.js"></script>
        <script src="Dist/js/custom.js"></script>
        <script src="Dist/plugins/headers/slidebar.js"></script>
        <script src="Dist/plugins/headers/header.js"></script>
        <script src="Dist/plugins/switcher/js/dmss.js"></script>
        <script src="Dist/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
        <script src="Dist/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script src="Dist/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="Dist/plugins/jqBootstrapValidation.js"></script>
        <script src="Dist/plugins/contact_me.js"></script>
        <script src="Dist/plugins/isotope/isotope.pkgd.min.js"></script>
        <script src="Dist/plugins/isotope/imagesLoaded.js"></script>
        <script src="Dist/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="Dist/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
        <script src="Dist/plugins/noUiSlider/nouislider.min.js"></script>
        <script src="Dist/plugins/noUiSlider/wNumb.js"></script>
        <script src="Dist/plugins/scrollreveal/scrollreveal.min.js"></script>
        <script src="Dist/plugins/slider-pro/jquery.sliderPro.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBqyQAVh8DJgCEeikupo8HqHW9N2n7qp4"></script>
        <script src="Dist/js/map-custom.js"></script>
    </body>
</html>