<!DOCTYPE html>
<html>
<head>
	<title>ZiP - Home</title>
	<?php include 'moduler/head.php'; ?>
</head>

<body>
	<header id="top">
        <?php include 'moduler/header.php'; ?>
        <h2>Home</h2>
	</header>

	<main>
        <?php include 'moduler/pictureSlide.php'; ?>
        <section class="news">
            <h4>Siste nytt</h4>
            <?php include 'moduler/news.php'; ?>
        </section>
        <section class="events">
            <h4>Events</h4>
            <?php include 'moduler/eventsList.php'; ?>
        </section>
	</main>
	<aside>
			<?php include 'moduler/twitter.php'; ?>
			<?php include 'moduler/tracksQuick.php'; ?>
	</aside>
    <?php include 'moduler/footer.php'; ?>
</body>
</html>
