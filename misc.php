<?php
	$misc = json_decode(file_get_contents('./data/misc.json'), true);
	$links = $misc['links'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial=scale=1.0">
	<meta name="description" content="My name is Ícaro Vaz Freire, this is my online portfolio, hope you like my work.">
	<title>Miscellaneous</title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/misc.css">
	<script src="https://kit.fontawesome.com/821f984533.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="page">
		<nav class="navigation">
			<div class="wrapper">
				<div class="menu">
					<ul>
						<a href="/"><li>Ícaro Freire</li></a>
						<a href="#links-container"><li>Links</li></a>
					</ul>
				</div>
			</div>
		</nav>
		<header class="title">
			<div class="title">
				<div class="wrapper">
					<h1>MISCELLANEOUS</h1>
					<p>A collection of random stuff I find interesting.</p>
				</div>
			</div>
		</header>
		<div class="content">
			<div class="stack">

				<div class="element" id="links-container">
					<div class="holder">
						<div class="wrapper">
							<div class="panel">
								<div class="title"><span>LINKS</span></div>
								<div class="content">
									<div class="cards" id="links">
										<?php
											foreach($links as $link) {
												echo "
													<a href='".$link['link']."' target='_blank'>
														<div class='card'>
															<div class='thumb'><img src='res/misc/links/".$link['thumb']."'></div>
															<div class='text'>
																<h3>".$link['title']."</h3><br>
																<p>".$link['description']."</p>
															</div>
														</div>
													</a>
												";
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<footer>
			<div class="bottom">
				<div class="wrapper">
					<p>Created by Ícaro Freire in April 2021</p>
					<p>São Paulo - Brazil</p>
				</div>
			</div>
		</footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
