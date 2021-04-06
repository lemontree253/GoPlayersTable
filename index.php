<html>
<head>

<link rel="stylesheet" type="text/css" href="styles.css">

<img src="image.jpg" border="1px">
<table align="center" border="1">
<tr><th>Место</th><th>Имя</th></tr>


<?php
$xml = file_get_contents("https://gokgs.com/top100.jsp");
$f = explode("user=", $xml);
for ($i=1; $i < 101; $i++) {
  $r = substr($f[$i], 0, strpos($f[$i], '"'));
  echo "<tr>"."<td>".$i."</td>"."<td>".$r."</td>";
  echo "</tr>"."\n";
}
?>


</table>
</head>
</html>
