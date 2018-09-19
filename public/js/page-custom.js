function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
}

function w3_close() {
    closeLeftMenu();
    closeRightMenu();
    document.getElementById("myOverlay").style.display = "none";
}