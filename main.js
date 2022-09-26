

function fileExist() {
	const auto_list_link = document.getElementById("all_cars_link");
   
	fetch("autok.txt",
          { method: "HEAD" }
    ).then((res) => {
      if (res.ok) {
		auto_list_link.classList.remove("disabled");
      } else {
		auto_list_link.classList.add("disabled");
      }
    });
}

function validalas() {
    const rendszam = document.forms["auto_urlap"]["rendszam"].value;
    const marka = document.forms["auto_urlap"]["marka"].value;
    const modell = document.forms["auto_urlap"]["modell"].value;
    const gyartas_eve = document.forms["auto_urlap"]["gyartas_eve"].value;
    const uzemanyag = document.forms["auto_urlap"]["uzemanyag"].value;
	const aktualis_datum = new Date();
	let aktualis_ev = aktualis_datum.getFullYear();

    if (rendszam.trim().length == 0) {
        alert("A rendszám megadása kötelező!")
        return false;
    }
    if (marka.trim().length == 0) {
        alert("A márka megadása kötelező!")
        return false;
    }
    if (modell.trim().length == 0) {
        alert("A modell megadása kötelező!")
        return false;
    }
    if (gyartas_eve.trim().length == 0) {
        alert("A gyártási év megadása kötelező!")
        return false;
	} else if (gyartas_eve.trim().length < 4 || gyartas_eve.trim().length > 4 ) {
		alert("A gyártási évnek négy számjegyűnek kell lennie!")
        return false;
	} else if (gyartas_eve.trim() < 1900 || gyartas_eve.trim() > aktualis_ev ) {
		alert("A gyártási évnek valósnak kell lennie!")
        return false;
	}
    if (uzemanyag.trim().length == 0) {
        alert("Az üzemanyag típusának megadása kötelező!")
        return false;
    }
    return true;
}
