//navigasi
$(".navigasi").on('click', function(){
    $('.navigasi').css('color', '#0a0a0a');
    $(this).css('color', 'rgb(196, 170, 65)');

    $(".page-active").removeClass("page-active");
    var page = $(this).attr("data-value");
    $(`#${page}`).addClass("page-active");
});

// var index = 0;
// setInterval(() => {
//     $(".promo-items").eq(index).trigger('click');
//     this.index += 1;
//     if(this.index > $(".promo-items").length){
//         this.index = 0;
//     }
// }, 3500);

//promo
$(".promo-items").on('click', function(){
    var index = $(this).index();
    var el = $(".promo-items");
    var active = $(".promo-items.active").index();

    el.siblings().removeClass("active").removeClass("sub-active");

    if(index != 0){
        $(this).prev().addClass("sub-active");
    }
    $(this).next().addClass("sub-active");
    if(index == 0){
        $(".promo-items").eq(2).addClass("sub-active");
    }
    if(index == el.length-1){
        $(".promo-items").eq(el.length-3).addClass("sub-active");
    }
    
    $(this).addClass("active");
})

//scroll animation
var width = screen.width;
if(width > 720){
    const scrollElements = document.querySelectorAll(".scroll");

    const elementInView = (el, dividend = 1) => {
        const elementTop = el.getBoundingClientRect().top;

        return (
            elementTop <=
                (window.innerHeight || document.documentElement.clientHeight) / dividend
            );
    };

    const elementOutofView = (el) => {
        const elementTop = el.getBoundingClientRect().top;

        return (
                elementTop > (window.innerHeight || document.documentElement.clientHeight)
            );
    };

    const displayScrollElement = (element) => {
        element.classList.add("load");
    };

    const hideScrollElement = (element) => {
        element.classList.remove("load");
    };

    const handleScrollAnimation = () => {
        scrollElements.forEach((el) => {
            if (elementInView(el, 1)) {
            displayScrollElement(el);
            } else if (elementOutofView(el)) {
            hideScrollElement(el)
            }
        })
    }

    window.addEventListener("scroll", () => { 
        handleScrollAnimation();
    });

}else{

    document.addEventListener('DOMContentLoaded', () => {
        var el = document.querySelectorAll(".scroll");
        for(var i = 0; i < el.length ; i++){
            el[i].classList.add("load");
        }
    });

}

