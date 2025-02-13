$ = document;

const arcElem = $.querySelectorAll(".section-arc")
const totalArc = $.querySelector(".total-arc")

window.addEventListener("load", () => {
    totalArc.innerHTML = arcElem.length
})