window.addEventListener("scroll", function() {showFunction2()});

function showFunction2() {
    if (document.body.scrollTop > 1050 || document.documentElement.scrollTop > 1050) {
        document.getElementById("toptexts").style.display = "block";
    } else {
        document.getElementById("toptexts").style.display = "none";
    }
}