<? /* Celebration of Mind */ ?>
<!DOCTYPE html>
<html>

	<head>
		<title>Celebration of Mind | <?= date('Y') ?></title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="description" content="Everyone is invited to Celebration of Mind.">
		<link rel="stylesheet" type="text/css" href="com.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>

	<body>

		<header>
			<div class="container">
				<h1>Celebration of Mind</h1>
			</div>
		</header>

		<main>
			<section class="intro">
				<div class="container">

					<p class="italic">
						John Railing's words on Celebration of Mind ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.
					</p>

				</div>
			</section>

			<section class="content">
				<div class="container">

					<article class="text">
						<p>
							Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna.
						</p>
						<p>
							Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla.
						</p>
					</article>

					<article class="image">
						<figure>
							<img src="images/01-zometool.jpg" alt="Zometool Structure Assembly" />
							<figcaption>
								Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla.
							</figcaption>
						</figure>
					</article>

					<article class="image">
						<figure>
							<img src="images/02-card.jpg" alt="Gift Bag Card" />
							<figcaption>
								Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla.
							</figcaption>
						</figure>
					</article>

				</div>
			</section>
		</main>

		<footer>
			<div class="container">
				<ul class="colophon clear">
					<li>
						<a href="mailto:vky.g4g@gmail.com">Email</a>
					</li>
					<li>
						<a href="http://martin-gardner.org/">Martin Gardner</a>
					</li>
					<li>
						<a href="http://gathering4gardner.com/">Gathering For Gardner</a>
					</li>
				</ul>
			</div>
		</footer>

		<script>
			$('header, main, footer').hide().each( function ( index, el ) {
				var node = el;
				window.setTimeout( function ( ) {
					$(node).fadeIn(250);
				}, index * 150, node );
			});
		</script>
	</body>

</html>