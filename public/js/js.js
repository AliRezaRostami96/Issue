function menuToggle() {
    let menuStatus = $(".main-menu").hasClass("menu-is-open");
    if(menuStatus) {
        $(".main-menu").removeClass("menu-is-open");
        $(".main-content").removeClass("menu-is-open");
    } else {
        $(".main-menu").addClass("menu-is-open");
        $(".main-content").addClass("menu-is-open");
    }
}