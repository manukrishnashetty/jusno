<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ideabox - Material Blog/Magazine Template</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Tooltip plugin (zebra) css file -->
	<link rel="stylesheet" type="text/css" href="plugins\zebra-tooltip\zebra_tooltips.min.css">

	<!-- Ideabox main theme css file. you have to add all pages -->
	<link rel="stylesheet" type="text/css" href="css\main-style.css">

	<!-- Ideabox responsive css file -->
	<link rel="stylesheet" type="text/css" href="css\responsive-style.css">
</head>

 @extends('user.layouts.master')

@section('content')
		<!-- Detail extra post start -->

		<section class="sub-highlight">

			<!-- Detail parallax start -->
			<div class="parallax-box">
				<div class="parallax-image" style="background-image: url(img/news-test-images/news-img6.jpg);"></div>
				<article class="post-box">
		    		<div class="post-overlay">
		    			<div class="post-overlay-inner">
			    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
			    			<h1 class="post-title">Slipknot’s Concert in Phoenix Showed Why Mayhem Fest Died</h1>
			    			<div class="post-meta">
			    				<div class="post-meta-author-avatar">
			    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
			    				</div>
			    				<div class="post-meta-author-info">
			    					<span class="post-meta-author-name">
			    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
			    					</span>
			    					<span class="middot">·</span>
			    					<span class="post-meta-date">
			    						<abbr class="published updated" title="December 4, 2017">7 hours ago</abbr>
			    					</span>
			    				</div>
			    			</div>
		    			</div>
		    		</div>
		    	</article>
			</div>
			<!-- Detail parallax end -->

		</section>
		<section class="main-content">
			<div class="main-content-wrapper">
				<div class="content-body">

					<!-- article body start -->
					<article class="article-wrapper">
						<div class="article-header">
							<div class="breadcrumb">
								<ul>
									<li><a href="#"><span>Home</span></a> <i class="material-icons">&#xE315;</i></li>
									<li><a href="#"><span>Technology</span></a> <i class="material-icons">&#xE315;</i></li>
									<li><span>Lorem Ipsum is simply dummy text of the printing and typesetting</span></li>
								</ul>
							</div>
						</div>
						<div class="article-content"> <!-- adbox120 or adbox160 -->
							<div class="article-left-box">
								<div class="article-left-box-inner">
									<div class="article-share">
										<a href="#" class="facebook"></a>
										<a href="#" class="twitter"></a>
										<a href="#" class="google-plus"></a>
									</div>
									<span class="add-to-favorite" data-zebra-tooltip="" title="Ad to favorite">
										<i class="material-icons">&#xE866;</i>
									</span>
									<ul class="article-emoticons">
										<li>
											<a href="#" class="popular happy"></a><span>13</span>
											<ul>
												<li><a href="#" class="love"></a><span>7</span></li>
												<li><a href="#" class="shocked"></a><span>5</span></li>
												<li><a href="#" class="angry"></a><span>4</span></li>
												<li><a href="#" class="crying"></a><span>1</span></li>
												<li><a href="#" class="sleepy"></a><span>0</span></li>
											</ul>
										</li>										
									</ul>
								</div>
							</div>
							<div class="article-inner">
								<div class="article-description">
									Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</div>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</p>
								<ul>
									<li>galley of type and scrambled</li>
									<li>text of the printing</li>
									<li>lorem Ipsum has been the industry</li>
									<li>and more recently with desktop</li>
								</ul>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</p>
								<h3>It was popularised in the 1960s with the </h3>
								<p>release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<figure>
									<img src="img\news-test-images\news-img4.jpg">
									<figcaption>
										Image Caption
									</figcaption>
								</figure>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<h4>It has survived not only five centuries</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<blockquote>
  									Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while. That's because they were able to connect experiences they've had and synthesize new things.
  									<span>Steve Jobs</span>
								</blockquote>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. 
								<figure class="left">
									<img src="img\news-test-images\news-img8.jpg" width="300">
									<figcaption>
										Image Caption
									</figcaption>
								</figure>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic</p>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

								<!-- article sources area start -->
								<div class="article-source-box">
									<div class="source-item">
										<span class="source-subtitle">Source : </span>
										<span class="source-url">https://themeforest.net/item/ideabox-mobile-web-ui-template/20489553</span>
									</div>
									<div class="source-item">
										<span class="source-subtitle">Source : </span>
										<span class="source-url">https://help.market.envato.com/hc/en-us/articles/202499864-How-to-Withdraw-Earnings</span>
									</div>
								</div>
								<!-- article sources area end -->

								<!-- article tags area start -->
								<div class="article-tags">
									<span class="tag-subtitle">Tags : </span>
									<a href="#">theme</a><span class="tag-dot"></span>
									<a href="#">template</a><span class="tag-dot"></span>
									<a href="#">mobile ui</a>
								</div>
								<!-- article tags area end -->
							</div>

							<!--this is important for the left ad box or share box fixer -->
							<div id="endOfTheArticle"></div>

							<!-- More article unit start -->
							<div class="more-article">
								<div class="w-header">
									<div class="w-title">Continue Reading</div>
									<div class="w-seperator"></div>
								</div>
								<div class="more-posts">
									<div class="columns column-2">

								    	<article class="post-box" style="background-image: url(img/news-test-images/news-img5.jpg);">
								    		<div class="post-overlay">
								    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
								    			<h3 class="post-title">Slipknot’s Concert in Phoenix Showed Why Mayhem Fest Died</h3>
								    			<div class="post-meta">
								    				<div class="post-meta-author-avatar">
								    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
								    				</div>
								    				<div class="post-meta-author-info">
								    					<span class="post-meta-author-name">
								    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
								    					</span>
								    					<span class="middot">·</span>
								    					<span class="post-meta-date">
								    						<abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
								    					</span>
								    				</div>
								    			</div>
								    		</div>
								    		<a href="#" class="post-overlayLink"></a>
								    	</article>

								    </div>
								    <div class="columns column-2">

								    	<article class="post-box" style="background-image: url(img/news-test-images/news-img1.jpg);">
								    		<div class="post-overlay">
								    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
								    			<h3 class="post-title">Slipknot’s Concert in Phoenix Showed Why Mayhem Fest Died</h3>
								    			<div class="post-meta">
								    				<div class="post-meta-author-avatar">
								    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
								    				</div>
								    				<div class="post-meta-author-info">
								    					<span class="post-meta-author-name">
								    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
								    					</span>
								    					<span class="middot">·</span>
								    					<span class="post-meta-date">
								    						<abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
								    					</span>
								    				</div>
								    			</div>
								    		</div>
								    		<a href="#" class="post-overlayLink"></a>
								    	</article>

								    </div>
								    <div class="columns column-2">

								    	<article class="post-box" style="background-image: url(img/news-test-images/news-img6.jpg);">
								    		<div class="post-overlay">
								    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
								    			<h3 class="post-title">Slipknot’s Concert in Phoenix Showed Why Mayhem Fest Died</h3>
								    			<div class="post-meta">
								    				<div class="post-meta-author-avatar">
								    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
								    				</div>
								    				<div class="post-meta-author-info">
								    					<span class="post-meta-author-name">
								    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
								    					</span>
								    					<span class="middot">·</span>
								    					<span class="post-meta-date">
								    						<abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
								    					</span>
								    				</div>
								    			</div>
								    		</div>
								    		<a href="#" class="post-overlayLink"></a>
								    	</article>

								    </div>
								    

								</div>
							</div>
							<!-- More article unit end -->

							<!-- article comment area start -->
							<div class="article-comments">
								<div class="w-header">
									<div class="w-title">Comments (7)</div>
									<div class="w-seperator"></div>
								</div>
								<div class="comment-form">
									<form>
										<div class="comment-columns">
											<div class="frm-row columns column-2">
												<input type="text" name="n" placeholder="Name" class="frm-input">
											</div>
											<div class="frm-row columns column-2">
												<input type="text" name="e" placeholder="Email" class="frm-input">
											</div>
											<div class="frm-row columns column-2">
												<input type="text" name="w" placeholder="Website" class="frm-input">
											</div>
										</div>
										<div class="frm-row">
											<textarea class="frm-input" rows="4" placeholder="Your comments..."></textarea>
										</div>
										<div class="frm-row">
											<div class="comment-form-notice columns column-4">
												<div>Your comments must be minimum 30 charachter.</div>
												<div>You are commenting as a visitor, you can <a href="#" data-modal="loginModal">login</a> or <a href="#" data-modal="registerModal">register</a></div>
											</div>
											<div class="columns column-2">
												<button type="button" class="frm-button full material-button">Send your comment</button>
											</div>
											<div class="clearfix"></div>
										</div>
				
									</form>
								</div>
								<div class="all-comments">

									<!-- comment item start -->
									<div class="comment-item">
										<div class="comment-avatar">
											<span class="comment-img"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&f=y" width="50" height="50"></span>
										</div>
										<div class="comment-content">
											<div class="comment-header">
												<span class="author-name">Visitor</span> - 
												<span class="comment-date">3 hours ago</span>
											</div>
											<div class="comment-wrapper">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
											</div>
											<div class="comment-meta">
												<span class="replay-button">Replay</span>
												<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
												<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
											</div>
										</div>
									</div>
									<!-- comment item end -->

									<!-- comment item start -->
									<div class="comment-item">
										<div class="comment-avatar">
											<span class="comment-img"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&f=y" width="50" height="50"></span>
										</div>
										<div class="comment-content">
											<div class="comment-header">
												<span class="author-name">Visitor</span> - 
												<span class="comment-date">3 hours ago</span>
											</div>
											<div class="comment-wrapper">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											</div>
											<div class="comment-meta">
												<span class="replay-button">Replay</span>
												<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+2</span></button>
												<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
											</div>
										</div>
									</div>
									<!-- comment item end -->

									<!-- comment item start -->
									<div class="comment-item">
										<div class="comment-avatar">
											<span class="comment-img"><img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" width="50" height="50"></span>
										</div>
										<div class="comment-content">
											<div class="comment-header">
												<a href="#" class="author-name">Mr. Spock</a> - 
												<span class="comment-date">3 hours ago</span>
											</div>
											<div class="comment-wrapper">
												Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
											</div>
											<div class="comment-meta">
												<span class="replay-button">Replay</span>
												<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+1</span></button>
												<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-12</span></button>
											</div>

											<!-- comment item start -->
											<div class="comment-item">
												<div class="comment-avatar">
													<span class="comment-img"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&f=y" width="50" height="50"></span>
												</div>
												<div class="comment-content">
													<div class="comment-header">
														<span class="author-name">Visitor</span> - 
														<span class="comment-date">3 hours ago</span>
													</div>
													<div class="comment-wrapper">
														Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
													</div>
													<div class="comment-meta">
														<span class="replay-button">Replay</span>
														<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
														<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
													</div>

													<!-- comment item start -->
													<div class="comment-item">
														<div class="comment-avatar">
															<span class="comment-img"><img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" width="50" height="50"></span>
														</div>
														<div class="comment-content">
															<div class="comment-header">
																<a href="#" class="author-name">Mr. Spock</a> - 
																<span class="comment-date">3 hours ago</span>
															</div>
															<div class="comment-wrapper">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
															</div>
															<div class="comment-meta">
																<span class="replay-button">Replay</span>
																<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
																<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
															</div>
														</div>
													</div>
													<!-- comment item end -->

												</div>
											</div>
											<!-- comment item end -->

											<!-- comment item start -->
											<div class="comment-item">
												<div class="comment-avatar">
													<span class="comment-img"><img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" width="50" height="50"></span>
												</div>
												<div class="comment-content">
													<div class="comment-header">
														<a href="#" class="author-name">Mr. Spock</a> - 
														<span class="comment-date">3 hours ago</span>
													</div>
													<div class="comment-wrapper">
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
													</div>
													<div class="comment-meta">
														<span class="replay-button">Replay</span>
														<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
														<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
													</div>
												</div>
											</div>
											<!-- comment item end -->

										</div>
									</div>
									<!-- comment item end -->

								</div>
							</div>
							<!-- article comment area start -->

						</div>
					</article>
					<!-- article body end -->

				</div>
			</div>
		</section>

  

	<div class="overlay"></div>

	<script src="js\jquery-3.2.1.min.js"></script>

	<!-- Tooltip plugin (zebra) js file -->
	<script src="plugins\zebra-tooltip\zebra_tooltips.min.js"></script>

	<!-- Ideabox theme js file. you have to add all pages. -->
	<script src="js\main-script.js"></script>

@endsection
</body>

</html>