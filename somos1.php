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
								<a name="2" target="_blank" href="http://www.linkedin.com/profile/view?id=33742351"><?= numberize("Linkedin") ?><img src="<?=getImage( "images/lnkdin.png" ) ?>" style="vertical-align: middle;padding-left: 20;" /></a></h3>
								</p>
								
								<p><?=numberize($TXT_SOMOS_1_P2) ?></p>
								<p><?=numberize($TXT_SOMOS_1_P3) ?></p>
								<p><?=numberize($TXT_SOMOS_1_P4) ?></p>
								
	
								<p><b><?=numberize($TXT_SOMOS_1_XP) ?></b></p>
								<div style="padding-left:10%;">
									<p><?=numberize($TXT_SOMOS_1_XP1) ?></p>
									<p><?=numberize($TXT_SOMOS_1_XP2) ?></p>
									<p><?=numberize($TXT_SOMOS_1_XP3) ?></p>
									<p><?=numberize($TXT_SOMOS_1_XP4) ?></p>
									<p><?=numberize($TXT_SOMOS_1_XP5) ?></p>
									<p><?=numberize($TXT_SOMOS_1_XP6) ?></p>
									<p><?=numberize($TXT_SOMOS_1_XP7) ?></p>
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
