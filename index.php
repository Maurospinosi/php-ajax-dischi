<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi in Php</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <?php foreach ($database as $album){ ?>
      <img src="<?php echo $album["poster"] ?>" alt="poster">
      <h3><?php echo $album["title"]; ?></h3>
      <div><?php echo $album["author"] ?></div>
      <div><?php echo $album["year"] ?></div>
    <?php } ?>
  </body>
</html>
