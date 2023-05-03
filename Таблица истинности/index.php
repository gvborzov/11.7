<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Таблица истинности PHP</title>
 </head>
 <body>
  <table border="1">
   <caption><h2>Таблица истинности PHP</h2></caption>
   <tr>
    <th>A</th>
    <th>B</th>
    <th>!A</th>
    <th>A || B</th>
    <th>A && B</th>
    <th>A xor B</th>
   </tr>
   <?php
    $A = 0;
    $B = 0;
  ?>
   <tr><td><?php echo $A; ?></td><td><?php echo $B; ?></td><td><?php echo !$A ? 'true' : 'false'; ?></td><td><?php echo ($A || $B) ? 'true' : 'false'; ?></td><td><?php echo ($A && $B) ? 'true' : 'false'; ?></td><td><?php echo ($A xor $B) ? 'true' : 'false'; ?></td></tr>
   <?php
    $A = 0;
    $B = 1;
   ?>
   <tr><td><?php echo $A; ?></td><td><?php echo $B; ?></td><td><?php echo !$A ? 'true' : 'false'; ?></td><td><?php echo ($A || $B) ? 'true' : 'false'; ?></td><td><?php echo ($A && $B) ? 'true' : 'false'; ?></td><td><?php echo ($A xor $B) ? 'true' : 'false'; ?></td></tr>
   <?php
    $A = 1;
    $B = 0;
   ?>
   <tr><td><?php echo $A; ?></td><td><?php echo $B; ?></td><td><?php echo !$A ? 'true' : 'false'; ?></td><td><?php echo ($A || $B) ? 'true' : 'false'; ?></td><td><?php echo ($A && $B) ? 'true' : 'false'; ?></td><td><?php echo ($A xor $B) ? 'true' : 'false'; ?></td></tr>
   <?php
    $A = 1;
    $B = 1;
   ?>
   <tr><td><?php echo $A; ?></td><td><?php echo $B; ?></td><td><?php echo !$A ? 'true' : 'false'; ?></td><td><?php echo ($A || $B) ? 'true' : 'false'; ?></td><td><?php echo ($A && $B) ? 'true' : 'false'; ?></td><td><?php echo ($A xor $B) ? 'true' : 'false'; ?></td></tr>
  </table>
 </body>
</html>