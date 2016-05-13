<?php
	include("settings/settings.php");
	// include(SETTINGS_PATH."controller.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Clientes Satisfeitos</title>

		<!-- Bootstrap -->
    	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<link href="<?php echo CSS_PATH; ?>style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo FAVICON_PATH; ?>/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo FAVICON_PATH; ?>/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo FAVICON_PATH; ?>/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo FAVICON_PATH; ?>/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo FAVICON_PATH; ?>/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo FAVICON_PATH; ?>/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo FAVICON_PATH; ?>/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo FAVICON_PATH; ?>/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo FAVICON_PATH; ?>/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo FAVICON_PATH; ?>/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo FAVICON_PATH; ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo FAVICON_PATH; ?>/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo FAVICON_PATH; ?>/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		
		<!-- Open Graph tags -->
		<meta property="og:site_name" content="Clientes Satisfeitos">
		<meta property="og:url" content="http://www.clientessatisfeitos.com.br/">
		<meta name="description" content="Somos um blog sobre gestão de satisfação de clientes! Acesse e saiba mais sobre como gerenciar e monitorar a satisfação e fidelidade dos seus clientes." />
		<meta name="keywords" content="satisfação de clientes, clientes, atendimento, fidelização de clientes, imagem empresarial, gestão empresarial, planejamento estratégico," />
		<meta name="robots" content="index, follow">
		<meta property="og:image" content="http://www.clientessatisfeitos.com.br/media/logo_fb.png">
		<meta property="og:image:type" content="image/png">
		<!--<meta property="og:image:width" content="200"> /** PIXELS **/
		<meta property="og:image:height" content="227"> /** PIXELS **/-->
	</head>
	<body>
		<div id="fb-root"></div>

		<?php include(MODULES_PATH."menu.php"); ?>

		<div class="container presentation">
			<?php include(ELEMENTS_PATH."presentation.php") ?>
		</div>

	    <div class="container features">
	    	<?php include ELEMENTS_PATH."company.php"; ?>
	    </div>

	    <div class="container fb">
	    	<?php include(ELEMENTS_PATH."facebook_page.php"); ?>
	    </div>

	    <?php include(ELEMENTS_PATH."modals.php"); ?>

	    <?php include(MODULES_PATH."footer.php"); ?>

	    <?php include_once("analyticstracking.php"); ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=966963180055509";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	</body>
</html>