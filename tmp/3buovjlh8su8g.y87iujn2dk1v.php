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
        <input type="text" id="name" name="name">
        <?php if (isset($errors['name'])): ?>
                <?= ($errors['name'])."
" ?>
        <?php endif; ?>

        <p>Favorite genre of music</p>

        <input type="checkbox" id="country" name="music[]" value="country">
        <label for="country">Country</label>

        <input type="checkbox" id="jazz" name="music[]" value="jazz">
        <label for="jazz">Jazz</label>

        <input type="checkbox" id="pop" name="music[]" value="pop">
        <label for="pop">Pop</label>

        <input type="checkbox" id="rap" name="music[]" value="rap">
        <label for="rap">Rap</label>

        <input type="checkbox" id="rock" name="music[]" value="rock">
        <label for="rock">Rock</label>

        <?php if (isset($errors['music'])): ?>
                <?= ($errors['music'])."
" ?>
        <?php endif; ?>

        <input type="submit" value="submit">

</form>
</body>
</html>