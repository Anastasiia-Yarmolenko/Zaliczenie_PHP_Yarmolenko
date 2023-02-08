<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>

<?php if ($success == true): ?>
    <div class="success">Everything is valid!!!</div>
<?php endif ?>

<form method="post">
    <input type="text" name="text" placeholder="text">
    <input type="number" name="grade" placeholder="grade">

    <?php if (isset($errors)): ?>
    <?php foreach ($errors as &$err): ?>
        <p><?php echo $err ?></p>
    <?php endforeach ?>
    <?php endif ?>

    <button type="submit">Send</button>
</form>

</body>
</html>
