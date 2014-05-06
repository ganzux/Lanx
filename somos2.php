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
								<p style="line-height: 1.3em;"><?=$TXT_SOMOS_2_TXT ?></p>
								
								<p><a name="2" target="_blank" href="http://es.linkedin.com/pub/elisa-herrera-fern%C3%A1ndez/1b/902/17">Perfil Linkedin<img src="images/lnkdin.png" style="vertical-align: middle;padding-left: 20;" /></a></h3></p>
								
								<p><b><?=$TXT_SOMOS_2_ESPECIA ?></b></p>
								<div style="padding-left:10%;">
									<p><?=$TXT_SOMOS_2_ESP_1 ?></p>
									<p><?=$TXT_SOMOS_2_ESP_2 ?></p>
									<p><?=$TXT_SOMOS_2_ESP_3 ?></p>
								</div>
								<p><b><p><?=$TXT_SOMOS_2_XP ?></p></b></p>
								<div style="padding-left:10%;">
									<p><?=$TXT_SOMOS_2_XP_1 ?></p>
									<p><?=$TXT_SOMOS_2_XP_2 ?></p>
									<p><?=$TXT_SOMOS_2_XP_3 ?></p>
									<p><?=$TXT_SOMOS_2_XP_4 ?></p>
								</div>
								<p><b><p><?=$TXT_SOMOS_2_FORMA ?></p></b></p>
								<div style="padding-left:10%;">
									<p><?=$TXT_SOMOS_2_FORMA_1 ?></p>
									<p><?=$TXT_SOMOS_2_FORMA_2 ?></p>
									<p><?=$TXT_SOMOS_2_FORMA_3 ?></p>
								</div>
								<p><b><p><?=$TXT_SOMOS_2_LANG ?></p></b></p>
								<div style="padding-left:10%;">										
									<p><?=$TXT_SOMOS_2_LANG_1 ?></p>
									<p><?=$TXT_SOMOS_2_LANG_2 ?></p>
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