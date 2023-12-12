let logoHeader = document.querySelector(".logo-header");
logoHeader.addEventListener('click', () => {
    window.location.href = "/";
})

let animalImages = document.querySelectorAll(".gallery-img");
animalImages.forEach(animalImage => {
    animalImage.addEventListener('click', () => {
        if(!animalImage.classList.contains("big-img")) {
            animalImage.classList.add("big-img");
            disableScroll();
            animalImage.parentElement.classList.add("big-img-container");
        } else {
            enableScroll();
            animalImage.classList.remove("big-img");
            animalImage.parentElement.classList.remove("big-img-container");
        }
    })
})

let inputs = document.querySelectorAll(".input-form input");
inputs.forEach(input => {
    input.addEventListener('focus', () => {
        input.style.backgroundColor = 'rgb(235, 219, 212)';
    })
    input.addEventListener('focusout', () => {
        input.style.backgroundColor = 'rgb(245, 245, 245)';
    })
})

// functions

function disableScroll() {
    scrollTop = window.scrollY;
    scrollLeft = window.scrollX;
    window.onscroll = function() {
        window.scrollTo(scrollLeft, scrollTop);
    }
    console.log(scrollTop, scrollLeft);
}

function enableScroll() {
    window.onscroll = function() {}
}