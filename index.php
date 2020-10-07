<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi in Php</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <div class="container">
        <img src="img/logo-small.svg" alt="logo">
      </div>
    </header>
<!-- ------------------------------------------------------------------------     -->
    <main>
      <div class="container flex">
        <?php foreach ($database as $album){ ?>
          <ul class="main_list">
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
