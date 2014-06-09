<?php session_start();

ob_start();

include 'lang.php';
$_SESSION['ceimexpage']=3;
$_SESSION['ceimextitle']=$TXT_CONTACT_TITLE2;
?>

<html>
	<?php include 'head.php' ?>

	<body>

		<?php include 'menu.php' ?>

		<div id="main">
			<div class="5grid">
				<div class="main-row">

					<div class="8u">
						<form action="#" method="post" name="f" id="f">
							<fieldset>
								<legend><?= numberize( $TXT_CONTACT_PERSON ) ?></legend>
								
								<label for="nombre" accesskey="n"><?= numberize( $TXT_CONTACT_NAME ) ?>: </label>
								<input type="text" id="nombre" name="nombre" tabindex="1" value="" title="<?= numberize( $TXT_CONTACT_NAME ) ?>" size="30"><br />
								
								<label for="company" class="required" accesskey="m"><?= numberize( $TXT_CONTACT_COMPANY ) ?>: </label>
								<input type="text" id="company" name="company" tabindex="2" title="<?= numberize( $TXT_CONTACT_COMPANY ) ?>" size="30"><br />

								<label for="telefono" accesskey="t"><?= numberize( $TXT_CONTACT_PHONE ) ?>: </label>
								<input type="text" id="telefono" name="telefono" tabindex="3" title="<?= numberize( $TXT_CONTACT_PHONE ) ?>" size="30"><br />

								<label for="email" class="required" accesskey="a"><?= numberize( $TXT_CONTACT_MAIL ) ?>: </label>
								<input type="text" id="email" name="email" tabindex="4" title="<?= numberize( $TXT_CONTACT_MAIL ) ?>" size="30"><br />
								
								<label for="cede" class="required" accesskey="d"><?= numberize("Ceder datos a LANX:") ?></label>
								<input type="checkbox" id="cede" name="cdde" tabindex="5" title="Ceder datos a LANX"><br />

							</fieldset>
							
							<br />

							<fieldset>
								<legend><?= numberize( $TXT_CONTACT_COMMEN1 ) ?></legend>

								<label for="comments" accesskey="c"><?= numberize( $TXT_CONTACT_COMMEN2 ) ?>: </label>
								<textarea name="comments" rows="5" cols="44" id="comments" tabindex="6" title="<?= numberize( $TXT_CONTACT_COMMEN2 ) ?>" ></textarea><br />

								<a href="#" class="button" onclick="sM();"><?= numberize( $TXT_CONTACT_SEND ) ?></a>
							</fieldset>
						</form>
					</div>

					<?php include 'icontacto.php'; ?>

				</div>
			</div>
		</div>

		<?php include 'pie.php'; ?>

	</body>
</html>

<?php 
$test = ob_get_contents();
ob_end_clean();
echo preg_replace('/[ \t\r\n]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $test));
?>
