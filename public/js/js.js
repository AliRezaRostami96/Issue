$(document).ready(function() {
    checkMenuStatus();
    $('.select2').select2({
        width: '100%'
    });
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

function getBase64(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
}
