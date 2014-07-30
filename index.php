<?php session_start();

//ob_start();

if ( isset( $_SESSION['ceimexlang'] ) )
	$lengua = $_SESSION['ceimexlang'];
else
	$lengua = "es";

if ( isset( $_GET['l'] ) ) 
	$lengua = $_GET['l'];

if ( $lengua != 'es' && $lengua != 'en' )
		$lengua = "es";

$_SESSION['ceimexlang'] = $lengua;

include 'lang.php';
$_SESSION['ceimexpage']=0;
$_SESSION['ceimextitle']= $TXT_INDEX_TITLE;
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
							<h2><?= numberize( $TXT_INDEX_H0_TITLE ) ?></h2>
							<ul class="link-list" style="padding-left:10px;">
								<li><a href="#" id="C1"><?= numberize( $TXT_INDEX_H1_TITLE ) ?></a></li>
								<li><a href="#" id="C2"><?= numberize( $TXT_INDEX_H2_TITLE ) ?></a></li>
								<li><a href="#" id="C3"><?= numberize( $TXT_INDEX_H3_TITLE ) ?></a></li>
							</ul>
						</section>
					</div>
				
					<div class="7u">
						<section class="middle-content">
							<div id="CC0">
								<a name="0"></a>
								<h3><?= numberize( $TXT_INDEX_TITLE ) ?></h3>
								<p><?= numberize( $TXT_INDEX_P1 ) ?></p>
								<p><?= numberize( $TXT_INDEX_P2 ) ?></p>
								
								<p style="padding-top: 6;padding-bottom: 6;text-align: center;font-weight: bold;border-top: 2px solid rgb(173, 173, 173);border-bottom: 2px solid rgb(173, 173, 173);">
									<?= numberize( $TXT_INDEX_P3 ) ?>
								</p>

							</div>

							<div id="CC1" style="display: none;">
								<a name="1"></a>
								<h3><?= numberize( $TXT_INDEX_H1_TITLE ) ?></h3>
								<p style="padding-top: 6;padding-bottom: 6;text-align: center;font-weight: bold;border-top: 2px solid rgb(173, 173, 173);border-bottom: 2px solid rgb(173, 173, 173);"><?= numberize( $TXT_INDEX_P31 ) ?></p>
								
								<div style="text-align:center">
								<img src="<?= getImage( $TXT_INDEX_P30 ) ?>" style="width:450px;padding-bottom:20px;" alt="Cuadro Quienes Somos de LANX"></img>

								</div>
								
								<p><?= numberize( $TXT_INDEX_P32 ) ?></p>
								<p><b><?= numberize( $TXT_INDEX_P33 ) ?></b><?= numberize( $TXT_INDEX_P33b ) ?></p>
								
							</div>
							
							<div id="CC2" style="display: none;">
								<a name="2"></a>
								<h3><?= numberize( $TXT_INDEX_H2_TITLE ) ?></h3>
								<p><?= numberize( $TXT_INDEX_P8 ) ?></p>
								<p>
									<?= numberize( $TXT_INDEX_P9 ) ?>
									<b><?= numberize( $TXT_INDEX_P9a ) ?></b>
									<?= numberize( $TXT_INDEX_P9b ) ?>
									<b><?= numberize( $TXT_INDEX_P9c ) ?></b>
									<?= numberize( $TXT_INDEX_P9d ) ?>
								
								</p>
							</div>
							
							<div id="CC3" style="display: none;">
								<a name="3"></a>
								<h3><?= numberize( $TXT_INDEX_H3_TITLE ) ?></h3>
								<p style="text-align:center">
									<img src="<?=getImage( "images/".$TXT_INDEX_P10 ) ?>" width="500" alt="Gráfico Valores de LANX"></img>
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
	
	<script>
	
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
		}

    });
	
	</script>
</html>

<?php 
//$test = ob_get_contents();
//ob_end_clean();
//echo preg_replace('/[ \t\r\n]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $test));
?>
