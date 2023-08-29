const toggle = document.querySelector(".toggle");
const display = document.querySelector(".navlinks");
toggle.addEventListener("click", (e) => {
    toggle.classList.toggle("active");
    display.style.display = display.style.display === "flex" ? "none" : "flex";
});

const premium = document.querySelector(".premium");
let count1 = 0;

intervelId1 = setInterval(() => {
    count1++;
    premium.textContent = count1 + "+";
    if (count1 == 10) {
        clearInterval(intervelId1);
    }
}, 100);

const hotels = document.querySelector(".hotels");
let count2 = 0;

intervelId2 = setInterval(() => {
    count2++;
    hotels.textContent = count2 + "+";
    if (count2 == 100) {
        clearInterval(intervelId2);
    }
}, 10);

const costumer = document.querySelector(".costumer");
let count3 = 0;

intervelId3 = setInterval(() => {
    count3++;
    costumer.textContent = count3 + "K+";
    if (count3 == 10) {
        clearInterval(intervelId3);
    }
}, 100);

let answer = document.querySelectorAll(".faqanswer");
let icon = document.querySelectorAll("ion-icon");
let question = document.querySelectorAll(".question");

let convertingToArray = Array.from(question);
convertingToArray.forEach((element, index) => {
    element.addEventListener("click", () => {
        answer[index].classList.toggle("active");
        icon[index + 2].classList.toggle("active");
    });
});
