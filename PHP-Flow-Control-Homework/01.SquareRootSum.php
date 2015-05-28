 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Square Root Sum</title>
 	<style type="text/css">
	table, tr {
		border: 1px solid black;
	}
 	</style>
 </head>
 <body>
 	<table>
 	<tbody>
 	<thead>
 		<tr>
 			<th>Number</th>
 			<th>Square</th>
 			</tr>
 			</thead>
 			<?php 
 			$sum = 0;
 			for ($i=0; $i <= 100; $i++) { 
 				echo "<tr><td>";

 				if ($i % 2 != 0) {
 					continue;		
 				} else {
 					echo $i . "</td>";
 				}

 				echo "<td>" . str_replace(".00", "", (string)number_format (sqrt($i), 2, ".", "")) . "</td></tr>";

 				$sum += sqrt($i);

 				if ($i == 100) {
 					echo "<tr>" . "<td>Total:</td>" .  "<td>" . sprintf("%.2f", $sum) . "</td></tr>"  ;
 				}

 			}
 			var_dump($sum);
 			 ?>
 		</tr>
 		</tbody>
 	</table>
 </body>
 </html>