document.querySelector(".fa-bars").addEventListener("click", function (e) {
    let menuArea = document.querySelector(".menu-area-mobile");
    menuArea.style.position = "initial";
    let positionAtual = menuArea.setAttribute("data-menu", "1")
        document.querySelector(".menu-mobile").style.display = "block";
}, false);

$(".fa-chevron-left").click(function() {
    removerBtnMobile();
});

$('.item-menu-mobile a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    removerBtnMobile();
    mover(this);
});

function removerBtnMobile() {
        document.querySelector(".menu-mobile").classList.add("animate__fadeOutUpBig");
    let menuArea = document.querySelector(".menu-area-mobile");
    let positionAtual = menuArea.setAttribute("data-menu", "0")
    menuArea.style.position = "fixed";
        setTimeout(function () {
            document.querySelector(".menu-mobile").style.display = "none";
            document.querySelector(".menu-mobile").classList.remove("animate__fadeOutUpBig");
        },250)
}