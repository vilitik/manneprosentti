<!DOCTYPE html>
<html>
	<head>

		<title>Mikä on mannenimesi?</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="Kuinka manne olet?">
		<meta property="og:description" content="Testaa tällä hassunhauskalla web-ohjelmalla mikä mannenimesi olisi!">
		<meta property="og:image" content="https://pictures.dealer.com/m/mercedesbenzofcaldwellmb/0575/66b3315169fb4e2474ef3546da8ff401x.jpg">
		<meta name="twitter:card" content="summary_large_image">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	</head>

<body>
	<div class="w3-container">
		<h2>Kuinka manne olet?</h2>
		<p>Testaa tällä hassunhauskalla web-ohjelmalla kuinka manne olet!</p>
		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (!empty($_POST['nimi'])) {
				$nimi = $_POST['nimi'];
				switch ($nimi) {
					case 'Nikolas':
						$pros = 100;
						break;
					case 'Raineri':
						$pros = 100;
						break;
					case 'Sabina':
						$pros = 79;
						break;
					case 'Hagert':
						$pros = 110;
						break;
					default:
						$pros = rand(0, 100);
						foreach (count_chars($data, 1) as $i => $val) {
							if (chr($i) == 'r' || chr($i) == 'R') {
								$pros = $pros + 16 * $val;	
							}
						}
						break;
				}
				?>
				<h1>Olet <?php echo $pros ?>% manne!</h1>
				<?php
			} else {
				?>
				<div class="w3-display-container w3-text-white">
					<img src="https://pictures.dealer.com/m/mercedesbenzofcaldwellmb/0575/66b3315169fb4e2474ef3546da8ff401x.jpg?impolicy=resize&w=650" alt="Lights" style="width:100%">
					<div class="w3-display-middle w3-large">
						<form class="w3-container" style="min-width:50vw" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<label>Etunimesi</label>
							<input class="w3-input w3-animate-input" type="text" name="nimi">	
							<button type="submit" class="w3-btn w3-blue-grey">Testaa</button>
						</form>
					</div>
				</div>
				<?php
			}
		}
		?>
		<small>Versio 20191022-111</small>
	</div>
</body>
</html>

