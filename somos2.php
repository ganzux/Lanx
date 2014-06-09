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
								<img src="<?=getImage( "images/2.png" ) ?>" />
								<h1 style="padding-top:10px;"><?= numberize("Elisa Herrera Fernández") ?></h1>
							</div>
							
							<div style="margin-left:165px;">
							
								<H3>
									<?=numberize($TXT_SOMOS_2_TITLE) ?>
								</H3>

								<p style="line-height: 1.3em;"><?=numberize($TXT_SOMOS_2_TXT) ?></p>
								
								<p>
								<a name="2" target="_blank" href="http://es.linkedin.com/pub/elisa-herrera-fern%C3%A1ndez/1b/902/17"><?= numberize("Linkedin") ?><img src="<?=getImage( "images/lnkdin.png" ) ?>" style="vertical-align: middle;padding-left: 20;" /></a></h3>
								</p>
								
								<p><?=numberize($TXT_SOMOS_2_TXT2) ?></p>
								
								<p><?=numberize($TXT_SOMOS_2_TXT3) ?></p>
								
								<p><?=numberize($TXT_SOMOS_2_TXT4) ?></p>
								
								<p><?=numberize($TXT_SOMOS_2_TXT5) ?></p>
								
								<p><?=numberize($TXT_SOMOS_2_TXT6) ?></p>
								
								<p><?=numberize($TXT_SOMOS_2_TXT7) ?></p>
								
								<p><b><?=numberize($TXT_SOMOS_2_TXT8) ?></b></p>
								<div style="padding-left:10%;padding-bottom:20px;">
									<p><?=numberize($TXT_SOMOS_2_TXT8a) ?></p>
									<p><?=numberize($TXT_SOMOS_2_TXT8b) ?></p>
									<p><?=numberize($TXT_SOMOS_2_TXT8c) ?></p>
									<p><?=numberize($TXT_SOMOS_2_TXT8d) ?></p>
								</div>
								
								<p><b><?=numberize($TXT_SOMOS_2_TXT9) ?></b></p>
								<div style="padding-left:10%;">
									<p><?=numberize($TXT_SOMOS_2_TXT9a) ?></p>
									<p><?=numberize($TXT_SOMOS_2_TXT9b) ?></p>
									<p><?=numberize($TXT_SOMOS_2_TXT9c) ?></p>
									<p><?=numberize($TXT_SOMOS_2_TXT9d) ?></p>
								</div>

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
