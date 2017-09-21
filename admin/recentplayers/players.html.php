<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Recent players</title>
    <link rel="canonical" href="/recentplayers/">
  </head> 
  <body>
    <p>Here are some players in the database:</p>
    <?php foreach ($players as $player): ?>
      <?php markdownout($player['secName']); ?>
    <?php endforeach; ?>
  </body>
</html>
