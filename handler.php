<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>
  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Circumference and area -->
        <span class="mdl-layout-title">Circumference and Area</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" href="">Link</a>
          <a class="mdl-navigation__link" href="">Link</a>
          <a class="mdl-navigation__link" href="">Link</a>
          <a class="mdl-navigation__link" href="">Link</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Title</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content">
        <?php
        $myVariable = "diameter";
        $diameter = 0;
        $circumference = '';
        $area = '';
        if (isset($_POST['diameter'])) {
          $diameter = $_POST['diameter'];
        }
        echo "My diameter is " . $diameter;
        if ($diameter <= 0) {

          echo "Reenter diameter: number must be greater than 0.";
        } else {
          echo " diameter is good";
        }
        function calc($d)
        {

          $r = $d / 2;
          echo ($r);
          $area = pi() * $r ** 2;
          $circumference = 2 * pi() * $r;
          return [$area, $circumference];


          echo ($area);
          echo ($circumference);
        }

        $result = calc($diameter);

        echo "<h1></h1>\n";
        echo "<p>Circumference: " . $result[1] . "</p>\n";
        echo "<p>Area: " . $result[0] . "</p>\n";
        ?>

</body>

</html>