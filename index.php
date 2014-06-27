<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>InitTab</title>
	<link rel="stylesheet" href="build/main.css">
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="images/favicons/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="images/favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="images/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicons/mstile-144x144.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body data-key="<?php echo htmlentities(trim($_SERVER["PATH_INFO"], '/'), ENT_QUOTES) ?>">

	<div class="nav" id="search">
		<button class="nav-add" type="button" data-add>+</button>
		<input type="text" class="nav-search" tabindex="1">
	</div>
	<main id="main">main</main>

	<script id="BlocksComposite-template" type="text/html">
		<div class="blocksWrapper" data-blocks></div>
	</script>

	<script id="BlocksEmpty-template" type="text/html">
		<% if(model.query){ %>
			<% if(collection.length > 0) { %>
				<small>Nie znalazłem nic w Twoich <strong><%- collection.length %></strong> speedialach...</small> <br>
			<% } %>
			Szukaj w Google <strong>"<%- model.query %>"</strong>
		<% } else { %>
			Nic tu nie ma... <br>
			Tam u góry po lewej jest taki fajny plusik :)
		<% } %>
	</script>

	<script id="BlockItem-template" type="text/html">
		<% if(!thumbnail) thumbnail = 'http://9px.pl/300x100/FFF/444/'+title %>
		<a href="<%= url %>" class="block-image">
			<img src="<%- thumbnail %>" alt="<%- title %>">
			<span class="block-title">
				<%- title %>
			</span>
		</a>
		<button class="block-destroy" type="button" data-destroy>&times;</button>
		<button class="block-edit" type="button" data-edit>&bull;</button>
	</script>

	<script id="BlockItemForm-template" type="text/html">
		<form>
			<label class="label">
				<b class="label-name">Tytuł:</b>
				<input type="text" value="<%- title %>" name="title" class="input input--full">
			</label>
			<label class="label">
				<b class="label-name">Adres:</b>
				<input type="url" value="<%- url %>" name="url" class="input input--full">
			</label>
			<label class="label">
				<b class="label-name">Ikonka:</b>
				<input type="url" value="<%- thumbnail %>" name="thumbnail" class="input input--full">
			</label>
			<label class="label">
				<b class="label-name">Pozycja:</b>
				<input type="number" value="<%- position %>" name="position" class="input input--number">
			</label>
			<p class="alignCenter">
				<button class="button">Zapisz</button>
			</p>
		</form>
		<button class="popup-close" type="button" data-close>&times;</button>
	</script>

	<script src="build/all.js"></script>
</body>
</html>