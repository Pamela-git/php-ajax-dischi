<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
    <?php
      require_once 'data.php';
    ?>
  </head>
  <body>
    <div id="app">
      <header>
        <img src="img/logo.png" alt="">
      </header>
      <div class="container">
        <?php
          foreach ($database as $key => $dischi) {
            ?>
              <div class="item-container">
                  <img src="<?php echo $dischi["poster"] ?>" alt="">
                  <h3 class="style-title"><?php echo $dischi["title"] ?></h3>
                  <h4 class="style-text"><?php echo $dischi["author"] ?></h4>
                  <span class="style-text"><?php echo $dischi["year"] ?></span>
              </div>
            <?php
          }
        ?>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
