<!DOCTYPE html>
<html lang="en">
<header>
	<title>Owned Assets</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<!-- <link href="style_sheets/home.css" rel="stylesheet"> -->
	<script type="text/javascript">
		var Tawk_API = Tawk_API || {},
			Tawk_LoadStart = new Date();
		(function() {
			var s1 = document.createElement("script"),
				s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/6267eb1eb0d10b6f3e6f6ee4/1g1iusstj';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();
	</script>
	<style>
		body {
			background: #fff;
			font-family: "Poppins", sans-serif;
		}


		aside.context {
			text-align: center;
			color: #333;
			line-height: 1.7;
		}

		aside.context a {
			text-decoration: none;
			color: #333;
			padding: 3px 0;
			border-bottom: 1px dashed;
		}

		aside.context .explanation {
			max-width: 700px;
			margin: 6em auto 0;
		}

		footer {
			text-align: center;
			margin: 4em auto;
			width: 100%;
		}

		footer a {
			text-decoration: none;
			display: inline-block;
			width: 45px;
			height: 45px;
			border-radius: 50%;
			background: transparent;
			border: 1px dashed #333;
			color: #333;
			margin: 5px;
		}

		footer a:hover {
			background: rgba(0, 0, 0, 0.05);
		}

		footer a .icons {
			margin-top: 12px;
			display: inline-block;
			font-size: 20px;
		}

		.main-content {
			position: relative;
		}

		.main-content:before {
			content: "";
			width: 100%;
			height: 12%;
			position: absolute;
			background: linear-gradient(to bottom, #f4f4f4, #fff);
			z-index: -1;
		}

		button {
			background: orangered;
			color: white;
			position: relative;
			margin: 2em;
			border: 2px solid orangered;
			border-radius: 50px;
			padding: 10px 25px;
			font: 700 18px "Poppins", sans-serif;
			outline: none;
			cursor: pointer;
			transition: all 600ms cubic-bezier(0.785, 0.135, 0.15, 0.86);
		}

		button:before {
			content: "";
			border-radius: inherit;
			background: rgba(0, 0, 0, 0.2);
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			margin: auto;
			position: absolute;
			width: 100%;
			height: 100%;
			z-index: 0;
			opacity: 0;
			transform-origin: center;
		}

		button:hover:before {
			animation: grow 0.5s linear;
		}

		button:active {
			top: 2px;
		}

		.catalog-intro {
			position: relative;
			overflow: hidden;
			background: #f8f8f8;
		}

		.catalog-intro h1 {
			font: italic 900 60px/1 "Playfair Display", serif;
		}

		.catalog-intro h2 {
			font: 22px/1.3 "Poppins", sans-serif;
			margin-top: 2em;
			max-width: 500px;
			color: #999;
			margin-left: 2em;
		}

		h3:hover {
			color: #fd531f;
		}

		.catalog-intro__info {
			padding: 10em 4em 6em;
			position: relative;
		}

		.catalog-intro img {
			position: absolute;
			height: 110%;
			top: -3em;
			right: -10em;
			z-index: 0;
		}

		@keyframes grow {
			0% {
				opacity: 0;
			}

			50% {
				opacity: 0.5;
			}

			100% {
				opacity: 0;
				height: 155%;
				transform: scale(1.15);
			}
		}

		code {
			border: 0.5px solid #ddd;
			font-family: monospace;
			display: inline-block;
			margin: 0 2px;
			vertical-align: middle;
			padding: 0px 6px;
			border-radius: 3px;
			background: #f8f8f8;
			color: purple;
		}

		.product-grid__wrapper {
			position: relative;
            padding: 10vh 0 0 0;
		}

		.product-grid {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
			grid-template-rows: repeat(auto-fill, minmax(180px, 1fr));
			grid-auto-flow: dense;
			grid-gap: 20px;
			padding: 0 20px;
		}

		.product-item {
			position: relative;
			overflow: hidden;
			cursor: pointer;
			padding-bottom: 100px;
			transition: 0.2s ease;
			color: #000;
		}

		.product-item img {
			height: 100%;
			width: 100%;
			object-fit: cover;
		}

		.product-item__name {
			position: absolute;
			top: 100%;
			margin-top: -100px;
			width: 100%;
			padding: 15px 0;
			text-align: center;
			background: #fff;
		}

		.product-item__name h3 {
			font: 900 24px/1.1 "Playfair Display", sans-serif;
			margin: 0;
		}

		.product-item__name h5 {
			font: 300 14px/1.2 "Poppins", sans-serif;
			text-transform: uppercase;
			letter-spacing: 2px;
			color: #999;
			margin: 10px 0 0;
		}

		.button-row {
			position: sticky;
			bottom: -50px;
			grid-column: 100%;
			grid-row: 100%;
			opacity: 0;
			transition: 0.3s ease;
			background: #fff;
			padding: 15px;
			text-align: center;
			box-shadow: 0 -3px 8px rgba(0, 0, 0, 0.05);
		}

		.button-row.sticky {
			opacity: 1;
			bottom: 0;
		}

		.button-row button {
			margin: 0;
			font-size: 14px;
			padding: 8px 15px;
		}

		@media screen and (min-width: 1024px) {
			.catalog-intro__info {
				margin-left: 10%;
			}
		}

		@media screen and (max-width: 768px) {
			.catalog-intro {
				text-align: center;
			}

			.catalog-intro h2 {
				margin: 1em auto 0;
			}

			.catalog-intro img,
			.catalog-intro button {
				display: none;
			}

			.button-row {
				display: none;
			}
		}
	</style>
</header>

<body>
	<?php include 'sidenav.php'; ?>

	<section>
		<div class="section-title">
			<h2>Owned Assets</h2>
		</div>
	</section>
	<section id="catalogue">
		<!--Start of Tawk.to Script-->
		<!--End of Tawk.to Script-->
		<div class="main-content">
			<div class="product-grid__wrapper">
				<div class="product-grid"><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35004674-hello-world?asc=u&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35004674&amp;p=classic-tee" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/helloworldpillow.jpg" />
						<div class="product-item__name">
							<h3>Hello World</h3>
							<h5>Throw Pillow</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/30436607-fries-over-lies?asc=u&amp;grid_pos=12&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F30436607&amp;p=t-shirt&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid&amp;style=racerback" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/iphonefries.jpg" />
						<div class="product-item__name">
							<h3>Fries Over Lies</h3>
							<h5>Phone Case</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35033300-50-shades-of-grey?asc=u&amp;grid_pos=4&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35033300&amp;p=contrast-tank&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/50shadesshirt.jpg" />
						<div class="product-item__name">
							<h3>50 Shades</h3>
							<h5>Classic Tee</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35031724-looking-for-commitment-dark-on-light-version?asc=u&amp;grid_pos=11&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35031724&amp;p=triblend-tee&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/commitpilow.jpg" />
						<div class="product-item__name">
							<h3>Looking for Commitment</h3>
							<h5>Floor Pillow</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35032913-is-it-a-bug-or-a-feature-cursive-font?asc=u&amp;grid_pos=5&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35032913&amp;p=t-shirt&amp;rbs=6a4dc08b-d5e1-4bf1-b0c3-886227a2e761&amp;ref=artist_shop_grid&amp;style=pullover" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/bugfeaturebook.jpg" />
						<div class="product-item__name">
							<h3>Bug or Feature?</h3>
							<h5>Notebook</h5>
						</div>
					</a></div>
				<div class="button-row">
					<button class="js-switch-grid">Change product grid here!</button>
				</div>
			</div>
		</div>
	</section>
</body>