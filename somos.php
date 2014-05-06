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
								<img src="images/1.png" />
								<h1 style="padding-top:10px;">Jesús Marín Alonso</h1>
							</div>
							
							<div style="margin-left:165px;">
								<p style="line-height: 1.3em;"><?=$TXT_SOMOS_1_TXT ?></p>
								<p>
									<a name="2" target="_blank" href="http://www.linkedin.com/profile/view?id=33742351">
										Perfil Linkedin
										<img src="images/lnkdin.png" style="vertical-align: middle;padding-left: 20;" />
									</a>
								</p>
							</div>
							
							<div style="padding-top:60px;position:absolute;width:160px;text-align:center;">
								<img src="images/2.png" />
								<h1 style="padding-top:10px;">Elisa Herrera Fernández</h1>
							</div>
							
							<div style="padding-top:60px;margin-left:165px;">
								<p style="line-height: 1.3em;"><?=$TXT_SOMOS_2_TXT ?></p>
								<p>
									<a name="2" target="_blank" href="http://es.linkedin.com/pub/elisa-herrera-fern%C3%A1ndez/1b/902/17">
										Perfil Linkedin
										<img src="images/lnkdin.png" style="vertical-align: middle;padding-left: 20;" />
									</a>
								</p>
							</div>
							
							
							<div style="padding-top:60px;position:absolute;width:160px;text-align:center;">
								<img src="images/3.png" />
								<h1 style="padding-top:10px;">Angel Roda</h1>
							</div>
							
							<div style="padding-top:60px;margin-left:165px;">
								<p style="line-height: 1.3em;"><?=$TXT_SOMOS_3_TXT ?></p>
								<p>
									<a name="2" target="_blank" href="">
										Perfil Linkedin
										<img src="images/lnkdin.png" style="vertical-align: middle;padding-left: 20;" />
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