<html>
<body>
<?php
$cars = [
		["valvo",22,18],
		["bmw",15,12],
		["saab",22,555],
		["land rower",88,46],
		["land rower",88,46],
		];
echo "<table border=2 width=60% align=center>";
echo "<tr> <th> name <th>  stoke <th> sold";
echo "<tr><td>".$cars[0][0]."<td>".$cars[0][1]."<td>".$cars[0][2];
echo "<tr><td>".$cars[1][0]."<td>".$cars[1][1]."<td>".$cars[1][2];
echo "<tr><td>".$cars[2][0]."<td>".$cars[2][1]."<td>".$cars[2][2];
echo "<tr><td>".$cars[3][0]."<td>".$cars[3][1]."<td>".$cars[3][2];
echo "</table>";
?>
</body>
</html>