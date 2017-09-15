<?php require('views/partials/head.php'); ?>
  <h1>Adding Task</h1>
  <form method="POST" action="/addtask">
    <input name="description"></input>
    <button type="submit">Click</button>
  </form>
<?php require('views/partials/footer.php'); ?>