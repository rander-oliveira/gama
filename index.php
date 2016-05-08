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
	</head>
	<body>
		<?php include(MODULES_PATH."menu.php"); ?>

		<div class="container cta" id="cta">
			<?php include(ELEMENTS_PATH."btn_cta.php"); ?>
		</div>

		<!-- Large modal -->
			

	    <div class="container marketing">
			<div class="row">
				<div class="col-lg-4">
					<img class="img-circle" src="<?php echo IMAGE_PATH ?>usr_gif_1.gif" alt="GIF" width="140" height="140">
					<h2 class="a">Dificuldade com troca</h2>
					<h5>Hering</h5>
					<p>No meu aniversario ganhei de presente uma roupa de Hering, a blusa era bonita eu gostei do modelo, mas ficou muito grande em mim. Fui em uma loja da Hering para troca-la em shopping mais perto da minha casa.</p>
					<p>Chegando lá fui informado por uma vendedora que não poderia realizar minha troca lá, pois o produto não havia sido compra lá (o que eu tenho a ver com isso a Hering não é uma franquia?). A gerente me disse que eu deveria procurar a alguma “loja de bairro” que tinha uma licença para vender as roupas da marca e lá sim eu poderia trocar.</p>
					<p>Pois bem... fui em uma loja nesses moldes e as vendedoras me informaram que não poderia trocar lá, que eu deveria trocar em uma loja de shopping blá blá blá....</p>
					<p>Resultado: não consigo trocar a blusa, porque cada loja empurra a responsabilidade para a outra. Na minha visão como a Hering é uma franquia eu poderia trocar em outra franqueada... e não é isso que está ocorrendo: (</p>
					<!-- <p><a class="btn btn-default" href="#" role="button">Ler mais &raquo;</a></p> -->
				</div><!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<img class="img-circle" src="<?php echo IMAGE_PATH ?>usr_gif_2.gif" alt="GIF" width="140" height="140">
					<h2 class="b">Mudança de preço</h2>
					<h5>Gol</h5>
					<p>Estava olhando no site da Gol passagens para uma viagem que farei em agosto. Vi uma passagem para Florianópolis por R$ 460,00 o preço tava mais ou menos em conta então resolvi comprar. No meio do processo o sistema trava e quando eu vou tentar realizar a compra de novo o preço já tinha passado para R$640,00.</p>
					<p>Isso é um absurdo, por causa de um erro deles e por questão de segundo houve um aumente de mais de R$ 200,00. É complicado, depois dessa to meio com um pé atrás em relação a Gol.</p>
					<!-- <p><a class="btn btn-default" href="#" role="button">Ler mais &raquo;</a></p> -->
				</div><!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<img class="img-circle" src="<?php echo IMAGE_PATH ?>usr_gif_3.gif" alt="GIF" width="140" height="140">
					<h2 class="c">Demora na entrega</h2>
					<h5>Americanas.com</h5>
					<p>Comprei um celular Moto G no site das americanas, muitos amigos tinham me indicado, mas nunca tinha feito compra por lá.</p>
					<p>Fui lá comprei, o prazo de entrega estava de 10 à 15 dias úteis. Porém deu os 15 dias e o celular não chegou, deu 20 dias e o celular não chegou. Isso não tive resposta nenhuma da americanas. Senti que a partir do momento que comprei o produto beleza agora eu fico largado e eles não ligam já que venderam o produto. O celular chegou com mais de 20 dias já tava imaginando que ele nunca chegaria kkk</p>
					<p>Enfim não gostei da experiência com a compra lá.</p>
					<!-- <p><a class="btn btn-default" href="#" role="button">Ler mais &raquo;</a></p> -->
				</div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
	    </div><!-- /.container -->

	    <div class="container">
	    	<?php include(ELEMENTS_PATH."btn_cta.php"); ?>
	    </div>

	    <?php include(ELEMENTS_PATH."modals.php"); ?>

	    <?php include(MODULES_PATH."footer.php"); ?>

	    <?php include_once("analyticstracking.php") ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>