<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>

  <?php
  $myVariable = "diameter";
  $diameter = 0;
  $circumference = '';
  $area = '';
  if (isset($_POST['diameter'])) {
    $diameter = $_POST['diameter'];
  }

  if ($diameter <= 0) {

    echo "Reenter diameter: number must be greater than 0.";
  } else {
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

  calc($diameter);

  echo "<h1></h1>\n";
  echo "<p>Circumference: " . $circumference . "</p>\n";
  echo "<p>Area: " . $area . "</p>\n";
  ?>

</body>

</html>