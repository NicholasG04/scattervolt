<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Discord Applications</title>
	<base href="{{base_url}}" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Discord Applications" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20180129095003" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20180117130644" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1517778470" rel="stylesheet" type="text/css" />
	<link href="css/6.css?ts=1517778470" rel="stylesheet" type="text/css" /> {{ga_code}}
	<script type="text/javascript">
		var currLang = '';
	</script>
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113610850-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-113610850-1');
	</script>

</head>


<body>
	<div class="root">
		<div class="vbox wb_container" id="wb_header">

			<div class="wb_cont_inner">
				<div id="wb_element_instance31" class="wb_element wb-menu">
					<ul class="hmenu">
						<li>
							<a href="Home/" target="_self">Home</a>
						</li>
						<li>
							<a href="Contact-Me/" target="_self">Contact Me</a>
						</li>
						<li class="active">
							<a href="Discord-Applications/" target="_self">Discord Applications</a>
						</li>
						<li>
							<a href="Super-Smash-Builds/" target="_self">Super Smash Builds!</a>
						</li>
						<li>
							<a href="https://scattervolt.com/forum" target="_blank">Forum</a>
						</li>
						<li>
							<a href="Teespring/" target="_blank">Merch</a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div id="wb_element_instance32" class="wb_element wb_element_picture">
					<a href="Home/">
						<img alt="gallery/mlg_scattervolt" src="gallery/photo-ts1517260810.jpg">
					</a>
				</div>
				<div id="wb_element_instance33" class="wb_element" style=" line-height: normal;">
					<h5 class="wb-stl-subtitle">
						<strong>
							<a href="Home/">
								<span style="color:rgba(255,200,0,1);">
									<span class="wb_tr_ok">ScatterVolt</span>
								</span>
							</a>
						</strong>
					</h5>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_main">

			<div class="wb_cont_inner">
				<div id="wb_element_instance35" class="wb_element" style=" line-height: normal;">
					<h5 class="wb-stl-subtitle" style="text-align: center;">
						<span class="wb_tr_ok">Discord Applications</span>
					</h5>
				</div>
				<div id="wb_element_instance36" class="wb_element" style=" line-height: normal;">
					<h3 class="wb-stl-heading3" style="text-align: center;">
						<span style="color:rgba(247,247,247,1);">Here you can apply for roles on the ScatterVolt Discord Server. If you have any questions, please contact an admin
							on the server!</span>
					</h3>
				</div>
				<div id="wb_element_instance37" class="wb_element">
					<a class="wb_button" href="Moderator-Application/">
						<span>Moderator Application</span>
					</a>
				</div>
				<div id="wb_element_instance38" class="wb_element">
					<a class="wb_button" href="Tech-Support-Application/">
						<span>Tech Support Application</span>
					</a>
				</div>
				<div id="wb_element_instance39" class="wb_element">
					<a class="wb_button" href="Programmer-Application/">
						<span>Programmer Application</span>
					</a>
				</div>
				<div id="wb_element_instance40" class="wb_element">
					<a class="wb_button" href="YouTuber/Streamer-Application/">
						<span>YouTuber/Streamer Application</span>
					</a>
				</div>
				<div id="wb_element_instance41" class="wb_element" style="width: 100%;">
					<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(6);
			?>
						<script type="text/javascript">
							$(function () {
								var block = $("#wb_element_instance41");
								var comments = block.children(".wb_comments").eq(0);
								var contentBlock = $("#wb_main");
								contentBlock.height(contentBlock.height() + comments.height());
							});
						</script>
						<?php
				} else {
			?>
							<script type="text/javascript">
								$(function () {
									$("#wb_element_instance41").hide();
								});
							</script>
							<?php
				}
			?>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_footer">

			<div class="wb_cont_inner" style="height: 124px;">
				<div id="wb_element_instance34" class="wb_element" style=" line-height: normal;">
					<p class="wb-stl-footer">© 2018 Marc Aranibar and Nick#7925 -
						<a href="http://scattervolt.com">ScatterVolt.com</a>
					</p>
				</div>
				<div id="wb_element_instance42" class="wb_element" style="text-align: center; width: 100%;">
					<div class="wb_footer"></div>
					<script type="text/javascript">
						$(function () {
							var footer = $(".wb_footer");
							var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
							if (!html) {
								footer.parent().remove();
								footer = $("#wb_footer, #wb_footer .wb_cont_inner");
								footer.css({
									height: ""
								});
							}
						});
					</script>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="wb_sbg"></div>
	</div>{{hr_out}}</body>

</html>