$(document).ready(function() {
    console.log("ready");
    checkMenuStatus();
})


function checkMenuStatus() {
    // check from localstorage
    const menuStatus = localStorage.getItem("menuStatus");
    if(menuStatus == "menu-is-open") {
        menuToggle();
    }
}
function menuToggle() {
    let menuStatus = $(".main-menu").hasClass("menu-is-open");
    if(menuStatus) {
        $(".main-menu").removeClass("menu-is-open");
        $(".main-content").removeClass("menu-is-open");
        localStorage.setItem("menuStatus", null);
    } else {
        $(".main-menu").addClass("menu-is-open");
        $(".main-content").addClass("menu-is-open");
        localStorage.setItem("menuStatus", "menu-is-open");
    }
}
