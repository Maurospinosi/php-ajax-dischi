<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "partials/head.php";?>
  <body>
    <!-- header: logo -->
    <?php @include "partials/header.php";?>
    <!-- /header: logo -->
<!-- ------------------------------------------------------------------------     -->
    <!-- Main : copertine , artisti ed anno dell'album stampato -->
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
    <!-- /Main : copertine , artisti ed anno dell'album stampato -->
  </body>
</html>
