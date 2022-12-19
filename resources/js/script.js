// sezione modale
const myModalEl = document.getElementById("modalButton");
const testoModale = document.querySelectorAll(".modal-text");

// se il modale è presente nel dom al caricamento cliccherà
// il pulsante invisibile per attivarlo
window.onload = () => {
    myModalEl.click();
};

// sezione animazione navbar
// intersection observer sull'herosection per la navbar
const heroSection = document.querySelector(".hero-bg");
const navbar = document.querySelector(".bg-navbar");

let heroSectionObserver = new IntersectionObserver(
    (entries) => {
        //faccio un ciclo forEach su entries
        entries.forEach((entry) => {
            // se l'intersectionobserver intercetta l'entry
            if (entry.isIntersecting) {
                navbar.classList.remove("scrolled");
            } else {
                navbar.classList.add("scrolled");
            }
        });
    },
    // parametro dell'oggetto IntersectionObserver da 0 a 1 che stabilisce
    //  quanto l'elemento deve apparire per far diventare isIntersecting "true"
    {
        threshold: 0.9,
    }
);
heroSectionObserver.observe(heroSection);
