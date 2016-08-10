<!DOCTYPE html>
<html>
<head>
	<title><?php get_title(); ?></title>
	<meta name="description" content="<?= get_metadata()['desc'] ?>">
	<meta name="keywords" content="<?= get_metadata()['keywords'] ?>">
	<meta name="twitter:image" property="og:image" content="<?= get_metadata()['image'] ?>">
	<link rel="stylesheet" href="<?= $ASSETS ?>/css/main.css">
</head>
<body>
	<header>
		<h1>PHP Admin Dashboard</h1>
	</header>