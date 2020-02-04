<?php
$ant = 1;
echo "voer een cijfer in";
$cijfer = readline();
$i = 1;
while ($i < $cijfer) {
  $i++;
  $ant = $i * $ant;
}
echo "De faculteit van $cijfer = " . $ant;
 ?>
