<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új autó adatfelvitel</title>
    <!-- Latest compiled and minified CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap.bundle.min.js"></script>
	
	<!-- Google fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">	

    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>

<body onload="fileExist();">
    <nav class="navbar navbar-expand navbar-primary bg-light">
		<div class="container">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link disabled" href="index.php">Új autó adatfelvitelhez</a></li>
				<li class="nav-item"><a id="all_cars_link" class="nav-link" href="autok.php">Összes autó adataihoz</a></li>
			</ul>
		</div>
    </nav>
	
    <main class="container">
        <form action="adatfeldolgozas.php" method="POST" name="auto_urlap" id="auto_urlap" 
        onsubmit="return validalas();"
        >
            <h2 class="my-4">Adja meg az autó adatait</h2>
            <div class="mb-3">
                <label class="form-label" for="rendszam_input">Rendszám:</label>
                <input class="form-control" type="text" name="rendszam" id="rendszam_input" placeholder="Rendszám" pattern="(?=.*?[0-9])(?=.*?[A-Za-z]).+" required>
            </div>
			<div class="mb-3">
                <label class="form-label" for="marka_input">Márka:</label>
                <input class="form-control" type="text" name="marka" id="marka_input" placeholder="Márka" required>
            </div>
			<div class="mb-3">
                <label class="form-label" for="modell_input">Modell:</label>
                <input class="form-control" type="text" name="modell" id="modell_input" placeholder="Modell" required>
            </div>
			<div class="mb-3">
                <label class="form-label" for="gyartas_eve_input">Gyártás éve:</label>
                <input class="form-control" type="text" name="gyartas_eve" id="gyartas_eve_input" placeholder="Gyártás éve" maxlength="4" pattern="\d{4}" required>
            </div>
			<div class="mb-3">
                <label class="form-label" for="uzemanyag_input">Üzemanyag típusa:</label>
                <select class="form-select" name="uzemanyag" id="uzemanyag_input" required>
                    <option value=""></option>
                    <option value="benzin">Benzin</option>
                    <option value="gazolaj">Gázolaj</option>
                    <option value="elektromos">Elektromos</option>
                    <option value="hibrid">Hibrid</option>
                </select>
            </div>
			<button type="submit" class="btn btn-success">Elküld</button>
            <button type="reset" class="btn btn-danger">Űrlap alaphelyzetbe</button>
        </form>
    </main>
</body>

</html>