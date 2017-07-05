// JavaScript Document

//obsługa formularza
function aktualizacjaWieku() {
    "use strict";
    var x, xx, xxx, a;
    x = document.Form1.bday.value;
    xx = x.split("-");
    xxx = xx[0];
    a = 2016 - xxx;
    document.Form1.Wiek.value = a;
}
function CzyDuza() {
    "use strict";
    var aaa, bbb, znaki, z, im, naz, licznik, dd;
    aaa = document.Form1.Imie.value;
    bbb = document.Form1.nazwisko.value;
    znaki = "ABCDEFGHIJKLŁMNOPQRSTUVWXYZ";
    z = znaki.split("");
    im = aaa.split("");
    naz = bbb.split("");
    
    for (licznik = 0; licznik < 26; licznik++) {
        if (im[0] ===  z[licznik]) {
            for (dd = 0; dd < 26; dd++) {
                if (naz[0] === z[dd]) {
                    return true;
                }
            }
        }
    }
    alert("Imię i niazwsko musi być pisane z dużej litery!");
    return false;
}
function checkFile(filename) {
    "use strict";
    var parts, ext, a;
	parts = filename.split('.');
	ext = parts[parts.length - 1];
    a = ext.toLowerCase();
    if (a === 'jpg' || a === 'png' || a === 'tif') {
        return 0;
    } else {
        alert("Nieprawidłowy format pliku!");
        return 1;
    }
}
function sprawdzPESEL() {
    "use strict";
    var pesel, x, xx, p, i;
    x = document.Form1.bday.value;
    xx = x.split("");
    pesel = document.Form1.pesel.value;
    p = pesel.split("");
    if (xx[2] === p[0] && xx[3] === p[1] && xx[5] === p[2] && xx[6] === p[3] && xx[8] === p[4] && xx[9] === p[5]) {
        return 0;
    } else {
        alert("Błędny PESEL! Nie zgadza się z datą urodzenia!");
        return false;
    }
}
function sprawdz(formularz) {
    "use strict";
    aktualizacjaWieku();
    var pesel, i, pole, plik, litera;
    
    if (document.Form1.zgoda.checked === false) {
        alert("Musisz wyrazić zgodę na przetwarzanie danych!");
        return false;
    }
    pesel = formularz.PozostaloLiczb;
    if (sprawdzPESEL() === 0) {
        if (pesel.value != 0) {
            alert("Nieprawidłowy PESEL!");
            return false;
        }
    }
    for (i = 0; i < formularz.length; i++) {
        pole = formularz.elements[i];
        if (pole.type === "text" && pole.value === "") {
            alert("Proszę wypełnić wszystkie pola!");
            return false;
        }
    }
    plik = checkFile(document.Form1.file.value);
    litera = CzyDuza();
    if (plik === 0 && litera === true) {
        return true;
    } else {
        return false;
    }
}
function blockNumbers(e) {
    "use strict";
    e = e.wchich || event.keyCode;
    return (e <= 46 || e >= 58);
}

function blockText(e, textBox) {
    "use strict";
    e = e.wchich || event.keyCode;
    return (e >= 48 && e < 58);
}
var wartoscOpis;
function MaxRozmiar(dlugosc) {
    "use strict";
    if (document.Form1.kom.value.length > dlugosc) {
        document.Form1.kom.value = wartoscOpis;
    } else {
        wartoscOpis = document.Form1.kom.value;
    }
    document.Form1.PozostaloZnakow.value = dlugosc - document.Form1.kom.value.length;
}
var wratPesel;
function MaxiRozmiar(dlugosc) {
    "use strict";
    if (document.Form1.pesel.value.length > dlugosc) {
        document.Form1.pesel.value = wratPesel;
    } else {
        wratPesel = document.Form1.pesel.value;
    }
    document.Form1.PozostaloLiczb.value = dlugosc - document.Form1.pesel.value.length;
}
            
// obsługa tabeli
function randomName() {
    "use strict";
    var liczba, imie;
    liczba = Math.floor(Math.random() * 10);
    imie = ['Szymon', 'Joanna', 'Tomek', 'Anna', 'Jakub', 'Jan', 'Piotr', 'Kasia', 'Zuzanna', 'Ola'];
    return imie[liczba];
}
function randomSurname() {
    "use strict";
    var liczba, nazwisko;
    liczba = Math.floor(Math.random() * 10);
    nazwisko = ['Smith', 'Wanat', 'Maj', 'Smok', 'Nowak', 'Wieczorek', 'Mazur', 'Krawczyk', 'Kwiatek', 'Bez'];
    return nazwisko[liczba];
}
function removeForms() {
    "use strict";
    var formsToRemove, formsParent;
    formsToRemove = document.getElementsByName('generator')[0];
    formsParent = formsToRemove.parentNode;
    formsParent.removeChild(formsToRemove);
}
function createTable(i) {
    "use strict";
    var a, row, cell, newName, newSecondName, table;    
    table = document.createElement('div');
    table.className = "Table1";
    row = document.createElement('div');
    row.className = "Title1";
    row.appendChild(document.createTextNode('Tabela'));
    table.appendChild(row);
    row = document.createElement('div');
    row.className = "Heading1";
    row.id = "Heading1";
    table.appendChild(row);
    cell = document.createElement('div');
    cell.className = "Cell1";
    cell.appendChild(document.createTextNode('Lp.'));
    row.appendChild(cell);
    cell = document.createElement('div');
    cell.className = "Cell1";
    cell.appendChild(document.createTextNode('Imię'));
    row.appendChild(cell);
    cell = document.createElement('div');
    cell.className = "Cell1";
    cell.appendChild(document.createTextNode('Nazwisko'));
    row.appendChild(cell);
	
    cell = document.createElement('div');
    cell.className = "Cell1";
    cell.id = "cel";
    row.appendChild(cell);
	
    if (i < 0) {
    	alert("Nieprawidłowa ilosc komórek!");
        return false;
    }
    else {
		for (a = 0; a < i; a++) {
	        newName = randomName();
	        newSecondName = randomSurname();
	        row = document.createElement('div');
	        row.className = "Row1";
		
	        cell = document.createElement('riv');
	        cell.className = "Cell1";
	        cell.appendChild(document.createTextNode(a + 1));
	        row.appendChild(cell);
		
	        cell = document.createElement('riv');
	        cell.className = "Cell1";
	        cell.appendChild(document.createTextNode(newName));
	        row.appendChild(cell);
		
	        cell = document.createElement('riv');
	        cell.className = "Cell1";
	        cell.appendChild(document.createTextNode(newSecondName));
	        row.appendChild(cell);
	        
	        cell = document.createElement('div');
	        cell.className = "Cell1";
	        cell.setAttribute('contenteditable', 'true');
	        row.appendChild(cell);
	        table.appendChild(row);
	    }
    }
    document.getElementById('form_container').appendChild(table);
	document.getElementById('cel').innerHTML += '<button id=\'columnButton\' class=\'button\' onClick=\'addColumn()\'>Dodaj</button>';
	removeForms();
}
	
function addColumn() {
    "use strict";
	var newCol, i;
	newCol = document.createElement('div');
	newCol.className = "Cell1";
	newCol.setAttribute('contenteditable', 'true');
	document.getElementById('Heading1').appendChild(newCol);
	for (i = 0; i < document.getElementsByClassName('Row1').length; i++) {
		newCol = document.createElement('div');
		newCol.className = "Cell1";
		newCol.setAttribute('contenteditable', 'true');
		document.getElementsByClassName('Row1')[i].appendChild(newCol);
	}
	document.getElementsByClassName('Heading1')[0].lastChild.appendChild(document.getElementById('columnButton'));
}