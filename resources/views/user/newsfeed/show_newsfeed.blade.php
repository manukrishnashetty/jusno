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

	<!-- Owl Carousel plugin css file. only used pages -->
	<link rel="stylesheet" type="text/css" href="plugins\owl-carousel\assets\owl.carousel.min.css">

	<!-- Ideabox main theme css file. you have to add all pages -->
	<link rel="stylesheet" type="text/css" href="css\main-style.css">

	<!-- Ideabox responsive css file -->
	<link rel="stylesheet" type="text/css" href="css\responsive-style.css">
</head>

<body>

@extends('user.layouts.master')

@section('content')
  
	<!--Main container start -->
	<main class="main-container">
		<section class="main-highlight">
			<div class="highlight-carousel slider-carousel">
				
				<div class="owl-carousel" id="postCarousel">
				     <div class="item">

				    	<article class="post-box" style="background-image: url(img/news-test-images/news-img5.jpg);">
				    		<div class="post-overlay">
				    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
				    			<h3 class="post-title">Facebook: Cambridge Analytica may have accessed some users’ private messages</h3>
				    			<div class="post-meta">
				    			<!-- 	<div class="post-meta-author-avatar">
				    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
				    				</div> -->
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
				    <div class="item">

				    	<article class="post-box" style="background-image: url(img/news-test-images/news-img4.jpg);">
				    		<div class="post-overlay">
				    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
				    			<h3 class="post-title">Instagram will soon let you download your data, just like Facebook</h3>
				    			<div class="post-meta">
				    				<!-- <div class="post-meta-author-avatar">
				    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
				    				</div> -->
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
				    <div class="item">

				    	<article class="post-box" style="background-image: url(img/news-test-images/news-img7.jpg);">
				    		<div class="post-overlay">
				    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
				    			<h3 class="post-title">It’s time for Google to retire Chromecast for Android TV</h3>
				    			<div class="post-meta">
				    				<!-- <div class="post-meta-author-avatar">
				    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
				    				</div> -->
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
				    <div class="item">

				    	<article class="post-box" style="background-image: url(img/news-test-images/news-img10.jpg);">
				    		<div class="post-overlay">
				    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
				    			<h3 class="post-title">Instagram will soon let you download your data, just like Facebook</h3>
				    			<div class="post-meta">
				    				<!-- <div class="post-meta-author-avatar">
				    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
				    				</div> -->
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
		</section>
		<section class="main-content">
			<div class="main-content-wrapper">
				<div class="content-body">
					<div class="content-timeline">
						<!--Timeline header area start -->
						<div class="post-list-header">
							<span class="post-list-title">Latest stories</span>
							<select class="frm-input">
								<option value="1">Technology</option>
								<option value="1">Book</option>
								<option value="1">Cinema</option>
							</select>
						</div>
						<!--Timeline header area end -->


						<!--Timeline items start -->
						<div class="timeline-items">

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img8.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="detail-full-width.html">
											<h3 class="timeline-post-title">It has roots in a piece of classical Latin literature from making it over</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img7.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">Increase Your Health One Salad at a Time</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img6.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">Responsive Web Design & Workflows for Todays Web</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img5.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">The Towering Success Of Skyscrapers: Primrose Hill Estate Agents Take A View</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img4.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">Educational Toys For Toddlers Are</h3>
											<p class="timeline-post-desc">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img3.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">How Meal Replacements Stop Your Weight From Coming on the Rebound</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img2.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">Web Design and Web Development: Know the Basics</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img1.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">The Importance Of Letting Your Kids Join After School Activities</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img3.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">How Meal Replacements Stop Your Weight From Coming on the Rebound</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img2.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">Web Design and Web Development: Know the Basics</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip="" title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img\news-test-images\news-img1.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">The Importance Of Letting Your Kids Join After School Activities</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!--Timeline items end -->

						<!--Data load more button start  -->
						<div class="load-more">
							<button class="load-more-button material-button" type="button">
								<i class="material-icons">&#xE5D5;</i>
								<span>Load More</span>
							</button>
						</div>
						<!--Data load more button start  -->
					</div>

				</div>
				<div class="content-sidebar">
					<div class="sidebar_inner">

						<div class="widget-item">
							<div class="w-header">
								<div class="w-title">Popular Posts</div>
								<div class="w-seperator"></div>
							</div>
							<div class="w-boxed-post">
								<ul>
									<li class="active">
										<a href="#" style="background-image: url(img/news-test-images/news-img7.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>1</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img5.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>2</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img6.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>3</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img3.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>4</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>



						<div class="seperator"></div>

						<a href="#" class="widget-ad-box">
							<img src="img\adbox300x250.png" width="300" height="250">
						</a>

					</div>
				</div>
			</div>
		</section>

	</main>


	<div class="overlay"></div>

	<script src="js\jquery-3.2.1.min.js"></script>

	<!-- Tooltip plugin (zebra) js file -->
	<script src="plugins\zebra-tooltip\zebra_tooltips.min.js"></script>

	<!-- Owl Carousel plugin js file -->
	<script src="plugins\owl-carousel\owl.carousel.min.js"></script>

	<!-- Ideabox theme js file. you have to add all pages. -->
	<script src="js\main-script.js"></script>

	<script type="text/javascript">

		//Owl carousel initializing
		$('#postCarousel').owlCarousel({
		    loop:true,
		    dots:true,
		    nav:true,
		    navText: ['<span><i class="material-icons">&#xE314;</i></span>','<span><i class="material-icons">&#xE315;</i></span>'],
		    items:1,
		    margin:20
		})

		//widget carousel initialize
		$('#widgetCarousel').owlCarousel({
		    dots:true,
		    nav:false,
		    items:1
		})

	</script>
@endsection
</body>

</html>