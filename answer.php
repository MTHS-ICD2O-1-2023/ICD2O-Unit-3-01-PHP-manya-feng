<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of trapezoid, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Manya" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Area of trapezoid,in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of Trapezoid, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/trapezoid.svg" alt="trapezoid image" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $baseaOfTrapezoid = $_POST["basea-of-trapezoid"];
          $basebOfTrapezoid = $_POST["baseb-of-trapezoid"];
          $heightOfTrapezoid = $_POST["height-of-trapezoid"];

          // process
          $area = ($baseaOfTrapezoid + $basebOfTrapezoid) / 2 * $heightOfTrapezoid;

          // output
          echo "If a trapezoid has bases = " . $baseaOfTrapezoid . $basebOfTrapezoid . " mm and the height = " . $heightOfTrapezoid . " mm:";
          echo "<br />";
          echo "<br />";
          echo "The area of the trapezoid is " . $area . " mm².";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>