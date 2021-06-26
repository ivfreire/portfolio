<?php
	$projects = json_decode(file_get_contents('./data/projects.json'), true);
	$extracurricular = $projects['extracurricular'];
	$standalone = $projects['standalone'];
	$internships = $projects['internships'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial=scale=1.0">
	<meta name="description" content="Learn more about me, Ícaro Freire.">
	<title>Projects</title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/projects.css">
	<script src="https://kit.fontawesome.com/821f984533.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="page">
		<nav class="navigation">
			<div class="wrapper">
				<div class="menu">
					<ul>
						<a href="/"><li>Ícaro Freire</li></a>
						<a href="#extracurricular-container"><li>EXTRACURRICULAR</li></a>
						<a href="#standalone-container"><li>STANDALONE</li></a>
						<a href="#internships-container"><li>INTERNSHIPS</li></a>
					</ul>
				</div>
			</div>
		</nav>
		<header class="title">
			<div class="title">
				<div class="wrapper">
					<h1>PROJECTS &<br> ACTIVITIES</h1>
					<p>Discover more about what I have been working on, projects I have<br> proudly contributed to and relevant roles I had in the past.</p>
				</div>
			</div>
		</header>
		<div class="content">
			<div class="stack">

				<div class="container float" id="extracurricular-container">
					<i class="fas fa-university background"></i>
					<div class="holder">
						<div class="wrapper">
							<div class="panel">
								<div class="title"><span>EXTRACURRICULAR</span></div>
								<div class="content">
									<div class="cards" id="extracurricular">
										<?php
											foreach($extracurricular as $project) {
												echo "
													<a href='".$project['link']."' target='_blank'>
														<div class='card'>
															<div class='thumb'><img src='res/projects/extracurricular/".$project['thumb']."'></div>
															<div class='text'>
																<h3>".$project['title']."</h3><br>
																<p>".$project['description']."</p>
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

				<div class="container right" id="standalone-container">
					<div class="holder">
						<div class="wrapper">
							<div class="panel">
								<div class="title"><span>STANDALONE</span></div>
								<div class="content">
									<div class="cards" id="standalone">
										<?php
											foreach($standalone as $project) {
												echo "
													<a href='".$project['link']."' target='_blank'>
														<div class='card'>
															<div class='thumb'><img src='res/projects/standalone/".$project['thumb']."'></div>
															<div class='text'>
																<h3>".$project['title']."</h3><br>
																<p>".$project['description']."</p>
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

				<div class="container float" id="internships-container">
					<i class="fas fa-tools background"></i>
					<div class="holder">
						<div class="wrapper">
							<div class="panel">
								<div class="title"><span>INTERNSHIPS</span></div>
								<div class="content">
									<div class="cards" id="internships">
										<?php
											foreach($internships as $project) {
												echo "
													<a href='".$project['link']."' target='_blank'>
														<div class='card'>
															<div class='thumb'><img src='res/projects/internships/".$project['thumb']."'></div>
															<div class='text'>
																<h3>".$project['title']."</h3><br>
																<p>".$project['description']."</p>
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
