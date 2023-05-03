<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Примеры сравнения PHP</title>
 </head>
 <body>
 <?php
  $A = 'true';
  $B = 'false';
  $C = 1;
  $D = 0;
  $E = -1;
  $F = "1";
  $G = 'null';
  $H = "php";
  ?>
  <table border="1">
   <caption><h2>Гибкое сравнение в PHP</h2></caption>
   <tr>
    <th></th>
    <th><?php echo $A ?></th>
    <th><?php echo $B ?></th>
    <th><?php echo $C ?></th>
    <th><?php echo $D ?></th>
    <th><?php echo $E ?></th>
    <th><?php echo $F ?></th>
    <th><?php echo $G ?></th>
    <th><?php echo $H ?></th>
   </tr>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $A ?></strong></td>
      <td><?php echo ($A == $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A == $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A == $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A == $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A == $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A == $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A == $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A == $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $B ?></strong></td>
      <td><?php echo ($B == $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B == $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B == $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B == $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B == $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B == $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B == $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B == $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $C ?></strong></td>
      <td><?php echo ($C == $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C == $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C == $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C == $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C == $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C == $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C == $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C == $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $D ?></strong></td>
      <td><?php echo ($D == $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D == $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D == $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D == $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D == $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D == $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D == $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D == $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $E ?></strong></td>
      <td><?php echo ($E == $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E == $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E == $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E == $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E == $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E == $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E == $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E == $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $F ?></strong></td>
      <td><?php echo ($F == $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F == $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F == $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F == $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F == $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F == $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F == $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F == $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $G ?></strong></td>
      <td><?php echo ($G == $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G == $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G == $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G == $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G == $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G == $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G == $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G == $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $H ?></strong></td>
      <td><?php echo ($H == $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H == $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H == $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H == $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H == $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H == $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H == $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H == $H) ? 'true' : 'false'; ?></td>
  </table>

  <table border="1">
   <caption><h2>Жесткое сравнение в PHP</h2></caption>
   <tr>
    <th></th>
    <th><?php echo $A ?></th>
    <th><?php echo $B ?></th>
    <th><?php echo $C ?></th>
    <th><?php echo $D ?></th>
    <th><?php echo $E ?></th>
    <th><?php echo $F ?></th>
    <th><?php echo $G ?></th>
    <th><?php echo $H ?></th>
   </tr>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $A ?></strong></td>
      <td><?php echo ($A === $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A === $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A === $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A === $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A === $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A === $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A === $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($A === $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $B ?></strong></td>
      <td><?php echo ($B === $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B === $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B === $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B === $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B === $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B === $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B === $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($B === $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $C ?></strong></td>
      <td><?php echo ($C === $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C === $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C === $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C === $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C === $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C === $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C === $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($C === $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $D ?></strong></td>
      <td><?php echo ($D === $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D === $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D === $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D === $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D === $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D === $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D === $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($D === $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $E ?></strong></td>
      <td><?php echo ($E === $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E === $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E === $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E === $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E === $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E === $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E === $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($E === $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $F ?></strong></td>
      <td><?php echo ($F === $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F === $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F === $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F === $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F === $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F === $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F === $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($F === $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $G ?></strong></td>
      <td><?php echo ($G === $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G === $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G === $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G === $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G === $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G === $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G === $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($G === $H) ? 'true' : 'false'; ?></td>
   <tr>
      <td style="background-color: #c7c2c2;"><strong><?php echo $H ?></strong></td>
      <td><?php echo ($H === $A) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H === $B) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H === $C) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H === $D) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H === $E) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H === $F) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H === $G) ? 'true' : 'false'; ?></td>
      <td><?php echo ($H === $H) ? 'true' : 'false'; ?></td>
  </table>
 </body>
</html>