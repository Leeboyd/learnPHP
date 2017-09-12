<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    header {
      background: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
  </style>
  <title>Document</title>
</head>
<body>
  <header>
    <h1>
      <?php echo "${greeting}, You are man.";?>
    </h1>
  </header>
  <header>
    <h2>
      <?php echo "${greeting}, ${sanitize}.";?>
    </h2>
  </header>
</body>
</html>