<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Midterm Survey</h1>
<form action="#" method="post">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?= ($POST['name']) ?>">
        <?php if (isset($errors['name'])): ?>
                <?= ($errors['name'])."
" ?>
        <?php endif; ?>

        <p>Favorite genre of music</p>

        <?php foreach (($genre?:[]) as $genre): ?>
                <label><input type="checkbox"
                              name="music[]"
                              value="<?= ($genre) ?>"><?= (ucfirst($genre)) ?></label><br>
        <?php endforeach; ?>

        <?php if (isset($errors['music'])): ?>
                <?= ($errors['music'])."
" ?>
        <?php endif; ?>

        <input type="submit" value="submit">

</form>
</body>
</html>