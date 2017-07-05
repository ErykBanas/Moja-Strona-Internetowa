window.onload = init;

var square = null;
var animate = null;

var max = null;
var min = 0;

function init() {
    square = document.getElementById("square");
// Elementowi przekazanemu jako "square" przypisujemy zmienną o nazwie square, na której od teraz będziemy operowac!
    
    square.style.position = "relative";
    square.style.left = "0px";
    
    max = square.parentNode.clientWidth - square.clientWidth;
// max - maksymalna wartość współrzędnej, jaka może być osiągana przez "square"!
    
    document.getElementById("start").addEventListener('click', moving);
// Dodajemy opcję, że w momencie, gdy klikniemy na przycisk "start" zdefiniowany w "index.html" to uruchomimy zdefiniowaną poniżej funkcję moving()!
// Metoda getElementById("") zwraca element o podanym w nawiasie id.
    
    document.getElementById("stop").addEventListener('click', stop);
    
    document.getElementById("synchronous-GET").addEventListener('click', function() { 
        request("GET", false);
    });
    document.getElementById("asynchronous-GET").addEventListener('click', function() { 
        request("GET", true);
    });
    document.getElementById("synchronous-POST").addEventListener('click', function() { 
        request("POST", false);
    });
    document.getElementById("asynchronous-POST").addEventListener('click', function() { 
        request("POST", true);
    });
}
// 

function moving() {
    if (animate === null) {
        var left = 0;
        var move = 1;

        function frame() {
            left += move; // update parameters
            square.style.left = left + 'px'; // show frame

            // change direction
            if (left === max) {
                move = -1; //moving left
            } else if (left === min) {
                move = +1; //moving right
            }
        }
        animate = setInterval(frame, 10); // draw every 10ms
    }
}

function stop() {
    clearInterval(animate);
    square.style.left = '0px';
    animate = null;
}


function request(method, isAsync) {
    var xhr;
    try {
        xhr = new XMLHttpRequest();
    } catch (e) {
        // Internet Explorer Browsers
        try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }
    
    xhr.onreadystatechange = function() {
// Definiuje funkcję, która ma byc wywołana gdy zmieni się własność readyState!
        if (xhr.readyState == 4 && xhr.status == 200) {
        	// Własnosc readyState zostaje ustalona na 4: request finished and response is ready
        	// Zwracany jest numer statusu prośby: 200!
            var sum = document.getElementById("sum");
            sum.textContent = xhr.responseText; //console.log( "xhr.responseText: " + xhr.responseText );
        }
    };
    
    var a = parseFloat( document.getElementById("addend_a").value );
    var b = parseFloat( document.getElementById("addend_b").value );

// Pozyskiwanie wartosci zmiennych parametrycznych poprzez parsowanie wprowadzonego stringa w celu przekazania go jako dodatkowego parametru
// do metody open() jeśli wybrano metodę GET. W ten sposób wysyłamy prośbę o dane z określonego przez nas źródła.
    
    var url = "answer.php";
// Wyswietla nam rezultat dodawania przekazanych programowi zmiennych parametrycznych!
    var params = "a=" + a + "&b=" + b;
    
    switch (method) {
        case "GET":
            xhr.open(method, url + "?" + params, isAsync);
            // Metoda open() z 4-ma opcjonalnymi parametrami otwiera nowe okno przeglądarki!
            xhr.send(null);
            break;
            
// W przypadku metody POST zatwierdzamy dane do przetworzenia do ustalonego źródła.
        case "POST":
            xhr.open(method, url, isAsync);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send(params);
            break;
    }
}
