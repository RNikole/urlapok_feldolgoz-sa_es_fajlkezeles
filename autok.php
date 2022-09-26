<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Összes autó adatai</title>
    <!-- Latest compiled and minified CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap.bundle.min.js"></script>
	
	<!-- Latest compiled JavaScript -->
    <script src="bootstrap.bundle.min.js"></script>
	
	<!-- Google fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand navbar-primary bg-light">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Új autó adatfelvitelhez</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="autok.php">Összes autó adataihoz</a></li>
        </ul>
    </nav>
    <main class="container">
		<div class="table-responsive">
			<table class="table table-success table-striped mt-4">
				<thead>
					<tr>
						<th>#</th>
						<th>Rendszám</th>
						<th>Márka</th>
						<th>Modell</th>
						<th>Gyártás éve</th>
						<th>Üzemanyag típusa</th>
					</tr>
				</thead>
				<tbody>

					<?php
				$file = fopen("autok.txt", "r");
				$i = 0;
				while ($sor = fgets($file)) {
					$i++;
					$adatok = explode(";", $sor);
					?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $adatok[0] ?></td>
						<td><?php echo $adatok[1] ?></td>
						<td><?php echo $adatok[2] ?></td>
						<td><?php echo $adatok[3] ?></td>
						<td><?php echo $adatok[4] ?></td>
					</tr>
					<?php
				}
				fclose($file);
				?>
				</tbody>
				
				<tfoot>
					<tr>
						<th>#</th>
						<th>Rendszám</th>
						<th>Márka</th>
						<th>Modell</th>
						<th>Gyártás éve</th>
						<th>Üzemanyag típusa</th>
					</tr>
				</tfoot>
			</table>
		</div>
    </main>
</body>

</html>