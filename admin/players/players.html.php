<?php 
include_once 
$_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Manage players: Search Results</title>
  </head>
  <body>
    <h1>Search Results</h1>
    <?php if (isset($players)): ?>
      <table>
        <tr><th>Players</th><th>Options</th></tr>
        <?php foreach ($players as $player): ?>

        <tr>
          <td><?php markdownout($player['secName']); ?></td>
          <td>
            <form action="?" method="post">
              <div>
                <input type="hidden" name="id" value="<?php
                    htmlout($player['id']); ?>">
                <input type="submit" name="action" value="Edit">
                <input type="submit" name="action" value="Delete">
              </div>
            </form>
          </td>
        </tr>

        <?php endforeach; ?>
      </table>
    <?php endif; ?>
    <p><a href="?">New search</a></p>
    <p><a href="..">Return to JMS home</a></p>
	<?php include '../logout.inc.html.php'; ?>
  </body>
</html>
