<?php session_start();
include 'lang.php';
$_SESSION['ceimexpage']=1;
$_SESSION['ceimextitle']=$TXT_PRODUC_TITLE;
?>

<html>
	<?php include 'head.php' ?>

	<body>

		<?php include 'menu.php' ?>

		<div id="main">
			<div class="5grid">
				<div class="main-row">

					<div class="2u-first">

						<section style="padding-left:12px;">
							<h2><?=$TXT_PRODUC_H1_P0 ?></h2>
							<ul class="link-list" style="padding-left:10px;">
								<li><a href="#" id="C2"><?=$TXT_PRODUC_H1_TITLE ?></a></li>
								<li><a href="#" id="C1"><?=$TXT_PRODUC_H0_TITLE ?></a></li>
								<li><a href="#" id="C4"><?=$TXT_PRODUC_H3_TITLE ?></a></li>
								<li><a href="#" id="C5"><?=$TXT_INDEX_H4_TITLE ?></a></li>
								<li><a href="#" id="C6"><?=$TXT_INDEX_H5_TITLE ?></a></li>
								<li><a href="#" id="C7"><?=$TXT_PRODUC_H4_TITLE ?></a></li>
							</ul>
						</section>
					</div>
				
					<div class="7u">
						<section class="middle-content">
							<div id="CC0">
								<a name="1"></a>
								<h3><?=$TXT_PRODUC_TITLE ?></h3>
								<p style="padding-top: 6;padding-bottom: 6;text-align: center;font-weight: bold;border-top: 2px solid rgb(173, 173, 173);border-bottom: 2px solid rgb(173, 173, 173);"><?=$TXT_PRODUC_HT_P1 ?></p>
								
								<div style="text-align:center;padding-top:25px;">
									<img src="images/puzzle.jpg" style="width:350px" />
								</div>
							</div>
							
							<div id="CC2" style="display: none;">
								<a name="2"></a>
								<h3><?=$TXT_PRODUC_H1_TITLE ?></h3>
								
								<div style="display: inline-block;text-decoration: none;padding: 0 15px 0 0px;">
									<a href="#" id="CCC_1"><?= $TXT_PRODUC_CONSULTORIA_SUB1?> </a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 15px 0 15px;">
									<a href="#" id="CCC_2"><?= $TXT_PRODUC_CONSULTORIA_SUB2?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 15px 0 15px;">
									<a href="#" id="CCC_3"><?= $TXT_PRODUC_CONSULTORIA_SUB3?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 15px 0 15px;">
									<a href="#" id="CCC_4"><?= $TXT_PRODUC_CONSULTORIA_SUB4?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 15px 0 15px;">
									<a href="#" id="CCC_5"><?= $TXT_PRODUC_CONSULTORIA_SUB5?></a>
								</div>
								
								<div id="hummer" style="text-align:center;padding-top:25px;;padding-bottom:25px;">
									<img src="images/l1.png" style="width:350px" />
								</div>

								<div id="CCC1" style="display: none;">
									<a name="CCC1"></a>
									
									<div style="text-align:center;padding-top:20px;">
										<img src="<?=$TXT_PRODUC_CONSULTORIA_1img ?>" />
									</div>
									
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_1 ?></h3>
									
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_1a ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_1b ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_1c ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_1d ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_1e ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_1f ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_1g ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_1h ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_1i ?> </li>
									</ul>
								</div>
								
								<div id="CCC2" style="display: none;">
									<a name="CCC2"></a>

									<div style="text-align:center;padding-top:20px;">
										<img src="<?=$TXT_PRODUC_CONSULTORIA_2img ?>" />
									</div>
									
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_2 ?></h3>
									
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_2a ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_2b ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_2c ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_2d ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_2e ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_2f ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_2g ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_2h ?> </li>
									</ul>
								</div>
								
								<div id="CCC3" style="display: none;">
									<a name="CCC3"></a>
									
									<div style="text-align:center;padding-top:20px;">
										<img src="<?=$TXT_PRODUC_CONSULTORIA_3img ?>" />
									</div>
									
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_3 ?></h3>
									
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_3a ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_3b ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_3c ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_3d ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_3e ?> </li>
										<ul style="list-style: initial;padding-left:25px;letter-spacing: normal;line-height: normal;">
											<li> <?=$TXT_PRODUC_CONSULTORIA_3e1 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_3e2 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_3e3 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_3e4 ?> </li>
										</ul>
									</ul>
								</div>
								
								<div id="CCC4" style="display: none;">
									<a name="CCC4"></a>
									
									<div style="text-align:center;padding-top:20px;">
										<img src="<?=$TXT_PRODUC_CONSULTORIA_4img ?>" />
									</div>
									
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_4 ?></h3>
									
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_4a ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_4b ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_4c ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_4d ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_4e ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_4f ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_4g ?> </li>
									</ul>
								</div>
								
								<div id="CCC5" style="display: none;">
									<a name="CCC5"></a>
									
									<div style="text-align:center;padding-top:20px;">
										<img src="<?=$TXT_PRODUC_CONSULTORIA_5img ?>" />
									</div>
									
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_5 ?></h3>
									
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_5a ?> </li>
										<ul style="list-style: initial;padding-left:25px;letter-spacing: normal;line-height: normal;">
											<li> <?=$TXT_PRODUC_CONSULTORIA_5a1 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_5a2 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_5a3 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_5a4 ?> </li>
										</ul>
										<li> <?=$TXT_PRODUC_CONSULTORIA_5B ?> </li>
										<ul style="list-style: initial;padding-left:25px;letter-spacing: normal;line-height: normal;">
											<li> <?=$TXT_PRODUC_CONSULTORIA_5B1 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_5B2 ?> </li>
										</ul>
										<li> <?=$TXT_PRODUC_CONSULTORIA_5C ?> </li>
									</ul>
								</div>
							</div>
							
							<div id="CC1" style="display: none;">
								<a name="1"></a>
								<h3><?=$TXT_PRODUC_H0_TITLE ?></h3>
								
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 0px;">
									<a href="#" id="CC2_1"><?= $TXT_PRODUC_CONSULTORIA_ISO_1?> </a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="CC2_2"><?= $TXT_PRODUC_CONSULTORIA_ISO_2?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="CC2_3"><?= $TXT_PRODUC_CONSULTORIA_ISO_3?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="CC2_4"><?= $TXT_PRODUC_CONSULTORIA_ISO_4?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="CC2_5"><?= $TXT_PRODUC_CONSULTORIA_ISO_5?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="CC2_6"><?= $TXT_PRODUC_CONSULTORIA_ISO_6?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="CC2_7"><?= $TXT_PRODUC_CONSULTORIA_ISO_7?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="CC2_8"><?= $TXT_PRODUC_CONSULTORIA_ISO_8?></a>
								</div>
								
								<div style="text-align:center;padding-top:20px;padding-bottom:30px;">
									<img src="<?=$TXT_PRODUC_H0_P1 ?>" style="width:450px" />
								</div>
								
								<p><?= $TXT_PRODUC_H0_P2?></p>
								
								<div id="CC21" style="display: none;">
									<a name="CC21"></a>
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_ISO_01 ?></h3>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_1a ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_1b ?> </p>
								</div>
								
								<div id="CC22" style="display: none;">
									<a name="CC22"></a>
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_ISO_02 ?></h3>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_2a ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_2b ?> </p>
								</div>
								
								<div id="CC23" style="display: none;">
									<a name="CC23"></a>
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_ISO_03 ?></h3>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_3a ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_3b ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_3c ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_3c1 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_3c2 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_3c3 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_3c4 ?> </li>
									</ul>
								</div>
								
								<div id="CC24" style="display: none;">
									<a name="CC24"></a>
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_ISO_04 ?></h3>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_4a ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_4b ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_4b1 ?> </li>
									</ul>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_4c ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_4c1 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_4c2 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_4c3 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_4c4 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_4c5 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_4c6 ?> </li>
									</ul>
								</div>
								
								<div id="CC25" style="display: none;">
									<a name="CC25"></a>
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_ISO_05 ?></h3>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_5a ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b1 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b2 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b3 ?> </li>
										<ul style="list-style: initial;padding-left:25px;letter-spacing: normal;line-height: normal;">
											<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b31 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b32 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b33 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b34 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b35 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b36 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b37 ?> </li>
											<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b38 ?> </li>
										</ul>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b4 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5b5 ?> </li>
									</ul>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_5c ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_5d ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5da ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5db ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5dc ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_5dd ?> </li>
									</ul>
								</div>
								
								<div id="CC26" style="display: none;">
									<a name="CC26"></a>
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_ISO_06 ?></h3>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_6a ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_6b ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_6b1 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_6b2 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_6b3 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_6b4 ?> </li>
										<li> <?=$TXT_PRODUC_CONSULTORIA_ISO_6b5 ?> </li>
									</ul>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_6d ?> </p>
								</div>
								
								<div id="CC27" style="display: none;">
									<a name="CC27"></a>
									<h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_ISO_07 ?></h3>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_7a ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_7b ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_7c ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_7d ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_7e ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_7f ?> </p>
									<p> <?=$TXT_PRODUC_CONSULTORIA_ISO_7g ?> </p>
								</div>
								
								<div id="CC28" style="display: none;">
									<a name="CC28"></a>
									<a href="contacto.php"><h3 style="padding-top:25px;"><?=$TXT_PRODUC_CONSULTORIA_ISO_08 ?></h3></a>
								</div>
							</div>

							<div id="CC4" style="display: none;">
								<a name="4"></a>
								<h3><?=$TXT_PRODUC_H3_TITLE ?></h3>
								
								<div style="text-align:center;padding-top:20px;padding-bottom:30px;">
									<img src="images/libros.jpg" style="width:450px" />
								</div>
								
								<p><?=$TXT_PRODUC_H3_P1 ?></p>
							</div>
							
							<div id="CC5" style="display: none;">
								<a name="5"></a>
								<h3><?=$TXT_INDEX_H4_TITLE ?></h3>
								<p><?=$TXT_INDEX_P11 ?></p>
								<p><?=$TXT_INDEX_P12 ?></p>
								<p><?=$TXT_INDEX_P13 ?></p>
							</div>
							
							<div id="CC6" style="display: none;">
								<a name="6"></a>
								<h3><?=$TXT_INDEX_H5_TITLE ?></h3>
								<p><?=$TXT_INDEX_P14 ?></p>
								<p><?=$TXT_INDEX_P15 ?></p>
								<p><?=$TXT_INDEX_P16 ?></p>
								<p><?=$TXT_INDEX_P17 ?></p>
								<p><?=$TXT_INDEX_P18 ?></p>
								<p><?=$TXT_INDEX_P19 ?></p>
								<p><?=$TXT_INDEX_P20 ?></p>
								<p><?=$TXT_INDEX_P21 ?></p>
							</div>
							
							<div id="CC7" style="display: none;">
								<a name="7"></a>

								<h3><?=$TXT_PRODUC_H4_TITLE2 ?></h3>

								<div style="text-align:center;padding-top:20px;">
									<img width="400px;" src="<?=$TXT_PRODUC_H4_TITLEimg ?>" />
								</div>

								<p><?=$TXT_FAMILIA_1 ?></p>
								<p><?=$TXT_FAMILIA_2 ?></p>
								<p><?=$TXT_FAMILIA_3 ?></p>
								<p><?=$TXT_FAMILIA_4 ?></p>
								<p><?=$TXT_FAMILIA_5 ?></p>
							</div>

						</section>
					</div>

					<?php include 'icontacto.php'; ?>

				</div>
			</div>
		</div>


		<?php include 'pie.php'; ?>

	</body>
	
	<script>
	
	$(document).ready(function() {
        $('#C1').click(function() {
			$('#CC1').toggle("slide");
			$('#CC2').hide();
			$('#CC3').hide();
			$('#CC4').hide();
			$('#CC0').hide();
			$('#CC5').hide();
			$('#CC6').hide();
			$('#CC7').hide();
        });
		
		$('#C2').click(function() {
			$('#CC2').toggle("slide");
			$('#CC1').hide();
			$('#CC3').hide();
			$('#CC4').hide();
			$('#CC0').hide();
			$('#CC5').hide();
			$('#CC6').hide();
			$('#CC7').hide();
        });
		
		$('#C3').click(function() {
			$('#CC3').toggle("slide");
			$('#CC2').hide();
			$('#CC1').hide();
			$('#CC4').hide();
			$('#CC0').hide();
			$('#CC5').hide();
			$('#CC6').hide();
			$('#CC7').hide();
        });
		
		$('#C4').click(function() {
			$('#CC4').toggle("slide");
			$('#CC2').hide();
			$('#CC3').hide();
			$('#CC1').hide();
			$('#CC0').hide();
			$('#CC5').hide();
			$('#CC6').hide();
			$('#CC7').hide();
        });
		
		$('#C5').click(function() {
			$('#CC5').toggle("slide");
			$('#CC2').hide();
			$('#CC3').hide();
			$('#CC1').hide();
			$('#CC0').hide();
			$('#CC4').hide();
			$('#CC6').hide();
			$('#CC7').hide();
        });
		
		$('#C6').click(function() {
			$('#CC6').toggle("slide");
			$('#CC2').hide();
			$('#CC3').hide();
			$('#CC1').hide();
			$('#CC0').hide();
			$('#CC5').hide();
			$('#CC4').hide();
			$('#CC7').hide();
        });
		$('#C7').click(function() {
			$('#CC7').toggle("slide");
			$('#CC2').hide();
			$('#CC3').hide();
			$('#CC1').hide();
			$('#CC0').hide();
			$('#CC5').hide();
			$('#CC4').hide();
			$('#CC6').hide();
        });
    });
	
	$(document).ready(function() {
        $('#CCC_1').click(function() {
			$('#CCC1').toggle("slide");
			$('#CCC2').hide();
			$('#CCC3').hide();
			$('#CCC4').hide();
			$('#CCC5').hide();
			$('#hummer').hide();
        });
		
		$('#CCC_2').click(function() {
			$('#CCC2').toggle("slide");
			$('#CCC1').hide();
			$('#CCC3').hide();
			$('#CCC4').hide();
			$('#CCC5').hide();
			$('#hummer').hide();
        });
		
		 $('#CCC_3').click(function() {
			$('#CCC3').toggle("slide");
			$('#CCC2').hide();
			$('#CCC1').hide();
			$('#CCC4').hide();
			$('#CCC5').hide();
			$('#hummer').hide();
        });
		
		 $('#CCC_4').click(function() {
			$('#CCC4').toggle("slide");
			$('#CCC2').hide();
			$('#CCC3').hide();
			$('#CCC1').hide();
			$('#CCC5').hide();
			$('#hummer').hide();
        });
		
		 $('#CCC_5').click(function() {
			$('#CCC5').toggle("slide");
			$('#CCC2').hide();
			$('#CCC3').hide();
			$('#CCC4').hide();
			$('#CCC1').hide();
			$('#hummer').hide();
        });
    });
	
	$(document).ready(function() {
        $('#CC2_1').click(function() {
			$('#CC21').toggle("slide");
			$('#CC22').hide();
			$('#CC23').hide();
			$('#CC24').hide();
			$('#CC25').hide();
			$('#CC26').hide();
			$('#CC27').hide();
			$('#CC28').hide();
        });
		
		$('#CC2_2').click(function() {
			$('#CC22').toggle("slide");
			$('#CC21').hide();
			$('#CC23').hide();
			$('#CC24').hide();
			$('#CC25').hide();
			$('#CC26').hide();
			$('#CC27').hide();
			$('#CC28').hide();
        });
		
		$('#CC2_3').click(function() {
			$('#CC23').toggle("slide");
			$('#CC22').hide();
			$('#CC21').hide();
			$('#CC24').hide();
			$('#CC25').hide();
			$('#CC26').hide();
			$('#CC27').hide();
			$('#CC28').hide();
        });
		
		$('#CC2_4').click(function() {
			$('#CC24').toggle("slide");
			$('#CC22').hide();
			$('#CC23').hide();
			$('#CC21').hide();
			$('#CC25').hide();
			$('#CC26').hide();
			$('#CC27').hide();
			$('#CC28').hide();
        });
		
		$('#CC2_5').click(function() {
			$('#CC25').toggle("slide");
			$('#CC22').hide();
			$('#CC23').hide();
			$('#CC24').hide();
			$('#CC21').hide();
			$('#CC26').hide();
			$('#CC27').hide();
			$('#CC28').hide();
        });
		
		$('#CC2_6').click(function() {
			$('#CC26').toggle("slide");
			$('#CC22').hide();
			$('#CC23').hide();
			$('#CC24').hide();
			$('#CC25').hide();
			$('#CC21').hide();
			$('#CC27').hide();
			$('#CC28').hide();
        });
		
		$('#CC2_7').click(function() {
			$('#CC27').toggle("slide");
			$('#CC22').hide();
			$('#CC23').hide();
			$('#CC24').hide();
			$('#CC25').hide();
			$('#CC26').hide();
			$('#CC21').hide();
			$('#CC28').hide();
        });
		
		$('#CC2_8').click(function() {
			$('#CC28').toggle("slide");
			$('#CC22').hide();
			$('#CC23').hide();
			$('#CC24').hide();
			$('#CC25').hide();
			$('#CC26').hide();
			$('#CC27').hide();
			$('#CC21').hide();
        });
		
    });
	
	
	
	</script>
</html>