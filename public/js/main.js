var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    var title_offset =  document.getElementById("product-title").offsetTop;

    if (prevScrollpos > title_offset) {
        document.getElementById("navbar2").style.top = "0";
    } else {
        document.getElementById("navbar2").style.top = "-80px";
    }
    prevScrollpos = currentScrollPos;
}