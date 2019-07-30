<?php
# thanks pez!

# Standardwerte für Aurena.at
# $i1 = Rufpreis
$i2 = 15; # Auktionsgebühr
$i3 = 20; # Mehrwertsteuer

if(!empty($_POST['i1'])) {
  $i1 = $_POST['i1'];
  $i2 = $_POST['i2'];
  $i3 = $_POST['i3'];
  
  $out1 = $i1 * $i2 / 100;
  $out2 = $i1 * $i3 / 100;
  $out3 = $out1 + $out2;
  
  $out4 = $i1 + $out3;
}

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Rechner Auktionsgebühren</title>
  <style type="text/css">
  	* { font-family: sans-serif; }
  	input { text-align: right; }
  </style>
</head>
<body>
  <form method="post">
    <table>
      <tr>
       <td>Rufpreis</td>
       <td><input type="text" name="i1" value="<?php echo htmlentities($i1); ?>" autofocus></td>
       <td><input type="submit" value="berechnen"></td>
      </tr>
      <tr>
       <td>Auktionsgebühr</td>
       <td><input type="text" name="i2" value="<?php echo htmlentities($i2); ?>"></td>
       <td>€ <?php echo number_format($out1, 2, ',', '.'); ?></td>
      </tr>
      <tr>
       <td>Mehrwertsteuer</td>
       <td><input type="text" name="i3" value="<?php echo htmlentities($i3); ?>"></td>
       <td>€ <?php echo number_format($out2, 2, ',', '.'); ?></td>
      </tr>
      <tr>
       <td>Gesamt</td>
       <td>€ <?php echo number_format($out4, 2, ',', '.'); ?></td>
       <td>€ <?php echo number_format($out3, 2, ',', '.'); ?></td>
      </tr>
    </table>
  </form>
</body>
</html>