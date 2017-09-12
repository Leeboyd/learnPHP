<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>07</title>
</head>
<body>
  <ul>
    <?php foreach ($myprofile as $key => $feature) : ?>
      <li>
        <strong><?= $key; ?></strong> : <?= $feature; ?>
      </li>
    <?php endforeach; ?>
  </ul>
  <hr>
  <ul>
    <?php foreach ($commerce as $key => $feature) : ?>
      <li>
        <strong><?= ucwords($key);?>: </strong>
        <?= is_bool($commerce[$key]) ? $feature ? '倒閉' : '開著' : $feature; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>