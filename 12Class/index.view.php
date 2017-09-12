<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>12</title>
</head>
<body>
  <ul>
    <?php foreach ($tasks as $task) : ?>
      <li>
        <?php if ($task->isComplete()) : ?>
          <strike><?= $task->accessDescription(); ?></strike>
        <?php else: ?>
          <?= $task->accessDescription(); ?>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>