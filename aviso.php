<?php session_start();
include 'lang.php';
unset( $_SESSION['ceimexpage'] );
$_SESSION['ceimextitle']=$TXT_CONTACT_TITLE2;
?>

<html>
	<?php include 'head.php' ?>

	<body>

		<?php include 'menu.php' ?>

		<div id="main">
			<div class="8grid">
				<div class="main-row">

					<div class="8u">
						<section style="padding:20px;">

							<p><?= $TXT_ADVICE_P1 ?></p>

							<p>
								<p><?= $TXT_ADVICE_1_COND ?></p>
								<div style="padding-left:10%;text-align:justify;text-justify:inter-word;padding-right:10%;">
									<?= $TXT_ADVICE_1_DIV ?>
								</div>
							</p>
							
							<p>
								<p><?= $TXT_ADVICE_2_COND ?></p>
								<div style="padding-left:10%;text-align:justify;text-justify:inter-word;padding-right:10%;">
									<?= $TXT_ADVICE_2_DIV ?>
								</div>
							</p>
							
							<p>
								<p><?= $TXT_ADVICE_3_COND ?></p>
								<div style="padding-left:10%;text-align:justify;text-justify:inter-word;padding-right:10%;">
									<div>
										<?= $TXT_ADVICE_3_DIV1 ?>
									</div>

									<div>
										<?= $TXT_ADVICE_3_DIV2 ?>
									</div>

									<div>
										<?= $TXT_ADVICE_3_DIV3 ?>
									</div>
								</div>
							</p>
							
							<p>
								<p><?= $TXT_ADVICE_4_COND ?></p>
								<div style="padding-left:10%;text-align:justify;text-justify:inter-word;padding-right:10%;">
									<?= $TXT_ADVICE_4_A_ ?>
									<div style="padding-left:10%;padding-top:5px;text-align:justify;text-justify:inter-word;">
										<?= $TXT_ADVICE_4_A_DIV ?>
									</div>
								</div>

								<div style="padding-left:10%;padding-top:10px;text-align:justify;text-justify:inter-word;padding-right:10%;">
									<?= $TXT_ADVICE_4_B_ ?>
									<div style="padding-left:10%;padding-top:5px;text-align:justify;text-justify:inter-word;">
										<?= $TXT_ADVICE_4_B_DIV ?>
									</div>
								</div>

								<div style="padding-left:10%;padding-top:10px;text-align:justify;text-justify:inter-word;padding-right:10%;">
									<?= $TXT_ADVICE_4_C_ ?>
									<div style="padding-left:10%;padding-top:5px;text-align:justify;text-justify:inter-word;">
										<?= $TXT_ADVICE_4_C_DIV ?>
									</div>
								</div>
								
							</p>
								
							
							<p>
								<p><?= $TXT_ADVICE_5_COND ?></p>
								<div style="padding-left:10%;text-align:justify;text-justify:inter-word;padding-right:10%;">
									<?= $TXT_ADVICE_5_DIV ?>
								</div>
							</p>
						
						</section>
					</div>

				</div>
			</div>
		</div>

		<?php include 'pie.php'; ?>

	</body>
</html>