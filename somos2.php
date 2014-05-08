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
								<img src="images/2.png" />
								<h1 style="padding-top:10px;">Elisa Herrera Fernández</h1>
							</div>
							
							<div style="margin-left:165px;">
							
								<H3>
									<?=$TXT_SOMOS_2_TITLE ?>
								</H3>

								<p style="line-height: 1.3em;"><?=$TXT_SOMOS_2_TXT ?></p>
								
								<!--p>
								<a name="2" target="_blank" href="http://es.linkedin.com/pub/elisa-herrera-fern%C3%A1ndez/1b/902/17">Perfil Linkedin<img src="images/lnkdin.png" style="vertical-align: middle;padding-left: 20;" /></a></h3>
								</p-->
								
								<p><?=$TXT_SOMOS_2_TXT2 ?></p>
								
								<p><?=$TXT_SOMOS_2_TXT3 ?></p>
								
								<p><?=$TXT_SOMOS_2_TXT4 ?></p>
								
								<p><?=$TXT_SOMOS_2_TXT5 ?></p>
								
								<p><?=$TXT_SOMOS_2_TXT6 ?></p>
								
								<p><?=$TXT_SOMOS_2_TXT7 ?></p>
								
								<p><b><?=$TXT_SOMOS_2_TXT8 ?></b></p>
								<div style="padding-left:10%;padding-bottom:20px;">
									<p><?=$TXT_SOMOS_2_TXT8a ?></p>
									<p><?=$TXT_SOMOS_2_TXT8b ?></p>
									<p><?=$TXT_SOMOS_2_TXT8c ?></p>
									<p><?=$TXT_SOMOS_2_TXT8d ?></p>
								</div>
								
								<p><b><?=$TXT_SOMOS_2_TXT9 ?></b></p>
								<div style="padding-left:10%;">
									<p><?=$TXT_SOMOS_2_TXT9a ?></p>
									<p><?=$TXT_SOMOS_2_TXT9b ?></p>
									<p><?=$TXT_SOMOS_2_TXT9c ?></p>
									<p><?=$TXT_SOMOS_2_TXT9d ?></p>
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