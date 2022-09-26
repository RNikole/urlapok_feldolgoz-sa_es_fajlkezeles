<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autók adatainak feldolgozása</title>
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
            <li class="nav-item"><a class="nav-link" href="autok.php">Összes autó adataihoz</a></li>
        </ul>
    </nav>
    <main class="container">
        <?php if (isset($_POST) && !empty($_POST)) : ?>
            <?php if (count($_POST) < 5) : ?>
                <h2>Hiba az űrlap elküldésekor</h2>
                <ul>
                    <?php if (!isset($_POST['rendszam']) || empty($_POST['rendszam'])) : ?>
                        <li>A rendszám megadása kötelező</li>
                    <?php endif; ?>
					<?php if (!isset($_POST['marka']) || empty($_POST['marka'])) : ?>
                        <li>A márka megadása kötelező</li>
                    <?php endif; ?>
					<?php if (!isset($_POST['modell']) || empty($_POST['modell'])) : ?>
                        <li>A modell megadása kötelező</li>
                    <?php endif; ?>
					<?php if (!isset($_POST['gyartas_eve']) || empty($_POST['gyartas_eve'])) : ?>
                        <li>A gyártási év megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['uzemanyag']) || empty($_POST['uzemanyag'])) : ?>
                        <li>Az üzemanyag típusának megadása kötelező</li>
                    <?php endif; ?>
                </ul>
            <?php else : ?>
                <?php 
                    $file = fopen("autok.txt", 'a');
                    $rendszam = $_POST['rendszam'];
                    $marka = $_POST['marka'];
					$modell = $_POST['modell']; 
					$gyartas_eve = $_POST['gyartas_eve'];
                    $uzemanyag = "";
                    switch ($_POST['uzemanyag']) {
                        case "benzin":
                            $uzemanyag = "Benzin";
                            break;
                        case "gazolaj":
                            $uzemanyag = "Gázolaj";
                            break;
                        case "elektromos":
                            $uzemanyag = "Elektromos";
                            break;
                        case "hibrid":
                            $uzemanyag = "Hibrid";
                            break;
                    }
                    $sor = "$rendszam;$marka;$modell;$gyartas_eve;$uzemanyag". PHP_EOL;
                    fwrite($file, $sor);
                    fclose($file);
                ?>
                <section id="megadott_adatok">
                    <h2 class="my-4">Megadott adatok</h2>
                    <ul>
                        <li>Rendszám: <?php echo $rendszam ?> </li>
                        <li>Márka: <?php echo $marka ?> </li>
                        <li>Modell: <?php echo $modell ?> </li>
                        <li>Gyártás éve: <?php echo $gyartas_eve ?> </li>
                        <li>Üzemanyag típusa: <?php echo $uzemanyag ?></li>
                    </ul>
                </section>
            <?php endif; ?>
        <?php endif; ?>
    </main>
</body>

</html>