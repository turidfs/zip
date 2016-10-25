<!DOCTYPE html>
<html>
<head>
	<title>ZiP - Social</title>
    <?php include 'moduler/head.php'; ?>
</head>
<body>
    <header>
        <?php include 'moduler/header.php'; ?>
        <h1>Social</h1>
    </header>
	<main>
        <h2>Nyheter</h2>
        <?php include 'moduler/news.php'; ?>
        <aside>
            <h2>Streams</h2>
            <?php include 'moduler/twitter.php'; ?>
            <?php include 'moduler/tracksQuick.php'; ?>
        </aside>
	</main>
    <?php include 'moduler/footer.php'; ?>
</body>
</html>
