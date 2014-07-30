<?php session_start();

//ob_start();

include 'lang.php';
$_SESSION['ceimexpage']=1;
$_SESSION['ceimextitle']=$TXT_PRODUC_TITLE;
?>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xml:lang="es">
	<?php include 'head.php' ?>

	<body>

		<?php include 'menu.php' ?>

		<div id="main">
			<div class="5grid">
				<div class="main-row">

					<div class="2u-first">

						<section style="padding-left:12px;">
							<h2><?= numberize( $TXT_PRODUC_H1_P0 ) ?></h2>
							<ul class="link-list" style="padding-left:10px;">
								<li><a href="#" id="C2"><?= numberize( $TXT_PRODUC_H1_TITLE ) ?></a></li>
								<li><a href="#" id="C1"><?= numberize( $TXT_PRODUC_H0_TITLE ) ?></a></li>
								<li><a href="#" id="C4"><?= numberize( $TXT_PRODUC_H3_TITLE ) ?></a></li>
								<!--li><a href="#" id="C5">< ? = $ TXT_INDEX_H4_TITLE ? ></a></li-->
								<li><a href="#" id="C6"><?= numberize( $TXT_INDEX_H5_TITLE ) ?></a></li>
								<li><a href="#" id="C7"><?= numberize( $TXT_PRODUC_H4_TITLE ) ?></a></li>
							</ul>
						</section>
					</div>
				
					<div class="7u">
						<section class="middle-content">
							<div id="CC0">
								<a name="1"></a>
								<h3><?= numberize( $TXT_PRODUC_TITLE ) ?></h3>
								<p style="padding-top: 6;padding-bottom: 6;text-align: center;font-weight: bold;border-top: 2px solid rgb(173, 173, 173);border-bottom: 2px solid rgb(173, 173, 173);"><?= numberize( $TXT_PRODUC_HT_P1 ) ?></p>
								
								<div style="text-align:center;padding-top:25px;">
									<img src="<?=getImage('images/puzzle.jpg') ?>" style="width:350px" alt="Puzzle Servicio LANX"></img>
								</div>
							</div>
							
							<div id="CC2" style="display: none;">
								<a name="2"></a>
								<h3><?= numberize( $TXT_PRODUC_H1_TITLE ) ?></h3>
								
								<div style="display: inline-block;text-decoration: none;padding: 0 15px 0 0px;">
									<a href="#" id="B1"><?=  numberize($TXT_PRODUC_CONSULTORIA_SUB1)?> </a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 15px 0 15px;">
									<a href="#" id="B2"><?=  numberize($TXT_PRODUC_CONSULTORIA_SUB2)?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 15px 0 15px;">
									<a href="#" id="B3"><?=  numberize($TXT_PRODUC_CONSULTORIA_SUB3)?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 15px 0 15px;">
									<a href="#" id="B4"><?=  numberize($TXT_PRODUC_CONSULTORIA_SUB4)?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 15px 0 15px;">
									<a href="#" id="B5"><?=  numberize($TXT_PRODUC_CONSULTORIA_SUB5)?></a>
								</div>
								
								<div id="CB0" style="text-align:center;padding-top:25px;;padding-bottom:25px;">
									<img src="<?=getImage('images/l1.png') ?>" style="width:350px" alt="Martillo Despacho LANX"></img>
								</div>

								<div id="CB1" style="display: none;">
									<a name="CB1"></a>
									
									<div style="text-align:center;padding-top:20px;">
										<img src="<?=getImage( $TXT_PRODUC_CONSULTORIA_1img ) ?>" alt="Despacho - Civil LANX"></img>
									</div>
									
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_1 ) ?></h3>
									
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_1a ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_1b ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_1c ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_1d ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_1e ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_1f ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_1g ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_1h ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_1i ) ?> </li>
									</ul>
								</div>
								
								<div id="CB2" style="display: none;">
									<a name="CB2"></a>

									<div style="text-align:center;padding-top:20px;">
										<img src="<?=getImage( $TXT_PRODUC_CONSULTORIA_2img ) ?>" alt="Despacho - Laboral LANX"></img>
									</div>
									
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_2 ) ?></h3>
									
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_2a ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_2b ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_2c ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_2d ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_2e ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_2f ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_2g ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_2h ) ?> </li>
									</ul>
								</div>
								
								<div id="CB3" style="display: none;">
									<a name="CB3"></a>
									
									<div style="text-align:center;padding-top:20px;">
										<img src="<?=getImage( $TXT_PRODUC_CONSULTORIA_3img ) ?>" alt="Despacho - Mercantil LANX"></img>
									</div>
									
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_3 ) ?></h3>
									
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_3a ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_3b ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_3c ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_3d ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_3e ) ?> </li>
										<ul style="list-style: initial;padding-left:25px;letter-spacing: normal;line-height: normal;">
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_3e1 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_3e2 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_3e3 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_3e4 ) ?> </li>
										</ul>
									</ul>
								</div>
								
								<div id="CB4" style="display: none;">
									<a name="CB4"></a>
									
									<div style="text-align:center;padding-top:20px;">
										<img src="<?=getImage( $TXT_PRODUC_CONSULTORIA_4img ) ?>" alt="Despacho - Administrativo LANX"></img>
									</div>
									
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_4 ) ?></h3>
									
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_4a ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_4b ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_4c ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_4d ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_4e ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_4f ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_4g ) ?> </li>
									</ul>
								</div>
								
								<div id="CB5" style="display: none;">
									<a name="CB5"></a>
									
									<div style="text-align:center;padding-top:20px;">
										<img src="<?=getImage( $TXT_PRODUC_CONSULTORIA_5img ) ?>" alt="Despacho - Penal LANX"></img>
									</div>
									
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_5 ) ?></h3>
									
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_5a ) ?> </li>
										<ul style="list-style: initial;padding-left:25px;letter-spacing: normal;line-height: normal;">
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_5a1 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_5a2 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_5a3 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_5a4 ) ?> </li>
										</ul>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_5B ) ?> </li>
										<ul style="list-style: initial;padding-left:25px;letter-spacing: normal;line-height: normal;">
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_5B1 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_5B2 ) ?> </li>
										</ul>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_5C ) ?> </li>
									</ul>
								</div>
							</div>
							
							<div id="CC1" style="display: none;">
								<a name="1"></a>
								<h3><?= numberize( $TXT_PRODUC_H0_TITLE ) ?></h3>
								
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 0px;">
									<a href="#" id="A1"><?=  numberize($TXT_PRODUC_CONSULTORIA_ISO_1)?> </a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="A2"><?=  numberize($TXT_PRODUC_CONSULTORIA_ISO_2)?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="A3"><?=  numberize($TXT_PRODUC_CONSULTORIA_ISO_3)?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="A4"><?=  numberize($TXT_PRODUC_CONSULTORIA_ISO_4)?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="A5"><?=  numberize($TXT_PRODUC_CONSULTORIA_ISO_5)?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="A6"><?=  numberize($TXT_PRODUC_CONSULTORIA_ISO_6)?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="#" id="A7"><?=  numberize($TXT_PRODUC_CONSULTORIA_ISO_7)?></a>
								</div>
								<div style="display: inline-block;text-decoration: none;padding: 0 5px 0 5px;">
									<a href="contacto.php" id="CC2_8_no"><?=  numberize($TXT_PRODUC_CONSULTORIA_ISO_8)?></a>
								</div>
								
								<div style="text-align:center;padding-top:20px;padding-bottom:30px;">
									<img src="<?=getImage( $TXT_PRODUC_H0_P1 ) ?>" style="width:450px" alt="Consultoría de LANX"></img>
								</div>
								
								<div id="CA1" style="display: none;">
									<a name="CA1"></a>
									<p>
										<?=  numberize($TXT_PRODUC_H0_P2) ?>
										<b><?=  numberize($TXT_PRODUC_H0_P21) ?></b>
										<?=  numberize($TXT_PRODUC_H0_P22) ?>
									</p>
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_01 ) ?></h3>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_1a ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_1b ) ?> </p>
								</div>
								
								<div id="CA2" style="display: none;">
									<a name="CA2"></a>
									<p>
										<?=  numberize($TXT_PRODUC_H0_P2) ?>
										<b><?=  numberize($TXT_PRODUC_H0_P21) ?></b>
										<?=  numberize($TXT_PRODUC_H0_P22) ?>
									</p>
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_02 ) ?></h3>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_2a ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_2b ) ?> </p>
								</div>
								
								<div id="CA3" style="display: none;">
									<a name="CA3"></a>
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_03 ) ?></h3>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_3a ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_3b ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_3c ) ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_3c1 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_3c2 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_3c3 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_3c4 ) ?> </li>
									</ul>
								</div>
								
								<div id="CA4" style="display: none;">
									<a name="CA4"></a>
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_04 ) ?></h3>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_4a ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_4b ) ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_4b1 ) ?> </li>
									</ul>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_4c ) ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_4c1 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_4c2 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_4c3 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_4c4 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_4c5 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_4c6 ) ?> </li>
									</ul>
								</div>
								
								<div id="CA5" style="display: none;">
									<a name="CA5"></a>
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_05 ) ?></h3>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5a ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b ) ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b1 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b2 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b3 ) ?> </li>
										<ul style="list-style: initial;padding-left:25px;letter-spacing: normal;line-height: normal;">
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b31 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b32 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b33 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b34 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b35 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b36 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b37 ) ?> </li>
											<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b38 ) ?> </li>
										</ul>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b4 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5b5 ) ?> </li>
									</ul>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5c ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5d ) ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5da ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5db ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5dc ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_5dd ) ?> </li>
									</ul>
								</div>
								
								<div id="CA6" style="display: none;">
									<a name="CA6"></a>
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_06 ) ?></h3>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_6a ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_6b ) ?> </p>
									<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_6b1 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_6b2 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_6b3 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_6b4 ) ?> </li>
										<li> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_6b5 ) ?> </li>
									</ul>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_6d ) ?> </p>
								</div>
								
								<div id="CA7" style="display: none;">
									<a name="CA7"></a>
									<h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_07 ) ?></h3>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_7a ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_7b ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_7c ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_7d ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_7e ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_7f ) ?> </p>
									<p> <?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_7g ) ?> </p>
								</div>
								
								<div id="CA8" style="display: none;">
									<a name="CA8"></a>
									<a href="contacto.php"><h3 style="padding-top:25px;"><?= numberize( $TXT_PRODUC_CONSULTORIA_ISO_08 ) ?></h3></a>
								</div>
							</div>

							<div id="CC4" style="display: none;">
								<a name="4"></a>
								<h3><?= numberize( $TXT_PRODUC_H3_TITLE ) ?></h3>
								
								<div style="text-align:center;padding-top:20px;padding-bottom:30px;">
									<img src="<?=getImage( 'images/libros.jpg' ) ?>" style="width:450px" alt="Formación LANX"></img>
								</div>
								
								<p><?= numberize( $TXT_PRODUC_H3_P1 ) ?></p>
								
								<p> <?= numberize( $TXT_PRODUC_H3_P2 ) ?> </p>
								<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
									<li> <?= numberize( $TXT_PRODUC_H3_P21 ) ?> </li>
									<li> <?= numberize( $TXT_PRODUC_H3_P22 ) ?> </li>
									<li> <?= numberize( $TXT_PRODUC_H3_P23 ) ?> </li>
									<li> <?= numberize( $TXT_PRODUC_H3_P24 ) ?> </li>
									<li> <?= numberize( $TXT_PRODUC_H3_P25 ) ?> </li>
									<li> <?= numberize( $TXT_PRODUC_H3_P26 ) ?> </li>
									<li> <?= numberize( $TXT_PRODUC_H3_P27 ) ?> </li>
								</ul>
								
							</div>
							
							<div id="CC5" style="display: none;">
								<a name="5"></a>
								<h3><?= numberize( $TXT_INDEX_H4_TITLE ) ?></h3>
								<p><?= numberize( $TXT_INDEX_P11 ) ?></p>
								<p><?= numberize( $TXT_INDEX_P12 ) ?></p>
								<p><?= numberize( $TXT_INDEX_P13 ) ?></p>
							</div>
							
							<div id="CC6" style="display: none;">
								<a name="6"></a>
								<h3><?= numberize( $TXT_INDEX_H5_TITLE ) ?></h3>
								<p><?= numberize( $TXT_INDEX_P14 ) ?></p>
								<p><?= numberize( $TXT_INDEX_P15 ) ?></p>
								<p><?= numberize( $TXT_INDEX_P16 ) ?></p>
								<p><?= numberize( $TXT_INDEX_P17 ) ?></p>
								<p><?= numberize( $TXT_INDEX_P18 ) ?></p>
								<p><?= numberize( $TXT_INDEX_P19 ) ?></p>
								<p><?= numberize( $TXT_INDEX_P20 ) ?></p>
								<p><?= numberize( $TXT_INDEX_P21 ) ?></p>
							</div>
							
							<div id="CC7" style="display: none;">
								<a name="7"></a>

								<h3><?= numberize( $TXT_PRODUC_H4_TITLE2 ) ?></h3>

								<div style="text-align:center;padding-top:20px;">
									<img width="400px;" src="<?=getImage( $TXT_PRODUC_H4_TITLEimg ) ?>" alt="Empresa Familiar LANX"></img>
								</div>
								<ul style="list-style: initial;padding-left:10px;letter-spacing: normal;line-height: normal;">
									<li><?= numberize( $TXT_FAMILIA_1 ) ?></li>
									<li><?= numberize( $TXT_FAMILIA_2 ) ?></li>
									<li><?= numberize( $TXT_FAMILIA_3 ) ?></li>
									<li><?= numberize( $TXT_FAMILIA_4 ) ?></li>
									<li><?= numberize( $TXT_FAMILIA_5 ) ?></li>
									<li><?= numberize( $TXT_FAMILIA_6 ) ?></li>
								</ul>
							</div>

						</section>
					</div>

					<?php include 'icontacto.php'; ?>

				</div>
			</div>
		</div>


		<?php include 'pie.php'; ?>

	</body>
	
	<script type="text/javascript">
	
	$(document).ready(function() {
	
		var change = function(id){
			for (i=0;i<10;i++){
				$('#C' + id.substr(0,id.length-1) + i).hide();
			}
			$('#C' + id ).toggle("slide");
		}
		
		for (i=0;i<10;i++){
			$('#C' + i).click(function() {
				change( this.id );
			});
			
			$('#B' + i).click(function() {
				change( this.id );
			});
			
			$('#A' + i).click(function() {
				change( this.id );
			});
		}

    });
	
	
	
	</script>
</html>

<?php 
//$test = ob_get_contents();
//ob_end_clean();
//echo preg_replace('/[ \t\r\n]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $test));
?>
