let animation = false

document.addEventListener('DOMContentLoaded', () => {
    let section2 = document.querySelector(".section2")
    let section1 = document.querySelector(".section1")
    let section3 = document.querySelector(".section3")
    let section4 = document.querySelector(".section4")
    let footer = document.querySelector(".footer")

    if (animation) {
        window.addEventListener("beforeunload", () => {
            section1.style.marginBottom = "0%"
        });


        setTimeout(() => {
            section2.style.display = "flex"
            section3.style.display = "flex"
            footer.style.display = "flex"
            section4.style.display = "flex"
            section1.style.marginBottom = "22%"
        }, 8000)

    } else {
        section2.style.display = "flex"
        section3.style.display = "flex"
        section4.style.display = "flex"
        footer.style.display = "flex"
        section1.style.marginBottom = "22%"
    }


})


let links = document.querySelectorAll('.animatedSpan')
links.forEach((link) => {
    let isAnimating = false;
    console.log(link)
    link.addEventListener('mouseover', function (e) {

        if (isAnimating) return; // Si une animation est en cours, ignorer l'événement
        isAnimating = true;
        // Get the target
        console.log(link)
        const target = e.target;


        // Get the bounding rectangle of target
        const rect = target.getBoundingClientRect();

        const y = e.clientY - rect.top;

        // Vérifier si l'entrée vient du haut ou du bas
        if (y < rect.height / 2) {
            console.log("Entier par le haut")

            isAnimating = true;
            link.querySelectorAll('span').forEach((span) => {
                span.style.transform = "translateY(-38px)"
            })
        } else {

            isAnimating = true;
            console.log("Entier par le bas")
            link.querySelectorAll('span').forEach((span) => {
                span.style.transform = "translateY(0px)"
            })
        }


    });

    link.addEventListener('mouseout', function () {
        link.querySelectorAll('span').forEach((span) => {
            span.style.transform = "translateY(-19px)"; // Retour à l'état initial
        });
        isAnimating = false;
    });
})

function scrollToDiv(route) {
    const element = document.querySelector(`${route}`);
    console.log(element)
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });

    }
}

