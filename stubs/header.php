<!DOCTYPE html>
<html dir="ltr" lang="fr" id="ornyx-ca">
	<head>

		<meta charset="utf-8" />

		<title><?php if (!empty($page)) echo $page.' — '; ?>L'Ordre des Ornyx</title>

		<meta name="description" content="Préparez-vous à vivre une aventure fantastique à l’intrigue merveilleuse…" />
		<meta name="keywords"	 content="roman, novel, jeunesse, aventure, fantaisie, intrigue, trilogie, trilogy, ornyx, soulieres" />
		<meta name="author"	 content="Patrick Loranger" />

		<script type="text/javascript" src="/assets/javascripts/modernizr-2.0.6.min.custom.js"></script>

		<link rel="stylesheet" type="text/css" href="/assets/stylesheets/site.css" />
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="/assets/stylesheets/patch.ie.css" /><![endif]-->

		<script type="text/javascript">
			var _gaq = [['_setAccount', 'UA-11920311-3'], ['_trackPageview']];
			(function(d, t) {
				var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
				g.async = true;
				g.src = '//www.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g, s);
			}(document, 'script'));
		</script>

	</head>
	<body id="page-<?php echo $section; ?>"<?php echo (empty($tome) ? '' : ' class="'.$tome.'"'); ?>>

		<div id="page">

			<div id="header" role="banner" title="L'Ordre des Ornyx, un roman par Patrick Loranger">
				<h1><a rel="index" href="/">L'Ordre des Ornyx</a></h1>
				<p id="byline">Un roman par Patrick Loranger</p>
<?php if ($section == 'accueil') { ?>
				<p id="tagline">Préparez-vous à vivre une aventure fantastique à l’intrigue merveilleuse…</p>
<?php } ?>
			</div>
