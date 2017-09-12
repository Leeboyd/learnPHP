<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>06</title>
</head>
<body>
  <ul>
    <?php foreach ($suffixes as $text) : ?>
      <li><?= $text; ?></li>
    <?php endforeach; ?>
  </ul>
  <hr>
  <ul>
    <?php 
      foreach ($suffixes as $text) {
        echo "<li>${text}</li>";
      }
    ?>
  </ul>
</body>
</html>