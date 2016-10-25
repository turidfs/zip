<!DOCTYPE html>
<html lang="en">
<head>
	<title>ZiP - Events</title>
	<?php include 'moduler/head.php'; ?>
</head>
<body>
	<header>
        <?php include 'moduler/header.php'; ?>
		<h1>Events</h1>
	</header>
	<main>
        <h2>Concerts/Tour</h2>
        <?php include 'moduler/eventsList.php'; ?>
	</main>

	<aside>
			<h2>Streams</h2>
			<?php include 'moduler/twitter.php'; ?>
			<?php include 'moduler/tracksQuick.php'; ?>
	</aside>
	<?php include 'moduler/footer.php'; ?>
</body>
</html>
