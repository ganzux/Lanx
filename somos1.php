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
								
								<p><a name="2" target="_blank" href="http://www.linkedin.com/profile/view?id=33742351&authType=NAME_SEARCH&authToken=tkyB&locale=en_US&srchid=4bfca426-35d5-48c1-896e-34bc50450292-0&srchindex=1&srchtotal=1&goback=%2Efps_PBCK_Jesus+marin+alonso_*1_*1_*1_*1_*1_*1_*2_*1_Y_*1_*1_*1_false_1_R_true_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&pvs=ps&trk=pp_profile_name_link">Perfil Linkedin<img src="images/lnkdin.png" style="vertical-align: middle;padding-left: 20;" /></a></h3></p>
								
								<p><b><?=$TXT_SOMOS_1_ESPECIA ?></b></p>
								<div style="padding-left:10%;">
									<p><?=$TXT_SOMOS_1_ESP_1 ?></p>
									<p><?=$TXT_SOMOS_1_ESP_2 ?></p>
									<p><?=$TXT_SOMOS_1_ESP_3 ?></p>
								</div>
								<p><b><p><?=$TXT_SOMOS_1_XP ?></p></b></p>
								<div style="padding-left:10%;">
									<p><?=$TXT_SOMOS_1_XP_1 ?></p>
									<p><?=$TXT_SOMOS_1_XP_2 ?></p>
									<p><?=$TXT_SOMOS_1_XP_3 ?></p>
									<p><?=$TXT_SOMOS_1_XP_4 ?></p>
								</div>
								<p><b><p><?=$TXT_SOMOS_1_FORMA ?></p></b></p>
								<div style="padding-left:10%;">
									<p><?=$TXT_SOMOS_1_FORMA_1 ?></p>
									<p><?=$TXT_SOMOS_1_FORMA_2 ?></p>
									<p><?=$TXT_SOMOS_1_FORMA_3 ?></p>
								</div>
								<p><b><p><?=$TXT_SOMOS_1_LANG ?></p></b></p>
								<div style="padding-left:10%;">										
									<p><?=$TXT_SOMOS_1_LANG_1 ?></p>
									<p><?=$TXT_SOMOS_1_LANG_2 ?></p>
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