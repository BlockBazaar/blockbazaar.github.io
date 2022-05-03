<!DOCTYPE html>
<html lang="en">
<header>
	<title>Catalogue</title>
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

		.section-title {
			text-align: center;
			padding-top: 12vh;
			padding-bottom: 30px;
			background-color: white;
			width: 100%;
		}

		.section-title h2 {
			font-size: 32px;
			font-weight: bold;
			text-transform: uppercase;
			margin-bottom: 20px;
			padding-bottom: 20px;
			position: relative;
			color: #37517e;
		}

		.section-title h2::before {
			content: "";
			position: absolute;
			display: block;
			width: 120px;
			height: 1px;
			background: #ddd;
			bottom: 1px;
			left: calc(50% - 60px);
		}

		.section-title h2::after {
			content: "";
			position: absolute;
			display: block;
			width: 40px;
			height: 3px;
			background: #fd531f;
			bottom: 0;
			left: calc(50% - 20px);
		}

		.section-title p {
			margin-bottom: 0;
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
			<h2>Catalogue</h2>
		</div>
	</section>
	<section id="catalogue">
		<!--Start of Tawk.to Script-->
		<!--End of Tawk.to Script-->
		<div class="main-content">
			<div class="catalog-intro"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/commitmentshirt.jpg" alt="Catalog Highlight" />
				<div class="catalog-intro__info">
					<h1>Welcome to the Exclusives</h1>
					<h2>
						Can't decide where to invest? We are here to make you choose from our exclusive collection of crypto.
					</h2>
					<button class="js-switch-grid">Check More</button>
				</div>
			</div>
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
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35001641-straight-outta-code-camp?asc=u&amp;grid_pos=18&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35001641&amp;p=lightweight-raglan-sweatshirt&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/straightouttacodecampbook.jpg" />
						<div class="product-item__name">
							<h3>Code Camp</h3>
							<h5>Notebook</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35004173-what-is-programming-ver-1?asc=u&amp;grid_pos=14&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35004173&amp;p=womens-fitted-scoop&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/programmingbook.jpg" />
						<div class="product-item__name">
							<h3>What is Programming?</h3>
							<h5>Notebook</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35033300-50-shades-of-grey?asc=u&amp;grid_pos=4&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35033300&amp;p=contrast-tank&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/50shadesmug.jpg" />
						<div class="product-item__name">
							<h3>50 Shades</h3>
							<h5>Mug</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35032913-is-it-a-bug-or-a-feature-cursive-font?asc=u&amp;grid_pos=5&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35032913&amp;p=t-shirt&amp;rbs=6a4dc08b-d5e1-4bf1-b0c3-886227a2e761&amp;ref=artist_shop_grid&amp;style=pullover" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/bugfeaturehoodie.jpg" />
						<div class="product-item__name">
							<h3>Bug or Feature?</h3>
							<h5>Hoodie</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35032799-on-wednesdays-we-wear-pink-cursive-font?asc=u&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35032799&amp;p=classic-tee" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/wednesdaystote.jpg" />
						<div class="product-item__name">
							<h3>Pink Wednesdays</h3>
							<h5>Tote Bag</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35031724-looking-for-commitment-dark-on-light-version?asc=u&amp;grid_pos=11&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35031724&amp;p=triblend-tee&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/commitpilow.jpg" />
						<div class="product-item__name">
							<h3>Looking for Commitment</h3>
							<h5>Floor Pillow</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35032365-gaming-weekends?asc=u&amp;grid_pos=8&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35032365&amp;p=chiffon-top&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/weekendgaminglaptopbag.jpg" />
						<div class="product-item__name">
							<h3>Gaming Weekends</h3>
							<h5>Laptop Bag</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35253776-youre-not-pizza?asc=u&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35253776&amp;p=t-shirt" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/pizzahappymug.jpg" />
						<div class="product-item__name">
							<h3>You're Not Pizza</h3>
							<h5>Mug</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35253776-youre-not-pizza?asc=u&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35253776&amp;p=t-shirt" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/pizzashirt.jpg" />
						<div class="product-item__name">
							<h3>You're Not Pizza</h3>
							<h5>Classic Tee</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/30437121-pizza-over-drama-white-on-dark?asc=u&amp;grid_pos=22&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F30437121&amp;p=t-shirt&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid&amp;style=vneck" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/pizzashirt2.jpg" />
						<div class="product-item__name">
							<h3>Pizza Over Drama</h3>
							<h5>Tank Top</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35001641-straight-outta-code-camp?asc=u&amp;grid_pos=18&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35001641&amp;p=lightweight-raglan-sweatshirt&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/straightouttacodecampmug.jpg" />
						<div class="product-item__name">
							<h3>Code Camp</h3>
							<h5>Mug</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35032641-work-life-balance?asc=u&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35032641&amp;p=classic-tee" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/worklifebalanceclock.jpg" />
						<div class="product-item__name">
							<h3>Work-Life Balance</h3>
							<h5>Clock</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/30436762-fries-over-lies-white?asc=u&amp;grid_pos=24&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F30436762&amp;p=womens-fitted-v-neck&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/friesshirt.jpg" />
						<div class="product-item__name">
							<h3>Fries Over Lies</h3>
							<h5>V-Neck Tee</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/30436905-pizza-over-drama?asc=u&amp;grid_pos=23&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F30436905&amp;p=a-line-dress&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/floorpillowpizza.jpg" />
						<div class="product-item__name">
							<h3>Pizza Over Drama</h3>
							<h5>Floor Pillow</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/14029669-cats-over-brats-version-2?asc=u&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F14029669&amp;p=classic-tee" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/catsoverbrats.jpg" />
						<div class="product-item__name">
							<h3>Cats Over Brats</h3>
							<h5>Long Sleeve Tee</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35031724-looking-for-commitment-dark-on-light-version?asc=u&amp;grid_pos=11&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35031724&amp;p=triblend-tee&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/commitipad.jpg" />
						<div class="product-item__name">
							<h3>Looking for Commitment</h3>
							<h5>Tablet Case</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35031921-looking-for-commitment-dark-on-light-version?asc=u&amp;grid_pos=10&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35031921&amp;p=t-shirt&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid&amp;style=womens" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/commitmentshirt.jpg" />
						<div class="product-item__name">
							<h3>Looking for Commitment</h3>
							<h5>Fitted Tee</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35032799-on-wednesdays-we-wear-pink-cursive-font?asc=u&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35032799&amp;p=classic-tee" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/wednesdayspouch.jpg" />
						<div class="product-item__name">
							<h3>Pink Wednesdays</h3>
							<h5>Pouch</h5>
						</div>
					</a><a class="product-item" href="https://www.redbubble.com/people/inapt/works/35004000-what-is-programming-ver-3?asc=u&amp;grid_pos=15&amp;modal=%2Fboom%2Fb%2FavailableProducts%2F35004000&amp;p=lightweight-hoodie&amp;rbs=a3f0e7c1-91c2-471e-87c0-588ec6731123&amp;ref=artist_shop_grid" target="_blank"><img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/product/programmingmug.jpg" />
						<div class="product-item__name">
							<h3>What is Programming?</h3>
							<h5>Mug</h5>
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