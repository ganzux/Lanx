<?php session_start();
include 'lang.php';
$_SESSION['ceimexpage']=2;
$_SESSION['ceimextitle']=$TXT_LOCAL_TITLE;
?>

<html>
	<?php include 'head.php' ?>

	<body>

		<?php include 'menu.php' ?>

		<div id="main">
			<div class="5grid">
				<div class="main-row">

					<div class="8u">
						<section align="center">

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.9934471514134!2d-3.7093368000000018!3d40.431143999999925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422867178b92fd%3A0x38714f35a0091cf0!2sLANX+Abogados!5e0!3m2!1sen!2s!4v1394479100090" width="500" height="400" frameborder="0" style="border:0"></iframe>
							<br />
							<p>
								<a href="https://mapsengine.google.com/map/edit?mid=zmFuCGwZ3_4o.kP0S56Bzy0Cs" target="_blank">
									<?= $TXT_LOCAL_NEW_WIN ?>
								</a>
							</p>
						</section>
					</div>

					<?php include 'icontacto.php'; ?>

				</div>
			</div>
		</div>

		<?php include 'pie.php'; ?>

	</body>
</html>