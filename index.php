<?php session_start();

ob_start();

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

<html>
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
								<img src="<?= getImage( $TXT_INDEX_P30 ) ?>" style="width:450px;padding-bottom:20px;" />

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
								<p style="text-align:center"><img src="<?=getImage( "images/".$TXT_INDEX_P10 ) ?>" width="500" /></p>
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
			$('#CC0').hide();
			$('#CC1').toggle("slide");
			$('#CC2').hide();
			$('#CC3').hide();
			$('#CC4').hide();
			$('#CC5').hide();
        });
		
		$('#C2').click(function() {
			$('#CC0').hide();
			$('#CC2').toggle("slide");
			$('#CC1').hide();
			$('#CC3').hide();
			$('#CC4').hide();
			$('#CC5').hide();
        });
		
		$('#C3').click(function() {
			$('#CC0').hide();
			$('#CC3').toggle("slide");
			$('#CC2').hide();
			$('#CC1').hide();
			$('#CC4').hide();
			$('#CC5').hide();
        });
		
		$('#C4').click(function() {
			$('#CC0').hide();
			$('#CC4').toggle("slide");
			$('#CC2').hide();
			$('#CC3').hide();
			$('#CC1').hide();
			$('#CC5').hide();
        });
		
		$('#C5').click(function() {
			$('#CC0').hide();
			$('#CC5').toggle("slide");
			$('#CC2').hide();
			$('#CC3').hide();
			$('#CC1').hide();
			$('#CC4').hide();
        });
    });
	
	</script>
</html>

<?php 
$test = ob_get_contents();
ob_end_clean();
echo preg_replace('/[ \t\r\n]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $test));
?>
