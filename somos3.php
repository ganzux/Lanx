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
								<img src="<?=getImage( "images/3.png" ) ?>" />
								<h1 style="padding-top:10px;"><?= numberize("Ángel Roda") ?></h1>
							</div>
							
							<div style="margin-left:165px;">
							
								<H3>
									<?=numberize($TXT_SOMOS_3_TITLE) ?>
								</H3>

								<p style="line-height: 1.3em;"><?=numberize($TXT_SOMOS_3_TXT) ?></p>
								
								<p>
								<a name="2" target="_blank" href="https://www.linkedin.com/"><?= numberize("Linkedin") ?><img src="<?=getImage( "images/lnkdin.png" ) ?>" style="vertical-align: middle;padding-left: 20;" /></a></h3>
								</p>

								<p><?=numberize($TXT_SOMOS_3_TXT2) ?></p>
								
								<p><?=numberize($TXT_SOMOS_3_TXT3) ?></p>
								
								<p><?=numberize($TXT_SOMOS_3_TXT4) ?></p>
								
								<p><?=numberize($TXT_SOMOS_3_TXT5) ?></p>

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
