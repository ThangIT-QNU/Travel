var slideImage = 1;
showSlides(slideImage);

// next và prev
function plusSlides(n) {
    showSlides(slideImage += n);
}

//dots
function currentSlide(n) {
    showSlides(slideImage = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("home_slide__item");
    var dots = document.getElementsByClassName("customs_dot");
    if (n > slides.length) {slideImage = 1} //quay lại slide1
    if (n < 1) {slideImage = slides.length} //đến slide cuối
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideImage-1].style.display = "grid";
    // slides[slideImage-1].className += "fadeInLeft";
    dots[slideImage-1].className += " active";
}
//back top

function backTop() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("back_top").style.display = "block";
    } else {
        document.getElementById("back_top").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//validate form contact
// window.onscroll = function () {
//     scrollFunction(),
//         backTop()
// };
//
// function scrollFunction() {
//     if (document.body.scrollTop > 35 || document.documentElement.scrollTop > 35) {
//         $(document).ready(function () {
//             $(".top_bar").hide('slow');
//         });
//
//     } else {
//         $(document).ready(function () {
//             $(".top_bar").show();
//         });
//     }
// }
