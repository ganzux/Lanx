<?php session_start();

ob_start();

include 'lang.php';
$_SESSION['ceimexpage']=4;
$_SESSION['ceimextitle']=$TXT_SOMOS_TITLEUP;
?>

<html>
	<?php include 'head.php' ?>

	<body>

		<?php include 'menu.php' ?>

		<div id="main">
			<div class="5grid">
				<div class="main-row">

					<div class="8u">
						<section class="middle-content">
							<div style="position:absolute;width:160px;text-align:center;">
								<img src="<?=getImage( "images/1.png" ) ?>" />
								<h1 style="padding-top:10px;"><?= numberize("Jesús Marín Alonso") ?></h1>
							</div>
							
							<div style="margin-left:165px;">
							
								<H3>
									<?=numberize($TXT_SOMOS_1_TITLE) ?>
								</H3>

								<p style="line-height: 1.3em;"><?=numberize($TXT_SOMOS_1_TXT) ?></p>
								<p>
									<a name="2" href="somos1.php">
										<?=numberize($TXT_SOMOS_PERFIL_C) ?>
									</a>
								</p>
							</div>
							
							<div style="padding-top:60px;position:absolute;width:160px;text-align:center;">
								<img src="<?=getImage( "images/2.png" ) ?>" />
								<h1 style="padding-top:10px;"><?= numberize("Elisa Herrera Fernández") ?></h1>
							</div>
							
							<div style="padding-top:60px;margin-left:165px;">
							
								<H3>
									<?=numberize($TXT_SOMOS_2_TITLE) ?>
								</H3>
							
								<p style="line-height: 1.3em;"><?=numberize($TXT_SOMOS_2_TXT) ?></p>
								
								<p><?=numberize($TXT_SOMOS_2_TXT2) ?></p>
								<p>
									<a name="2" href="somos2.php">
										<?=numberize($TXT_SOMOS_PERFIL_C) ?>
									</a>
								</p>
							</div>
							
							
							<div style="padding-top:60px;position:absolute;width:160px;text-align:center;">
								<img src="<?=getImage( "images/3.png" ) ?>" />
								<h1 style="padding-top:10px;"><?= numberize("Ángel Roda") ?></h1>
							</div>
							
							<div style="padding-top:60px;margin-left:165px;">
							
								<H3>
									<?=numberize($TXT_SOMOS_3_TITLE) ?>
								</H3>

								<p style="line-height: 1.3em;"><?=numberize($TXT_SOMOS_3_TXT) ?></p>
								<p>
									<a name="2" href="somos3.php">
										<?=numberize($TXT_SOMOS_PERFIL_C) ?>
									</a>
								</p>
							</div>
							
							<div style="padding-top:60px;position:absolute;width:160px;text-align:center;">
								<img src="<?=getImage( "images/4.png" ) ?>" />
								<h1 style="padding-top:10px;"><?= numberize("Mª Sol Muñoz Bañuls") ?></h1>
							</div>
							
							<div style="padding-top:60px;margin-left:165px;">
							
								<H3>
									<?=numberize($TXT_SOMOS_4_TITLE) ?>
								</H3>

								<p style="line-height: 1.3em;padding-bottom: 20px;"><?=numberize($TXT_SOMOS_4_TXT) ?></p>
								<p>
									<a name="2" href="somos4.php">
										<?=numberize($TXT_SOMOS_PERFIL_C) ?>
									</a>
								</p>
							</div>
						
						</section>
					</div>

					<?php include 'icontacto.php'; ?>

				</div>
			</div>
		</div>

		<?php include 'pie.php'; ?>

	</body>

</html>

<?php 
$test = ob_get_contents();
ob_end_clean();
echo preg_replace('/[ \t\r\n]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $test));
?>
