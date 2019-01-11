window.addEventListener("scroll", function() {showFunction()});

function showFunction() {
    if (document.body.scrollTop > 345 || document.documentElement.scrollTop > 345) {
        document.getElementById("toptexts2").style.display = "block";
    } else {
        document.getElementById("toptexts2").style.display = "none";
    }
}