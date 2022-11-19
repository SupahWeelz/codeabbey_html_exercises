<?php
  var name = $_GET['name'];
  var year = $_GET['year'];
  var month = $_GET['month'];
  var day = $_GET['day'];
  var A = 32;
  var B = 32;
  var C = 16;
  var lucky = (strlen(name) * A + month * B + day * C + year) % 31 + 1;
  echo "Your lucky day is " . lucky;
?>
