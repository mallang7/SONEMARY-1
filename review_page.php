<?php

include "lib.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sonemary</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div id="app">

		<header id="main-header">
			<div id="logo">
				<a href="main_page.html"><img src="image/SONEMARY.png"></a>
			</div>
			<div id="username">
				<a href="my_page.html">Welcome, USER <img src="image/profile-user.png"></a>
      </div>
				<nav>
					<ul id="menu-list">
						<li><a href="genre.html"> Genre </a></li>
						<li><a href="top10.html"> Top10 </a></li>
						<li><a href="new.html"> New </a></li>
					</ul>
				</nav>
				<form action="" method="">
					<div id="search">
						<input type="text" id="searchKey" name="searchKey" placeholder="search...">
						<img src="image/loupe.png">
          </div>
				</form>
		</header>
<form action="write_review.php" method="post">
		<article class="main-article">

			<header class="section1-header">
				<h1>Write your Review</h1>
			</header>

			<article class="sectoin1-contents">
				<div class="section1-info" style="float: left;">
					<div class="info-title" style="font-weight: bold">
						Spider-Man: Homecoming
					</div>
					<div class="info-details">
						Action, Adventure, SF | USA | 2017.07.05 <br>2 h 13 m | R12
					</div>
					<section class="visualize-gallery">
						<img class="slide-image" src="image/score_user.png">
						<img class="slide-image" src="image/score_critic.png">
						<img class="slide-image" src="image/score_comparison.png">

						<a class="slide-btn prev" style="top: 100%;" onclick="plusDivs(-1)">❮</a>
						<a class="slide-btn next" style="top: 100%;" onclick="plusDivs(1)">❯</a>
					</section>
				</div>
				<div class="section1-img" style="float: right;">
						<img src="image/movie_spiderman_0.png">
				</div>
			</article>

			<div class="user-review">
				<article class="review-score-input">
					<!-- 리뷰 (comment & 6 score) 등록 form. php로 전송 -->
					<!-- <form method="GET" action="write_review.php" accept-charset="utf-8" name="score_input"> -->
						<fieldset>
							<!-- 코멘트 입력 -->
							<section class="review-form">
								<header class="section1-header">
									<h1>Review</h1>
								</header>
								<div class="comment-input">
									<textarea id="comment" name="comment" cols="90" rows="15" placeholder="comments..."></textarea>
								</div>
							</section>

							<!-- 스코어 6가지 입력 -->
							<section class="score-form">
								<header class="section1-header">
									<h1>Score</h1>
								</header>

								<div class="evaluation-standard-list">
									<div class="evaluation-standard">
										<div class="evaluation criteria"> Story & Screenplay </div>
										<div class="evaluation scoreInput">
											<input type="number" min="0" max="10" step="1" name="story">
											<h4>/10</h4>
										</div>
									</div>
									<div class="evaluation-standard">
										<div class="evaluation criteria"> Sound & Music </div>
										<div class="evaluation scoreInput">
											<input type="number" min="0" max="10" step="1" name="music">
											<h4>/10</h4>
										</div>
									</div>
									<div class="evaluation-standard">
										<div class="evaluation criteria"> Visual Design </div>
										<div class="evaluation scoreInput">
											<input type="number" min="0" max="10" step="1" name="design">
											<h4>/10</h4>
										</div>
									</div>
									<div class="evaluation-standard">
										<div class="evaluation criteria"> Acting </div>
										<div class="evaluation scoreInput">
											<input type="number" min="0" max="10" step="1" name="acting">
											<h4>/10</h4>
										</div>
									</div>
									<div class="evaluation-standard">
										<div class="evaluation criteria"> Emotional Impact </div>
										<div class="evaluation scoreInput">
											<input type="number" min="0" max="10" step="1" name="impact">
											<h4>/10</h4>
										</div>
									</div>
									<div class="evaluation-standard">
										<div class="evaluation criteria"> Message </div>
										<div class="evaluation scoreInput">
											<input type="number" min="0" max="10" step="1" name="message">
											<h4>/10</h4>
										</div>
									</div>
								</div>
							</section>

							<!-- 등록 버튼 -->
							<section class="submit-cancel">
								<div class="cancel-button button">
									<a href="detail_page.html">Cancel</a>
								</div>
								<div class="submit-button">
									<input type="submit" id="submit" name="submit" value="Submit">
								</div>
							</section>
						</fieldset>

					</form>
				</article>
			</div>

		</article>

	</div>
 <script type="text/javascript" src="main_script.js"></script>
</body>

</html>
