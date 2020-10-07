<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi in Php</title>
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
        <img src="img/logo-small.svg" alt="logo">
    </header>
<!-- ------------------------------------------------------------------------     -->
    <main>
      <div class="container flex">
        <?php foreach ($database as $album){ ?>
          <ul>
            <li><img src="<?php echo $album["poster"] ?>" alt="poster"></li>
            <li><?php echo $album["title"]; ?></li>
            <li><?php echo $album["author"] ?></li>
            <li><?php echo $album["year"] ?></li>
          </ul>
        <?php } ?>
      </div>
    </main>
  </body>
</html>
