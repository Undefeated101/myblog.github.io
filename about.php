<?php
session_start();
$title = "about me";
if (isset($_SESSION['uname'])) {
		$c = '1';
}
$content='<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<div class="row row-bottom-padded-md">
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<img class="img-responsive" src="images/admin.jpg"">
					</div>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="fh5co-heading">About me</h2>
						<h3>Name:</h3><p>Bipul Poudel</p>
						<h3>Full Stack Web Developer</h3>
						<p>2001/01/29</p>
						<p>Lovely Professional University</p>
						<p>Butwal , NEPAL</p>
					</div>
				</div>
			</div>

			<div class="fh5co-narrow-content">
					<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Our Services</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-settings"></i>
								</div>
								<div class="fh5co-text">
									<h3>Strategy</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-search4"></i>
								</div>
								<div class="fh5co-text">
									<h3>Explore</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-paperplane"></i>
								</div>
								<div class="fh5co-text">
									<h3>Direction</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-params"></i>
								</div>
								<div class="fh5co-text">
									<h3>Expertise</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
		
			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h1 class="fh5co-heading-colored">Get in touch</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="contact.php" class="btn btn-primary">Learn More</a></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>';
include'master.php';
?>