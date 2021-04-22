<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: 'Roboto', sans-serif;
			background-color: var(--white);
			color: var(--black);
		}
		:root {
			--realwhite	: #fafafa;
			--white		: #eaeaea;
			--black		: #3c3c3c;
			--purple	: #b91450;
			--yellow	: #ffff80;
		}
		.card {
			width: 400px;
			margin: 15px 15px 30px;
			padding: 30px 50px;
			color: var(--black);
			border-radius: 15px;
			background-color: var(--realwhite);
			box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
		}
		.author {
			color:var(--purple);
			text-align: right;
			text-align: right;
		}
		.high {
			background-color: var(--yellow);
		}
	</style>
	<title>php-badwords</title>
</head>
<body>

	<?php
		// echo $variabile
		// stampare il contenuto della variabile

		// explode(delimitatore, stringa)
		// creerà un array dividendo su un delimitatore una stringa

		// trim(stringa)
		// toglierà gli spazi bianchi all’inizio e alla fine di una stringa

		// str_replace(porzioneDaModificare, conCosa, stringa)
		// cambierà il valore di una porzione della stringa in un altro

		// strlen(stringa)
		// ritorna la lunghezza di una stringa

		// strpos(stringa, cosaCercare)
		// cerca all’interno di una stringa un’altra stringa e torna la posizione

		// ucfirst(stringa) - ucwords(stringa)
		// rende maiuscola o il primo carattere o il primo carattere di ogni parola
	?>

	<?php
		$badword  = $_GET['badword'];
		$goodword = '<span class="high">'.$badword.'</span>';

		$quote = '
			I know of no more encouraging fact than the unquestionable ability of man 
			to elevate his life by a conscious endeavor. 
			It is something to be able to paint a particular picture, or to carve a statue, 
			and so to make a few objects beautiful; but it is far more glorious to carve and paint the very atmosphere and medium through which we look, which morally we can do.  
			To affect the quality of the day, that is the highest of arts.  
		';

		$quote    = trim($quote);
		$length   = strlen($quote);
		$words    = explode(' ', $quote);
		$wordNum  = count($words);
		$pos      = strpos($quote, $badword);
		$newQuote = str_replace($badword, $goodword, $quote);

		// var_dump($newText);

		$html = '
			<p><em>'.$newQuote.'</em></p>
			<div class="author">Walt Whitman</div>
		';
	?>

	<div class="card">
		<?php echo $html ?>
	</div>

	<p>Keyname passato in GET : <em>badword=<span class="high"><?php echo $badword; ?></span></em>.</p>

	<p>Il testo:</p>
	<ul>
		<li>contiene <?php echo $wordNum; ?> parole</li>
		<li>è lungo <?php echo $length; ?> caratteri.</li>
		<li>la prima stringa <em><span class="high"><?php echo $badword; ?></span></em> appare in posizione <?php echo $pos; ?></li>
	</ul>
	<p></p>

</body>
</html>

