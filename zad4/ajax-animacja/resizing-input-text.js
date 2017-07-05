//window.onload = init;

//window.addEventListener("load", something, false);

window.addEventListener("load",function(event) {
    var inputs = document.getElementsByClassName( "resizing-input-text" );
    for( i = 0; i < inputs.length; i++ ) {
        inputs[i].addEventListener("input", function () { resize(this); } );
    }
},false);

function resize(input) {
    input.style.width = ((input.value.length + 1) * 9) + 'px';
}