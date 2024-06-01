<?php
$bmi = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    if (is_numeric($height) && is_numeric($weight)) {
        $height = $height / 100; // Convert height from cm to meters
        $bmi = $weight / ($height * $height);
        $bmi = round($bmi, 1);
    } else {
        $bmi = "Please enter valid numbers.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BMI Calculator - My Portfolio </title>
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
        <h1>BMI Calculator</h1>
        <form action="bmi.php" method="post">
            <label for="height">Height (cm):</label><br>
            <input type="text" id="height" name="height" required><br>
            <label for="weight">Weight (kg):</label><br>
            <input type="text" id="weight" name="weight" required><br>
            <input type="submit" value="Calculate BMI">
        </form>
        <?php if ($bmi !== ""): ?>
            <p>Your BMI is: <?php echo $bmi; ?></p>
        <?php endif; ?>
    </main>
</body>
</html>