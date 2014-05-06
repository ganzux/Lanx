<?php
$classes = array("","","","","");
if ( isset( $_SESSION['ceimexpage'] ) )
	$classes[ $_SESSION['ceimexpage'] ] = "";

$lang= array("","");
if ( $_SESSION['ceimexlang'] == 'es' ) $lang[ 0 ] = "actual";
if ( $_SESSION['ceimexlang'] == 'en' ) $lang[ 1 ] = "actual";
?>

<div id="header-wrapper">
	<div class="5grid">
		<div class="12u-first">

			<ul id="menu-lang" style="display:none">
				<li class="<?= $lang[ 0 ] ?>"><a id="btn_es" href="index.php?l=es" title="Espa&ntilde;ol"></a></li>
				<li class="<?= $lang[ 1 ] ?>"><a id="btn_en" href="index.php?l=en" title="English"></a></li>
			</ul>
			
			<header id="header">
				<h1>
					<a href="#">
						<!--img src="images/480_h.jpg" /-->
						<div id="imagelanx">
						</div>
					</a>
				</h1>
				<nav>
					<a href="index.php" class="<?= $classes[0]?>"><?= $TXT_MENU_EMPRESA?> </a>
					<a href="producto.php" class="<?= $classes[1]?>"><?= $TXT_MENU_PRODUCTO?></a>
					<a href="somos.php" class="<?= $classes[4]?>"><?= $TXT_MENU_PROFESIONALES?></a>
					<a href="localizacion.php" class="<?= $classes[2]?>"><?= $TXT_MENU_LOCALIZACION?></a>
					<a href="contacto.php" class="<?= $classes[3]?>"><?= $TXT_MENU_CONTACTO?></a>
				</nav>
			</header>
		</div>
	</div>
</div>

<div id="banner-wrapper">
	<div class="5grid">
		<div class="12u-first">
			<h2><?= $_SESSION['ceimextitle']?></h2>
		</div>
	</div>
</div>