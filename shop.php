<!DOCTYPE html>
<html lang="en">
<head>
	<title>ZiP - Shop</title>
    <?php include 'moduler/head.php'; ?>
</head>
<body>
    <header>
        <?php include 'moduler/header.php'; ?>
        <h1>Butikker</h1>
    </header>
	<main>
        <section class="music">
            <h2>Music</h2>
            <p>Album 1</p>
            <p>Album 2</p>
            <p>Album 3</p>
            <p>Album 4</p>
        </section>
        <section class="clothes">
            <h2>Clothes</h2>
            <p>Sweater</p>
            <p>T-shirts</p>
            <p>Sleeves</p>
            <p>Jackets</p>
        </section>
        <section class="posters">
            <h2>Posters</h2>
            <p>Everyone</p>
            <p>Natalie</p>
            <p>Fredrik</p>
            <p>Irene</p>
        </section>
        <section class="merch">
            <h2>Merch</h2>
            <p>Mugs</p>
            <p>Zippo lighters</p>
            <p>Coasters</p>
            <p>Patches</p>
        </section>
	</main>

	<aside>
			<h2>Streams</h2>
			<?php include 'moduler/twitter.php'; ?>
			<?php include 'moduler/tracksQuick.php'; ?>
	</aside>
    <?php include 'moduler/footer.php'; ?>
</body>
</html>
