<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<?php
	require_once('head.php');
	?>
</head>
<body class="home page-template page-template-page-blog page-template-page-blog-php page page-id-5 theme-jevelin woocommerce-no-js wpb-js-composer js-comp-ver-6.0.5 vc_responsive sh-header-mobile-spacing-compact sh-blog-style2 carousel-dot-style1 carousel-dot-spacing-5px carousel-dot-size-standard">
	<div id="page-container" class="">
		<?php
			require_once('home-header.php');
		?>
		<div id="wrapper">
			<div class="content-container sh-page-layout-default">
				<div class="container entry-content">
					<div class="sh-filter-blog sh-filter-container sh-portfolio-filter-style3 sh-portfolio-filter-style4">
						<?php
							require_once('blog-filter.php');
						?>
					</div>
					<div id="content" class="content-with-sidebar-right blog-page-list">
						<?php
							require_once('blog-list.php');
						?>
						<div class="sh-pagination sh-default-color">
							<ul class='page-numbers'>
								<li><span aria-current='page' class='page-numbers current'>1</span></li>
								<li><a class='page-numbers' href='page/2/index.html'>2</a></li>
								<li><a class="next page-numbers" href="page/2/index.html">Next</a></li>
							</ul>
						</div>
					</div>
					<?php
						require_once('side-bar.php');
					?>
				</div>
			</div>
			<?php
				require_once('footer.php');
			?>
		</div>
		<div class="sh-back-to-top sh-back-to-top3">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<?php
		require_once('scripts.php');
	?>
</body>
</html>