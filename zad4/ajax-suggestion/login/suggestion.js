//document.getElementById("login").addEventListener( "input", function () {
//    showHint(this.value);
//});
document.getElementById("login").addEventListener( "keyup", function () {
    showHint(this.value);
});

function showHint(str) {
    var hint = document.getElementById("hint");
    if (str.length === 0) {
        hint.textContent = "";
        return;
    } else  {
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
            if (xhr.readyState == 4 && xhr.status == 200) {
                hint.textContent = "";
                var matches = JSON.parse(xhr.responseText); // array of matching objects
                
                if( matches.length == 0 ) {
                    hint.textContent = "brak sugestii";
                } else {
                    var ul = document.createElement("ul");
                    
                    for( var i = 0; i < matches.length; i++ ) {
                        var li = document.createElement("li");
                        var user_text = document.createTextNode(
                                matches[i].login + 
                                " (" + matches[i].firstname + 
                                " " + matches[i].lastname + ")"
                                );
                        li.appendChild(user_text);
                        li.addEventListener('click', function() { fillLoginField(this.textContent); });
                        ul.appendChild(li);
                    }
                    hint.appendChild(ul);
                }
            }
        };

        var url = "gethint.php";
        var params = "q=" + str;
        
        xhr.open("GET", url + "?" + params, true);
        xhr.send(null);
    }
}

function fillLoginField(str) {
    var loginField = document.getElementById("login");
    var login = str.substring( 0, str.indexOf(" ") );
    loginField.value = login;
    document.getElementById("hint").innerHTML = "";
    // może do czegoś się przyda
    //var firstname = str.substring( str.indexOf("(")+1, str.lastIndexOf(" ") );
    //var lastname = str.substring( str.lastIndexOf(" ")+1, str.indexOf(")") );
}