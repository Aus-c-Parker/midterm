<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Midterm Survey</h1>
<h2>Thank you for taking the survey, <?= ($SESSION['name']) ?>!</h2>
<h3>Your answers: </h3>
<p><?= (implode($SESSION['music'], ", ")) ?></p>
</body>
</html>