<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    echo "<p>Thank you, <strong>$name</strong>, for your comment:</p>";
    echo "<p>$comment</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Comment - My Portfolio </title>
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/mediaqueries.css">
</head>
<body>
        <nav id="desktop-nav">
			<div class="logo">Dayang Ai</div>
			<div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="education.html">Education</a></li>
                <li><a href="passion.html">Passion</a></li>
                <li><a href="comment.php">Comment</a></li>
                <li><a href="bmi.php">BMI Calculator</a></li>
            </ul>
			</div>
        </nav>
    <main>
        <h1>Leave a Comment</h1>
        <form action="comment.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="comment">Comment:</label><br>
            <textarea id="comment" name="comment" required></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </main>
</body>
</html>