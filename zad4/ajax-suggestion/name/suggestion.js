document.getElementById("name").addEventListener( "input", function () {
    showHint(this.value);
});
document.getElementById("name").addEventListener( "keyup", function () {
    showHint(this.value);
});

function showHint(str) {
    var hint = document.getElementById("hint");
    if (str.length === 0) {
        hint.textContent = "";
        return;
    } else {
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
                hint.textContent = xhr.responseText;
            }
        };

        var url = "gethint.php";
        var params = "q=" + str;
        
        xhr.open("GET", url + "?" + params, true);
        xhr.send(null);
    }
}