<!DOCTYPE html>
<html lang="en">
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
        <h3>Siste nytt</h3>
        <section class="news">
            <h4>Nyheter</h4>
            <?php include 'moduler/news.php'; ?>
        </section>
        <section class="events">
            <h4>Events</h4>
            <?php include 'moduler/eventsList.php'; ?>
        </section>
        <aside>
            <h3>Streams</h3>
            <?php include 'moduler/twitter.php'; ?>
            <?php include 'moduler/tracksQuick.php'; ?>
        </aside>
	</main>
    <?php include 'moduler/footer.php'; ?>
</body>
</html>
