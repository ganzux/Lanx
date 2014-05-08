<?php session_start();
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
								<img src="images/3.png" />
								<h1 style="padding-top:10px;">Ángel Roda</h1>
							</div>
							
							<div style="margin-left:165px;">
							
								<H3>
									<?=$TXT_SOMOS_3_TITLE ?>
								</H3>

								<p style="line-height: 1.3em;"><?=$TXT_SOMOS_3_TXT ?></p>

								<p><?=$TXT_SOMOS_3_TXT2 ?></p>
								
								<p><?=$TXT_SOMOS_3_TXT3 ?></p>
								
								<p><?=$TXT_SOMOS_3_TXT4 ?></p>
								
								<p><?=$TXT_SOMOS_3_TXT5 ?></p>

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