var menuItems = document.getElementById("menu-items");
menuItems.style.maxHeight = "0px";
function toggleMenu() {
    if(menuItems.style.maxHeight == "0px") {
        menuItems.style.maxHeight = "350px"
    } else {
        menuItems.style.maxHeight = "0px"
    }
}
