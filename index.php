<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "partials/head.php";?>
  <body>
    <!-- header: logo -->
    <?php @include "partials/header.php";?>
    <!-- /header: logo -->
<!-- ------------------------------------------------------------------------     -->
    <main>
      <!-- Main : copertine , artisti ed anno dell'album stampato -->
      <div class="container flex"  id="list_album">

      </div>

      <script id="album-template" type="text/x-handlebars-template">
        <ul>
          <li><img src="{{poster}}" alt="poster"></li>
          <li>{{title}}</li>
          <li>{{author}}</li>
          <li>{{year}}</li>
        </ul>
      </script>

      <!-- /Main : copertine , artisti ed anno dell'album stampato -->
    </main>
    <script type="text/javascript" src="dist/app.js"></script>
   </body>
</html>
