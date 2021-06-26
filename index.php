<?php
	$info = json_decode(file_get_contents('./data/info.json'), true);
	$dev = $info['developer'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial=scale=1.0">
	<meta name="description" content="<?php echo $dev['description'];?>">
	<title><?php echo $dev['title'];?></title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="https://kit.fontawesome.com/821f984533.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="page">
		<header>
			<div class="wrapper">
				<div class="intro">
					<div class="left">
						<div class="image">
							<div class="image-holder" title="<?php echo $dev['title'];?>">
								<img src="images/developer/profile.png" alt="<?php echo $dev['title'];?>">
							</div>
						</div>
					</div>
					<div class="right">
						<div class="text">
							<h1><?php echo $dev['title'];?>.</h1>
							<div class="hide">
								<h3><?php echo $dev['motd'];?></h3><br>
								<p><?php echo $dev['description'];?></p><br>
								<div class="menu">
									<ul>
										<?php
											$pages = $info['pages'];
											foreach($pages as $page) echo "<a href='".$page['link']."'><li>".$page['title']."</li></a>";
										?>
										<a href="#contact-container"><li>CONTACT ME</li></a>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="social">
					<div class="wrapper">
						<div class="social-links">
							<?php
								if (isset($dev['socials']['github'])) echo "<a href='https://github.com/".$dev['socials']['github']."/' target='_blank' title='GitHub'><i class='fab fa-github'></i></a>";
								if (isset($dev['socials']['instagram'])) echo "<a href='https://instagram.com/".$dev['socials']['instagram']."/' target='_blank' title='Instagram'><i class='fab fa-instagram'></i></a>";
								if (isset($dev['socials']['linkedin'])) echo "<a href='https://www.linkedin.com/in/".$dev['socials']['linkedin']."/' target='_blank' title='Linkedin'><i class='fab fa-linkedin-in'></i></a>";
								if (isset($dev['socials']['kaggle'])) echo "<a href='https://www.kaggle.com/".$dev['socials']['kaggle']."/' target='_blank' title='Kaggle'><i class='fab fa-kaggle'></i></a>";
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="indicator">
				<i class="fas fa-chevron-down"></i>
			</div>
		</header>
		<div class="content">
			<div class="stack">

				<div class="container float" id="projects-container">
					<i class="fas fa-rocket background"></i>
					<div class="holder">
						<div class="wrapper">
							<div class="panel projects">
								<div class="title">
									<span>PROJECTS</span><br><br>
									<p>Check out below some of my latest and most relevant projects.</p>
								</div>
								<div class="content">
									<div class="cards" id="projects">
										<?php
											$projects = json_decode(file_get_contents('./data/projects.json'), true);
											$standalone = $projects['standalone'];
											for($i = 0; $i < 3; $i++) {
												$project = $standalone[$i];
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
									<div class="more">
										<a href="projects.php" class="button" style="--c:var(--black);--d:var(--blue)">MORE PROJECTS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container float center light" id="about-me-container">
					<img src="images/sao_paulo.jpg" alt="são paulo city" class="background">
					<div class="holder">
						<div class="wrapper">
							<div class="panel">
								<div class="title"><span>A BRIEF INTRODUCTION</span></div>
							</div>
							<div class="content">
								<div class="about-me">
									<div class="picture">
										<img src="images/developer/intro.png" alt="Ícaro Vaz Freire about me" srcset=""><br>
										<span><?php echo $dev['name'];?></span>
									</div>
									<div class="text">
										<p><?php echo $dev['introduction']?></p><br>
										<div class="more">
											<a href="about.php" class="button" style="--c:var(--white);--d:var(--white)">LEARN MORE</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container float" id="contact-container">
					<i class="fas fa-comments background"></i>
					<div class="holder">
						<div class="wrapper">
							<div class="panel contact">
								<div class="title">
									<span>CONTACT</span><br><br>
									<p></p>
								</div>
								<div class="content">
									<div class="box half">
										<p>Here is some info about me.</p><br>
										<ul id="contact-info">
											<?php
												foreach($dev['contact']['emails'] as $email) echo "<a href='mailto:".$email."'><li><i class='fas fa-at'></i> ".$email."</li></a>";
												foreach($dev['contact']['phones'] as $phone) echo "<li><i class='fas fa-phone'></i> ".$phone."</li>";
												foreach($dev['contact']['addresses'] as $addr) echo "<li><i class='fas fa-envelope'></i> ".$addr."</li>";
											?>
										</ul>
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
	<script src="js/index.js"></script>
</body>
</html>
