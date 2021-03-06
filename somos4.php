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
								<img src="<?=getImage( "images/4.png" ) ?>" />
								<h1 style="padding-top:10px;"><?= numberize("Mª Sol Muñoz Bañuls") ?></h1>
							</div>
							
							<div style="margin-left:165px;">
							
								<H3>
									<?=numberize($TXT_SOMOS_4_TITLE) ?>
								</H3>
								
								<p style="line-height: 1.3em;"><?=numberize($TXT_SOMOS_4_TXT) ?></p>
								
								<p>
								<a name="2" target="_blank" href="https://www.linkedin.com/profile/view?id=25265708"><?= numberize("Linkedin") ?><img src="<?=getImage( "images/lnkdin.png" ) ?>" style="vertical-align: middle;padding-left: 20;" /></a></h3>
								</p>

								<p><?=numberize($TXT_SOMOS_4_TXT1) ?></p>
								<p><?=numberize($TXT_SOMOS_4_TXT2) ?></p>

								<p><b><?=numberize($TXT_SOMOS_4_TXTP) ?></b></p>
								<div style="padding-left:10%;">
									<p><?=numberize($TXT_SOMOS_4_TXTP1) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTP2) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTP3) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTP4) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTP5) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTP6) ?></p>
								</div>
								
								<p style="padding-top:20px;">
									<b><?=numberize($TXT_SOMOS_4_TXTC) ?></b>
								</p>
								<div style="padding-left:10%;">
									<p><?=numberize($TXT_SOMOS_4_TXTC1) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTC2) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTC3) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTC4) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTC5) ?></p>
								</div>
								
								<p style="padding-top:20px;">
									<b><?=numberize($TXT_SOMOS_4_TXTXP) ?></b>
								</p>
								
								<p style="padding-top:20px;">
									<b><?=numberize($TXT_SOMOS_4_TXTXP1) ?></b>
								</p>
								<div style="padding-left:10%;padding-top:20px;">
									<p><?=numberize($TXT_SOMOS_4_TXTXP11) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP12) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP13) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP14) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP15) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP16) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP17) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP18) ?></p>
								</div>
								
								<p style="padding-top:20px;">
									<b><?=numberize($TXT_SOMOS_4_TXTXP2) ?></b>
									<br />
									<?=numberize($TXT_SOMOS_4_TXTXP2a) ?>
									
								</p>
								<div style="padding-left:10%;padding-top:20px;">
									<p><?=numberize($TXT_SOMOS_4_TXTXP3) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP3x) ?></p>
								</div>
								
								<p style="padding-top:20px;">
									<b><?=numberize($TXT_SOMOS_4_TXTXP2) ?></b>
									<br />
									<?=numberize($TXT_SOMOS_4_TXTXP2a) ?>
									
								</p>
								<div style="padding-left:10%;padding-top:20px;">
									<p><?=numberize($TXT_SOMOS_4_TXTXP31) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP32) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP33) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP34) ?></p>
								</div>
								
								<p style="padding-top:20px;">
									<b><?=numberize($TXT_SOMOS_4_TXTXP4) ?></b>
									
								</p>
								<div style="padding-left:10%;padding-top:20px;">
									<p><?=numberize($TXT_SOMOS_4_TXTXP41) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP42) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP43) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP44) ?></p>
								</div>
								
								<p style="padding-top:20px;">
									<b><?=numberize($TXT_SOMOS_4_TXTXP5) ?></b>
									
								</p>
								<div style="padding-left:10%;padding-top:20px;">
									<p><?=numberize($TXT_SOMOS_4_TXTXP51) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTXP52) ?></p>
								</div>
								
								<p style="padding-top:20px;">
									<b><?=numberize($TXT_SOMOS_4_TXTXP6) ?></b>
								</p>
								
								
								<p style="padding-top:20px;">
									<b><?=numberize($TXT_SOMOS_4_TXTF) ?></b>
								</p>
								<div style="padding-left:10%;">
									<p><?=numberize($TXT_SOMOS_4_TXTF1) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTF2) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTF3) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTF4) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTF5) ?></p>
								</div>
								
								<p style="padding-top:20px;">
									<b><?=numberize($TXT_SOMOS_4_TXTCER) ?></b>
								</p>
								<div style="padding-left:10%;">
									<p><?=numberize($TXT_SOMOS_4_TXTCER1) ?></p>
									<p><?=numberize($TXT_SOMOS_4_TXTCER2) ?></p>
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
