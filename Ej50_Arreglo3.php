<!DOCTYPE html>
<html>
<body>
<head>
	<style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

<head>
<body>

<h2>Tienda</h2>

<?php

$articulos=array("Camisa", "Pantalon", "Vestido", "Blusa", "Abrigo");
$cantidades=array(2, 3, 1, 3, 1);
$precios=array(100, 395, 320, 75, 250);
$subtotales=array();
$total_A=0;
$total_D=0;
$IVA=array();
$total=array();

$total_A=0;
$precio_T=0;

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Artículo</th>";
echo "<th>Cantidad</th>";
echo "<th>Precio</th>";
echo "<th>Subtotal</th>";
echo "<th>IVA (16%)</th>";
echo "<th>Total</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

for ($i=0; $i<5; $i++) {
	$subtotales[$i]=$precios[$i]*$cantidades[$i];
	$IVA[$i]=$subtotales[$i]*0.16;
	$total_A+=$cantidades[$i];
	$lol=$precios[$i]*$cantidades[$i];
	$precio_T+=$lol;
	$total[$i]=$subtotales[$i]+$IVA[$i];

	echo "<tr>";
	echo "<td>" . $articulos[$i] . "</td>";
	echo "<td>" . $cantidades[$i] . "</td>";
	echo "<td>$" . $precios[$i] . "</td>";
	echo "<td>$" . $subtotales[$i] . "</td>";
	echo "<td>$" . $IVA[$i] . "</td>";
	echo "<td>$" . $total[$i] . "</td>";
	echo "</tr>";
	
	$total_D=$total_D+$subtotales[$i];
}

echo "</tbody>";

echo "<tfoot>";
echo "<tr>";
echo "<td><strong>Totales</strong></td>";
echo "<td><strong>" . $total_A . " productos</strong></td>";
echo "<td colspan='2'><strong>Monto de venta:</strong></td>";
echo "<td colspan='2'><strong>$" . $total_D . "</strong></td>";
echo "</tr>";
echo "</tfoot>";

echo "</table>";
?>

</body>
</html>