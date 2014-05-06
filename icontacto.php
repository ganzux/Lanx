<div class="3u">
	<section>
		<h2><?=$TXT_CONTACT_TITLE;?></h2>
			<ul class="link-list">
				<li>
					<h3>Correo</h3>
					<p style="padding-top:25px;">
						<a href="contacto.php">informacion@lanxiuris.es</a>
					</p>
				</li>
				<li>
					<h3>Teléfono</h3>
					<p style="padding-top:25px;">+34 91 091 04 88</p>
				</li>
				<li>
					<h3>Dirección</h3>
					<p style="padding-top:25px;">
						LANX ABOGADOS Y CONSULTORÍA<br />
						C/ Emilio Carrere 3, bajo<br />
						28015 Madrid, España
					</p>
				</li>
				
				<li>
					<h3>Linkedin</h3>
					<p style="padding-top:25px;">
						<a target="_blank" href="http://www.linkedin.com/company/5091003">
							Perfil Linkedin<img src="images/lnkdin.png" style="vertical-align: middle;padding-left:20px;" />
						</a>
					</p>
				</li>
			</ul>



			<?php

			$dbname = new PDO('sqlite:sqlite/lanx.sqlite');

			$result = $dbname->prepare("SELECT COUNT(*) as count FROM messages"); 
			$result->execute(); 
			$numRows = $result->fetchColumn(); 
			
			if ( $numRows > 0 ){
				echo '<h2 style="padding-top: 6;padding-bottom: 6;font-weight: bold;border-top: 2px solid rgb(173, 173, 173);">'.$TXT_DESTACADOS_TITLE.'</h2>';

				foreach ($dbname->query('SELECT * FROM messages') as $row) {
					echo "<h4>" . $row["title"] . "</h4>";
					echo "<p>" . $row["message"] . "</p>";
				}

			}
				
			?>
		
	</section>
</div>